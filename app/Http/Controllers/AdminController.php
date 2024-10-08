<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function getuser(){
        $getadmin = User::where('level', 0)->get();
        $getuser = User::where('level', 1)->get();
        return view('admin.user', compact('getadmin', 'getuser'));
    }
    function addcontent() {
        return view('admin.addcontent');
    }
    function addaccount() {
        return view('admin.addaccount');

    }
    function account(Request $request) {
        $getadmin = User::where('level', 0)->get();
        $getuser = User::where('level', 1)->get();
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|integer',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Membuat user baru
        $user = new User();
        $user->name = $validatedData['name'];
        $user->level = $validatedData['level']; // Pastikan field role ada di tabel User
        $user->phone = $validatedData['phone']; // Pastikan field phone_number ada di tabel User
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']); // Hashing password
        $user->save();

        // return view('admin.user', compact('getadmin', 'getuser'));
        // Redirect ke halaman tertentu setelah berhasil menyimpan data
        return redirect('admin/users');
    }
    public function showNews() {
        $newsdata = News::all();
        return view('admin.news', compact('newsdata'));
    }
    function addnews() {
        return view('admin.addnews');
    }
    function storenews(Request $request) {
        // dd($request);
        $auth = Auth::user()->name;
        $news = new News();
        $news->title = $request['title'];// Pastikan field role ada di tabel User
        $news->description = $request['description'];// Pastikan field role ada di tabel User
        $news->author = $auth;
        $news->files = $request['files'];
        $news->save();
        $newsdata = News::all();

        return redirect()->route('admin.news');
    }
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('admin.news')->with('success', 'News deleted successfully.');
    }
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.editnews', compact('news'));
    }
    public function update(Request $request, $id)
    {
    $news = News::findOrFail($id);
    // Update data
    $auth = Auth::user()->name;
    $news = new News();
    $news->title = $request['title'];// Pastikan field role ada di tabel User
    $news->description = $request['description'];// Pastikan field role ada di tabel User
    $news->author = $auth;
    $news->files = $request['files'];
    $news->save();

    return redirect()->route('admin.news')->with('success', 'News updated successfully.');
    }
    function addproduct() {
        return view('admin.addproduct');
    }
    function product(){
        $productdata = Product::all();

        return view('admin.product', compact('productdata'));
    }
    function storeproduct(Request $request) {
        // Remove validation for testing purposes
        // $request->validate([ ... ]);
        // dd($request);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/products'), $imageName);
        }

        $product = new Product();
        $product->category = $request['category'];
        $product->title = $request['title'];
        $product->image = $imageName ?? null; // Handle case if image isn't uploaded
        $product->description = $request['description'];
        $product->save();

        return redirect()->route('admin.product')->with('success', 'Product added successfully!');
    }
    public function destroyProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.product')->with('success', 'Product deleted successfully.');
    }
    function editproduct($id) {
        $product = Product::findOrFail($id);
        return view('admin.editproduct', compact('product'));

    }

    public function updateproduct(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        $product = Product::findOrFail($id);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $product->image = $imageName;
        }

        // Update product attributes
        $product->category = $request->input('category');
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->save();

        return redirect()->route('admin.product', $id)->with('success', 'Product updated successfully');
    }


}
