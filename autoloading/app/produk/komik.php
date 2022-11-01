<?php

class komik extends Produk implements InfoProduk{
    public $jmlhalaman;

    public function __construct($judul= "judul", $penulis = "penulis", $penerbit="penerbit", $harga=0, $jmlhalaman=0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlhalaman = $jmlhalaman;
    }
    
    public function getinfo(){
        // Komik : Naruto | Masashi Kishimoto, Shounen Jump (RP. 30000) - 100 halaman
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getinfolengkap()
    {
        $str = "Komik : ". $this->getinfo() ." - {$this->jmlhalaman} Halaman.";
        return $str;
    }
}