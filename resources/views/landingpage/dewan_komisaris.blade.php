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
                    <h2>Dewan komisaris</h2>
                    <ol class="breadcrumb list-inline text-center">
                        <li class="list-inline-item">
                            <a href="index.html">
                                <i class="ion-ios-home"></i>
                                Beranda  &nbsp; &nbsp;/
                            </a>
                        </li>
                        <li class="active list-inline-item">Dewan komisaris</li>
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
                @foreach($dewan_komisaris as $komisaris)
                <div class="col-md-4 wow fadeInLeft" data-wow-delay=".3s" >
                    <img src="{{asset('uploads/dewan/'.$komisaris->image)}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="block">
                        <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">{{$komisaris->nama}}</h3>
                        <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                            {{$komisaris->deskripsi}}
                        </p>
                    <!-- <p  class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                        Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                    </p> -->
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<br>










@endsection
