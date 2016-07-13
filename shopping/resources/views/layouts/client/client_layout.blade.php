<html>
    <head>
        <title>Pendent store</title>
        @include('layouts.client.includes.header')
    </head>
    <body class="nav-md">
        <div class="">
            @include('layouts.client.includes.menu_bar')
                @yield('content')
            @include('layouts.client.includes.footer')
        </div>
    </body>
</html>