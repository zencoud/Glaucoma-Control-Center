<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Glaucoma Control Center" />
    <link rel="manifest" href="/site.webmanifest" />

    <!-- SEO -->
    <title>@yield('title', 'Glaucoma Control Center - Especialistas en Salud Visual')</title>
    <meta name="description" content="@yield('description', 'Centro especializado en el diagnóstico, prevención y tratamiento integral del glaucoma. Atención médica de excelencia, humana y ética para preservar tu salud visual.')">
    <meta name="keywords" content="@yield('keywords', 'glaucoma, oftalmología, salud visual, diagnóstico, prevención, tratamiento, presión intraocular, nervio óptico, campimetría, OCT, láser, cirugía')">
    <meta name="author" content="Glaucoma Control Center">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Glaucoma Control Center - Especialistas en Salud Visual')">
    <meta property="og:description" content="@yield('og_description', 'Centro especializado en el diagnóstico, prevención y tratamiento integral del glaucoma. Atención médica de excelencia para preservar tu salud visual.')">
    <meta property="og:image" content="@yield('og_image', url('/img/glaucoma-control-center-logo.png'))">
    <meta property="og:site_name" content="Glaucoma Control Center">
    <meta property="og:locale" content="es_ES">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('twitter_title', 'Glaucoma Control Center - Especialistas en Salud Visual')">
    <meta property="twitter:description" content="@yield('twitter_description', 'Centro especializado en el diagnóstico, prevención y tratamiento integral del glaucoma. Atención médica de excelencia para preservar tu salud visual.')">
    <meta property="twitter:image" content="@yield('twitter_image', url('/img/glaucoma-control-center-logo.png'))">

    <!-- Additional SEO -->
    <meta name="theme-color" content="#1e40af">
    <meta name="msapplication-TileColor" content="#1e40af">
    <meta name="msapplication-config" content="/browserconfig.xml">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-gray-100">

    <!-- Loader -->
    <x-loader />

    <x-navigation />

    <main>
        @yield('content')
    </main>

    <x-footer />
    
    <x-scroll-to-top />

</body>
</html>
