<?php
include_once 'config.php';

include_once 'lib/Kisi.php';
include_once 'lib/Ogrenci.php';
include_once 'lib/Personel.php';


$Ogrenci = new Ogrenci('Hasan','Tokatlı');
echo  'Öğrenci isim soyisim: '. $Ogrenci->getirUzunIsim();


$Ogrenci2=new Ogrenci('Erdal', 'Karan');
echo '<br>';
echo $Ogrenci2->getirUzunIsim();

echo '<br>';
echo $Ogrenci2->isim . ' ' . $Ogrenci->soyisim;

$Personel1 = new Personel();
$Personel1->isim = 'Müslüm';
$Personel1->soyisim = 'Gürses';
$Personel1->dogumTarihi = 1980;

echo '<br>';

echo $Personel1->getirUzunIsim();
echo '<br>';
echo 'Personelin yaşı: ' . $Personel1->getYas();

echo '<br>';
$Personel2 = new Personel();
$Personel2->isim='Orhan';
$Personel2->soyisim='Hakalmaz';
echo 'Personel 2 isim soyisim: ' . $Personel2->getirUzunIsim();