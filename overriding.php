<?php

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getInfoLengkap(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getLabel(){
        return "{$this->penulis}, {$this->penerbit}";
    }
}

class Komik extends Produk {
    public $jlhHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jlhHalaman = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jlhHalaman = $jlhHalaman;
    }

    public function getInfoLengkap() {
        $str = "Komik : " . parent::getInfoLengkap() . " - {$this->jlhHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $WaktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $WaktuMain = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->WaktuMain = $WaktuMain;
    }

    public function getInfoLengkap() {
        $str = "Game : " . parent::getInfoLengkap() . " - {$this->WaktuMain} jam.";
        return $str;
    }
}

class CetakProduk {
    public function cetak($produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
