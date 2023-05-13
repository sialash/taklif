<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('cssLinke')

        <title>@yield('tltle','تکلیف')</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body dir="rtl">

            <header >
                @include('components.header')
            </header>

            @yield('Breadcrumbs')
            
            <!-- Page Content -->
            <main>
                @yield('content')
            </main>

            <footer>
                @include('components.footer')
            </footer>
            
        </div>
    </body>
</html>
