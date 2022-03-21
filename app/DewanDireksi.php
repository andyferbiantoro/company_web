<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DewanDireksi extends Model
{
    protected $table = "dewan_direksi";
   protected $fillable = [
     'nama','jabatan','deskripsi','image','path'
 ];
}
