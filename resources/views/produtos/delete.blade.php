@extends("includes.base")

@section('title' ,'Produtos - ver')

@section('content')
<div class="m-auto w-3/4 p-0">
    <h2>Apagar produto</h2>
    <p>vc esta prestes a apagar o produto {{$prod->name}}</p>
    <p>tem certeza?</p>
</div>
@endsection
