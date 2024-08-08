<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>LMS</title>
</head>

<body>
    <div class="topnav">
        <a class="active" href="#home">DASHBOARD</a>
        <a href="#news">AUTHORS</a>
        <a href="#contact">PUBLISHERS</a>
        <a href="#about">CATEGORIES</a>
        <a href="#about">BOOKS</a>
        <a href="#about">REPORTS</a>
    </div>
    <main>
        @yield('book')
    </main>
</body>

</html>
