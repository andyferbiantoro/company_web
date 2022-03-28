@extends('layouts.app_landingpage')

@section('title')
Tentang Kami
@endsection


@section('content') 



  <section class="global-page-header"  style="background: #0209d5;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block"><br><br>
                            <h2>Tentang Perusahaan</h2>
                            <ol class="breadcrumb list-inline text-center">
                                <li class="list-inline-item">
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Beranda  &nbsp; &nbsp;/
                                    </a>
                                </li>
                                <li class="active list-inline-item">Tentang Perusahaan</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- 
================================================== 
    Company Description Section Start
================================================== -->
<section class="company-description">
    <div class="container">
        <div class="row">
                    @foreach($profil_perusahaan as $profil)
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                <img src="{{asset('uploads/profil_perusahaan/'.$profil->image)}}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">KENAPA HARUS BERSAMA KAMI</h3>
                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        {{$profil->deskripsi}}
                    </p>
                    @endforeach
                    <!-- <p  class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                        Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                    </p> -->
                    
                </div>
            </div>
        </div>
    </div>
</section>
<br>

<section class="company-description">
    <div class="container">
        <div class="row">
            
            <div class="col-md-10">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">PROFIL LENGKAP PERUSAHAAN</h3>
                      @foreach($profil_perusahaan as $profil)
                     <table class="table table-hover">
                      <tr>
                        <th>Nama Perusahaan</th>
                        <th>:</th>
                        <td>{{$profil->nama_perusahaan}}</td>
                      </tr> 

                      <tr>
                        <th>Didirikan</th>
                        <th>:</th>
                        <td>{{$profil->didirikan}}</td>
                      </tr> 

                      <tr>
                        <th>Lokasi</th>
                        <th>:</th>
                        <td>{{$profil->lokasi}}</td>
                      </tr> 

                      <tr>
                        <th>Luas Lahan</th>
                        <th>:</th>
                        <td>{{$profil->luas_lahan}}</td>
                      </tr>    

                      <tr>
                        <th>Luas Bangunan</th>
                        <th>:</th>
                        <td>{{$profil->luas_bangunan}}</td>
                      </tr>  

                      <tr>
                        <th>Kapital</th>
                        <th>:</th>
                        <td>Rp. <?=number_format($profil->modal, 0, ".", ".")?>,00</td>
                      </tr>  

                    </table>
                   @endforeach 
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>








    @endsection
