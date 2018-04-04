<!DOCTYPE html>
<!--[if IE 8]>
<html lang="{{App::getLocale()}}" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="{{App::getLocale()}}" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{App::getLocale()}}">
<!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="UTF-8">
        <title>Home - InverstorCoin</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="Servicios escolares" name="description"/>
        <meta content="" name="author"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        {!! Html::style('/public/css/style.css') !!}
        
        <!-- END THEME LAYOUT STYLES -->

        <link rel="shortcut icon" type="image/x-icon" href="{!! URL::asset('public/img/favicon.ico') !!}">
        <link rel="icon" href="{!! URL::asset('public/img/favicon.ico') !!}" type="image/x-icon"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    </head>
    <!-- END HEAD -->
    <body>
        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#contenido">
                            <span class="sr-only"> Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.php" class="pull-left"><img src="public/img/logo.png" alt="Anastasia" class="img-responsive" id="logo"></a>                                          
                    </div>
                    <div class="collapse navbar-collapse" id="contenido">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" class="link-navbar">Iniciar Sesión</a></li>
                            <li><a href="#" class="link-navbar">Registrarse</a></li>                        
                            <li class="faa"><a href="#"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                            <li class="faa"><a href="#"><i class="fab fa-google-plus fa-2x"></i></a></li>
                            <li class="faa"><a href="#"><i class="far fa-envelope fa-2x"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <br><br><br><br>
            <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                <!--Indicadores-->
                <ul class="carousel-indicators">
                    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel1" data-slide-to="1" class=""></li>
                    <li data-target="#myCarousel1" data-slide-to="2" class=""></li>
                    <li data-target="#myCarousel1" data-slide-to="3" class=""></li>
                    <li data-target="#myCarousel1" data-slide-to="4" class=""></li>
                </ul>
                <div class="carousel-inner" role="listbox">
                    <!-- Imagen 1 -->
                    <div class="item active">
                        <center><img src="public/img/carousel/img1.jpg" alt="empresa"></center>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Titulo 1</h1>
                                <p id="nav-tex">Texto bla bla bla bla</p>
                                {{-- <p><a href="#" class="btn btn-lg btn-info" role="button">Ver Mas</a></p> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Imagen 2 -->
                    <div class="item">
                        <center><img src="public/img/carousel/img2.jpg" alt=""></center>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Titulo 2</h1>
                                <p id="nav-tex">Texto bla bla bla bla</p>
                                {{-- <p><a href="#" class="btn btn-lg btn-info" role="button">Ver Mas</a></p> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Imagen 3 -->
                    <div class="item">
                        <center><img src="public/img/carousel/img3.jpg" alt=""></center>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Titulo 3</h1>
                                <p id="nav-tex">Texto bla bla bla bla</p>
                                {{-- <p><a href="#" class="btn btn-lg btn-info" role="button">Ver Mas</a></p> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Imagen 4 -->
                    <div class="item">
                        <center><img src="public/img/carousel/img4.jpg" alt=""></center>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Titulo 4</h1>
                                <p id="nav-tex">Texto bla bla bla bla</p>
                                {{-- <p><a href="#" class="btn btn-lg btn-info" role="button">Ver Mas</a></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#myCarousel1" class="left carousel-control" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#myCarousel1" class="right carousel-control" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- Fin Carousel 1-->
        </main>        
        <div class="container">
            @yield('content')
        </div>
        <!-- Inicio Footer-->        
        <footer>
            <!--Pie de pagina footer-->
            <div class="container">
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        <div class="featurette-divider">
                            <h4>Sobre InvestorCoin</h4>
                            <p>In cursus leo risus, quis fringilla arcu accumsan euismod. Mauris eget dui convallis, eleifend tortor et, malesuada leo. Sed id egestas lectus, id posuere massa. Vivamus sit amet rutrum lorem. Sed sagittis sapien tincidunt nunc vehicula rhoncus. Aliquam consectetur convallis diam sagittis imperdiet. Aliquam sodales pulvinar magna, non posuere ante.</p>
                            <p>Nunc a tortor at est tempus aliquam. Praesent ultrices porttitor lacinia. Vivamus nisl mauris, hendrerit non hendrerit ut, porta a odio. Donec sed placerat quam. Sed a urna erat. In semper vitae leo id vulputate. Nam tempor rhoncus nisi, posuere accumsan dolor condimentum non. Sed aliquam sapien est, non mollis arcu venenatis id. Cras commodo rutrum lacinia.</p>
                            <p>Copyright © 2018 <a href="#">InvestorCoin Derechos Reservados</a></p>
                            <br><br>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="featurette-divider">
                            <h4>Siguenos</h4>
                            <p>
                                <a href="#"><i class="fab fa-facebook-square fa-3x"></i></a>
                                <a href="#"><i class="fab fa-twitter-square fa-3x"></i></a>
                                <a href="#"><i class="fab fa-google-plus-square fa-3x"></i></a>
                                <a href="#"><i class="fas fa-rss fa-3x"></i></a>
                                <a href="#"><i class="far fa-envelope fa-3x"></i></a>
                                <a href="#"><i class="fab fa-youtube-square fa-3x"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>        
        <!-- Fin Footer-->
        {!! Html::script('/public/js/jquery-3.2.1.js') !!}
        {!! Html::script('/public/js/bootstrap.js') !!}      
        {!! Html::script('/public/js/main.js') !!}
        @yield('scripts')
    </body>
</Html>