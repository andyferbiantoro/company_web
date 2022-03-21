@extends('layouts.app_landingpage')

@section('title')
Tentang Kami
@endsection


@section('content') 



  <section class="global-page-header">
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
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                <img src="images/about/about-company.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">KENAPA HARUS BERSAMA KAMI</h3>
                    @foreach($profil_perusahaan as $profil)
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



<!-- 
================================================== 
    Company Feature Section Start
================================================== -->
<!-- <section class="about-feature clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="subtitle text-center">Komitmen Kami</h2>
            </div>
            <div class="col-lg-4 px-0">
                <div class="block about-feature-1 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                    <h2>
                    Sertifikat perusahaan
                    </h2>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 px-0">
                <div class="block about-feature-2 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                    <h2 class="item_title">
                    Tata kelola perusahaan
                    </h2>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 px-0">
                <div class="block about-feature-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".7s">
                    <h2 class="item_title">
                    Tanggung jawab sosia
                    </h2>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> -->


<!-- 
================================================== 
    Team Section Start
================================================== -->
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="subtitle text-center">Dewan Direksi</h2>
            </div>

            @foreach($dewan_direksi as $dewan)
            <div class="col-md-3 col-sm-6">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <div class="team-img">
                        <img src="{{asset('uploads/dewan_direksi/'.$dewan->image)}}" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">{{$dewan->nama}}</h3>
                    <p class="team_designation">{{$dewan->jabatan}}</p>
                    <p class="team_text">{{$dewan->deskripsi}} </p>
                   <!--  <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p> -->
                </div>
            </div>
            @endforeach
           
           
        </div>
    </div>
</section>





    @endsection
