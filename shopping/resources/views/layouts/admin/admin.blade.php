<html>
    <head>
        <title>Admin</title>
        @include('layouts.admin.includes.header')

    </head>
    <body class="nav-md">
        <div class="container body">
            @if(!Request::is('admin/login'))
                @include('layouts.admin.includes.side_menu')
            @endif
            <div class="container">
                @yield('content')
            </div>
            @include('layouts.admin.includes.footer')
        </div>
    </body>
</html>