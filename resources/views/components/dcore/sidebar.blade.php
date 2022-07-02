<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li class=active><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
              </ul>
            </li>
         
            <li class="menu-header">Stisla</li>
            <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Modul Pendaftaran</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link beep beep-sidebar" href="{{route('daftar_admin')}}">Daftar Baru</a></li>                
                <li><a class="nav-link beep beep-sidebar" href="">Pendaftar</a></li>                
                <li><a class="nav-link beep beep-sidebar" href="">Acc Pendaftar</a></li>                
                <li><a class="nav-link beep beep-sidebar" href="">Download Pendaftar</a></li>                             
            </ul>
            </li>
           
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modul Sekolah</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="#" data-toggle="modal" data-target="#modalJurusan">Jurusan</a></li>
                <li><a class="nav-link" href="#" data-toggle="modal" data-target="#modalGelombang">Gelombang</a></li>
                <li><a class="nav-link" href="{{route('sekolah_smp')}}">Sekolah SMP</a></li>
                <li><a class="nav-link" href="">Profil Jurusan</a></li>
                <li><a class="nav-link" href="">Galeri Sekolah</a></li>
                <li><a class="nav-link" href="">Informasi</a></li>
      
              </ul>
            </li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>        
        </aside>
      </div>
<x-dcore.modal />