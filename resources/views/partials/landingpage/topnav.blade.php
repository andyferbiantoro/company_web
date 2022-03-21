<section class="top-bar animated-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="../public/images/logo.jpeg" alt="logo" style="width: 70px; height: auto;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('landingpage-index') }}">Beranda
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('landingpage-about') }}">Tentang Perusahaan</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('landingpage-service') }}">Produk dan Solusi</a>
                            </li>

                             <li class="nav-item">
                                <a class="nav-link" href="{{ route('landingpage-komitmen') }}">Komitmen Kami</a>
                            </li>
                           
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">Kontak Kami</a>
                            </li> -->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>