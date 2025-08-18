<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Laravel App</title>
</head>
<body>
    <header>
        <h1>My App Header</h1>
        <nav>
            <a href="/home">Home</a> |
            <a href="/contact">Contact</a>
        </nav>
        <hr>
    </header>
    <div class="content">
        @yield('content')
    </div>
    <footer>
        <hr>
        <p>My App Footer</p>
    </footer>
</body>
</html>
