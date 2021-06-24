<?php

namespace App;

class Pegawai extends Pengguna{
    protected $nip;
    protected $nama;
    protected $no_hp;
    protected $gaji_pokok;

    function __construct($nip,$nama,$hp,$gp){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $hp;
        $this->gaji_pokok = $gp;
    }

    function tampilkanGaji(){

    }

    private function getNip()
    {
        return $this->nip;
    }

    private function getNama()
    {
        return $this->nama;
    }

    public function getNoTelp()
    {
        return $this->no_hp;
    }

    public function getGajiPokok()
    {
        return $this->gaji_pokok;
    }

    private function setNip($nip)
    {
        $this->nip = $nip;
    }

    private function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function setNoTelp($hp)
    {
        $this->no_hp = $hp;
    }

    public function setGajiPokok($gp)
    {
        $this->gaji_pokok = $gp;
    }
    public function presensimasuk(){
        
    }
}

?>