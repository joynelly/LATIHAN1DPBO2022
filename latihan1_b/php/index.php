<?php
include "DataTim.php";

# Memasukkan Data Tim secara hardcode (terdapat 3 tim)
$tim1 = new DataTim("BayernMunich", "Germany", 1900, 7);
$tim2 = new DataTim("Chelsea", "England", 1905, 4);
$tim3 = new DataTim("ParisSaint-Germain", "France", 1970, 5);

# Memasukkan data pemain 
$tim1->setPemain('ManuelNeuer');
$tim1->setPemain("ThomasMuller");
$tim1->setPemain("SergeGnarby");
$tim1->setPemain("JoshuaKimmich");
$tim1->setPemain("MarcRoca");
$tim1->setPemain("NiklasSule");
$tim1->setPemain("LeroySane");

$tim2->setPemain("Antonio");
$tim2->setPemain("Jorginho");
$tim2->setPemain("KaiHavertz");
$tim2->setPemain("Mateo");

$tim3->setPemain("KylianMbappe");
$tim3->setPemain("LionelMessi");
$tim3->setPemain("Neymar");
$tim3->setPemain("SergioRamos");
$tim3->setPemain("Marquinhos");

echo "<h2> LATIHAN 1b DPBO - DAFTAR TIM SEPAKBOLA </h2>";

# membuat kelas menjadi array
$arrayTim = array($tim1, $tim2, $tim3);

foreach ($arrayTim as $datatim) {
    # code...
    echo "<br> >> " . $datatim->getNamaTim() . " << <br>";
    echo "Negara Asal : " . $datatim->getNegaraAsal() . "<br>";
    echo "Tahun Berdiri : " . $datatim->getTahunBerdiri() . "<br>";
    echo "Daftar Pemain : <br>";

    for ($i=0; $i < $datatim->getJumlahPemain(); $i++) { 
        # code...
        echo "" . $i+1 . ". " . $datatim->getPemain($i) . "<br>";
    }
}