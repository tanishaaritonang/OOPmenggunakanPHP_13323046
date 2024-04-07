<?php

class Produk {
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function sayHello(){
        return "Hello World";
    }
}

    class cetakinProduk {
        public function cetak($produk){
            $str = "{$produk->judul} | {$produk->getLabel()} | (Rp.{$produk->harga}";
        }
    }

$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

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
