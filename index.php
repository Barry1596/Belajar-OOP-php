<?php

require_once 'app/init.php';

$Naruto = new Komik("Naruto","Mashashi", "Shonen Jump", 30000, 100);
$Uncharted = new Game("Uncharted", "Neil", "Sony", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($Naruto);
// $cetakProduk->tambahProduk($Uncharted);
// echo $cetakProduk->cetak();

// echo "<hr>";
use app\Service\User as ServiceUser;
new ServiceUser();

echo "<br>";
use app\Produk\User as ProdukUser;
new ProdukUser();