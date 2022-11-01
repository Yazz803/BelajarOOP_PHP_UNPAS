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

*/

//Jualan produk
// Komik dan Game

class Produk {
    public $judul,  // nilai defaultnya yg ada disini bisa dihapus dan dipindahkan ke dalam parameter constructor
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul= "judul", $penulis = "penulis", $penerbit="penerbit", $harga=0) { // mengapa menggunakan garis bawah, karena contructor merupakan bagian dari magic method atau method special yg dimiliki oleh PHp
        $this->judul = $judul; //ini akan menimpa variabel judul yg ada di dalam parameter construtor
        $this->penulis = $penulis; //jadi variabel ini sudah dimasukan ke parameter constructor
        $this->penerbit = $penerbit; //intinya variabel ini bisa digunakan difunction ini karena memakai $this dan diarahkan menggunakan sama dengan (=) ke dalam parameternya
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit"; // $this berfungsi untuk mengambil variable yg ada diluar function
        // return untuk mengembalikan nilai
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

$produk3 = new Produk("Naruto", "Mashasi Kisimoto", "Shounen jump", 30000); 
//jadi ketika object baru dibuat, maka parameter ini dikirim dan diterima di fungsi contructor, lalu dipakai untuk mengganti propertinya

$produk4 = new Produk("Alcehmia Story", "Asobimo", "Play Store", 10000);

// echo "Komik : $produk3->penulis, $produk3->penerbit"; // cara manual memasukan satu satu
// echo "<br>"; // kita bisa menampilkan hal yg sama dengan menggunakan method
echo "Komik : " . $produk3->getLabel(); //untuk menampilkan ke layarnya bisa menggunakan ini
echo "<br>";
echo "Game : ". $produk4->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk3);

?>