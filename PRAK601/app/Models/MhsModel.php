<?php

namespace App\Models;

use CodeIgniter\Model;

class MhsModel extends Model
{
    protected $nama = "Dwipayana Ismulya";
    protected $nim = "2110817210012";
    protected $prodi = "Teknologi Informasi";
    protected $cita_cita = "Programmer";
    protected $hobi = "Basket dan Musik";
    protected $skill = "Belajar";
    protected $motivasi = "Kang Pukis";





    protected $foto1 = "Dwipayana_Ismulya.jpeg";

    public function getNama()
    {
        return $this->nama;
    }
    public function getNim()
    {
        return $this->nim;
    }
    public function getProdi()
    {
        return $this->prodi;
    }
    public function getcita_cita()
    {
        return $this->cita_cita;
    }
    public function gethobi()
    {
        return $this->hobi;
    }
    public function getSkill()
    {
        return $this->skill;
    }
    public function getMotivasi()
    {
        return $this->motivasi;
    }

    public function getFoto1()
    {
        return $this->foto1;
    }
}