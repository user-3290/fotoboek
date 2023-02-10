<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Title will be given in file when layout is extended --}}
    <title>@yield('title')</title>

    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js"
        integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>

    {{-- Include the Font Awesome --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}" crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    {{-- Include Select2 --}}
    <link href="{{ asset('assets/css/select2.css') }}" rel="stylesheet" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/nl.select2.min.js') }}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- Load local files via vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen">
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
