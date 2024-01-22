<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} - @yield('judul')</title>
</head>
<body>
    <header>
        <nav>
            <li><a href="/">Home</a></li>
            <li><a href="about">About</a></li>

            
        </nav>
    </header>
    @yield('content')
    <footer>
        <p> Copyright IK2 hemmmmmm - 2050</p>
    </footer>
</body>
</html>