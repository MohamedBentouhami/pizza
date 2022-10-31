@extends ('canevas')


@section('title')
<h1>Pizza à Gogo - Nos Pizzas</h1>
@endsection

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<h2>Sélectionnez votre pizza</h2>
<p>Vous pouvez sélectionner votre pizza. Vous pouvez ajuster directement les ingrédients. Attention, changer de pizza redéfint les ingrédients.</p>
Pizza : <select name="pizza" id="pizza">
    @foreach($pizzas as $pizza)
    <option value={{$pizza->pId}}>{{$pizza->pNom}}</option>
    @endforeach
</select>

<h2>Ingrédients</h2>
<ul>
    @foreach($ingredients as $ingredient)
    <li>
        <input type="checkbox" class="ingredients" value="{{$ingredient->gId}}">{{$ingredient->gNom}}
    </li>
    @endforeach

</ul>
<script>
    function decoche() {
        $(".ingredients").each(function(i) {
            $(this).prop("checked", false);
        })
    }
    $('#pizza').change(function() {
        decoche();
        let id = $(this).children("option:selected").val();
        $.get("./api/pizzas/" + id + "/ingredients", function(data, status) {
            $(".ingredients").each(function(i) {
                let d = JSON.parse(data);
                d.forEach(element => {
                    if ((element["gId"]) == $(this).val()) {
                        $(this).prop("checked", true);
                    }
                });

            })
        });

    })
</script>

@endsection('content')