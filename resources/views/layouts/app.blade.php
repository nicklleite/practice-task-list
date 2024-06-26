<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $applicationName }} - {{ $applicationDescription }}</title>

    @vite('resources/css/app.css')
    @yield('specific_styles')
</head>

<body>
    <header>
        <h1 class="text-3xl font-bold underline">
            {{ $applicationName }}
        </h1>
        <small>{{ $applicationDescription }}</small>
    </header>

    @yield('content')

    <footer>
        footer
    </footer>
    
    @yield('specific_scripts')
</body>

</html>
