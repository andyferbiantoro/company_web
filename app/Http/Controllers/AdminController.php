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

class AdminController extends Controller
{
   public function index(Request $request){

     return view('admin.dashboard');
  }


//=========================================================================================================================
  public function admin_visi_misi(){

   $visi_misi = VisiMisi::orderby('id','DESC')->get();
   $count_visi_misi = VisiMisi::count();

   return view('admin.tentang_perusahaan.visi_misi',compact('visi_misi','count_visi_misi'));
}


public function admin_visi_misi_add(Request $request){

   $data_add = new VisiMisi();

   $data_add->visi = $request->input('visi');
   $data_add->misi = $request->input('misi');



   $data_add->save();

   return redirect('/admin_visi_misi')->with('success', 'Data visi misi Baru Berhasil Ditambahkan');
}


public function admin_visi_misi_update(Request $request, $id)
{

  $data_update = VisiMisi::where('id', $id)->first();

  $input = [
     'visi' => $request->visi,
     'misi' => $request->misi,
  ];



  $data_update->update($input);

  return redirect('/admin_visi_misi')->with('success', 'Data visi misi Berhasil Diupdate');
}


public function admin_visi_misi_delete($id)
{
  $delete = VisiMisi::findOrFail($id);
  $delete->delete();

  return redirect('/admin_visi_misi')->with('success', 'Data Visi Misi Berhasil Dihapus');
}


 //====================================================================================================================================

public function admin_dewan_direksi(){

   $dewan_direksi = DewanDireksi::orderby('id','DESC')->get();

   return view('admin.tentang_perusahaan.dewan_direksi',compact('dewan_direksi'));
}


public function admin_dewan_direksi_add(Request $request){

   $data_add = new DewanDireksi();

   $data_add->nama = $request->input('nama');
   $data_add->jabatan = $request->input('jabatan');
   $data_add->deskripsi = $request->input('deskripsi');

   if ($request->hasFile('image')) {
      $file = $request->file('image');
      $extension = $file->getClientOriginalExtension();
      $filename = $file->getClientOriginalName();
      $path = $file->store('public/uploads/dewan_direksi');
      $file->move('uploads/dewan_direksi/', $filename);
      $data_add->image = $filename;
      $data_add->path = $path;
   } else {
      echo "Gagal upload gambar";
   }

   $data_add->save();

   return redirect('/admin_dewan_direksi')->with('success', 'Data dewan direksi Baru Berhasil Ditambahkan');
}


public function admin_dewan_direksi_update(Request $request, $id)
{

 $data_update = DewanDireksi::where('id', $id)->first();

 $input = [
    'nama' => $request->nama,
    'jabatan' => $request->jabatan,
    'deskripsi' => $request->deskripsi,
 ];


 if ($file = $request->file('image')) {
   if ($data_update->image) {
      File::delete('uploads/dewan_direksi/' . $data_update->image);
   }
   $nama_file = $file->getClientOriginalName();
   $path = $file->store('public/uploads/dewan_direksi');
   $file->move(public_path() . '/uploads/dewan_direksi/', $nama_file);
   $input['image'] = $nama_file;
   $input['path'] = $path;
}


$data_update->update($input);

return redirect('/admin_dewan_direksi')->with('success', 'Data dewan direksi Baru Berhasil Diupdate');
}


public function admin_dewan_direksi_delete($id)
{
  $delete = DewanDireksi::findOrFail($id);
  $delete->delete();

  return redirect('/admin_dewan_direksi')->with('success', 'Data testimoni Baru Berhasil Dihapus');
}



//==========================================================================================================================
public function admin_profil_perusahaan(){

   $profil_perusahaan = ProfilPerusahaan::orderby('id','DESC')->get();
   $count = ProfilPerusahaan::count();

   return view('admin.tentang_perusahaan.profil_perusahaan',compact('profil_perusahaan','count'));
}


public function admin_profil_perusahaan_add(Request $request){

   $data_add = new ProfilPerusahaan();

   $data_add->nama_perusahaan = $request->input('nama_perusahaan');
   $data_add->deskripsi = $request->input('deskripsi');
   $data_add->didirikan = $request->input('didirikan');
   $data_add->lokasi = $request->input('lokasi');
   $data_add->luas_lahan = $request->input('luas_lahan');
   $data_add->luas_bangunan = $request->input('luas_bangunan');
   $data_add->modal = $request->input('modal');
   $data_add->no_telp = $request->input('no_telp');
   $data_add->email = $request->input('email');



   $data_add->save();

   return redirect('/admin_profil_perusahaan')->with('success', 'Data profil perusahaan Baru Berhasil Ditambahkan');
}


public function admin_profil_perusahaan_update(Request $request, $id)
{

  $data_update = ProfilPerusahaan::where('id', $id)->first();

  $input = [
     'nama_perusahaan' => $request->nama_perusahaan,
     'deskripsi' => $request->deskripsi,
     'didirikan' => $request->didirikan,
     'lokasi' => $request->lokasi,
     'luas_lahan' => $request->luas_lahan,
     'luas_bangunan' => $request->luas_bangunan,
     'modal' => $request->modal,
     'no_telp' => $request->no_telp,
     'email' => $request->email,
  ];



  $data_update->update($input);

  return redirect('/admin_profil_perusahaan')->with('success', 'Data profil perusahaan Baru Berhasil Diupdate');
}


public function admin_profil_perusahaan_delete($id)
{
  $delete = ProfilPerusahaan::findOrFail($id);
  $delete->delete();

  return redirect('/admin_profil_perusahaan')->with('success', 'Data profil perusahaan Baru Berhasil Dihapus');
}


