<?php
//Jualan produk
// Komik dan Game
// use Produk as GlobalProduk;


/*
Definisi interface :
- Kelas abstract yang sama sekali tidak memiliki implementasi
- Murni merupakan template untuk kelas turunannya
- Tidak boleh memiliki property, hanya mendeklarasi method saja
- Semua method harud dideklarasikan dengan visibility public
- Boleh mendekalrasikan method __Contruct
- Satu kelas boleh mengimplementasikan banyak interface 
  Contoh : class apel implements buah, ukuran (pakai koma jika ingin menambahkan interface)
  jadi kelas apel mengimplementasikan buah dan ukuran

*/

interface InfoProduk {
    public function getinfolengkap();
}

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

class CetakInfoProduk{
    public $daftarProduk = [];

    public function tambahProduk (Produk $produk){
      $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        foreach($this->daftarProduk as $p ){
          $str .= "- {$p->getinfolengkap()} <br>";
        }
        return $str;
    }
}

// $produk1 = new Produk(); //instance nya new untuk menambah object baru
// $produk2 = new Produk();

$produk3 = new komik("Naruto", "Mashasi Kisimoto", "Shounen jump", 30000, 100); 
//jadi ketika object baru dibuat, maka parameter ini dikirim dan diterima di fungsi contructor, lalu dipakai untuk mengganti propertinya
$produk4 = new game("Alcehmia Story", "Asobimo", "Play Store", 10000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk3);
$cetakProduk->tambahProduk($produk4);
echo $cetakProduk->cetak();


?>