<html>
    <head>
        <title>Pendent store</title>
        @include('users.includes.header')
    </head>
    <body class="nav-md">
        <div class="">
            @include('users.includes.menu_bar')
            @yield('content')
            @include('users.includes.footer')
        </div>
    </body>
</html>