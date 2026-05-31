<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>websiteku</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <nav class="navbar">
    <h2>MyWeb</h2>
    <div class="menu">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/services">Services</a>
        <a href="/contact">Contact</a>
        <a href="/blog">Blog</a>
    </div>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>