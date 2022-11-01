<?php

// sebuah identifier untuk menyimpan nilai, constanta tidak sama dengan variabel, karena constanta nilainya tidak dapat berubah
// ada 2 cara, pake keyword define() dan const

// parameter pertama diisi nama constantanya, parameter kedua diisi valuenya/nilainya
// define('NAMA', 'Yazid'); // define tidak bisa dimasukan ke dalam class
// echo NAMA;

// echo "<br>";

// // menggunakan const
// const UMUR = 17;  // const bisa dimasukan ke dalam class, sehingga bisa digunakan didalam konsep OOP
// echo UMUR;


// class Coba {
//     const NAMA = "Yazid Akbar";
// }

// // pemanggilannya sama dengan keyword static "nama_class::nama_constant"
// echo Coba::NAMA;

/* 
Magic Constant : 
__LINE__        = menampilkan nilai (int), sesuai dengan baris codenya dibaris keberapa, misal baris codenya ada di 18, maka akan menampilkan (int) 18
__FILE__        = menampilkan string alamat file berada
__DIR__         = untuk mengetahui direktori dari file yg bersangkutan
__FUNCTION__    = untuk menentukan kita lagi ada di function apa atau class apa
__CLASS__       = untuk menentukan kita lagi ada di function apa atau class apa
__TRAIT__
__METHOD__
__NAMESPACE__
*/

// var_dump(__FILE__);

function ini_akan_menampilkan_nama_functionnya(){
    return __FUNCTION__;
}

echo ini_akan_menampilkan_nama_functionnya();

echo "<hr>";

class ini_akan_menampilkan_nama_classnya{
    public $class = __CLASS__;
}

$obj = new ini_akan_menampilkan_nama_classnya;
echo $obj->class; 
?>