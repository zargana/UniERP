<?php
include_once 'config.php';

include_once 'lib/Ogrenci.php';

$Ogrenci = new Ogrenci();

$Ogrenci->isim = 'Hasan';
$Ogrenci->soyisim = 'Tokatlı';

echo $Ogrenci->getirUzunIsım();