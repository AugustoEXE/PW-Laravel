@extends("includes.base")

@section('title' ,'Produtos - ver')

@section('content')
<div class="m-auto w-3/4 p-0">
    <div class="max-w-lg rounded overflow-hidden shadow-lg bg-zinc-900 m-auto">
        <h2 class=" text-center font-bold text-4xl">{{$prod->name}}</h2>
        <p class=" text-center font-semibold text-3xl">{{$prod->quantity}}</p>
        <p class=" text-center text-xl text-zinc-400 ">R$ {{number_format($prod->price, 2, ',')}}</p>
    </div>
</div>
@endsection
