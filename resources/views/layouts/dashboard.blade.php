<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Iq Valuación | Plataforma</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="/dist/css/AdminLTE.css">
  <link rel="stylesheet" href="/dist/css/skins/_all-skins.css">
  {{-- <link rel="stylesheet" href="/bower_components/morris.js/morris.css"> --}}
  <link rel="stylesheet" href="/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <nav class="navbar navbar-static-top">

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ (auth()->user()->user_profile) ? auth()->user()->user_profile:'/images/profile-empty.png' }}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{ Auth::user()->name }} </span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="{{ (auth()->user()->user_profile) ? auth()->user()->user_profile:'/images/profile-empty.png' }}" class="user-image" alt="User Image">
                  <p>{{ Auth::user()->name }}</p>
                </li>

                <li class="user-footer">
                  <div class="pull-left">
                    <a href="/dashboard/usuarios/{{auth()->user()->id}}" class="btn btn-default btn-flat">Perfil</a>
                  </div>
                  <div class="pull-right">
                    <a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                      Cerrar Sesión
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>

                  </div>
                </li>
              </ul>
            </li>

          </ul>
        </div>
      </nav>
    </header>


    <div class="content-wrapper">
      <section class="content-header">
        @if ( session('success') )
        <div class="alert alert-success">{{ session('success') }}</div>
        @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @elseif(session('mensaje'))
        <div class="alert alert-warning">{{ session('mensaje') }}</div>
        @endif

        @error('error')
        <div class="alert alert-danger">
            <strong>{{ $message }}</strong>
          </div>
        @enderror
      </section>

      <section class="content">
        <main class="py-4">
          @yield('content')
        </main>
      </section>

    </div>


    <footer class="main-footer">
      <div class="pull-right hidden-xs">
      </div>
      <strong>Copyright &copy; 2022 <a>IQ Valuación</a>.</strong>
    </footer>
  </div>

  <script src="/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="/bower_components/raphael/raphael.min.js"></script>
  {{-- <script src="/bower_components/morris.js/morris.min.js"></script> --}}
  <script src="/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <script src="/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <script src="/bower_components/moment/min/moment.min.js"></script>
  <script src="/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <script src="/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="/bower_components/fastclick/lib/fastclick.js"></script>
  <script src="/dist/js/adminlte.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" charset="utf-8"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" charset="utf-8"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" charset="utf-8"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" charset="utf-8"></script>
  {{-- <script src="/dist/js/pages/dashboard.js"></script> --}}
  <script src="/dist/js/demo.js"></script>
</body>

</html>