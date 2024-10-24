<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/jqvmap/dist/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/weather-icon/css/weather-icons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/weather-icon/css/weather-icons-wind.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/summernote/summernote-bs4.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
<div id="app">
  <!--  <div class="main-wrapper main-wrapper-1">-->
    <div class="">
    <div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
        </form>
        <ul class="navbar-nav navbar-right">
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
            <div class="dropdown-header">Messages
                
            </div>

            <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
            </div>
            </div>
        </li>
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
            <div class="dropdown-header">Notifications
                <div class="float-right">
                <a href="#">Mark All As Read</a>
                </div>
            </div>

            <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
            </div>
            </div>
        </li>
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="backend/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Administrador</div></a>
            <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-title">Logged in 5 min ago</div>
            <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
            </a>
            <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
            </a>
            <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
            </div>
        </li>
        </ul>
    </nav>
<!-- ----------------------------------------------- -->
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">GestRisk</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Administrador</li>
            <li class="dropdown active">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Administracion</span></a>
            <ul class="dropdown-menu">
                <li class=active><a class="nav-link" href="index-0.html">Usuarios</a></li>
                <li><a class="nav-link" href="index.html">Roles</a></li>
            </ul>
            </li>
            <li class="menu-header">Contenido</li>
            <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>ACTIVOS</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('tipos-activo.index') }}">Tipos</a></li>
                <li><a class="nav-link" href="layout-default.html">Ver</a></li>
            </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>AMENAZAS</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('amenazas.index') }}">Ver</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>CONTROLES</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('controles.index') }}">Ver</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>ESTRATEGIAS</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('estrategias.index') }}">Ver</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>MITIGACIONES</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('mitigaciones.index') }}">Ver</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>PROCESOS</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('procesos.index') }}">Ver</a></li>
                </ul>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>        </aside>
    </div>

      <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            @yield('content')
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2024 <div class="bullet"></div> Design By <a href="https://www.unitru.edu.pe/">Ingenieria de Sitemas Universidad Nacional de Trujillo</a>
        </div>
        <div class="footer-right">

        </div>
    </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="{{ asset('backend/assets/modules/jquery.min.js') }}"></script>
<script src="{{ asset('backend/assets/modules/popper.js') }}"></script>
<script src="{{ asset('backend/assets/modules/tooltip.js') }}"></script>
<script src="{{ asset('backend/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('backend/assets/modules/moment.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/stisla.js') }}"></script>

<!-- JS Libraies -->
<script src="{{ asset('backend/assets/modules/simple-weather/jquery.simpleWeather.min.js') }}"></script>
<script src="{{ asset('backend/assets/modules/chart.min.js') }}"></script>
<script src="{{ asset('backend/assets/modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('backend/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('backend/assets/modules/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('backend/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('backend/assets/js/page/index-0.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom.js') }}"></script>
</body>
</html>