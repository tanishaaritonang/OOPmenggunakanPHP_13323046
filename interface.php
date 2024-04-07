<?php 
interface InfoProduk {
    public function getInfoProduk();
}

abstract class Produk {
    private $judul,
           $penulis,
           $penerbit,
           $harga;

    protected $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getHarga(){
        return $this->harga;
    }

    abstract public function getInfo();

    public function getLabel(){
        return "{$this->penulis}, {$this->penerbit}";
    }

    public function setHarga($harga){
       $this->harga = $harga;
    }

    public function setJudul($judul){
        if (!is_string($judul)){
            throw new Exception("Judul harus string"); 
        }
        $this->judul = $judul;
    }
}

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

class CetakProduk {
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;
    }

    public function cetak(){
        $str =  "DAFTAR PRODUK : <br>";

        foreach($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);


$cetakProduk =  new CetakProduk();

$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);


echo $cetakProduk->cetak();
?>
