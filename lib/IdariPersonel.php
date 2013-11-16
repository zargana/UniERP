<?php
class IdariPersonel extends Personel {
    public $gorev;
    
    public function getAltPersoneller() {
        $personeller=array(
            'Orhan Gencebay',
            'Ferdi Tayfur',
            'Cengiz Kurtoğlu',
            'Bülent Serttaş',
            'Mahsun Kırmızıgül',
            'Müslüm Gürses',
            'Bülent Ersoy'
        );
        
        return array_rand($personeller, 3);
    }
}
