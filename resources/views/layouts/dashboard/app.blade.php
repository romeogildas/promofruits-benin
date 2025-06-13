<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    	<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--favicon-->
        <link rel="icon" href="{!!asset('/dashboard/assets/images/favicon-32x32.png')!!}" type="image/png">

        <!--plugins-->
        <link href="{!!asset('/dashboard/plugins/simplebar/css/simplebar.css')!!}" rel="stylesheet">
        <link href="{!!asset('/dashboard/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')!!}" rel="stylesheet">
        <link href="{!!asset('/dashboard/assets/plugins/simplebar/css/simplebar.css')!!}" rel="stylesheet">
        <link href="{!!asset('/dashboard/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')!!}" rel="stylesheet">
        <link href="{!!asset('/dashboard/assets/plugins/metismenu/css/metisMenu.min.css')!!}" rel="stylesheet">

        <link href="{!!asset('/dashboard/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')!!}" rel="stylesheet">

        
        <link href="{!!asset('/dashboard/assets/css/pace.min.css')!!}" rel="stylesheet">
        <script src="{!!asset('/dashboard/assets/js/pace.min.js')!!}"></script>
        

        <!-- Bootstrap CSS -->
        <link href="{!!asset('/dashboard/assets/css/bootstrap.min.css')!!}" rel="stylesheet">
        <link href="{!!asset('/dashboard/assets/css/bootstrap-extended.css')!!}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link href="{!!asset('/dashboard/assets/css/app.css')!!}" rel="stylesheet">
        <link href="{!!asset('/dashboard/assets/css/icons.css')!!}" rel="stylesheet">

        <!-- Theme Style CSS -->
        <link href="{!!asset('/dashboard/assets/css/dark-theme.css')!!}" rel="stylesheet">
        <link href="{!!asset('/dashboard/assets/css/semi-dark.css')!!}" rel="stylesheet">
        <link href="{!!asset('/dashboard/assets/css/header-colors.css')!!}" rel="stylesheet">

    


        @yield('styles')
    
    </head>
    <body>
        <div class="wrapper">

            <!--====== Start sidebar ======-->
            @include('layouts.dashboard.sidebar')
            <!--====== End sidebar ======-->

            <!--====== Start Header ======-->
            @include('layouts.dashboard.header')
            <!--====== End Header ======-->

            @yield('content')

            <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>

            <!--====== Start footer ======-->
            @include('layouts.dashboard.footer')
            <!--====== End footer ======-->
        
        </div>
        
        <!-- Bootstrap JS -->
        <script src="{!!asset('/dashboard/assets/js/bootstrap.bundle.min.js')!!}"></script>
        <script src="{!!asset('/dashboard/assets/js/jquery.min.js')!!}"></script>

        <!-- fichiers Quill CSS et JS -->
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        

        <!--plugins-->
        <script src="{!!asset('/dashboard/assets/plugins/simplebar/js/simplebar.min.js')!!}"></script>
        <script src="{!!asset('/dashboard/assets/plugins/metismenu/js/metisMenu.min.js')!!}"></script>
        <script src="{!!asset('/dashboard/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')!!}"></script>
        <script src="{!!asset('/dashboard/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')!!}"></script>
        <script src="{!!asset('/dashboard/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')!!}"></script>
        <script src="{!!asset('/dashboard/assets/plugins/chartjs/js/chart.js')!!}"></script>
        <script src="{!!asset('/dashboard/assets/plugins/highcharts/js/export-data.js')!!}"></script>
        <script src="{!!asset('/dashboard/assets/plugins/highcharts/js/accessibility.js')!!}"></script>
        <script src="{!!asset('/dashboard/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')!!}"></script>
        <script src="{!!asset('/dashboard/assets/plugins/sparkline-charts/jquery.sparkline.min.js')!!}"></script>

        <script src="{!!asset('/dashboard/assets/plugins/datatable/js/jquery.dataTables.min.js')!!}"></script>
        <script src="{!!asset('/dashboard/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')!!}"></script>

        <!--app JS-->
        <script src="{!!asset('/dashboard/assets/js/index.js')!!}"></script>
        <script src="{!!asset('/dashboard/assets/js/app.js')!!}"></script>
        <script src="{!!asset('/dashboard/assets/js/widgets.js')!!}"></script>
        <script src="{!!asset('/dashboard/assets/js/index3.js')!!}"></script>

        <script>
            new PerfectScrollbar('.dashboard-top-countries');
        </script>

        <script>
            $(document).ready(function() {
                var table = $('#example2').DataTable( {
                    lengthChange: false,
                    buttons: [ 'copy', 'excel', 'print']
                } );
                
                table.buttons().container()
                    .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
            } );
        </script>

        <script>
            $(document).ready(function() {
                var table = $('#example').DataTable( {
                    lengthChange: false
                } );
            } );
        </script>
        

        <script>
            var quill = new Quill('#editor', {
                theme: 'snow',
                modules: {
                toolbar: [
                    ['bold', 'italic', 'underline'],        
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                    [{ 'header': [1, 2, 3, false] }],        
                ]
                }
            });
        </script>
        
    </body>


</html>