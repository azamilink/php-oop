<?php 

// jualan produk
// komik
// game

class Produk {
	// bikin property
	public 	$judul = 'judul',
			$penulis = 'penulis' ,
			$penerbit = 'penerbit',
			$harga = 0;
	// bikin method
	public function getLabel()
	{
		return "$this->penulis, $this->penerbit";
	}

}

// $produk1 = new Produk();
// $produk1->judul = 'Naruto';

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha";

// var_dump($produk1);
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul='Naruto';
$produk3->penulis='Mashasi Himayuto';
$produk3->penerbit='Shonen Jump';
$produk3->harga=30000;

var_dump($produk3);

echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->getLabel();

$produk4 = new Produk();
$produk4->judul='Uncharted';
$produk4->penulis='Neil Drumpment';
$produk4->penerbit='sony Computer';
$produk4->harga=25000;

var_dump($produk4);
echo "Game : $produk4->penulis, $produk4->penerbit";
echo "<br>";
echo $produk4->getLabel();

 ?>