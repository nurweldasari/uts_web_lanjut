<?php

// File: app/Http/Controllers/TransaksiController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function showForm()
    {
        return view('transaksi.form');
    }

    public function processTransaksi(Request $request)
    {
        // Ambil data dari formulir tanpa menyimpannya ke database
        $product = $request->input('product');
        $quantity = $request->input('quantity');
        $paymentMethod = $request->input('payment-method');

        // Tampilkan view hasil pemberitahuan
        return view('transaksi.notification', [
            'product' => $product,
            'quantity' => $quantity,
            'paymentMethod' => $paymentMethod,
            // Tambahkan data lain yang ingin ditampilkan di view hasil pemberitahuan
        ]);
    }
}
