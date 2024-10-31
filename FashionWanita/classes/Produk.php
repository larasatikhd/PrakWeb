<?php
namespace Application\Classes;

abstract class Produk {
    protected $nama;
    protected $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    abstract public function getInfoProduk();

     // Tambahkan metode getter untuk nama
     public function getNama() {
        return $this->nama;
    }

     // Getter untuk harga produk
     public function getHarga() {
        return $this->harga;
    }

    // menampilkan informasi produk dalam bentuk string
    public function __toString() {
        return $this->getInfoProduk();
    }
}
?>

