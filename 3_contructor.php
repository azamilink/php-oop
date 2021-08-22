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
	// method contructor
	public function __construct($judul='judul', $penulis='penulis',$penerbit='penerbit',$harga=0)
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}
	// bikin method
	public function getLabel()
	{
		return "$this->penulis, $this->penerbit";
	}

}

// instansiasi
$produk1 = new Produk('Naruto','Mashasi Himayuto','Shonen Jump',30000);
$produk2 = new Produk('Uncharted','Neil Drumpment','sony Computer',25000);
$produk3 = new Produk('Dragon Ball');

echo "Komik : ". $produk1->getLabel();
echo "<br>";

echo "Game : " . $produk2->getLabel();
echo "<br>";

var_dump($produk3);

 ?>