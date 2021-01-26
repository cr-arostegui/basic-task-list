<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>

        <!-- CSS And JavaScript -->        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-light bg-info">
                <a class="navbar-brand" href="#" style="color:#FFF">
                    Task List App
                </a>
            </nav>
        </header>
        <div class="container" style="margin-top: 20px;">
            @yield('content')
        </div>
    </body>
</html>