<?php
class Kisi {
    public $baslangicYili;
    public $isim;
    public $soyisim;
    public $dogumTarihi;//sadece yil
    
    public function getUzunIsım() {
        return $this->isim . ' ' . $this->soyisim;
    }
    
    public function getYas() {
        return date( 'Y' ) - $this->dogumTarihi;
    }
}
