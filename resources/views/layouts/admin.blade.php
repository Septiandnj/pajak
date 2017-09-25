<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Pajak Reklame</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('/assets/css/animate.min.css')}}" rel="stylesheet"/>

    <link rel="stylesheet" href="{{asset('/css/sweetalert.css')}}">
    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('/assets/css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('/assets/css/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="{{asset('/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('/assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

</head>

<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="{{asset('/assets/img/sidebar-5.jpg')}}">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/daftar" class="simple-text">
                    Pajak Reklame
                </a>
            </div>
            @yield('nav')
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                    <!-- left -->
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <!-- right -->
                        
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">@yield('title')</h4>
                                <p class="category"><a target="_blank" href=""></a></p>
                            </div>
                            <div>

                                @yield('content')
                                @yield('modal')
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</div>
</body>

    <!--   Core JS Files   -->
    <script src="{{asset('/assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
	<script src="{{asset('/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{asset('/assets/js/bootstrap-checkbox-radio-switch.js')}}"></script>

	<!--  Charts Plugin -->
	<script src="{{asset('/assets/js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('/assets/js/bootstrap-notify.js')}}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{asset('/assets/js/light-bootstrap-dashboard.js')}}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{asset('/assets/js/demo.js')}}"></script>

	
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

</html>
