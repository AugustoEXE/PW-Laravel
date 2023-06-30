@extends("includes.base")

@section('title' ,'Usuario - deletar')

@section('content')
<div class="m-auto w-3/4 p-0">
    <div class="w-full p-0 m-0 h-full">
        <h2 class="text-center my-5 font-bold text-2xl">Apagar Usuario</h2>
        <p class="text-center">vc esta prestes a apagar o Usuario <strong>{{$usuario->name}}</strong></p>
        <p class="text-center mb-5">tem certeza?</p>
    </div>

    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="post">
        @method('delete')
        @csrf
<div class="text-center">

            <button class="rounded bg-red-600 h-10 w-1/3 inline">
                <ion-icon name="trash-outline"></ion-icon> Excluir
            </button>
</div>
    </form>
</div>
@endsection
