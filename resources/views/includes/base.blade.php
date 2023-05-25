<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>

<body class="bg-gray-900 text-white">
    <h1 class="text-5xl font-bold m-5">Site mto massa</h1>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700 m-0">
    @yield('content')

</body>

</html>
