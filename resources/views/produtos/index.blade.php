@extends("includes.base")

@section('title' ,'Produtos')


@section('content')
<div class="m-auto mb-3 text-center w-3/4">
    <h2 class="text-3xl m-auto font-semibold">Produtos</h2>
</div>

<div class="m-auto w-3/4 p-0">
    <div class="">
        <a href="{{ route('produtos.add')}}" class="underline text-center font-semibold text-xl hover:text-white ">
            <div class="bg-zinc-900 mb-3 h-14 w-full rounded">Adicionar produto</div>
        </a>
    </div>

    <table class="border-separate border-spacing-2 border table-auto border-zinc-500 w-full ">
        <tr>
            <th class="border border-zinc-600 bg-zinc-900 font-bold text-lg">ID</th>
            <th class="border border-zinc-600 bg-zinc-900 font-bold text-lg">Nome</th>
            <th class="border border-zinc-600 bg-zinc-900 font-bold text-lg">Preço</th>
            <th class="border border-zinc-600 bg-zinc-900 font-bold text-lg">Quantidade</th>
            <th class="border border-zinc-600 bg-zinc-900 font-bold text-lg">Editar</th>
        </tr>

        @foreach ($prods as $prod)

        <tr class="odd:bg-zinc-750">
            <td class="border border-zinc-700 h-14 text-center text-lg">{{$prod->id}}</td>
            <td class="border border-zinc-700 h-14 text-center text-lg"><a class="underline underline-offset-2 hover:text-zinc-400  " href="{{ route('produtos.view', $prod->id) }}">{{$prod->name}}</a></td>
            <td class="border border-zinc-700 h-14 text-center text-lg">R$ {{number_format($prod->price, 2, ',')}}</td>
            <td class="border border-zinc-700 h-14 text-center text-lg">{{$prod->quantity}}</td>
            <td class="border border-zinc-700 h-14 text-center text-lg"><a href="{{ route('produtos.edit', $prod->id) }}" ><button class="rounded bg-blue-600 h-10 w-full"><ion-icon name="create-outline"></ion-icon> Editar </button></a></td>
        </tr>
        @endforeach

    </table>




</div>
@endsection
