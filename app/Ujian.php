<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $fillable = ['npm','nama', 'prodi', 'fakultas','no_hp'];
}
