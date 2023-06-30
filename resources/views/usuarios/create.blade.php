@extends("includes.base")

@section('title' ,'Usuarios - adicionar')
@section('content')

@if ($errors)



@endif

@foreach ($errors->all() as $erro)
<div class="mx-5">
    <div id="toast-danger"
        class="flex items-center w-full max-w-xs p-4 my-4 text-gray-500 bg-white rounded-lg shadow dark:text-zinc-400 dark:bg-zinc-700"
        role="alert">
        <div
            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Error icon</span>
        </div>
        <div class="ml-3 text-sm font-normal">{{$erro}}</div>
    </div>
</div>
@endforeach
<div class="container ml-5">
    <h2 class="text-4xl font-semibold">Adicionar Usuario</h2>

    <div>
        <form action="{{url()->current() }}" method="POST" class="">

                @csrf
                <div class="my-5">
                    <label for="" class="text-xl">Nome: </label>
                    <br>
                    <input type="text" name="name" id="" class="rounded bg-zinc-500 w-1/3 h-7 "
                        value="{{old('name', $usuario->name ?? '')}}">
                </div>
                <div class="my-5">
                    <label for="" class="text-xl">E-mail: </label>
                    <br>
                    <input type="email" step="0.01" name="email" id="" class="rounded bg-zinc-500 w-1/3 h-7"
                        value="{{old('price', $usuario->email ?? '')}}">
                </div>
                <div class="my-5">
                    <label for="" class="text-xl">Senha: </label>
                    <br>
                    <input type="password" name="password" id="" class="rounded bg-zinc-500 w-1/3 h-7"
                        value="{{old('quantity', $usuario->password ?? '')}}">
                </div>
                <div>
                    <button class="rounded bg-blue-600 h-10 w-24">Enviar</button>
                </div>
            </form>
    </div>
</div>
@endsection
