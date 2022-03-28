<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilPerusahaan extends Model
{
    protected $table = "profil_perusahaan";
    protected $fillable = [
       'nama_perusahaan','deskripsi','didirikan','lokasi','luas_lahan','luas_bangunan','modal','no_telp','email','image'
   ];
}
