<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    protected $table = "visi_misi";
    protected $fillable = [
       'visi','misi'
   ];
}
