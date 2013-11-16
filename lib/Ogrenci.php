<?php
class Ogrenci extends Kisi {
    public $ogrenciNo;
    public $bolum;
    public $sinif;
    
    public function notGir($dersKodu,$not) {
        return true;
    }
}
