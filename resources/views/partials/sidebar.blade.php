<aside id="sidebar-wrapper">
    <br>
    <div class="sidebar-brand">
         <img src="../public/images/logo.jpeg" alt="logo" style="width: 70px; height: auto;">
    </div>
    <br><br><br>
    <ul class="sidebar-menu">

        <li class="{{(request()->is('admin')) ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin') }}"><i class="fas fa-home"></i><span>Beranda</span></a></li>


        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-building"></i> <span>Tentang Perusahaan</span></a>
            <ul class="dropdown-menu">
              <li><a class="{{(request()->is('admin_visi_misi')) ? 'active' : ''}}" href="{{ route('admin_visi_misi') }}">Visi Misi</a></li>
              <li><a class="{{(request()->is('admin_dewan_direksi')) ? 'active' : ''}}" href="{{ route('admin_dewan_direksi') }}">Dewan Direksi</a></li>
               <li><a class="{{(request()->is('admin_dewan_komisaris')) ? 'active' : ''}}" href="{{ route('admin_dewan_komisaris') }}">Dewan Komisaris</a></li>
              <li><a class="nav-link" href="{{ route('admin_profil_perusahaan') }}">Profil Perusahaan</a></li>
              <li><a class="nav-link" href="{{ route('admin_komitmen_kami') }}">Komitmen Perusahaan</a></li>
          </ul>
      </li>


       <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-hand-holding"></i> <span>Produk dan Solusi</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('admin_penyewaan_alat_berat') }}">Penyewaan Alat Berat</a></li>
                <li><a class="{{(request()->is('admin_konstruksi_jalan')) ? 'active' : ''}}" href="{{ route('admin_konstruksi_jalan') }}">Konstruksi Jalan Raya</a></li>
                <li><a class="{{(request()->is('admin_penyiapan_lahan')) ? 'active' : ''}}" href="{{ route('admin_penyiapan_lahan') }}">Penyiapan Lahan</a></li>
                <li><a class="nav-link" href="{{ route('admin_perdagangan_material') }}">Perdagangan Material Bangunan</a></li>
                <li><a class="nav-link" href="{{ route('admin_penanganan_kargo') }}">Penanganan Kargo</a></li>

          </ul>
      </li>

    

        <!-- <li class="{{(request()->is('admin_visi_misi')) ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin_visi_misi') }}"><i class="fas fa-file"></i><span>Visi Misi</span></a></li>
        <li class="{{(request()->is('admin_dewan_direksi')) ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin_dewan_direksi') }}"><i class="fas fa-users"></i><span>Dewan Direksi</span></a></li> -->
      
        
       
    </ul>
</aside>