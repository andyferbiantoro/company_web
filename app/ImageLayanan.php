<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageLayanan extends Model
{
    protected $table = "image_layanan";
  protected $fillable = [
     'iamge','path','id_layanan','indeks'
   ];  //
}
