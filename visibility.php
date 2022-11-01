<?php
// 
/*
    Class
    Blueprint/tamplate untuk membuat instance dari object
    Class mendefinisikan object
    Calss menyimpan data dan perilaku yang disebut dengan property dan method
    intinya, class adalah blueprint/template yg dapat menyimpan property dan method yg nantinya akan
    dipanggil menggunakan object.

    Object 
    Instance yg didefinisikan oleh Class
    nanti akan ada banyak sekali object yg dapat dibuat dalam satu class
    object dibuat dengan menggunakan keyword "new" contohnya kita tulis dulu 
    variabel lalu diberi keyword "new" dan disambung dengan nama classnya
    contoh = $produk1 = new Produk();

    Property
    mempresentasikan data / keadaan dari sebuah object
    variabel yang ada di dalam object itu namanya property
    sama seperti variabel di php(diawali tanda dolar"$" dan nama variabelnya)
    tapi didepannya harus menggunakan visibility(public, private, protected)

    Method
    mempresentasikan perilaku / behavior dari sebuah object
    function yang ada di dalam object itu namanya method
    sama seperti function di php(cara penulisannya)
    tapi didepannya harus menggunakan visibility

    Constructor
    Constructor akan otomatis dijalankan ketika kita membuat object baru
    jadi nanti ketika membuat object baru, dia akan langsung ditampilkan di layar
    jika ada 2 object yg dibuat, maka akan ada 2 constructor yg akan dijalankan
    otomatis dia akan ada di paling awal

    Overiding
    jadi mengambil nilai yg sudah ada di parentnya, meskipun nama methodnya 
    sama dengan yg ada di child
    
    contoh penggunaanya adalah parent::nama_method

    visibility
    ada 3 yaitu public, private, protected
    public : bisa diakses dari luar class
    private : hanya bisa diakses dari class itu sendiri
    protected : hanya bisa diakses dari class itu sendiri dan class turunannya

*/

//Jualan produk
// Komik dan Game

use Produk as GlobalProduk;

class Produk {
    public $judul,  // nilai defaultnya yg ada disini bisa dihapus dan dipindahkan ke dalam parameter constructor
           $penulis,
           $penerbit,
           $waktumain;
    
    private $harga;

    protected $diskon = 0;

    public function __construct($judul= "judul", $penulis = "penulis", $penerbit="penerbit", $harga=0) { // mengapa menggunakan garis bawah, karena contructor merupakan bagian dari magic method atau method special yg dimiliki oleh PHp
        $this->judul = $judul; //ini akan menimpa variabel judul yg ada di dalam parameter construtor
        $this->penulis = $penulis; //jadi variabel ini sudah dimasukan ke parameter constructor
        $this->penerbit = $penerbit; //intinya variabel ini bisa digunakan difunction ini karena memakai $this dan diarahkan menggunakan sama dengan (=) ke dalam parameternya
        $this->harga = $harga;
    }   


    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit"; // $this berfungsi untuk mengambil variable yg ada diluar function
        // return untuk mengembalikan nilai
    }

    public function infolengkap(){
        // Komik : Naruto | Masashi Kishimoto, Shounen Jump (RP. 30000) - 100 halaman
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

}


class komik extends Produk{
    public $jmlhalaman;

    public function __construct($judul= "judul", $penulis = "penulis", $penerbit="penerbit", $harga=0, $jmlhalaman=0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlhalaman = $jmlhalaman;
    }

    public function infolengkap()
    {
        $str = "Komik : ". parent::infolengkap()." - {$this->jmlhalaman} Halaman.";
        return $str;
    }
}

class game extends GlobalProduk{
    public $waktumain;

    public function __construct($judul= "judul", $penulis = "penulis", $penerbit="penerbit", $harga=0, $waktumain=0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktumain = $waktumain;
    }

    
    public function setdiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function infolengkap()
    {
        $str = "Game : ". parent::infolengkap()." ~ {$this->waktumain} Jam.";
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// $produk1 = new Produk(); //instance nya new untuk menambah object baru
// $produk2 = new Produk();

$produk3 = new komik("Naruto", "Mashasi Kisimoto", "Shounen jump", 30000, 100); 
//jadi ketika object baru dibuat, maka parameter ini dikirim dan diterima di fungsi contructor, lalu dipakai untuk mengganti propertinya

$produk4 = new game("Alcehmia Story", "Asobimo", "Play Store", 10000, 50);

// echo "Komik : $produk3->penulis, $produk3->penerbit"; // cara manual memasukan satu satu
// echo "<br>"; // kita bisa menampilkan hal yg sama dengan menggunakan method
// echo "Komik : " . $produk3->getLabel(); //untuk menampilkan ke layarnya bisa menggunakan ini
// echo "<br>";
// echo "Game : ". $produk4->getLabel();
// echo "<br>";

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk3);

// Komik : Naruto | Masashi Kishimoto, Shounen Jump (RP. 30000) - 100 halaman
// Game : Toram Online | Asobimo, Play Store (Gratis) ~ 20000 jam
echo $produk3->infolengkap();
echo "<br>";
echo $produk4->infolengkap();
echo "<hr>";
$produk4->setdiskon(10);
echo $produk4->getHarga();


?>