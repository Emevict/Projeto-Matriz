<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    @vite('resources/css/styles.css')

    <title>@yield('title', 'Minha Aplicação')</title>
</head>

@include('partials.header') 

<body>
    <div class="main-content" style="margin-top: 50px; text-align: center">
        @yield('content')   
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    @vite('resources/js/main.js')
</body>
</html>
