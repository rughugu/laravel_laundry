<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class katmesin extends Model
{
    protected $table = 'laundry.kategori_mesin_laundrys';
    protected $fillable = ['kategori'];
}
