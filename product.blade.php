<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemrograman Web Lanjut</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
        body {
            background: #333; /* Warna abu tua */
            color: #fff; /* Warna teks putih */
        }

        .container {
            background: lightgray; /* Warna abu muda pada bagian konten */
        }

        .btn-success {
            background-color: #000; /* Warna hitam untuk tombol "TAMBAH" */
            color: #fff; /* Warna teks putih */
        }

        .btn-primary {
            background-color: #000; /* Warna hitam untuk tombol "EDIT" */
            color: #fff; /* Warna teks putih */
        }

        .btn-danger {
            background-color: #000; /* Warna hitam untuk tombol "HAPUS" */
            color: #fff; /* Warna teks putih */
        }

        table {
            background-color: #fff; /* Warna putih untuk latar belakang tabel */
            color: #000; /* Warna teks hitam pada tabel */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Bunga</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('dashboard') }}" class="btn btn-md btn-primary mb-3">Back to Dashboard</a>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('product.create') }}" class="btn btn-md btn-success mb-3">TAMBAH</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">nama_bunga</th>
                                    <th scope="col">stock</th>
                                    <th scope="col">harga</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                    <tr>
                                        <td>{{ $product->nama_bunga }}</td>
                                        <td>{{ $product->stock}}</td>
                                        <td>{{ $product->harga }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('product.destroy', $product->id) }}" method="POST">
                                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">
                                            <div class="alert alert-danger">
                                                Data Bunga belum Tersedia.
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>

    </script>
</body>
</html>

