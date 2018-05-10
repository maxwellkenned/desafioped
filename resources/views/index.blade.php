<html>
    <head>
        @include('layouts.head')
    </head>
    <body>
        @include('layouts.nav')
        
        <main role="main" class="container">
            @yield('content')
        </main>

        @include('layouts.foot')
    </body>
</html>