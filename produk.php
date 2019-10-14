<?php 

class Produk{
	public $judul = 'judul',
		   $penulis = 'penulis',
		   $penerbit = 'penerbit',
		   $harga =0;

	public function sayHello(){
		return "Hello World";
	}
}

// $produk1 = new Produk();
// var_dump($produk1);

$produk3 = new Produk();
$produk3->judul = 'Naruto';
$produk3->penulis = 'Masashi Kishimoto';
$produk3->penerbit = 'Shonen Jump';
$produk3->harga = 30000;

echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->sayHello();