<?php

abstract class Produk {
    protected $judul,  // nilai defaultnya yg ada disini bisa dihapus dan dipindahkan ke dalam parameter constructor
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;

    public function __construct($judul= "judul", $penulis = "penulis", $penerbit="penerbit", $harga=0) { // mengapa menggunakan garis bawah, karena contructor merupakan bagian dari magic method atau method special yg dimiliki oleh PHp
        $this->judul = $judul; //ini akan menimpa variabel judul yg ada di dalam parameter construtor
        $this->penulis = $penulis; //jadi variabel ini sudah dimasukan ke parameter constructor
        $this->penerbit = $penerbit; //intinya variabel ini bisa digunakan difunction ini karena memakai $this dan diarahkan menggunakan sama dengan (=) ke dalam parameternya
        $this->harga = $harga;
    }   

    public function setJudul($judul){
        // melakukan validasi
        if(!is_string($judul)){
            throw new Exception("Judul harus string");
        }
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setdiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getdiskon(){
        return $this->diskon;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit"; // $this berfungsi untuk mengambil variable yg ada diluar function
        // return untuk mengembalikan nilai
    }
    
    abstract public function getinfo();

}