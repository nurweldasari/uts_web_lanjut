<!-- File: resources/views/transaksi/notification.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notification Page</title>
  <link rel="stylesheet" href="tranksaksi.css">
</head>
<body>
  <div class="container">
    <h1>Notification</h1>

    <p>Transaksi berhasil!</p>
    <p>Produk: {{ $product }}</p>
    <p>Jumlah: {{ $quantity }}</p>
    <p>Metode Pembayaran: {{ $paymentMethod }}</p>

    <a href="{{ route('transaksi.form') }}">Kembali ke Formulir Transaksi</a>
  </div>
</body>
</html>
