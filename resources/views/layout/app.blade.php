<!DOCTYPE html>
<html lang="it">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title')</title>

   <link rel="stylesheet" href="{{ url('css/app.css') }}">

</head>
<body>
    <main>
        @yield('container')
    </main>
</body>
</html>

