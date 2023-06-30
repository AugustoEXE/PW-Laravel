@extends("includes.base")

@section('title' ,'Usuarios')


@section('content')

<div class="m-auto mb-3 text-center w-3/4">
    @if (session('sucesso'))
    <div class="bg-green-400 rounded my-5 text-zinc-800">
        <ion-icon name="checkmark-circle-outline"></ion-icon> {{session('sucesso')}}
    </div>

    @endif
    <h2 class="text-3xl my-auto  mt-6 font-semibold ">Usuarios</h2>
</div>



<div class="m-auto w-3/4 p-0">
    <div>

        <div class="text-center mt-8 mb-4">
            <form action="" method="POST">
                @csrf
                <div class="">
                    <select name="order" id="" class="h-7 bg-zinc-900 rounded">
                        <option value="-1" default>Ordem</option>
                        <option value="asc">Crescente</option>
                        <option value="desc">Decrescente</option>
                    </select>
                    <input type="text" name="search" class="w-2/6 bg-zinc-500 h-7 rounded-l m-0"
                        placeholder="Busque por um usuariouto..."><button class="bg-zinc-900 h-7 m-0 w-8 rounded-r">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>
                </div>
            </form>
        </div>

        <div class="">
            <a href="{{ route('usuarios.create')}}"
                class="underline text-center font-semibold text-xl hover:text-white ">
                <div class="bg-zinc-900 mb-3 h-14 w-full rounded">Adicionar usuario</div>
            </a>
        </div>
    </div>

    <table class="border-separate border-spacing-2 border table-auto border-zinc-500 w-full rounded">
        <tr>
            <th class="border border-zinc-600 bg-zinc-900 font-bold text-lg">ID</th>
            <th class="border border-zinc-600 bg-zinc-900 font-bold text-lg">Nome</th>
            <th class="border border-zinc-600 bg-zinc-900 font-bold text-lg">E-mail</th>
            <th class="border border-zinc-600 bg-zinc-900 font-bold text-lg">Senha</th>
            <th class="border border-zinc-600 bg-zinc-900 font-bold text-lg">Ações</th>

        </tr>

        @foreach ($usuarios as $usuario)

        <tr class="odd:bg-zinc-750">
            <td class="border border-zinc-700 h-14 text-center text-lg">{{$usuario->id}}</td>
            <td class="border border-zinc-700 h-14 text-center text-lg"><a
                    class="underline underline-offset-2 hover:text-zinc-400  "
                    href="{{ route('usuarios.view', $usuario->id) }}">{{$usuario->name}}</a></td>
            <td class="border border-zinc-700 h-14 text-center text-lg">{{$usuario->email}}</td>
            <td class="border border-zinc-700 h-14 text-center text-lg">{{$usuario->password}}</td>
            <td class="border border-zinc-700 h-14 text-center text-lg">
                <a href="{{ route('usuarios.edit', $usuario->id) }}" class="inline"><button
                        class="rounded bg-blue-600 h-10 w-1/3 inline ">
                        <ion-icon name="create-outline"></ion-icon> Editar
                    </button></a>
                <a href="{{ route('usuarios.delete', $usuario->id) }}" class="inline"><button
                        class="rounded bg-red-600 h-10 w-1/3 inline ">
                        <ion-icon name="trash-outline"></ion-icon> Excluir
                    </button></a>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="">
        {{$usuarios->links("vendor.pagination.default")}}
    </div>


</div>
@endsection
