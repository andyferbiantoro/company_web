<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisiMisi;
use App\DewanDireksi;
use App\Layanan;
use App\ProfilPerusahaan;
use App\Komitmen;
use Auth;
use DB;
use File;

class LandingpageController extends Controller
{
   
   public function index(Request $request){

    $visi_misi = VisiMisi::all();

     return view('landingpage.index',compact('visi_misi'));
   }


    public function about(Request $request){

      $dewan_direksi = DewanDireksi::all();
      $profil_perusahaan = ProfilPerusahaan::all();

     return view('landingpage.about',compact('dewan_direksi','profil_perusahaan'));
   }

   public function service(Request $request){

    $alat_berat = Layanan::where('jenis','1')->get();
    $konstruksi_jalan = Layanan::where('jenis','2')->get();
    $penanganan_kargo = Layanan::where('jenis','3')->get();
    $penyiapan_lahan = Layanan::where('jenis','4')->get();
    $perdagangan_material = Layanan::where('jenis','5')->get();


     return view('landingpage.service',compact('alat_berat','konstruksi_jalan','penanganan_kargo','penyiapan_lahan','perdagangan_material'));
   }


   public function komitmen(Request $request){

      $komitmen_kami = Komitmen::all();
     

     return view('landingpage.komitmen',compact('komitmen_kami'));
   }
}
