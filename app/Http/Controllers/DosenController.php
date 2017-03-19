<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController.php extends Controller
{
    //
    public function awal()
    {
    	return "Hello dari DosenController";
    }

    public function tambah()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$dosen = new Dosen();
    	$dosen -> nama = 'Muhammad Fikri Anshori, S.Kom';
    	$dosen -> nip = '1515015144';
    	$dosen -> alamat = 'Loa Bakung';
    	$dosen -> pengguna_id = 1;

    	$dosen->save();
    	return "Data dengan nama {$dosen->nama} Telah Disimpan";
    	
    }
}
