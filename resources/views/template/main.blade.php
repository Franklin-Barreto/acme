<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div id="app" class="flex-center position-ref full-height">
            <div class="content">
                    @yield('content')
            </div>
        </div>
        <script src="{{asset('/js/app.js')}}"></script>
        <script>
      //  $('.content').append('Funcionou');
        </script>
    </body>
</html>
