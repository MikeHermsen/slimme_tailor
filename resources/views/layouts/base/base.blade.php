<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

    @include( 'layouts.base.includes.header' )

    <div>
        @yield('content')
    </div>

    @include( 'layouts.base.includes.footer' )


</body>
</html>
