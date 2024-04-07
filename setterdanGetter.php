<?php

class Produk {
private     $judul,
           $penulis,
           $penerbit,
           $harga;

           protected $diskon = 0;

    // protected  $harga;
   


    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getJudul(){
        return $this->judul;
    }
    public function getpenulis(){
        return $this->penulis;
    }
    public function setpenulis($penulis){
        return $this->penulis=$penulis;
    }
    public function getpenerbit(){
        return $this->penerbit;
    }
    public function setpenerbit($penerbit){
        return $this->penerbit=$penerbit;
    }
    public function getHarga(){
        return $this->harga;
    }
    public function getInfoLengkap(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getLabel(){
        return "{$this->penulis}, {$this->penerbit}";
    }

    public function SetHarga($harga){
       return  $this->harga - ($this ->harga * $this->diskon/100);
    }
    public function setJudul ($judul){
    if( !is_string($judul)){
        throw new Exception("Judul harus string"); 
    }
    $this->judul = $judul;
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
    public function SetDiskon($diskon){
        $this->diskon = $diskon;
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

echo"<hr>";
$produk2->setDiskon(50);
echo $produk2->getHarga();


$produk1->setJudul("Dr.Stone");
echo "<hr>";
echo $produk1->getJudul();
echo "<hr>";

$produk1->setpenulis("Tanisha");
echo "<hr>";
echo $produk1->getpenulis();
echo "<hr>";

