<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="container">
    <div class="d-flex justify-content-around mb-3">
        <div>
            <a class="btn btn-primary" href="{{ route('clients.index') }}">Voir Tous Les Cliens</a>
        </div>
        <div>
            <a class="btn btn-success" href="{{ route('clients.create') }}">cree nevau Client</a>
        </div>
    </div>
    @yield('content')
</body>
</html>
