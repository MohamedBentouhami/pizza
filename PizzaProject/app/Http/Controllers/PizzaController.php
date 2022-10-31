<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public static function getAll()
    {
        $pizza = Pizza::getAllPizzas();
        $ingredient = Pizza::getGarniture();
        return view('pizza', ['pizzas' => $pizza, 'ingredients' => $ingredient]);
    }
}
