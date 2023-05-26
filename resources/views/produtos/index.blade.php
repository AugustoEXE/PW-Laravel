@extends("includes.base")

@section('title' ,'Produtos')


@section('content')
<div class="container ml-5">
    <h2 class="text-3xl mt-0 my-5 font-semibold">Produtos</h2>
    <div class="bg-gray-800"><a href="{{ route('produtos.add')}}" class="underline hover:text-white" >Adicionar produto</a></div>
</div>
@endsection
