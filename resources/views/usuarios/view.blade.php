@extends("includes.base")

@section('title' ,'Usuario - ver')

@section('content')
<div class="m-auto w-3/4 p-0">
    <div class="max-w-lg h-96 rounded overflow-hidden shadow-lg bg-zinc-900 my-20 mx-auto">
        <h2 class=" text-center font-bold text-4xl mt-5">{{$usuario->name}}</h2>
        <p class=" text-center font-semibold text-3xl">{{$usuario->email}}</p>
        <p class=" text-center text-xl text-zinc-400 ">{{$usuario->password}}</p>
    </div>
</div>
@endsection
