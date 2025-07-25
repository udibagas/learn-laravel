<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="{{ route('products.index') }}">Products</a></li>
            <li><a href="{{ route('products.create') }}">Create Product</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>
</body>

</html>
