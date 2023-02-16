<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <meta name="author" content="Matse Van Horebeek, matse@vanhorebeek.be">
    <meta name="keywords" content="Fotoboek, Cvo, Cvo Volt, Volt, Go!, G-O">
    <meta name="theme-color" content="#11526A">

    <meta name="title" content="@yield('title')">
    <meta name="description" content="">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:image" content="{{ env('APP_URL') }}/assets/images/png/screenshot.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ env('APP_URL') }}">
    <meta property="twitter:title" content="@yield('title')">
    <meta property="twitter:image" content="{{ env('APP_URL') }}/assets/images/png/screenshot.png">

    <!-- Apple -->
    <meta name='apple-mobile-web-app-status-bar-style' content='white'>
    <meta name="apple-mobile-web-app-title" content="@yield('title')"> <!-- New in iOS6 -->
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>

    <!-- PWA  -->
    <meta name="theme-color" content="#11526A" />
    <link rel="apple-touch-icon" href="{{ asset('assets/images/png/cvovolt.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function(reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>

    {{-- Title will be given in file when layout is extended --}}
    <title>@yield('title')</title>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    {{-- Include the Font Awesome --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}" crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    {{-- Include Select2 --}}
    <link href="{{ asset('assets/css/select2.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/select2.min.js') }}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/nl.select2.min.js') }}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- Include jQuery --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Load local files via vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen overflow-x-hidden">
    {{-- Container section --}}
    <section class="w-full max-w-screen-lg min-h-full p-5 mx-auto">
        {{-- Include the header, the file can be found at /resources/views/components/header.blade.php --}}
        @include('components.header')

        {{-- Content will be given in file when layout is extended --}}
        @yield('content')
    </section>

    {{-- Include the footer, the file can be found at /resources/views/components/footer.blade.php --}}
    @include('components.footer')


</body>

</html>
