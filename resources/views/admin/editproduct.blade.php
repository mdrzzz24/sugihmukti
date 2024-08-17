<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <style>
        .note-toolbar .btn {
            padding: 10px;
            font-size: 1.25rem; /* Mengatur ukuran font ikon */
        }

        .note-editor .note-btn i{
            font-size: 1.25rem; /* Menambah ukuran font pada tombol */
        }
        i{

        }
    </style>
</head>
<body>

    <div class="container mt-5 w-50">
        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h4 class="mb-4">Edit Product</h4>

            <!-- Category Field -->
            <div class="mb-3">
                <label class="form-label">Category</label>
                <select class="form-select" name="category" aria-label="Default select example">
                    <option value="Pertanian" {{ $product->category == 'Pertanian' ? 'selected' : '' }}>Pertanian</option>
                    <option value="Kopi" {{ $product->category == 'Kopi' ? 'selected' : '' }}>Kopi</option>
                    <option value="Kerajinan Tangan" {{ $product->category == 'Kerajinan Tangan' ? 'selected' : '' }}>Kerajinan Tangan</option>
                    <option value="Herbal dan Kesehatan" {{ $product->category == 'Herbal dan Kesehatan' ? 'selected' : '' }}>Herbal dan Kesehatan</option>
                    <option value="Makanan dan Minuman" {{ $product->category == 'Makanan dan Minuman' ? 'selected' : '' }}>Makanan dan Minuman</option>
                </select>
            </div>

            <!-- Title Field -->
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Product Title" value="{{ $product->title }}">
            </div>

            <!-- Image Upload Field -->
            <div class="mb-3">
                <label for="imageUpload" class="form-label">Choose an image</label>
                <input class="form-control" type="file" id="imageUpload" name="image" accept="image/*">
            </div>

            <!-- Description Field -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="6">{{ $product->description }}</textarea>
                <script>
                    $(document).ready(function() {
                        $('#description').summernote({
                            height: 300,  // Set the height of the editor
                        });
                    });
                </script>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary" style="background-color: #D81B60; border: none;">Update</button>
        </form>
    </div>


    <script src="/js/core/popper.min.js"></script>
  <script src="/js/core/bootstrap.min.js"></script>
  <script src="/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/js/material-dashboard.min.js?v=3.1.0"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</body>
</html>
