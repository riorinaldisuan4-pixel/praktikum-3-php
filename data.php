<?php
// ============================================
// DATA TOKO (sementara disimpan di array)
// Pada Pertemuan 7, data ini akan dipindah ke database MySQL.
// ============================================

$namaToko = "Toko Buku Lontar Denpasar";

// Array multidimensi: kode produk => data produk (array asosiatif)
$produk = [
    "B001" => [
        "nama"     => "Laskar Pelangi",
        "kategori" => "Novel",
        "harga"    => 65000,
        "diskon"   => 10, // dalam persen
        "stok"     => 18,
        "ikon"     => "📖",
    ],
    "B002" => [
        "nama"     => "Bumi Manusia",
        "kategori" => "Novel",
        "harga"    => 350000,
        "diskon"   => 0,
        "stok"     => 7,
        "ikon"     => "📚",
    ],
    "B003" => [
        "nama"     => "Atomic Habits (Edisi Indonesia)",
        "kategori" => "Pengembangan Diri",
        "harga"    => 45000,
        "diskon"   => 15,
        "stok"     => 30,
        "ikon"     => "⚡",
    ],
    "B004" => [
        "nama"     => "Algoritma dan Pemrograman Dasar",
        "kategori" => "Teknologi",
        "harga"    => 275000,
        "diskon"   => 5,
        "stok"     => 0,
        "ikon"     => "💻",
    ],
    "B005" => [
        "nama"     => "Dongeng Nusantara untuk Anak",
        "kategori" => "Anak",
        "harga"    => 38000,
        "diskon"   => 0,
        "stok"     => 22,
        "ikon"     => "🧸",
    ],
    "B006" => [
        "nama"     => "Sejarah Kerajaan Bali",
        "kategori" => "Sejarah",
        "harga"    => 32000,
        "diskon"   => 20,
        "stok"     => 4,
        "ikon"     => "🏛️",
    ],
    "B007" => [
        "nama"     => "Filosofi Teras",
        "kategori" => "Pengembangan Diri",
        "harga"    => 98000,
        "diskon"   => 10,
        "stok"     => 15,
        "ikon"     => "🧠",
    ],
    "B008" => [
        "nama"     => "Resep Masakan Bali Tradisional",
        "kategori" => "Kuliner",
        "harga"    => 135000,
        "diskon"   => 0,
        "stok"     => 3,
        "ikon"     => "🍲",
    ],
];

// Contoh pesanan pelanggan: kode produk => jumlah yang dibeli
$pesanan = [
    "B001" => 2,
    "B003" => 1,
    "B006" => 3,
];
