<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dewan extends Model
{
    protected $table = "dewan";
   protected $fillable = [
     'nama','jabatan','deskripsi','image','path'
 ];
}
