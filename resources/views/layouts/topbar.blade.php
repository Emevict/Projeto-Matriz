<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    
    @vite('resources/css/styles.css')

    <title>@yield('title', 'Minha Aplicação')</title>
</head>

<body>
    @include('partials.header') 

    <main>
        @yield('content') 
    </main>

    @vite('resources/js/main.js')
</body>

</html>
