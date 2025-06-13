<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>

        <!--====== Required meta tags ======-->

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--====== Title ======-->

        @yield('title')

        <link rel="shortcut icon" href="{!!asset('/images/IRA.png')!!}" type="image/x-icon">

        <link rel="stylesheet" href="{!!asset('/css/bootstrap.min.css')!!}" media="screen">
        <link rel="stylesheet" href="{!!asset('/css/slicknav.min.css')!!}">
        <link rel="stylesheet" href="{!!asset('/css/swiper-bundle.min.css')!!}">
        <link rel="stylesheet" href="{!!asset('/css/all.min.css')!!}" media="screen">
        <link rel="stylesheet" href="{!!asset('/css/animate.css')!!}">
        <link rel="stylesheet" href="{!!asset('/css/magnific-popup.css')!!}">
        <link rel="stylesheet" href="{!!asset('/css/mousecursor.css')!!}">
        <link rel="stylesheet" href="{!!asset('/css/custom.css')!!}" media="screen">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Onest:wght@100..900&display=swap" rel="stylesheet">

        <style>
            .popup1 {
                position: fixed;
                top: 50px;
                right: -200px;
                width: 150px; 
                z-index: 9999;
                opacity: 0;
                transition: transform 0.6s ease-in-out, right 0.6s ease-in-out, opacity 0.3s ease-in-out;
            }
        
            .popup1 img {
                width: 100%;
                border-radius: 15px;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
                border: 3px solid #FFD700; 
            }
        
            .popup1.show {
                right: 20px;
                opacity: 1;
                animation: bounceRotateIn 0.8s ease-out;
            }
        
            .popup1.hide {
                transform: rotateY(180deg) scale(0.5);
                opacity: 0;
            }
        
            @keyframes bounceRotateIn {
                0% { transform: scale(0) rotate(-30deg); opacity: 0; }
                50% { transform: scale(1.2) rotate(10deg); opacity: 1; }
                100% { transform: scale(1) rotate(0deg); }
            }
        </style>


        @yield('styles')

    </head>
    <body>


        <!--====== Start Header ======-->
        @include('layouts.site.header')
        <!--====== End Header ======-->

        @yield('content')

        <!-- Popup Image -->
        <div id="popup1-image" class="popup1">
            <img src="images/toutirabien.jpeg" alt="Tout ira bien">
        </div>


        <!--====== Start Footer ======-->
        @include('layouts.site.footer')
        <!--====== End Footer ======-->


        <script src="{!!asset('/js/jquery-3.7.1.min.js')!!}"></script>
        <script src="{!!asset('/js/bootstrap.min.js')!!}"></script>
        <script src="{!!asset('/js/validator.min.js')!!}"></script>
        <script src="{!!asset('/js/jquery.slicknav.js')!!}"></script>
        <script src="{!!asset('/js/swiper-bundle.min.js')!!}"></script>
        <script src="{!!asset('/js/jquery.waypoints.min.js')!!}"></script>
        <script src="{!!asset('/js/jquery.counterup.min.js')!!}"></script>
        <script src="{!!asset('/js/isotope.min.js')!!}"></script>
        <script src="{!!asset('/js/jquery.magnific-popup.min.js')!!}"></script>
        <script src="{!!asset('/js/SmoothScroll.js')!!}"></script>
        <script src="{!!asset('/js/parallaxie.js')!!}"></script>
        <script src="{!!asset('/js/gsap.min.js')!!}"></script>
        <script src="{!!asset('/js/magiccursor.js')!!}"></script>
        <script src="{!!asset('/js/SplitText.js')!!}"></script>
        <script src="{!!asset('/js/ScrollTrigger.min.js')!!}"></script>
        <script src="{!!asset('/js/jquery.mb.YTPlayer.min.js')!!}"></script>
        <script src="{!!asset('/js/wow.min.js')!!}"></script>
        <script src="{!!asset('/js/function.js')!!}"></script>



        @yield('scripts')

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const popup = document.getElementById("popup1-image");
                let displayCount = 0;
                const maxDisplays = 1;
        
                function showPopup() {
                    if (displayCount < maxDisplays) {
                        popup.classList.add("show");
                        popup.classList.remove("hide");
        
                        setTimeout(() => {
                            popup.classList.add("hide");
                            popup.classList.remove("show");
        
                            displayCount++;
                            if (displayCount < maxDisplays) {
                                setTimeout(showPopup, 5000);
                            }
                        }, 2000);
                    }
                }
        
                setTimeout(showPopup, 500);
            });
        </script>


    </body>
</html>
