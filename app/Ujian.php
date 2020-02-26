<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $fillable = ['id_desa','nama', 'kecamatan', 'kabupaten'];
}
