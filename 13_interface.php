<?php 

// jualan produk
// komik
// game
interface InfoProduk {
	public function getInfoProduk();
}

abstract class Produk {
	// bikin property
	protected $judul,
			$penulis,
			$penerbit,
			$harga,
			$diskon = 0;

	
	// method contructor
	public function __construct($judul='judul', $penulis='penulis', $penerbit='penerbit', $harga=0)
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		
	}


	// bikin method
	

	public function setJudul($judul)
	{
		// cara mengatur agar judul harus string
		if ( !is_string($judul) ) {
			throw new Exception("Judul harus string ");
			
		}
		return $this->judul = $judul;
	}

	public function getJudul()
	{
		return $this->judul;
	}


	public function setPenulis($penulis)
	{
		return $this->penulis = $penulis;
	}

	public function getPenulis()
	{
		return $this->penulis;
	}

	public function setPenerbit($penerbit)
	{
		return $this->penerbit = $penerbit;
	}

	public function getPenerbit()
	{
		return $this->penerbit;
	}

	public function setDiskon($diskon)
	{
		$this->diskon = $diskon;
	}

	public function getDiskon()
	{
		return $this->diskon;
	}

	public function getHarga()
	{
		return $this->harga - ( $this->harga * $this->diskon / 100);
	}

	public function getLabel()
	{
		return "$this->penulis, $this->penerbit";
	}

	abstract public function getInfo();
}

/**
 * 
 */
class Komik extends Produk implements InfoProduk {
	public $jmlHalaman;

	public function __construct($judul='judul', $penulis='penulis', $penerbit='penerbit', $harga=0, $jmlHalaman=0) {
		// panggil constructor parent / Produk
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfo() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}
	
	Public function getInfoProduk() {
		//  ambil method dari class parent / class Produk
		$str = "Komik :" . $this->getInfo() ."  - {$this->jmlHalaman} Halaman.";
		return $str;
		
	}

	
}


class Game extends Produk implements InfoProduk {
	public $waktuMain;

	public function __construct($judul='judul', $penulis='penulis', $penerbit='penerbit', $harga=0, $waktuMain=0)
	{
		// panggil constuctor parent / Produk
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function getInfo() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}
	
	Public function getInfoProduk() {
		//  ambil method dari class parent / class Produk 
		$str = "Game : " . $this->getInfo() . " - {$this->waktuMain} Jam.";
		return $str;
		
	}
}


/**
 * 
 */
class CetakInfoPrduk {
	public $daftarProduk = [];

	public function tambahProduk(Produk $produk)
	{
		$this->daftarProduk[] = $produk;
	}

	public function cetak() {
		$str = "DAFTAR PRODUK : <br>";

		foreach ($this->daftarProduk as $p) {
			$str .= "- {$p->getInfoProduk()} <br>";
		}


		return $str;
	}
}

// instansiasi
$produk1 = new Komik('Naruto', 'Mashasi Himayuto', 'Shonen Jump', 30000, 100);
$produk2 = new Game('Uncharted', 'Drumpment', 'sony Computer', 25000, 60);

$cetakProduk = new CetakInfoPrduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );

echo $cetakProduk->cetak();


 ?>