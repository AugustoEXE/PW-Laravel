<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>

<body class="bg-zinc-800 text-zinc-200">
    <nav class="bg-white border-gray-200 dark:bg-zinc-900 sticky z-50 top-0">
        <div class="flex flex-wrap items-center justify-between m-0 p-4">
            <a href="{{ route('home') }}" class="flex items-center">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Site mto massa</span>
            </a>

            <div class="hidden mr-5 w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-zinc-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-zinc-800 md:dark:bg-zinc-900 dark:border-gray-700">
                    <li>
                        <a href="{{ route('produtos') }}"
                            class="block py-2 pl-3 pr-4 text-white bg-zinc-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-zinc-300 hover:text-zinc-100"
                            aria-current="page">Produtos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
