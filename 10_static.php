<?php 

/**
 * 
 */
class ContohStatic
{
	public static $angka = 1;

	public static function halo()
	{
		return "Halo " . self::$angka++ . " kali.";
	}
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();


echo "<hr>";
echo "<hr>";

/**
 * 
 */
class Contoh
{
	public $nilai = 1;

	function helo()
	{
		return "Halo " . $this->nilai++ . " kali. <br>";
	}
}

$obj = new Contoh;
echo $obj->helo();
echo $obj->helo();
echo $obj->helo();

echo "<hr>";
 
$obj2 = new Contoh;
echo $obj2->helo();
echo $obj2->helo();
echo $obj2->helo();


echo "<hr>";
echo "<hr>";

/**
 * 
 */
class Contoh2
{
	public static $nilai2 = 1;

	function helo2()
	{
		return "Halo " . self::$nilai2++ . " kali. <br>";
	}
}

$obj3 = new Contoh2;
echo $obj3->helo2();
echo $obj3->helo2();
echo $obj3->helo2();

echo "<hr>";
 
$obj4 = new Contoh2;
echo $obj4->helo2();
echo $obj4->helo2();
echo $obj4->helo2();















 ?>