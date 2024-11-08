<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/styles_login.css')

    <title>@yield('title', 'Login')</title>
</head>
<body>
    @yield('content')   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite('resources/js/mainLogin.js')
</body>
</html>
