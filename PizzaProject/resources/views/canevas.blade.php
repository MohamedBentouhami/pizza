<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">

</head>

<body>
    <div class="grid-container">
        <div class="item1">
            <h1>Pizza à Gogo - Acceuil</h1>
        </div>
        <div class="item2">
            <main>
                @yield('content')
            </main>
        </div>
        <div class="item3">
            <ul>

                <li><a href="/home">Acceuil</a>
                </li>
                <li>
                    <a href="/nos-pizzas">Nos pizzas</a>
                </li>
                <li>
                    <a href="/commander">Commander</a>
                </li>


            </ul>
        </div>
        <div class="item4">Mohamed Bentouhami Belhaj</div>
    </div>

</body>

</html>