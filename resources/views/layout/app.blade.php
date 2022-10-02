<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    @include('partials.header')
    
    <main>
       @yeld('content') 
    </main>
    
    @include('partials.footer')
    
</body>
</html>