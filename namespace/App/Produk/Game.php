<?php 
namespace App\Produk;
class Game extends Produk implements InfoProduk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfo(){
        return "{$this->getJudul()} | {$this->getLabel()} (Rp. {$this->getHarga()})"; // Corrected accessing properties
    }

    public function getInfoProduk() {
        $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} jam.";
        return $str;
    }
}