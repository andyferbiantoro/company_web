@extends('layouts.app_landingpage')

@section('title')
Produk dan Solusi
@endsection


@section('content')

<section class="global-page-header"  style="background: #0209d5;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block"><br><br>
                    <h2>Penanganan Kargo</h2>
                    <ol class="breadcrumb list-inline text-center">
                        <li class="list-inline-item">
                            <a href="index.html">
                                <i class="ion-ios-home"></i>
                                Beranda  &nbsp; &nbsp;/
                            </a>
                        </li>
                        <li class="active list-inline-item">Penanganan Kargo</li>
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
               
            </div>
            <div class="row">
                @foreach($penanganan_kargo as $data)
                <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                         
                  <div id="carouselExampleControls{{$data->id}}" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        @foreach($data->list_image as $image)
                        @if($image->indeks == 1)
                        <div class="carousel-item active">
                            @else    
                            <div class="carousel-item">
                                @endif    
                                <img class="d-block w-100" src="{{asset('uploads/produk_dan_solusi/'.$image->image)}}" alt="First slide">
                            </div>
                            <br>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls{{$data->id}}" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls{{$data->id}}" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
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






    @endsection