<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\ProfilPerusahaan;
use View;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



     public function __construct()
    {
    
        $data_perusahaan = ProfilPerusahaan::all();
        $no_telp_perusahaan = ProfilPerusahaan::pluck('no_telp');


        View::share('data_perusahaan',$data_perusahaan);
        View::share('no_telp_perusahaan',$no_telp_perusahaan);


    }

}
