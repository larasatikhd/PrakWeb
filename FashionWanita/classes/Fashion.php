<?php
namespace Application\Classes;

include_once 'Produk.php';
include_once 'InfoTrait.php';

use Application\Traits\InfoTrait;

class Fashion extends Produk {
    use InfoTrait;

    private $ukuran;
    private $warna;
    private $gambar; 

    public function __construct($nama, $harga, $ukuran, $warna, $gambar) {
        parent::__construct($nama, $harga);
        $this->ukuran = $ukuran;
        $this->warna = $warna;
        $this->gambar = $gambar; 
    }

    public function getInfoProduk() {
        return "Nama: {$this->nama}, Harga: Rp{$this->harga}, Ukuran: {$this->ukuran}, Warna: {$this->warna}";
    }


    // Fungsi untuk mendapatkan path gambar
    public function getGambar() {
        return "images/" . $this->gambar;
    }

    public function __toString() {
        return $this->getInfoProduk();
    }
}
?>
