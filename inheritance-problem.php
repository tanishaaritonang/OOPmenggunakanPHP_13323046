<?php

class Produk {
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jlhHalaman,
            $WaktuMain,
            $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jlhHalaman = 0, $WaktuMain = 0, $tipe = ""){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jlhHalaman = $jlhHalaman;
        $this->WaktuMain = $WaktuMain;
        $this->tipe = $tipe;
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        if($this->tipe == "Komik"){
            $str .= " - {$this->jlhHalaman} Halaman.";
        } else if($this->tipe == "Game"){
            $str .= " - {$this->WaktuMain} WaktuMain.";
        }
        return $str;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class CetakProduk {
    public function cetak($produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

