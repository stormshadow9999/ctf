<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>White walkers</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<body background="{{asset('img/background.jpg')}}">
<nav class="navbar navbar-default navbar-fixed-top" style="margin-bottom: 50px">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h3>WhiteWalkers</h3>
            </div>
            <div class="col-sm-7">

            </div>
            @if(null!=session('ses'))
                <div class="col-sm-2" style="margin-top: 10px">
                    <a href="/logout" class="btn btn-danger">Logout</a>
                </div>
            @endif
        </div>
    </div>
</nav>



@yield('content')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>