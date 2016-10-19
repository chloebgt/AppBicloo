<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" href="{{asset('img/bicloo.jpg')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bicloo.css')}}">

        <title>Bicloo Nantes | Infos en temps réel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
    </head>
    <body>
        <header>
            <a href="{{url('/')}}"><img  src="{{asset('img/bicloo.jpg')}}" class="img-responsive" alt="logo_bicloo" title="logo Bicloo"></a>

            <div class="row center-block">
                <h1 class=""> Stations Bicloo</h1>
                <h2>Retrouvez toutes les infos d'une station en temps réel</h2>
            </div>
        </header>

    @yield('contenu')

        <footer class="container-fluide">
            <p class="text-center">Octobre 2016 © powered by <a href="http://www.chloebouget.com">cbt</a></p>
        </footer>

        <!-- LOODING SCRIPTS -->
        <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUB424UEOO7T_HKTcStH9QYHxlZMF_tf8">
        </script>
        <script src="{{asset('js/main2.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/appbicloo.js')}}" type="text/javascript"></script>
    </body>
</html>

