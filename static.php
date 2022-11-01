<?php

/* 

Static Keyword 
- Member (Property dan method) yang terikat dengan class, bukan dengan object
- nilai static akan selalu tetap meskipun object di-intansiasi berulang kali 
- Membuat kode seolah olah menjadi 'procedural' 
- biasanya digunakan untuk membuat fungsi bantuan / helper, karena tidak perlu melakukan instansiasi
- atau digunakan di class-class utility pada Framework

*/

// class contohStatic {
//     public static $angka = 1;

//     public static function halo(){
//         return "Halo ". self::$angka++ . " kali";
//         // jika fungsi ini dipanggil beberapa kali, maka nilai variabel $angka akan bertambah
//     }
// }

// echo contohStatic::$angka;
// echo "<br>";
// echo contohStatic::halo();
// echo "<hr>";
// echo contohStatic::halo();

class contoh {
    public static $angka = 1;

    public function halo(){
        return "Halo ". self::$angka++ . " kali <br>";
    }
}

$obj = new contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();


echo "<hr>";

// ketika tidak menggunakan keyword static, maka jika object baru dibuat/diinstansiasi, properti angka ini akan direset, diulang lagi jadi 1
// tapi ketika menggunakan keyword static, nilai static akan selalu tetap meskipun object baru dibuat/diinstansiasi
// jadi jika sudah buat object baru terus dibuat object baru lagi dengan function halo yg sama, properti angka akan terus bertambah sesuai dengan function halo yg dibuat
$obj2 = new contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();





?>