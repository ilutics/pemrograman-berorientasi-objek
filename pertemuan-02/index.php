
<?php

require_once __DIR__ . '/Mahasiswa.php';
require_once __DIR__ . '/Produk.php';

$mahasiswa1 = new Mahasiswa(
    "24.24.030313",
    "William Hans Permana",
    "Pendidikan Teknologi Informasi",
    3.85
);

$mahasiswa2 = new Mahasiswa(
    "24002",
    "Andi",
    "Pendidikan Teknologi Informasi",
    3.30
);

$mahasiswa3 = new Mahasiswa(
    "24003",
    "Budi",
    "Pendidikan Teknologi Informasi",
    2.90
);

$produk = new Produk("Buku Pemrograman", 50000, 10);

echo "=== DATA MAHASISWA ===\n\n";
echo $mahasiswa1->info() . "\n\n";
echo $mahasiswa2->info() . "\n\n";
echo $mahasiswa3->info() . "\n\n";

echo "=== DATA PRODUK ===\n";
echo "Nama: {$produk->nama}\n";
echo "Harga: Rp" . number_format($produk->harga, 0, ',', '.') . "\n";
echo "Stok: {$produk->stok}\n";
echo "Total Nilai: Rp"
    . number_format($produk->totalNilai(), 0, ',', '.');

