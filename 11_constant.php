<?php 
// constanta dalah variabel yang nialinya tidak bisa dirubah
define('NAMA', 'Sandhika Galih');
echo NAMA;
echo "<br>";

const UMUR = 35;
echo UMUR;
echo "<br>";
// CONST bisa disimpan di dalam function, kalau difine tidak bisa.

echo "<hr>";
// ada magic constanta dala php diantaranya:
echo __LINE__;
echo "<br>";

echo __fILE__;
echo "<br>";

echo __DIR__;
echo "<br>";

function coba() {
	return __FUNCTION__;
}
echo coba();
echo "<br>";

class CobaLagi {
	public $kelas = __CLASS__;
}
$obj = new CobaLagi;
echo $obj->kelas;

?>