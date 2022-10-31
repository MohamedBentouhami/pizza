@extends('canevas')
@section('title')
<h1>Pizza à Gogo - Nos Pizzas</h1>
@endsection
@section('content')
<ul>
    @foreach($pizzas as $pizza)
    <li>{{$pizza->pNom}}
        <ul class="subList">
            @foreach($ingredients as $ingredient)
            @if($pizza->pId == $ingredient->pId)
            <li>{{$ingredient->gNom}}</li>
            @endif
            @endforeach
        </ul>
    </li>
    @endforeach
</ul>
@endsection('content')