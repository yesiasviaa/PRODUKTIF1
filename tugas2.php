<?php 

/**
 * 
 */
class barang

{
	public $merk;
	public $warna;
	public $ukuran;
	public $manfaat;
	public $harga;
	
	public function barang_1()
	{

		return " Barang tersebut adalah barang dengan merk terbaik.";
	}
	public function barang_2()
	{
		return " Barang tersebut memiliki warna yang indah.";
	}
	public function barang_3()
	{
		return " Barang tersebut memiliki ukuran yang simple.";
	}
	public function barang_4()
	{
		return " Barang tersebut memiliki manfaat yang beragam. ";
	}
	public function barang_5()
	{
		return " Barang tersebut murah tetapi berkualitas. ";
	}
}



$barang = new barang();
$barang -> merk = "Barang tersebut adalah barang dengan merk terbaik." ;
$barang -> warna = "Barang tersebut memiliki warna yang indah.";
$barang -> ukuran = "Barang tersebut memiliki ukuran yang praktis.";
$barang -> manfaat = "Barang tersebut memiliki manfaat yang beragam.";
$barang -> harga = "Barang tersebut murah tetapi berkualitas.";

echo "Barang yang sangat dianjurkan untuk dipakai : ";
echo "<br>";
echo "1. " .$barang-> merk;
echo "<br>";
echo "2. " . $barang -> warna;
echo "<br>";
echo "3. " .  $barang -> ukuran;
echo "<br>";
echo "4. " . $barang -> manfaat;
echo "<br>";
echo "5. " . $barang -> harga;
echo "<br>";







?>