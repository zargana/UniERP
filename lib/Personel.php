<?php
class Personel {
    public $unvan;
    
    public function getYayinlar() {
        $yayinlar = array(
            'PHP ye giriş',
            'PHP ile Nesneye Yönelik Programlama',
            'PHP ve Frameworkler',
            'İleri PHP Uygulamaları'
        );
        
        return $yayinlar;
    }
}
