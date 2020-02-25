<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $fillable = ['merk','type', 'sparepart', 'biaya'];
}
