@extends('layouts.app_landingpage')

@section('title')
Produk dan Solusi
@endsection


@section('content')

<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block"><br><br>
                    <h2>Produk dan Solusi</h2>
                    <ol class="breadcrumb list-inline text-center">
                        <li class="list-inline-item">
                            <a href="index.html">
                                <i class="ion-ios-home"></i>
                                Beranda  &nbsp; &nbsp;/
                            </a>
                        </li>
                        <li class="active list-inline-item">Produk dan Solusi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 
================================================== 
    Service Page Section  Start
    ================================================== -->
    <section id="service-page" class="pages service-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">produk dan solusi kami</h2>
                    <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">Lorem
                        ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis porro recusandae non quibusdam
                    iure adipisci.</p>
                </div>
            </div>
            <div class="row">
                @foreach($alat_berat as $data)
                <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                    <img src="{{asset('uploads/produk_dan_solusi/'.$data->image)}}" alt="" class="img-fluid">

                </div>
                <div class="col-md-6">
                    <div class="block">
                        <h4 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">{{$data->nama_layanan}}</h4>
                        <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                            {{$data->deskripsi}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div><br>


            <div class="row">
                @foreach($konstruksi_jalan as $data)
                <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                    <img src="{{asset('uploads/produk_dan_solusi/'.$data->image)}}" alt="" class="img-fluid">

                </div>
                <div class="col-md-6">
                    <div class="block">
                        <h4 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">{{$data->nama_layanan}}</h4>
                        <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                            {{$data->deskripsi}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div><br>

            <div class="row">
                @foreach($penanganan_kargo as $data)
                <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                    <img src="{{asset('uploads/produk_dan_solusi/'.$data->image)}}" alt="" class="img-fluid">

                </div>
                <div class="col-md-6">
                    <div class="block">
                        <h4 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">{{$data->nama_layanan}}</h4>
                        <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                            {{$data->deskripsi}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div><br>


            <div class="row">
                @foreach($penyiapan_lahan as $data)
                <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                    <img src="{{asset('uploads/produk_dan_solusi/'.$data->image)}}" alt="" class="img-fluid">

                </div>
                <div class="col-md-6">
                    <div class="block">
                        <h4 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">{{$data->nama_layanan}}</h4>
                        <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                            {{$data->deskripsi}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div><br>

            <div class="row">
                @foreach($perdagangan_material as $data)
                <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                    <img src="{{asset('uploads/produk_dan_solusi/'.$data->image)}}" alt="" class="img-fluid">

                </div>
                <div class="col-md-6">
                    <div class="block">
                        <h4 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">{{$data->nama_layanan}}</h4>
                        <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                            {{$data->deskripsi}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div><br>

        </div>
    </section>


<!-- 
================================================== 
    Works Section Start
    ================================================== -->
    <section class="works service-page">
        <div class="container">
            <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Some Of Our Features
            Works</h2>
            <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
                Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est.
                Aenean posuere <br> tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis
                lacus.
            </p>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                        <div class="img-wrapper">
                            <img src="images/portfolio/item-1.jpg" class="img-fluid" alt="this is a title">
                            <div class="overlay">
                                <div class="buttons">
                                    <a rel="gallery" class="fancybox" href="images/portfolio/item-1.jpg">Demo</a>
                                    <a target="_blank" href="">Details</a>
                                </div>
                            </div>
                        </div>
                        <figcaption>
                            <h4>
                                <a href="#">
                                    Dew Drop
                                </a>
                            </h4>
                            <p>
                                Redesigne UI Concept
                            </p>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-md-3 col-sm-6">
                    <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="img-wrapper">
                            <img src="images/portfolio/item-2.jpg" class="img-fluid" alt="this is a title">
                            <div class="overlay">
                                <div class="buttons">
                                    <a rel="gallery" class="fancybox" href="images/portfolio/item-2.jpg">Demo</a>
                                    <a target="_blank" href="">Details</a>
                                </div>
                            </div>
                        </div>
                        <figcaption>
                            <h4>
                                <a href="#">
                                    Bottle Mockup
                                </a>
                            </h4>
                            <p>
                                Lorem ipsum dolor sit.
                            </p>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-md-3 col-sm-6">
                    <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="img-wrapper">
                            <img src="images/portfolio/item-3.jpg" class="img-fluid" alt="">
                            <div class="overlay">
                                <div class="buttons">
                                    <a rel="gallery" class="fancybox" href="images/portfolio/item-3.jpg">Demo</a>
                                    <a target="_blank" href="">Details</a>
                                </div>
                            </div>
                        </div>
                        <figcaption>
                            <h4>
                                <a href="#">
                                    Table Design
                                </a>
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet.
                            </p>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-md-3 col-sm-6">
                    <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="img-wrapper">
                            <img src="images/portfolio/item-4.jpg" class="img-fluid" alt="">
                            <div class="overlay">
                                <div class="buttons">
                                    <a rel="gallery" class="fancybox" href="images/portfolio/item-4.jpg">Demo</a>
                                    <a target="_blank" href="">Details</a>
                                </div>
                            </div>
                        </div>
                        <figcaption>
                            <h4>
                                <a href="#">
                                    Make Up elements
                                </a>
                            </h4>
                            <p>
                                Lorem ipsum dolor.
                            </p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>





    @endsection