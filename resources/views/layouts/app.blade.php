<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Samudera Biru Internasional') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* fallback minimal styles keep body readable until vite builds */
                html,body{height:100%;margin:0;padding:0;background:#041230;color:#fff;}
                body{font-family:Instrument Sans, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;}
            </style>
        @endif
        {{-- Allow views to push page-specific styles (example: career.css) --}}
        @stack('styles')
    </head>
    <body>
        @include('components.navbar')

        <main>
            {!! $slot ?? '' !!}
            @yield('content')
        </main>

        @include('components.footer')
        @include('components.service-contact-modal')
        
        @stack('scripts')
    </body>
</html>
