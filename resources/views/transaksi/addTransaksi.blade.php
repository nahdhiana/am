<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BGES TELKOM - TAMBAH TRANSAKSI</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
<!--[if lt IE 9]>
{!! Html::script('js/respond.min.js') !!}
{!! Html::script('js/html5shiv.js') !!}
        <!-- Place favicon.ico in the root directory -->
{!! Html::style('https://fonts.googleapis.com/css?family=Lato:400,300,700') !!}
{!! Html::style('css/normalize.css') !!}
{!! Html::style('css/main.css') !!}
{!! Html::style('css/bootstrap.min.css') !!}
{!! Html::style('css/font-awesome.min.css') !!}
{!! Html::style('css/owl.carousel.css') !!}
{!! Html::style('css/responsive.css') !!}
{!! Html::style('css/style.css') !!}

<!-- data table-->
    {!! Html::style('css/jquery.dataTables.css') !!}
    {!! Html::style('css/dataTables.bootstrap.css') !!}
    {!! Html::script('js/jquery.js') !!}
    {!! Html::script('js/jquery.dataTables.min.js') !!}
    {!! Html::script('js/dataTables.bootstrap.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}


    {{--{!! Html::style('css/select2.min.css') !!}--}}
    {{--{!! Html::script('js/select2.min.js') !!}--}}
    {!! Html::style('css/selectize.bootstrap3.css') !!}
    {!! Html::style('css/selectize.css') !!}
    {!! Html::script('js/selectize.min.js') !!}


</head>
<body>
<!-- start preloader -->
<div id="loader-wrapper">
    <div class="logo"></div>
    <div id="loader">
    </div>
</div>
<!-- end preloader -->
<!--[if lt IE 8]>
<![endif]-->
<!-- Start Header Section -->
<header class="main_menu_sec navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="lft_hd">
                    {!! Html::image('img/logo.png') !!}
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="rgt_hd">
                    <div class="main_menu">
                        <nav id="nav_menu">
                            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar"
                                    data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div id="navbar">
                                <ul>
                                    @if (Auth::guest())
                                        <li><a class="page-scroll" href="{{url('/')}}">Home</a></li>
                                        <li><a href="#">AM <i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li>
                                                    <a class="page-scroll" href="{{url('/am')}}">Detail AM </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pelanggan<i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li>
                                                    <a class="page-scroll" href="{{url('/pelanggan')}}">Daftar
                                                        Pelanggan</a>
                                                </li>
                                                {{--<li><a href="{{route('pelanggan.create')}}">Tambah Pelanggan</a></li>--}}
                                            </ul>
                                        </li>
                                        <li><a href="/#">Transaksi<i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li>
                                                    <a class="page-scroll" href="{{url('/#pr_sec')}}">Tabel
                                                        Transaksi</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="page-scroll" href="{{url('/#abt_sec')}}">Statistik</a></li>
                                        <li><a href="{{ url('/login') }}">Login</a></li>
                                    @else
                                        <li><a class="page-scroll" href="{{url('/')}}">Home</a></li>
                                        <li><a href="#">AM <i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li><a class="page-scroll" href="{{route('am.create')}}">Tambah AM</a>
                                                </li>
                                                <li><a class="page-scroll" href="{{url('/am')}}">Detail AM</a>
                                                </li>
                                            </ul>
                                        <li><a href="#">Pelanggan<i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li>
                                                    <a class="page-scroll" href="{{url('/pelanggan')}}">Daftar
                                                        Pelanggan</a>
                                                </li>
                                                <li>
                                                    <a class="page-scroll" href="{{route('pelanggan.create')}}">Tambah
                                                        Pelanggan</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Transaksi<i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li>
                                                    <a class="page-scroll" href="{{url('/#pr_sec')}}">Tabel
                                                        Transaksi</a>
                                                </li>
                                                <li>
                                                    <a class="page-scroll" href="{{route('transaksi.create')}}">Buat
                                                        Transaksi</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="page-scroll" href="{{url('/#abt_sec')}}">Statistik</a></li>
                                        <li><a href="#">Layanan<i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li>
                                                    <a class="page-scroll" href="{{route('layanan.create')}}">Tambah
                                                        Layanan</a>
                                                </li>
                                                <li>
                                                    <a class="page-scroll" href="{{route('layanan.index')}}">List
                                                        Layanan</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                               aria-expanded="false">
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="{{ url('/logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        Logout
                                                    </a>
                                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                                          style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Section -->
<!-- start slider Section -->


<!-- start about Section -->
<section id="abt_sec">
    <div class="container">
        <div class="row" style="margin-top: 50px">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>TAMBAH TRANSAKSI</h1>
                </div>
                <div class="title_sec">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="title_sec col-lg-4 col-md-4 col-sm-12">
                <div id="cnt_form">
                    {!! Form::open(['url'=>route('transaksi.store'), 'class'=>'contact']) !!}
                    @if (session()->has('flash_notification.message'))
                        <div class="alert alert-{{ session()->get('flash_notification.level') }}">
                            <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                            {!! session()->get('flash_notification.message') !!}
                        </div>
                    @endif


                    <div class="form-group">
                            {!! $errors->first('am', '<p class="help-block">Data Nama AM Harus Diisi</p>') !!}
                        <select id="ams" name="am" class="form-control name-field"
                                placeholder="Nama AM">
                            <option></option>
                            @foreach($am as $data2)
                                <option value="{!! $data2->id !!}"> {!! $data2->nama_Am !!} </option>
                            @endforeach
                        </select>
                        <script>
                            $('#ams').selectize({
                                sortField: 'text'
                            });
                        </script>
                    </div>


                    <div class="form-group">
                            {!! $errors->first('nama', '<p class="help-block">Data Nama Pelanggan Harus Diisi</p>') !!}
                        <select id="pelanggan" name="nama" class="form-control name-field"
                                placeholder="Nama Pelanggan">
                            <option></option>
                            @foreach($pelanggan as $data)
                                <option value="{!! $data->id !!}">{!! $data->nama_Pelanggan !!}</option>
                            @endforeach
                        </select>
                        <script>
                            $('#pelanggan').selectize({
                                sortField: 'text'
                            });
                        </script>
                    </div>

                    <div class="form-group">
                        <select name="jl" class="form-control name-field"
                                placeholder="Jenis Layanan" value="{{old('jl')}}" required="required">
                            {!! $errors->first('cp', '<p class="help-block">Pilih Jenis Layanan</p>') !!}
                            <option value="">Jenis Layanan</option>
                            @foreach($layanan as $data1)
                                <option value="{!! $data1->id !!}">{!! $data1->nama_Produk !!}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <select id="" type="text" name="status" class="form-control name-field"
                                value="{{old('status')}}" required="required">
                            {!! $errors->first('cp', '<p class="help-block">Data Wajib Dipilih!</p>') !!}
                            <option value="">Status</option>
                            <option value="Visiting">Visiting</option>
                            <option value="Proposal">Proposal</option>
                            <option value="Follow Up">Follow Up</option>
                            <option value="Negosiasi">Negosiasi</option>
                            <option value="Deal Kontrak">Deal Kontrak</option>
                            <option value="In Provisioning">In Provisioning</option>
                            <option value="Prov Comp">Prov Comp</option>
                            <option value="BASO Created">BASO Created</option>
                            <option value="Bill Comp">Bill Comp</option>
                            <option value="Cancelled">Cancelled</option>
                            <option value="Lose">Lose</option>
                        </select>
                    </div>

                    <div class="form-group">
                        {!! $errors->first('nilai', '<p class="help-block">Maksimal 9 Digit</p>') !!}
                        <input type="text" name="nilai" maxlength="9" class="form-control name-field"
                               required="required"
                               placeholder="Nilai" value="{{old('nilai')}}">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact us  Section -->
<!-- start footer Section -->
<footer id="ft_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="copy_right">
                    <li>&copy;PKL MAHO 2016</li>
                    <li>developed by Razak, Dhian, & Dewangga</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Section -->
<!-- End footer Section -->
{{--<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>--}}
{{--<script src="js/vendor/jquery-1.11.2.min.js"></script>--}}
{!! Html::script('http://code.jquery.com/jquery-1.9.1.min.js') !!}
{{--{!! Html::script('js/vendor/jquery-1.11.3.min.js') !!}--}}
{!! Html::script('js/isotope.pkgd.min.js') !!}
{{--<script src="js/isotope.pkgd.min.js"></script>--}}
{{--<script src="js/bootstrap.min.js"></script>--}}
{{--<script src="js/jquery-ui.js"></script>--}}
{{--<script src="js/appear.js"></script>--}}
{{--<script src="js/jquery.counterup.min.js"></script>--}}
{{--{!! Html::script('js/bootstrap.min.js') !!}--}}
{!! Html::script('js/jquery-ui.js') !!}
{!! Html::script('js/appear.js') !!}
{!! Html::script('js/jquery.counterup.min.js') !!}
{!! Html::script('js/waypoints.min.js') !!}
{!! Html::script('js/owl.carousel.min.js') !!}
{!! Html::script('js/showHide.js') !!}
{!! Html::script('js/jquery.nicescroll.min.js') !!}
{!! Html::script('js/jquery.easing.min.js') !!}
{!! Html::script('js/scrolling-nav.js') !!}
{!! Html::script('js/plugins.js') !!}
{{--{!! Html::script('https://maps.googleapis.com/maps/api/js') !!}--}}
{{--<script src="js/waypoints.min.js"></script>--}}
{{--<script src="js/owl.carousel.min.js"></script>--}}
{{--<script src="js/showHide.js"></script>--}}
{{--<script src="js/jquery.nicescroll.min.js"></script>--}}
{{--<script src="js/jquery.easing.min.js"></script>--}}
{{--<script src="js/scrolling-nav.js"></script>--}}
{{--<script src="js/plugins.js"></script>--}}
<!-- Google Map js -->
{{--<script src="https://maps.googleapis.com/maps/api/js"></script>--}}
<script>
    function initialize() {
        var mapOptions = {
            zoom: 14,
            scrollwheel: false,
            center: new google.maps.LatLng(41.092586000000000000, -75.592688599999970000)
        };
        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation: google.maps.Animation.BOUNCE,
            icon: 'img/map-marker.png',
            map: map
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
{{--<script src="js/main.js"></script>--}}
{!! Html::script('js/main.js') !!}
{{--<script src="showHide.js" type="text/javascript"></script>--}}
{!! Html::script('showHide.js') !!}

<script type="text/javascript">

    $(document).ready(function () {
//        $('#js-selectize').selectize({
//            sortField: 'text'
//        });
//        $('#js-selectize').selectize({
//            create: true,
//            sortField: 'text'
//        });
        $('.show_hide').showHide({
            speed: 1000,  // speed you want the toggle to happen
            easing: '',  // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
            changeText: 1, // if you dont want the button text to change, set this to 0
            showText: 'View',// the button text to show when a div is closed
            hideText: 'Close' // the button text to show when a div is open

        });


    });

</script>


<script>
    jQuery(document).ready(function ($) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>

<script>

    //Hide Overflow of Body on DOM Ready //
    $(document).ready(function () {
        $("body").css("overflow", "hidden");
    });

    // Show Overflow of Body when Everything has Loaded
    $(window).load(function () {
        $("body").css("overflow", "visible");
        var nice = $('html').niceScroll({
            cursorborder: "5",
            cursorcolor: "#00AFF0",
            cursorwidth: "3px",
            boxzoom: true,
            autohidemode: true
        });

    });
</script>
{{--<script>--}}
{{--$(document).ready(function () {--}}
{{--$('#html').DataTable({--}}
{{--"order": [[3, "desc"]]--}}
{{--});--}}
{{--});--}}
{{--</script>--}}
</body>
</html>