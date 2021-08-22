<?php 

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