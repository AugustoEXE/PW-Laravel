@extends("includes.base")

@section('title' ,'Produtos - adicionar')
@section('content')
<div class="container ml-5">
    <h2 class="text-4xl font-semibold">Adicionar Produtos</h2>
    <div>
        <form action="{{route('produtos.addSave')}}" method="POST" class="">
            @csrf
            <div class="my-5" >
                <label for="" class="text-xl">Nome do produto: </label>
                <br>
                <input type="text" name="name" id="" class="rounded bg-zinc-500 w-1/3 h-7 focus:text-zinc-50 focus:bg-zinc-600 ">
            </div>
            <div class="my-5">
                <label for="" class="text-xl">Preço do produto: </label>
                <br>
                <input type="number" step="0.01" name="price" id="" class="rounded bg-zinc-500 w-1/3 h-7">
            </div>
            <div class="my-5">
                <label for="" class="text-xl">Quantidade: </label>
                <br>
                <input type="number" name="quantity" id="" class="rounded bg-zinc-500 w-1/3 h-7">
            </div>
            <div>
                <button class="rounded bg-blue-600 h-10 w-24">Enviar</button>
            </div>
        </form>
    </div>
</div>
@endsection
