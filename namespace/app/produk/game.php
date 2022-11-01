<?php

class game extends Produk implements InfoProduk{
    public $waktumain;

    public function __construct($judul= "judul", $penulis = "penulis", $penerbit="penerbit", $harga=0, $waktumain=0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktumain = $waktumain;
    }

    public function getinfo(){
        // Komik : Naruto | Masashi Kishimoto, Shounen Jump (RP. 30000) - 100 halaman
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getinfolengkap()
    {
        $str = "Game : ". $this->getinfo() ." ~ {$this->waktumain} Jam.";
        return $str;
    }
}