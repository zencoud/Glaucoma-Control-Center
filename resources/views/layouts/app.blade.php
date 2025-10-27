<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO -->
    <title>@yield('title', 'Glaucoma Control Center')</title>
    <meta name="description" content="@yield('description', 'Centro especializado en el diagnóstico, prevención y tratamiento integral del glaucoma, comprometidos con brindar una atención médica de excelencia, humana y ética.')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-gray-100">

    <x-navigation />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
