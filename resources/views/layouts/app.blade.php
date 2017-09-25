<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pajak Reklame</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
        <link type="text/css" href="{{asset('css/custom-theme/jquery-ui-1.10.0.custom.css')}}" rel="stylesheet" />
        <link type="text/css" href="{{asset('/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/sweetalert.css')}}">
        <!-- Script -->
        <script type="text/javascript" src="{{asset('/js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{asset('/js/jquery.min.js')}}"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="background-color: #337ab7">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <font color="white">Pajak Reklame</font>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                     <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('pajak.index') }}"><font color="white">Entry Data</font></a></li>
                        <li><a href="/daftar"><font color="white">Daftar Reklame</font></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><font color="white">Master <span class="caret"></span></font></a>
                            <ul class="dropdown-menu">
                              <li><a href="{{route('jenis.index')}}">Jenis Reklame</a></li>
                              <li><a href="{{route('sudut.index')}}">Sudut pandang</a></li>
                              <li><a href="{{route('ruang.index')}}">Fungsi Ruang</a></li>
                              <li><a href="{{route('jalan.index')}}">Fungsi Jalan</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        
                    </ul>
                </div>
            </div>
        </nav>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script> --}}
    <script type="text/javascript" src="{{asset('/js/sweetalert.min.js')}}"></script>
    <script type="text/javascript">
    $(document).on('click', '#delete-btn', function(e){
        e.preventDefault();
        var self = $(this);
        swal({
                    title: "Kamu yakin akan menghapus?",
                    text: "Data tidak akan bisa kembali!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Hapus !",
                    closeOnConfirm: true
                },
                function(isConfirm){
                    if(isConfirm){
                        swal("Tunggu!","Sedang Menghapus", "info");
                        setTimeout(function() {
                            self.parents(".delete").submit();
                        }, 1000);
                    }
                    else{
                        swal("Batal","Tidak jadi menghapus", "error");
                    }
                });
    });
    </script>
    @include('sweet::alert')
    
</body>
</html>
