<?php

namespace App\Http\Controllers;

use App\pegawai;
use App\UnitKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;

class PegawaiController extends Controller{
    public function index(){
        return "Selamat Datang Di Web Saya, Punya Saya";
    }
    public function login(){
        return view('login');
    }
    public function proses(Request $request){
        
    }
    public function pegawai(){
        $tb_pegawai = pegawai::all();
        return view('pegawai',['pegawai'=>$tb_pegawai]);
    }
    public function unitkerja(){
        $dm_unit_penempatan = UnitKerja::all();
        return view('unitkerja',['unitkerja'=>$dm_unit_penempatan]);
    }
}

