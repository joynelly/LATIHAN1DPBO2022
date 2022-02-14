<?php
include "DataMahasiswa.php";

$mahasiswa1 = new DataMahasiswa(2000199, "Nelly Joy", "Perempuan", "Ilmu Komputer", 4);
$mahasiswa2 = new DataMahasiswa();
$mahasiswa2->setNIM(2000200);
$mahasiswa2->setNama("Mahasiswa_2");
$mahasiswa2->setGender("Laki-Laki");
$mahasiswa2->setProdi("Pendidikan Ilmu Komputer");
$mahasiswa2->setSemester(6);

echo "<h2> LATIHAN 1a DPBO - DAFTAR MAHASISWA </h2>";

echo "NIM : ". $mahasiswa1->getNIM() ."<br>";
echo "Nama : ". $mahasiswa1->getNama() ."<br>";
echo "Jenis Kelamin : ". $mahasiswa1->getGender() ."<br>";
echo "Program Studi : ". $mahasiswa1->getProdi() ."<br>";
echo "Semester : ". $mahasiswa1->getSemester() ."<br>";

echo "<br> NIM : ". $mahasiswa2->getNIM() ."<br>";
echo "Nama : ". $mahasiswa2->getNama() ."<br>";
echo "Jenis Kelamin : ". $mahasiswa2->getGender() ."<br>";
echo "Program Studi : ". $mahasiswa2->getProdi() ."<br>";
echo "Semester : ". $mahasiswa2->getSemester() ."<br>";

?>