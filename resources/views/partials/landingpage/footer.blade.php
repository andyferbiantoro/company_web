<section id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">BAGAIMANA MENURUT ANDA ?</h1>
                        <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">
                        @foreach($no_telp_perusahaan as $no_telp)
                        <a href="https://api.whatsapp.com/send?phone={{$no_telp}}" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Hubungi Kami</a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

<footer id="footer">
                <div class="container">
                    <div class="row content-justify-between">
                        <div class="col-md-8 col-12 text-center text-lg-left text-md-left">
                             @foreach($data_perusahaan as $data)
                             <h3>Kontak Kami</h3>
                            <p> 
                                 <span class="iconify" data-icon="ion:location-outline"></span>
                                 {{$data->lokasi}}
                                 <br>

                                 <span class="iconify" data-icon="ion:call-outline"></span>
                                 {{$data->no_telp}}
                                 <br>

                                 <span class="iconify" data-icon="ion:mail-outline"></span>
                                 {{$data->email}}


                            </p>
                            @endforeach
                        </div>
                      
                    </div>
                </div>
            </footer> 