<?php 

require_once 'App/init.php';

$produk1 = new Komik('Naruto', 'Mashasi Himayuto', 'Shonen Jump', 30000, 100);
$produk2 = new Game('Uncharted', 'Drumpment', 'sony Computer', 25000, 60);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );

echo $cetakProduk->cetak();
echo "<hr>";

new Coba();