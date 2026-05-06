<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lighting App</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>

    <header>
        <h1>Lighting Store</h1>
    </header>

    <main class="container">
        @yield('content')
    </main>

</body>
</html>