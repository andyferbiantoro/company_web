<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisiMisi;
use App\Dewan;
use App\Layanan;
use App\ImageLayanan;
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

      $dewan_direksi = Dewan::all();
      $profil_perusahaan = ProfilPerusahaan::all();

     return view('landingpage.about',compact('dewan_direksi','profil_perusahaan'));
   }

    public function dewan_direksi(Request $request){

      $dewan_direksi = Dewan::where('jenis','direksi')->get();
     

     return view('landingpage.dewan_direksi',compact('dewan_direksi'));
   }

    public function dewan_komisaris(Request $request){

      $dewan_komisaris = Dewan::where('jenis','komisaris')->get();
     

     return view('landingpage.dewan_komisaris',compact('dewan_komisaris'));
   }



   // public function service(Request $request){

   //  $alat_berat = Layanan::where('jenis','1')->get();
   //  $konstruksi_jalan = Layanan::where('jenis','2')->get();
   //  $penanganan_kargo = Layanan::where('jenis','3')->get();
   //  $penyiapan_lahan = Layanan::where('jenis','4')->get();
   //  $perdagangan_material = Layanan::where('jenis','5')->get();


   //   return view('landingpage.service',compact('alat_berat','konstruksi_jalan','penanganan_kargo','penyiapan_lahan','perdagangan_material'));
   // }

   public function penyewaan_alat_berat(Request $request){

     $alat_berat = Layanan::where('jenis','1')->get();


     foreach ($alat_berat as $key => $value) {
      $detail_layanan = DB::table('image_layanan')
       ->join('layanan', 'image_layanan.id_layanan', '=', 'layanan.id')
       ->select('image_layanan.image','image_layanan.indeks')
       ->where('id_layanan', $value->id)
       ->orderBy('image_layanan.id','DESC')
       ->get();

       $list_image = collect($detail_layanan);
       $value->list_image =$list_image;
     }

   

     return view('landingpage.service.penyewaan_alat_berat',compact('alat_berat'));
   }


   public function konstruksi_jalan_raya(Request $request){

    $konstruksi_jalan_raya = Layanan::where('jenis','2')->get();

     foreach ($konstruksi_jalan_raya as $key => $value) {
      $detail_layanan = DB::table('image_layanan')
       ->join('layanan', 'image_layanan.id_layanan', '=', 'layanan.id')
       ->select('image_layanan.image','image_layanan.indeks')
       ->where('id_layanan', $value->id)
       ->orderBy('image_layanan.id','DESC')
       ->get();

       $list_image = collect($detail_layanan);
       $value->list_image =$list_image;
     }

   

     return view('landingpage.service.konstruksi_jalan_raya',compact('konstruksi_jalan_raya'));
   }


   public function penanganan_kargo(Request $request){

    $penanganan_kargo = Layanan::where('jenis','3')->get();

     foreach ($penanganan_kargo as $key => $value) {
      $detail_layanan = DB::table('image_layanan')
       ->join('layanan', 'image_layanan.id_layanan', '=', 'layanan.id')
       ->select('image_layanan.image','image_layanan.indeks')
       ->where('id_layanan', $value->id)
       ->orderBy('image_layanan.id','DESC')
       ->get();

       $list_image = collect($detail_layanan);
       $value->list_image =$list_image;
     }

   

     return view('landingpage.service.penanganan_kargo',compact('penanganan_kargo'));
   }


   public function penyiapan_lahan(Request $request){

    $penyiapan_lahan = Layanan::where('jenis','4')->get();

     foreach ($penyiapan_lahan as $key => $value) {
      $detail_layanan = DB::table('image_layanan')
       ->join('layanan', 'image_layanan.id_layanan', '=', 'layanan.id')
       ->select('image_layanan.image','image_layanan.indeks')
       ->where('id_layanan', $value->id)
       ->orderBy('image_layanan.id','DESC')
       ->get();

       $list_image = collect($detail_layanan);
       $value->list_image =$list_image;
     }

   

     return view('landingpage.service.penyiapan_lahan',compact('penyiapan_lahan'));
   }


   public function perdagangan_material(Request $request){

    $perdagangan_material = Layanan::where('jenis','5')->get();

     foreach ($perdagangan_material as $key => $value) {
      $detail_layanan = DB::table('image_layanan')
       ->join('layanan', 'image_layanan.id_layanan', '=', 'layanan.id')
       ->select('image_layanan.image','image_layanan.indeks')
       ->where('id_layanan', $value->id)
       ->orderBy('image_layanan.id','DESC')
       ->get();

       $list_image = collect($detail_layanan);
       $value->list_image =$list_image;
     }

   

     return view('landingpage.service.perdagangan_material',compact('perdagangan_material'));
   }


   public function komitmen(Request $request){

      $komitmen_kami = Komitmen::all();
     

     return view('landingpage.komitmen',compact('komitmen_kami'));
   }
}
