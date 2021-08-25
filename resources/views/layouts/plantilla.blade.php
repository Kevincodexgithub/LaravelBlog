<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <style>
        html {
            filter: invert(100%);
            color: white;
            background-color: gray;
        }

    </style>
    {{-- favicon --}}
    {{-- estilos --}}
</head>

<body>
    {{-- header --}}

    {{-- nav --}}

    @yield('content')

    {{-- footer --}}

    {{-- script --}}
</body>

</html>
