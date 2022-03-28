<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = "layanan";
    protected $fillable = [
       'nama_layanan','jenis','status','deskripsi','image1','image2','image3','image4'
   ];
}
