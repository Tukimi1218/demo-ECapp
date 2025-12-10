<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="ECサイト デモ ポートフォリオ用">

        <title>{{ config('app.name', 'demo-ECapp') }}</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
        <!-- Fontawesome -->
        <link href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" rel="stylesheet">
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('demo.css') }}">
    </head>

    <body>
        <div id="app">
            <nav class="navbar navbar-expand-lg shadow-sm bg-dark" data-bs-theme="dark">
                <div class="container">
                    <div class="d-flex me-xl-5 me-4">
                        <span class="nav-span">
                            <a href="{{ route('products.index') }}" class="navbar-brand text-light">
                                <img class="" src="{{ asset('images/logo.png') }}" alt="demo-ECappのロゴ">
                            </a>
                        </span>
                        <div class="py-auto">
                            <h1 class="nav-h1">
                                <a class="nav-a navber-brand text-light" href="{{ route('products.index') }}">{{ config('app.name', 'demo-ECapp') }}</a>
                            </h1>
                        </div>
                    </div>

                    <form class="" action="">

                    </form>

                    <button class="" type="button">

                    </button>

                    <div class="">

                    </div>
                </div>
            </nav>

            <main>
                @yield('content')
            </main>
            
            <div class="footer-wrapper">

            </div>
        </div>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    </body>

</html>
