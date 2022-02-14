<?php

class DataMahasiswa
{
    private $nim = 0;
    private $nama = "";
    private $gender = "";
    private $prodi = "";
    private $semester = 0;

    public function __construct($nim = 0, $nama = "", $gender = "", $prodi = "", $semester = 0)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->gender = $gender;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }

    public function setNIM($nim)
    {
        $this->nim = $nim;
    }

    public function getNIM()
    {
        return $this->nim;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setProdi($prodi)
    {
        $this->prodi = $prodi;
    }

    public function getProdi()
    {
        return $this->prodi;
    }

    public function setSemester($semester)
    {
        $this->semester = $semester;
    }

    public function getSemester()
    {
        return $this->semester;
    }
}

?>