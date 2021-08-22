<?php 

// jualan produk
// komik
// game

class Produk {
	// bikin property
	public 	$judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$waktuMain;
	// method contructor
	public function __construct($judul='judul', $penulis='penulis', $penerbit='penerbit', $harga=0, $jmlHalaman = 0, $waktuMain=0)
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
	

	}
	// bikin method
	public function getLabel()
	{
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}

}

/**
 * 
 */
class Komik extends Produk {
	
	Public function getInfoProduk() {
		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
		
	}
}

class Game extends Produk {
	
	Public function getInfoProduk() {
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
		return $str;
		
	}
}


/**
 * 
 */
class CetakInfoPrduk {
	
	public function cetak(Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

// instansiasi
$produk1 = new Komik('Naruto', 'Mashasi Himayuto', 'Shonen Jump', 30000, 100, 0,);

$produk2 = new Game('Uncharted', 'Drumpment', 'sony Computer', 25000, 0, 60,);

var_dump($produk1);
var_dump($produk2);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();




 ?>