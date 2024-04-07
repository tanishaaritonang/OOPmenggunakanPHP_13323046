<?php
namespace App\Produk;
class Komik extends Produk implements InfoProduk {
    public $jlhHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jlhHalaman = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jlhHalaman = $jlhHalaman;
    }

    public function getInfo(){
        return "{$this->getJudul()} | {$this->getLabel()} (Rp. {$this->getHarga()})"; // Corrected accessing properties
    }

    public function getInfoProduk() {
        $str = "Komik : " . $this->getInfo() . " - {$this->jlhHalaman} Halaman.";
        return $str;
    }
}
?>