<?php 

// jualan produk
// komik
// game

class Produk {
	// bikin property
	public 	$judul,
			$penulis,
			$penerbit;

	protected $diskon;
	
	private $harga;

	// method contructor
	public function __construct($judul='judul', $penulis='penulis', $penerbit='penerbit', $harga=0)
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

	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}

		

	public function getHarga()
	{
		return $this->harga - ( $this->harga * $this->diskon / 100);
	}

}

/**
 * 
 */
class Komik extends Produk {
	public $jmlHalaman;

	public function __construct($judul='judul', $penulis='penulis', $penerbit='penerbit', $harga=0, $jmlHalaman=0) {
		// panggil constructor parent / Produk
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}
	
	Public function getInfoProduk() {
		//  ambil method dari class parent / class Produk
		$str = "Komik :" . parent::getInfoProduk() ."  - {$this->jmlHalaman} Halaman.";
		return $str;
		
	}
}

class Game extends Produk {
	public $waktuMain;

	public function __construct($judul='judul', $penulis='penulis', $penerbit='penerbit', $harga=0, $waktuMain=0)
	{
		// panggil constuctor parent / Produk
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}
	
	Public function getInfoProduk() {
		//  ambil method dari class parent / class Produk 
		$str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
		return $str;
		
	}

	public function setDiskon($diskon)
	{
		$this->diskon = $diskon;
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
$produk1 = new Komik('Naruto', 'Mashasi Himayuto', 'Shonen Jump', 30000, 100);

$produk2 = new Game('Uncharted', 'Drumpment', 'sony Computer', 25000, 60);

var_dump($produk1);
var_dump($produk2);
echo "<hr>";

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();



 ?>