<?php

class DataTim
{
    private $namaTim = "";
    private $negaraAsal = "";
    private $tahunBerdiri = 0;
    private $pemain;
    private $jumlahPemain = 0;

    public function __construct($nt="", $na="", $tb=0, $jp=0)
    {
        $this->namaTim = $nt;
        $this->negaraAsal = $na;
        $this->tahunBerdiri = $tb;
        $this->jumlahPemain = $jp;
    }

    public function setNamaTim($nt = ""){
        $this->namaTim = $nt;
    }

    public function getNamaTim(){
        return $this->namaTim;
    }

    public function setNegaraAsal($na = ""){
        $this->negaraAsal = $na;
    }

    public function getNegaraAsal(){
        return $this->negaraAsal;
    }

    public function setTahunBerdiri($tb){
        $this->tahunBerdiri = $tb;
    }

    public function getTahunBerdiri(){
        return $this->tahunBerdiri;
    }

    public function setJumlahPemain($jp){
        $this->jumlahPemain = $jp;
    }

    public function getJumlahPemain(){
        return $this->jumlahPemain;
    }

    public function setPemain($namaPemain){
        $this->pemain[] = new DataPemain($namaPemain);
    }

    public function getPemain($i){
        return $this->pemain[$i]->namaPemain;
    }
}

class DataPemain
{
    public $namaPemain = "";

    public function __construct($np="")
    {
        $this->namaPemain = $np;
    }
}