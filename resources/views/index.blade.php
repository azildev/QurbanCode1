<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('panel/style.css') }}" rel="stylesheet">  

        <!-- Styles -->
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="global-container">
            <div id="dw">
                <app></app>
            </div>
        </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
