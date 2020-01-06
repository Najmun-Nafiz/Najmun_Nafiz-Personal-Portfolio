<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
   {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    {{-- Backened project link are... --}}
     <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('back/favicon.ico')}}">
    <link rel="icon" href="{{asset('back/favicon.ico')}}" type="image/x-icon">
    <!-- Morris Charts CSS -->
    <link href="{{asset('back/vendors/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />
    <!-- Toggles CSS -->
    <link href="{{asset('back/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('back/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">

    {{-- <!-- Toastr CSS Setup -->
    <link href="{{asset('back/vendors/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css"> --}}
    
    <!-- Toastr CSS Setup -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Custom CSS -->
    <link href="{{asset('back/dist/css/style.css')}}" rel="stylesheet" type="text/css">
   {{--  Dashboard1.. --}}
    <!-- vector map CSS -->
    <link href="{{asset('back/vendors/vectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" type="text/css" />

    <!-- Data Table CSS -->
    <link href="{{asset('back/vendors/datatables.net-dt/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('back/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')}}" rel="stylesheet" type="text/css" />




   

</head>
<body>
    <div id="app">
         <!-- Preloader -->
        <div class="preloader-it">
            <div class="loader-pendulums"></div>
        </div>
        <!-- /Preloader -->
        
        <!-- HK Wrapper -->
   

            @if(Request::is('admin*'))
              @include('layouts.partial.topbar');
            @endif

            @if(Request::is('admin*'))
              @include('layouts.partial.sidebar');
            @endif
            
             @if(Request::is('admin*'))
              @include('layouts.partial.footer');
            @endif

             <main class="py-4">
                @yield('content')
            </main>

        <!-- /HK Wrapper -->

       



    {{-- project j-query are included... --}}

     <!-- jQuery -->
    <script src="{{asset('back/vendors/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('back/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('back/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{asset('back/dist/js/jquery.slimscroll.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{asset('back/dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{asset('back/dist/js/feather.min.js')}}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{asset('back/vendors/jquery-toggles/toggles.min.js')}}"></script>
    <script src="{{asset('back/dist/js/toggle-data.js')}}"></script>
    
    <!-- Counter Animation JavaScript -->
    <script src="{{asset('back/vendors/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('back/vendors/jquery.counterup/jquery.counterup.min.js')}}"></script>


    
    <!-- EChartJS JavaScript -->
    <script src="{{asset('back/vendors/echarts/dist/echarts-en.min.js')}}"></script>
    <!-- Owl JavaScript -->
    <script src="{{asset('back/vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <!-- Toastr JS -->
    <script src="{{asset('back/vendors/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>
     <!-- Toastr JS Setup -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Init JavaScript -->
    <script src="{{asset('back/dist/js/init.js')}}"></script>
    <script src="{{asset('back/dist/js/dashboard4-data.js')}}"></script>

    <!-- Easy pie chart JS -->
    <script src="{{asset('back/vendors/easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
    <!-- Sparkline JavaScript -->
    <script src="{{asset('back/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>   
    <!-- Morris Charts JavaScript -->
    <script src="{{asset('back/vendors/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('back/vendors/morris.js/morris.min.js')}}"></script>   
    <!-- EChartJS JavaScript -->
    <script src="{{asset('back/vendors/echarts/dist/echarts-en.min.js')}}"></script>    
    <!-- Peity JavaScript -->
    <script src="{{asset('back/vendors/peity/jquery.peity.min.js')}}"></script>
   

    <!-- Flot Charts JavaScript -->
    <script src="{{asset('back/vendors/flot/excanvas.min.js')}}"></script>
    <script src="{{asset('back/vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('back/vendors/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('back/vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('back/vendors/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('back/vendors/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('back/vendors/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('back/vendors/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>


    <!-- Vector Maps JavaScript -->
    <script src="{{asset('back/vendors/vectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{asset('back/vendors/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('back/dist/js/vectormap-data.js')}}"></script>


    <!-- Data Table JavaScript -->
    <script src="{{asset('back/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('back/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('back/vendors/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{asset('back/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('back/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('back/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('back/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('back/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('back/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('back/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('back/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('back/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('back/dist/js/dataTables-data.js')}}"></script>

    {!! Toastr::message() !!}

</body>
</html>
