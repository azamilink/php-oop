<?php namespace App\Produk;

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