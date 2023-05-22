<?php

namespace App\Controllers;

use App\Models\MhsModel;

class Home extends BaseController
{
    public function index()
    {
        $mahasiswa = new MhsModel();
        return view('index', [
            "nama" => $mahasiswa->getNama(),
            "nim" => $mahasiswa->getNim(),
        ]);
    }
    public function biodata()
    {
        $mahasiswa = new MhsModel();
        return view('biodata', [
            "nama" => $mahasiswa->getNama(),
            "nim" => $mahasiswa->getNim(),
            "citacita" => $mahasiswa->getcita_cita(),
            "skill" => $mahasiswa->getSkill(),
            "prodi" => $mahasiswa->getProdi(),
            "motivasi" => $mahasiswa->getMotivasi(),
            "hobi" => $mahasiswa->gethobi(),

            "foto1" => $mahasiswa->getFoto1()
        ]);
    }
}