<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = "layanan";
    protected $fillable = [
       'nama_layanan','jenis','deskripsi','image','path'
   ];
}
