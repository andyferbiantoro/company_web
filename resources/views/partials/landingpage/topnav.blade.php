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

                           
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Tentang Perusahaan
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('landingpage-about') }}">Profil Perusahaan</a>
                                <a class="dropdown-item" href="{{ route('landingpage-dewan_direksi') }}">Dewan Direksi</a>
                                <a class="dropdown-item" href="{{ route('landingpage-dewan_komisaris') }}">Dewan Komisaris</a>
                            </div>
                        </li>

                           

                             <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Produk Dan Solusi
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('landingpage-penyewaan_alat_berat') }}">Penyewaan Alat Berat</a>
                                <a class="dropdown-item" href="{{ route('landingpage-konstruksi_jalan_raya') }}">Konstruksi Jalan Raya</a>
                                <a class="dropdown-item" href="{{ route('landingpage-penyiapan_lahan') }}">Penyiapan Lahan</a>
                                <a class="dropdown-item" href="{{ route('landingpage-perdagangan_material') }}">Perdagangan Besar Material Bangunan</a>
                                <a class="dropdown-item" href="{{ route('landingpage-penanganan_kargo') }}">Penanganan Kargo</a>

                            </div>
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