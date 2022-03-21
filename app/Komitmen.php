<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komitmen extends Model
{
    protected $table = "komitmen";
  protected $fillable = [
     'jenis','sertifikat','tata_kelola','tanggung_jawab','path'
   ];  //
}
