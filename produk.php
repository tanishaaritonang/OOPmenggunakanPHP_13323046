<?php

// jualan produk
// komik
// game

class produk {
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

            public function sayHello(){
                return "Hello World";
            }
            public function getLabel(){
                return "$this->penulis, $this->penerbit";
            }
}

// $produk1 = new produk();
// $produk1->judul = "Naruto";


// $produk2 = new produk();
// $produk2->judul = "Uncharted";

// $produk2->tambahproperty = "hahaha";
// var_dump($produk2->judul);

$produk3 = new produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Mashasi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

echo $produk3->getLabel();
echo "<hr>";
$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 30000;


echo "Komik : $produk3->judul, $produk3->penulis";
echo "<br>";
echo "Game : " . $produk4->getLabel();
echo $produk3->sayHello();
?>