<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> authentification </title>

        <!-- Favicon icon -->
        <link rel="icon" href="{!!asset('/auth/images/logo_mini.png')!!}">
        
        <!-- Style--> 
        <link rel="stylesheet" href="{!!asset('/auth/css/style.css')!!}">
        <link rel="stylesheet" href="{!!asset('/auth/vendor_components/bootstrap/dist/css/bootstrap.css')!!}">

        <link rel="stylesheet" href="{!!asset('/auth/icons/feather-icons/feather.min.css')!!}">
        <link rel="stylesheet" href="{!!asset('/auth/icons/themify-icons/themify-icons.css')!!}">
        <link rel="stylesheet" href="{!!asset('/auth/icons/Ionicons/css/ionicons.css')!!}">	

        @yield('styles') 
        
    </head>
    <body class="hold-transition theme-primary bg-img" style="background-image: url(../auth/bg/bg-2.jpg)">
    
        <main>
            @yield('content')
        </main>

    </body>
</html>
