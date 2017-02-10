<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>{{ config('app.name') }}</title>

        <!-- Bootstrap -->
        <link href="{{ Kuding::kasset('css/theme.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        @include('kuding::themes.includes.topbar')

        <div class="container">
            <div id="main" class="main">@yield('main')</div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <p class="text-muted">&copy; 2016 {{ config('app.name') }}. All Rights Reserved. Powered by <strong>Kuding</strong>.</p>
                    </div>
                    <div class="col-md-5">
                        <p class="text-right">fa tw ln</p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{ Kuding::kasset('js/theme.js') }}"></script>
    </body>
</html>
