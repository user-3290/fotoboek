<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    {{-- Include the header, the file can be found at /resources/views/components/header.blade.php --}}
    @include('components.header')

    @yield('content')

    {{-- Include the footer, the file can be found at /resources/views/components/footer.blade.php --}}
    @include('components.footer')
</body>

</html>
