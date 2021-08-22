<?php 

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
