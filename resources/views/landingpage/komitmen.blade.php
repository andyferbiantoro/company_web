@extends('layouts.app_landingpage')

@section('title')
Komitmen Kami
@endsection


@section('content') 



<section class="global-page-header"  style="background: #0209d5;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block"><br><br>
                    <h2>Komitmen Kami</h2>
                    <ol class="breadcrumb list-inline text-center">
                        <li class="list-inline-item">
                            <a href="index.html">
                                <i class="ion-ios-home"></i>
                                Beranda  &nbsp; &nbsp;/
                            </a>
                        </li>
                        <li class="active list-inline-item">Komitmen Kami</li>
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
            <div class="col-md-3"></div>
            <div class="col-md-6 ">
                @foreach($komitmen_kami as $data)
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="{{asset('uploads/komitmen_kami/'.$data->sertifikat)}}" class="img-fluid" alt="this is a title">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{asset('uploads/komitmen_kami/'.$data->sertifikat)}}">Lihat Sertifikat</a>
                                
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                                SERTIFIKAT PERUSAHAAN       
                        </h4>
                        <!-- <p>
                            Lorem ipsum dolor sit.
                        </p> -->
                    </figcaption>
                </figure>
                @endforeach
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
<br>


<section class="company-description">
    <div class="container">
        <div class="row">
            @foreach($komitmen_kami as $data)
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                <img src="{{asset('uploads/komitmen_kami/'.$data->image_tata_kelola)}}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">TATA KELOLA PERUSAHAAN</h3>
                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        {{$data->tata_kelola}}
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
            <div class="col-md-6">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">TANGGUNG JAWAB SOSIAL</h3>
                    @foreach($komitmen_kami as $data)
                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        {{$data->tanggung_jawab}}
                    </p>
                </div>
            </div>
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                <img src="{{asset('uploads/komitmen_kami/'.$data->image_tanggung_jawab)}}" alt="" class="img-fluid">
            </div>
            @endforeach
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
            @foreach($komitmen_kami as $data)
            <div class="col-lg-6 px-0">
                <div class="block about-feature-1 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                    <h2>
                    Tata kelola perusahaan
                    </h2>
                    <p>
                        {{$data->tata_kalola}}
                    </p>
                </div>
            </div>
            <div class="col-lg-6 px-0">
                <div class="block about-feature-2 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                    <h2 class="item_title">
                    Tanggung Jawab Perusahaan
                    </h2>
                    <p>
                        {{$data->tanggung_jawab}}
                    </p>
                </div>
            </div>
           @endforeach
        </div>
    </div>
</section>
<br><br> -->

<!-- 
================================================== 
    Team Section Start
================================================== -->




    @endsection
