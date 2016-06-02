<!DOCTYPE html>
<html lang="en">
<head>
    <title> @yield('title', 'Tandas') </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    {{--<link rel="stylesheet" href=" {{ asset('css/jquery-ui.min.css') }} ">--}}
    <link rel="stylesheet" href=" {{ asset('css/font-awesome.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/animate.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/all.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/main.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/style-responsive.css') }}">
    {{--<link type="text/css" rel="stylesheet" href=" {{ asset('css/zabuto_calendar.min.css')}}">--}}
    {{--<link type="text/css" rel="stylesheet" href=" {{ asset('css/pace.css') }} ">--}}
    {{--<link type="text/css" rel="stylesheet" href=" {{ asset('css/jquery.news-ticker.css') }} ">--}}

    {{--SWEET ALERT LINK ------>>>>>--}}
    <link rel="stylesheet" href=" {{ asset('css/sweetalert.css') }} ">
    {{--DYNATABLE LINK---------------->>--}}
    <link rel="stylesheet" href=" {{ asset('css/dynatable.css') }} ">
    @yield('styles')
</head>
<body>
<div>
    <!--BEGIN TOPBAR-->
    @include('layouts.top-bar')
    <!--END TOPBAR-->

    <div id="wrapper">
        <!--BEGIN SIDEBAR MENU-->
        @include('layouts.menu')
        <!--END SIDEBAR MENU-->

        <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper">
            <!--BEGIN TITLE & BREADCRUMB PAGE-->
            @include('layouts.page-title')
            <!--END TITLE & BREADCRUMB PAGE-->

            <!--BEGIN CONTENT-->
            <div class="page-content">
                @yield('content')
            </div>

            <!--END CONTENT-->

            <!--BEGIN FOOTER-->
            @include('layouts.footer')
            <!--END FOOTER-->
        </div>
        <!--END PAGE WRAPPER-->
    </div>
</div>
<script src="{{ asset( 'js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset( 'js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset( 'js/jquery-ui.js') }}"></script>
<script src="{{ asset( 'js/bootstrap.min.js') }}"></script>
<script src="{{ asset( 'js/bootstrap-hover-dropdown.js') }}"></script>
{{--<script src="{{ asset( 'js/html5shiv.js') }}"></script>--}}
<script src="{{ asset( 'js/respond.min.js') }}"></script>
<script src="{{ asset( 'js/jquery.metisMenu.js') }}"></script>
<script src="{{ asset( 'js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset( 'js/jquery.cookie.js') }}"></script>
<script src="{{ asset( 'js/icheck.min.js') }}"></script>
<script src="{{ asset( 'js/custom.min.js') }}"></script>
{{--<script src="{{ asset( 'js/jquery.news-ticker.js') }}"></script>--}}
<script src="{{ asset( 'js/jquery.menu.js') }}"></script>
{{--<script src="{{ asset( 'js/pace.min.js') }}"></script>--}}
{{--<script src="{{ asset( 'js/holder.js') }}"></script>--}}
{{--<script src="{{ asset( 'js/responsive-tabs.js') }}"></script>--}}
{{--<script src="{{ asset( 'js/jquery.flot.js') }}"></script>--}}
{{--<script src="{{ asset( 'js/jquery.flot.categories.js') }}"></script>--}}
{{--<script src="{{ asset( 'js/jquery.flot.pie.js') }}"></script>--}}
{{--<script src="{{ asset( 'js/jquery.flot.tooltip.js') }}"></script>--}}
{{--<script src="{{ asset( 'js/jquery.flot.resize.js') }}"></script>--}}
{{--<script src="{{ asset( 'js/jquery.flot.fillbetween.js') }}"></script>--}}
{{--<script src="{{ asset( 'js/jquery.flot.stack.js') }}"></script>--}}
{{--<script src="{{ asset( 'js/jquery.flot.spline.js') }}"></script>--}}
{{--<script src="{{ asset( 'js/zabuto_calendar.min.js') }}"></script>--}}
{{--<script src="{{ asset( 'js/index.js') }}"></script>--}}
<!--LOADING SCRIPTS FOR CHARTS-->
{{--<script src="{{ asset( 'js/highcharts.js') }}"></script>--}}
{{--<script src="{{ asset( 'js/data.js') }}"></script>--}}
{{--<script src="{{ asset( 'js/drilldown.js') }}"></script>--}}
{{--<script src="{{ asset( 'js/exporting.js') }}"></script>--}}
{{--<script src="{{ asset( 'js/highcharts-more.js') }}"></script>--}}
{{--<script src="{{ asset( 'js/charts-highchart-pie.js') }}"></script>--}}
{{--<script src="{{ asset( 'js/charts-highchart-more.js') }}"></script>--}}
<!--CORE JAVASCRIPT-->
<script src="{{ asset( 'js/main.js') }}"></script>
{{--SWEET ALERT SCRIPT ------>>>>>--}}
<script src=" {{ asset( 'js/sweetalert.min.js' ) }} "></script>
{{--DYNATABLE SCRIPT--------->--}}
<script src=" {{ asset( 'js/dynatable.js' ) }} "></script>


<script>
    $(function(){
        $('.dynatable').dynatable();

        $('.btn-delete').on('click', function (event) {
            event.preventDefault()
            var href = $(this).attr('href');
            var name = $(this).data('name');
            console.log(href),
            swal({
                title: "Estas seguro?",
//                text: "No podras recuperar el ",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Si, borrar: " + name + "!!",
                closeOnConfirm: false },
            function(){
                window.location=href;
            });
        });
    });
</script>
</body>
</html>
