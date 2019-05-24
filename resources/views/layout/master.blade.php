<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/style.css">
    </head>

    <body>
        @include('partials.header')
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 blog-main">
                        @yield('content')
                    </div>
                    <div class="col-sm-3 offset-sm-1 blog-sidebar">
                        @include('partials.sidebar')
                    </div>
                </div>
            </div>
        @include('partials.footer')
    </body>
</html>
