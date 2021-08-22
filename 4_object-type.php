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


class CetakInfoPrduk
{
	public function cetak(Produk $produk)
	{
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

// instansiasi
$produk1 = new Produk('Naruto','Mashasi Himayuto','Shonen Jump',30000);

$produk2 = new Produk('Uncharted','Drumpment','sony Computer',25000);

echo "Komik : ". $produk1->getLabel();
// var_dump($produk1);
echo "<br>";

echo "Game : " . $produk2->getLabel();
// var_dump($produk2);
echo "<br>";

$infoProduk1 = new CetakInfoPrduk();
echo $infoProduk1->cetak($produk1);