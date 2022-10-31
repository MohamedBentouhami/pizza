@extends('canevas')
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