<!doctype html>
<html lang="fr">
    <head>
        <title>Mangas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, intial-scale=1.0">
        {!! Html::style('assets/css/bootstrap.css') !!}
        {!! Html::style('assets/css/mangas.css') !!}
        {!! Html::style('assets/css/bootstrap.css') !!}
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class='container'>
            <nav class='navbar navbar-default navbar-fixed-top' role='navigation'>
                <div class='container-field'>
                    <div class='container-header'>
                        <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#navbar-collapse-target'>
                            <span class='sr-only'>Toggle navigation</span>
                            <span class='icon-bar'></span>
                            <span class='icon-bar'></span>
                            <span class='icon-bar+ bvn'></span>
                        </button>
                        <a class='navbar-brand' href='{{ url('/') }}'>Mes mangas</a>

                    </div>
                    @if (Session::get('id') == 0)
                    <ul class="nav navbar-nav">
                        <li><a href='{{ url('/listerMangas') }}' date-toggle='collapse' data-target='.navbar-collapse.in'>Nos produits</a></li>
                        
                        <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Nos produits <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Hommes</a></li>
                            <li><a href="#">Femmes</a></li>
                            <li><a href="#">Enfants</a></li>
                        </ul>
                    </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">                             
                        <li><a href="{{url('/getLogin')}}" data-toggle="collapse" data-target=".navbar-collapse.in">Se connecter</a></li>
                    </ul>
                    @endif
                    @if (Session::get('id') > 0)
                    <div class='collapse navbar-collapse' id='navbar-collapse-target'>
                        <ul class='nav navbar-nav'>
                            <li><a href='{{ url('/listerMangas') }}' date-toggle='collapse' data-target='.navbar-collapse.in'>Nos produits</a></li>
                            <li><a href='{{ url('/listerMangasGenre') }}' date-toggle='collapse' data-target='.navbar-collapse.in'>Mangas par genre</a></li>
                            <li><a href='{{ url('/ajouterMangas') }}' date-toggle='collapse' data-target='.navbar-collapse.in'>Ajouter</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">                             
                            <li><a href="{{url('/getLogout')}}" data-toggle="collapse" data-target=".navbar-collapse.in">Se déconnecter</a></li>
                        </ul> 
                    </div>
                    @endif
                </div>
            </nav>
        </div>

        <div class="container">
            @yield('content')
        </div>
        {!! Html::script('assets/js/bootstrap.min.js') !!}
        {!! Html::script('assets/js/jquery-2-1-3.min.js') !!}
        {!! Html::script('assets/js/ui-bootstrap-tpls.min.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
    </body>
</html>
