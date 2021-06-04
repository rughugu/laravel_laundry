<?php

namespace App\Http\Controllers;

use App\DaftarBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataBarang;
use App\KatBarang;
use App\katmesin;
use App\Unit;
use App\UnitMesin;

class DataBarangController extends Controller{
   public function index(){

   }
   public function katmesin(){
       $kategori_mesin_laundry = katmesin::all();
       return view('katmesin',['katmesin'=>$kategori_mesin_laundry]);
   }
   public function tambahkatmesin(){
       return view('tambahkatmesin');
   }
   public function mesin(Request $request)
    {
    	$this->validate($request,[
    		'kategori' => 'required'
    	]);
 
        katmesin::create([
    		'kategori' => $request->kategori,
    	]);

    	return redirect('/katmesin');
    }


    public function unitmesin(){
        $unit_mesin = Unit::all();
        return view('unitmesin',['unitmesin'=>$unit_mesin]);
    }

    public function tambah_unit(Request $request){
        $this->validate($request,[
            'merk_mesin'=>'required',
            'nama_mesin'=>'required',
            'type_mesin'=>'required',
            'tahun_mesin'=>'required',
            'kapasitas_mesin'=>'required',
            'id_kategori'=>'required'

        ]);
    }
    

    public function katbarang(){
        $kategori_barangs = KatBarang::all();
        return view('katbarang',['katbarang'=>$kategori_barangs]);
    }
    public function daftarbarang(){
        $daftar_barang = DaftarBarang::all();
        return view('daftarbarang',['daftarbarang'=>$daftar_barang]);
    }
}