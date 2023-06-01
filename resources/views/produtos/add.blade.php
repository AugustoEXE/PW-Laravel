@extends("includes.base")

@section('title' ,'Produtos - adicionar')
@section('content')

@if ($errors)



@endif


<div class="container ml-5">
    <h2 class="text-4xl font-semibold">Adicionar Produtos</h2>
    @foreach ($errors->all() as $erro)
    <div class="my-3 w-1/3 bg-red-700 rounded ">
        <div class=""> {{$erro}}</div >
    </div>
@endforeach
    <div>
        <form action="{{route('produtos.addSave')}}" method="POST" class="">
            @csrf
            <div class="my-5" >
                <label for="" class="text-xl">Nome do produto: </label>
                <br>
                <input type="text" name="name" id="" class="rounded bg-zinc-500 w-1/3 h-7 ">
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
