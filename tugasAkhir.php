<?php

namespace app;

use App\Dosen;
use App\Mahasiswa;

class tugasAkhir extends Dosen{
    public $pembimbingTA;
    public $pengujiTA;

    public function tambahTA(){

    }
}
class tugasAkhir extends Mahasiswa{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
}