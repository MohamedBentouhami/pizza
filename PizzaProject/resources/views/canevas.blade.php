<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">

</head>

<body>
    <div class="grid-container">
        <div class="item1">
            @yield('title')
        </div>
        <div class="item2">
            <main>
                @yield('content')
            </main>
        </div>
        <div class="item3">
            <ul>

                <li><a href="{{ route('home') }}">Accueil</a>
                </li>
                <li>
                    <a href="{{ route('pizza') }}">Nos pizzas</a>
                </li>
                <li>
                    <a href="{{ route('order') }}">Commander</a>
                </li>


            </ul>
        </div>
        <div class="item4">Mohamed Bentouhami Belhaj</div>
    </div>

</body>

</html>