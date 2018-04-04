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
        <title>InvestorCoin</title>
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
    </head>
    <!-- END HEAD -->
    <body>
        <div class="container">
            @yield('content')
        </div>
        {!! Html::script('/public/js/jquery-3.2.1.js') !!}
        {!! Html::script('/public/js/bootstrap.js') !!}      
        {!! Html::script('/public/js/main.js') !!}
        @yield('scripts')
    </body>
</Html>