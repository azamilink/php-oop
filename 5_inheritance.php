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
			$waktuMain,
			$type;
	// method contructor
	public function __construct($judul='judul', $penulis='penulis',$penerbit='penerbit',$harga=0, $jmlHalaman = 0, $waktuMain=0, $type='type' )
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->type = $type;

	}
	// bikin method
	public function getLabel()
	{
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap() {
		$str = "{$this->type} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if ($this->type == "Komik") {
			$str .= " - {$this->jmlHalaman} Halaman.";
		} elseif ($this->type == "Game") {
			$str .= " - {$this->waktuMain} Jam.";
		}

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
$produk1 = new Produk('Naruto', 'Mashasi Himayuto', 'Shonen Jump', 30000, 100, 0, "Komik");

$produk2 = new Produk('Uncharted', 'Drumpment', 'sony Computer', 25000, 0, 60, "Game");

var_dump($produk1);
var_dump($produk2);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();




 ?>