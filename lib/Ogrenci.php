<?php
class Ogrenci extends Kisi {
    public $ogrenciNo;
    public $bolum;
    public $sinif;
    
    public function __construct( $p1, $p2 ) {
        $this->isim=$p1;
        $this->soyisim=$p2;
    }

        public function notGir($dersKodu,$not) {
        return true;
    }
}
