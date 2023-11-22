<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background: #333; /* Warna abu tua */
      color: #fff; /* Warna teks putih */
    }

    .container {
      background: #333; /* Warna abu tua pada bagian konten */
    }

    .btn-primary {
      background-color: #000; /* Warna hitam untuk tombol "SIMPAN" */
      color: #fff; /* Warna teks putih */
    }
  </style>
</head>
<body> style="background: lightgray">
  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card border-0 shadow-sm rounded">
          <div class="card-body">
            <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label class="font-weight-bold">nama_bunga</label>
                <input type="text" class="form-control @error('nama_bunga') is-invalid @enderror" name="nama_bunga" value="{{ old('nama_bunga', $product->nama_bunga) }}" placeholder="nama_bunga">
                <!-- error message untuk nama_bunga -->
                @error('nama_bunga')
                <div class="alert alert-danger mt-2">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label class="font-weight-bold">stock</label>
                <input type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock', $product->stock) }}" placeholder="stock">
                <!-- error message untuk stock -->
                @error('stock')
                <div class="alert alert-danger mt-2">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label class="font-weight-bold">harga</label>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga', $product->harga) }}" placeholder="harga">
                <!-- error message untuk harga -->
                @error('harga')
                <div class="alert alert-danger mt-2">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</body>
</html>
