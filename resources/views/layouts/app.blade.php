<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Titre --}}
    <title>{{ config('app.name', 'Portfolio') }}</title>

    {{-- Couleur de fond clair/sombre --}}
    <script>
      (function () {
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        if (prefersDark) {
          document.documentElement.classList.add('dark');
        }
      })();
    </script>
    <style>
      html {
        background-color: oklch(1 0 0);
      }
      html.dark {
        background-color: oklch(0.145 0 0);
      }
    </style>

    {{-- Favicons --}}
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    {{-- Polices Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Lexend+Mega&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet" />

    {{-- Bootstrap CSS --}}
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    {{-- Ton CSS personnalisé --}}
    <link rel="stylesheet" href="{{ secure_asset('css/portfolio.css') }}">
  </head>

  <body class="font-sans antialiased {{ Route::currentRouteName() }}">

    {{-- Header --}}
    @include('partials.header')

    {{-- Contenu principal --}}
    @yield('content')

    {{-- Footer --}}
    {{-- @include('partials.footer')--}}
    @include('partials.footer', ['removeFooterBg' => $removeFooterBg ?? false])


    {{-- jQuery + ton JS --}}
    <script 
      src="https://code.jquery.com/jquery-3.7.1.js" 
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" 
      crossorigin="anonymous"
    ></script>
    <script src="{{ secure_asset('js/portfolio.js') }}"></script>
  </body>
</html>
