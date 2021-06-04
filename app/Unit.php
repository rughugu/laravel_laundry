<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
        protected $table = 'laundry.unit_mesins';
        protected $fillable = ['merk_mesin','nama_mesin','type_mesin'=>'required','tahun_mesin','kapasitas_mesin','id_kategori'];
    }
    
