<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestion Parc Auto | Algérie Télécom</title>
   <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/fontawesome-free/css/all.min.css') }}">
   <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/summernote/summernote-bs4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

@guest
@yield('main') 
@else
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ URL::asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <!-- /.navbar -->
  

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('signout') }}">Déconnecter</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>        
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
     <!-- <img src="{{ URL::asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      -->
      <span class="brand-text font-weight-light">GPARC AT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/img/16.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->email }}</a>
          <a href="#" class="d-block">{{ Auth::user()->matricule }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau De Bord
              </p>
            </a>
          </li>

          <!--******************USER*******************-->

          @if(Auth::user()->role_as==0)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Demandes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{url('DemandeSansChau')}}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                  <p>Demande Véhicule De Service Sans Chauffeur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('DemandeAvecChau')}}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                  <p>Demande Véhicule De Service Avec Chauffeur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('demande_de_dotation_en_carburants')}}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                  <p>Demande Dotation En Carburant</p>
                </a>
              </li>
           </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Consulter Information
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{url('DemandeSansChau')}}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                  <p>Controle Technique</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('DemandeAvecChau')}}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                  <p>Etat De Véhicule</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('demande_de_dotation_en_carburants')}}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                  <p>Consommation Du Carburant</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('demande_de_dotation_en_carburants')}}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                  <p>Entretien</p>
                </a>
              </li>
           </ul>
          </li>

          <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compteur Véhicule</p>
                </a>
              </li>
          </li>
          @endif 
          
<!--******************ADMIN*******************-->

          @if(Auth::user()->role_as==1)
          <li class="nav-item">
                <a href="{{url('employes')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gérer Employés</p>
                </a>
              </li>
          </li>

          <li class="nav-item">
                <a href="{{url('users')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gérer Privilège</p>
                </a>
              </li>
          </li>
          @endif 
          </li>
          
<!--******************GESTIONNAIRE*******************-->

          @if(Auth::user()->role_as==2)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Gérer Demande <ul> Véhicule</ul><i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{url('GesDemandeSansChau')}}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                  <p>Demande Véhicule De Service Sans Chauffeur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('GesDemandeAvecChau')}}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                  <p>Demande véhicule de service avec chauffeur</p>
                </a>
              </li>
           </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Gérer Consomation <ul> Du Carburant</ul><i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('GesDotation_en_carburants')}}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                  <p>Demande Dotation <ul>En Carburant</ul></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('RecuBonDotation')}}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                  <p>Reçu De Bon <ul>En Carburant</ul></p>
                </a>
              </li>
           </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Gérer Entretien<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('demande_de_dotation_en_carburants')}}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                  <p>Vignette</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('reçu_bon_dotation_carburants')}}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                  <p>Entretien Périodique</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('reçu_bon_dotation_carburants')}}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                  <p>Controle Technique</p>
                </a>
              </li><li class="nav-item">
                <a href="{{url('reçu_bon_dotation_carburants')}}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                  <p>Assurance</p>
                </a>
              </li>
           </ul>
          </li>

          <li class="nav-item">
                <a href="{{url('voitures')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gérer Opération <ul>De Maintenance</ul></p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{url('voitures')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gérer Véhicule</p>
                </a>
              </li>
              @endif 
          </li>   
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')  
  </div>
</div> 
<!-- ./wrapper -->
@endguest
<!-- jQuery -->
<script src="{{ URL::asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ URL::asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>$.widget.bridge('uibutton', $.ui.button)</script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ URL::asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ URL::asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ URL::asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ URL::asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ URL::asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ URL::asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ URL::asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ URL::asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ URL::asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('dist/js/pages/dashboard.js') }}"></script>
</body>
</html>