@extends("includes.base")

@section('title' ,'Produtos - ver')

@section('content')
<div class="m-auto w-3/4 p-0">
    <div class="w-full p-0 m-0 h-full">
        <h2 class="text-center my-5 font-bold text-2xl">Apagar produto</h2>
        <p class="text-center">vc esta prestes a apagar o produto <strong>{{$prod->name}}</strong></p>
        <p class="text-center mb-5">tem certeza?</p>
    </div>

    <form action="{{ route('produtos.deleteForReal', $prod->id) }}" method="post">
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
