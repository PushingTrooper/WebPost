<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebPost</title>
    {{--  Fonts  --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{--  Styles  --}}
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}"/>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/junis.css') }}"/>
    {{--  Scripts (defer)  --}}
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script> {{--  do not defer jQuery  --}}
    <script defer src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</head>
<body>
{{--  can @include() other partials  --}}
<div id="content">
    @yield('content')
</div>
</body>
</html>
