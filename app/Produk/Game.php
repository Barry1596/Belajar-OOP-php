<?php
class Game extends Product implements InfoProduct{

public $jmlJam;

public function __construct($judul = "judul", $penulis = "penulis", $penerbit="penerbit", $harga=0, $jmlJam = 0)
{
    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->jmlJam = $jmlJam;   
}

public function getInfo()
{
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
}

public function getInfoProduct(){
    $str = "Game : ". $this->getInfo() ." - {$this->jmlJam} Jam";
    return $str;
}
}
