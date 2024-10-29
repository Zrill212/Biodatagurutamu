<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function MenampilkanDataBiodata ()
    {
        $nama = Biodata::$nama;
        $kelas = Biodata::$kelas;
        $sekolah = Biodata::$sekolah;
        $alamat = Biodata::$alamat;
        $hoby = Biodata::$hoby;
       return view('biodata', compact('nama','kelas','sekolah','alamat','hoby'));
    }
}
