<?php
$nilaiHarian = 100 * 30 / 100;
$nilaiUts =  100 * 30 / 100  ;
$nilaiUas =  100 * 40 / 100  ;
$nilaiAkhir = $nilaiHarian + $nilaiUts + $nilaiUas;

echo "Nama : Raura Donita <br/>";
echo "Kelas : X RPL 2 <br/>";
echo "Nilai Harian : $nilaiHarian <br/>";
echo "Nilai Uts : $nilaiUts <br/>";
echo "Nilai Uas : $nil aiUas <br/>";
echo "Nilai Akhir : $nilaiAkhir <br/>";


if($nilaiAkhir >= 90 &&  $nilaiAkhir<= 100){
    echo  "Predikat Nilai : (A+)<br/>";
}else if($nilaiAkhir >= 85 && $nilaiAkhir<= 89 ){
    echo "Predikat Nilai : (A) <br/>";

}else if ($nilaiAkhir >=80 && $nilaiAkhir <=84){
    echo "Predikat Nilai : (B+) <br/>";
}else if ($nilaiAkhir >=76 && $nilaiAkhir<=79 ){
    echo "Predikat Nilai : (B) <br/>";
    
}else if($nilaiAkhir >=60 && $nilaiAkhir <=75){
    echo "Predikat Nilai : (C+) <br/>";
}else if($nilaiAkhir >=40 && $nilaiAkhir <=59){
    echo "Predikat Nilai : (D)";
}else if($nilaiAkhir >=0 && $nilaiAkhir <= 39){
    echo "Predikat Nilai : (E)";
}else{
    echo "Anda tidak mendapatkan nilai";
}




?>