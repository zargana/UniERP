<?php
class Personel extends Kisi{
    public $birim;
    public $sicilNo;
    
    public function getGorevYili() {
        return date('Y') - $this->baslangicYili;
    }
}
