<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <h1>Mysite.test</h1>
        @include('partials.navlinks')
        @yield('content')

        @if(Request::route()->getname()=='home' )
        <p>home จริงๆนะ</p>
        @else
        <p>home ไม่จริงๆนะ</p>
        @endif

         @if(Request::route()->getname()=='contact' )
        <p>contact จริงๆนะ</p>
        @else
        <p>contactไม่จริงๆนะ</p>
        @endif

         @if(Request::route()->getname()=='abot' )
        <p>abot จริงๆนะ</p>
        @else
        <p>abot ไม่จริงๆนะ</p>
        @endif
</body>
</html>