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

<body>

    @if (session('error'))

    <div>{{session('error')}}</div>
    @endif

    <div class="h-screen absolute bottom-0 right-0 w-1/2 bg-zinc-800 flex ">
        <div class="bg-zinc-700 w-3/4 h-3/4 mx-auto my-auto rounded-3xl shadow-xl">
            <h2 class="text-6xl text-zinc-300 font-bold text-center mt-10">login</h2>
            <div class="text-center ">
                <form action="{{url()->current()}}" method="POST">
                    @csrf
                    <div class="mt-10">
                        <label htmlFor="" class="block text-left w-3/4 m-auto text-zinc-400 text-xl">E-mail:</label>
                        <input type="email" name="email" class="w-3/4 rounded py-2 bg-zinc-300" />
                    </div>
                    <div class="mt-10">
                        <label htmlFor="" class="block text-left w-3/4 m-auto text-zinc-400 text-xl">Senha:</label>
                        <input type="password" name="password" class="w-3/4 rounded py-2 bg-zinc-300" />
                    </div>
                    <div class="mt-2 text-left w-3/4 m-auto underline text-zinc-400 hover:text-zinc-500">
                        <a href="#">Esqueci minha senha</a>
                    </div>
                    <div class="mt-10">
                        <button class="rounded-lg bg-blue-600 hover:bg-blue-700 text-white w-4/6 py-2 ">Login   </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="h-screen absolute bg-gradient-to-r from-zinc-700 to-zinc-800 bottom-0 left-0 w-1/2 ">
        <div class="backdrop-blur-sm w-full">
            <h1 class="text-8xl font-belanosima text-white  text-center mt-8 ">
                Bem vindo ao melhor sistema de Produtos? do pais
            </h1>
        </div>
    </div>
</body>
