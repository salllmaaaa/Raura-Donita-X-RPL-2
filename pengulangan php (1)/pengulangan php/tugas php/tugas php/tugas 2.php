<?php

$nilaiHarian = 68;
$nilaiUts = 80;
$nilaiAkhir = 80;

$KkmNilaiHarianBagus = $nilaiHarian >= 70;
$KkmNilaiUtsBagus = $nilaiUts >= 80;
$KkmNilaiAkhirBagus = $nilaiAkhir >= 80;

$hasil1 = $KkmNilaiHarianBagus && $KkmNilaiUtsBagus && $KkmNilaiAkhirBagus;
$hasil2 = $KkmNilaiHarianBagus || $KkmNilaiUtsBagus || $KkmNilaiAkhirBagus;
var_dump($hasil1);
var_dump($hasil2);

// hasil 1 mendapatkan nilai false karena terdapat salah satu nilai yang false, yaitu nilai harian yang seharusnya di atas 70
// tetapi ini 68, dan jika kita menggunakan operator and (&&) maka, jika ada salah satu nilai nya false maka semua 
// hasilnya menjadi false.
// > nilai harian mendapatkan false karena: nilai harian nya lebih kecil dari kkm (68 < 70 = false)
// > nilai uts mendapatkan true karena: nilainya sama dan mencukupi kkm (80 == 80 = true) 
// > nilai akhir mendapatkan true karena: nilainya sama dan mencukupi kkm (80 == 80 = true)
//=======================================================================================================================================
// hasil 2 mendaptkan nilai true karena terdapat 2 nilai yang mendapatkan nilai true dan hanya 1 yang false
// dan kita menggunakan operator or(||) maka dari itu setidaknya satu nilai memiliki nilai true jadi hasil keseluruhan juga true

?>