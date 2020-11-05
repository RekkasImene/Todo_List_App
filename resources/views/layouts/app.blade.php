<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Font-->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!--Style-->
    <link href="{{URL::asset('css/app.css')}}" rel="stylesheet">


    <title>Todo App</title>
</head>

<body>
    @yield('content')

    <!--Scripts-->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('javascript')
</body>

</html>