 //================================================================================================================


public function admin_penyewaan_alat_berat(){

   $produk_dan_solusi = Layanan::orderby('id','DESC')->where('jenis','1')->get();
   $count = Layanan::where('jenis','1')->count();

   return view('admin.produk_dan_solusi.alat_berat',compact('produk_dan_solusi','count'));
}


public function admin_konstruksi_jalan(){

   $produk_dan_solusi = Layanan::orderby('id','DESC')->where('jenis','2')->get();
   $count = Layanan::where('jenis','2')->count();

   return view('admin.produk_dan_solusi.konstruksi_jalan',compact('produk_dan_solusi','count'));
}


public function admin_penanganan_kargo(){

   $produk_dan_solusi = Layanan::orderby('id','DESC')->where('jenis','3')->get();
   $count = Layanan::where('jenis','3')->count();

   return view('admin.produk_dan_solusi.penanganan_kargo',compact('produk_dan_solusi','count'));
}


public function admin_penyiapan_lahan(){

   $produk_dan_solusi = Layanan::orderby('id','DESC')->where('jenis','4')->get();
   $count = Layanan::where('jenis','4')->count();

   return view('admin.produk_dan_solusi.penyiapan_lahan',compact('produk_dan_solusi','count'));
}


public function admin_perdagangan_material(){

   $produk_dan_solusi = Layanan::orderby('id','DESC')->where('jenis','5')->get();
   $count = Layanan::where('jenis','5')->count();

   return view('admin.produk_dan_solusi.perdagangan_material',compact('produk_dan_solusi','count'));
}



public function admin_produk_dan_solusi_add(Request $request){

   $data_add = new Layanan();

   $data_add->nama_layanan = $request->input('nama_layanan');
   $data_add->jenis = $request->input('jenis');
   $data_add->deskripsi = $request->input('deskripsi');

   if ($request->hasFile('image')) {
      $file = $request->file('image');
      $extension = $file->getClientOriginalExtension();
      $filename = $file->getClientOriginalName();
      $path = $file->store('public/uploads/produk_dan_solusi');
      $file->move('uploads/produk_dan_solusi/', $filename);
      $data_add->image = $filename;
      $data_add->path = $path;
   } else {
      echo "Gagal upload gambar";
   }


   $data_add->save();

   return redirect()->back()->with('success', 'Data profil perusahaan Baru Berhasil Ditambahkan');
}


public function admin_produk_dan_solusi_update(Request $request, $id)
{

  $data_update = Layanan::where('id', $id)->first();

  $input = [
     'nama_layanan' => $request->nama_layanan,
     'jenis' => $request->jenis,
     'deskripsi' => $request->deskripsi,
  ];

  if ($file = $request->file('iamge')) {
   if ($data_update->iamge) {
      File::delete('uploads/produk_dan_solusi/' . $data_update->iamge);
   }
   $nama_file = $file->getClientOriginalName();
   $path = $file->store('public/uploads/produk_dan_solusi');
   $file->move(public_path() . '/uploads/produk_dan_solusi/', $nama_file);
   $input['iamge'] = $nama_file;
   $input['path'] = $path;
}

  $data_update->update($input);

  return  redirect()->back()->with('success', 'Data profil perusahaan Baru Berhasil Diupdate');
}


public function admin_produk_dan_solusi_delete($id)
{
  $delete = Layanan::findOrFail($id);
   if ($delete->iamge) {
      File::delete('uploads/produk_dan_solusi/' . $delete->iamge);
   }
  $delete->delete();

  return  redirect()->back()->with('success', 'Data profil perusahaan Baru Berhasil Dihapus');
}

//=========================================================================================================================

public function admin_komitmen_kami(){

   $komitmen_kami = Komitmen::orderby('id','DESC')->get();
   $count = Komitmen::count();

   return view('admin.tentang_perusahaan.komitmen_perusahaan',compact('komitmen_kami','count'));
}


public function admin_komitmen_kami_add(Request $request){

   $data_add = new Komitmen();

   $data_add->tata_kelola = $request->input('tata_kelola');
   $data_add->tanggung_jawab = $request->input('tanggung_jawab');

   if ($request->hasFile('sertifikat')) {
      $file = $request->file('sertifikat');
      $extension = $file->getClientOriginalExtension();
      $filename = $file->getClientOriginalName();
      $path = $file->store('public/uploads/komitmen_kami');
      $file->move('uploads/komitmen_kami/', $filename);
      $data_add->sertifikat = $filename;
      $data_add->path = $path;
   } else {
      echo "Gagal upload gambar";
   }

   $data_add->save();

   return redirect('/admin_komitmen_kami')->with('success', 'Data dewan direksi Baru Berhasil Ditambahkan');
}


public function admin_komitmen_kami_update(Request $request, $id)
{

 $data_update = Komitmen::where('id', $id)->first();

 $input = [
    'tata_kelola' => $request->tata_kelola,
    'tanggung_jawab' => $request->tanggung_jawab,
 ];


 if ($file = $request->file('sertifikat')) {
   if ($data_update->sertifikat) {
      File::delete('uploads/komitmen_kami/' . $data_update->sertifikat);
   }
   $nama_file = $file->getClientOriginalName();
   $path = $file->store('public/uploads/komitmen_kami');
   $file->move(public_path() . '/uploads/komitmen_kami/', $nama_file);
   $input['sertifikat'] = $nama_file;
   $input['path'] = $path;
}


$data_update->update($input);

return redirect('/admin_komitmen_kami')->with('success', 'Data dewan direksi Baru Berhasil Diupdate');
}


public function admin_komitmen_kami_delete($id)
{
  $delete = Komitmen::findOrFail($id);
  $delete->delete();

  return redirect('/admin_komitmen_kami')->with('success', 'Data Komitmen Berhasil Dihapus');
}





}

