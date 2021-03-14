<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('include.head')
</head>
<body>
    <header>
        @include('include.header')
    </header>

    <div class="container">
        @yield('content')
    </div>
    @include('include.footer')

    @yield('js')

</body>
</html>
