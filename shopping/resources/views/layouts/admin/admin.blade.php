<html>
    <head>
        <title>Admin</title>
        @include('admin.includes.header')

    </head>
    <body class="nav-md">
        <div class="container body">
            @include('admin.includes.side_menu')
            <div class="container">
                @yield('content')
            </div>
            @include('admin.includes.footer')
        </div>
    </body>
</html>