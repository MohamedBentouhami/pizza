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
    public static function commander()
    {
        $ingredient = Pizza::getGarnitureD();
        $pizza = Pizza::getAllPizzas();
        return view('order', ['pizzas' => $pizza, 'ingredients' => $ingredient]);
    }
    public static function getIngredients($id = null)
    {

        if ($id == null) {
            return abort(404);
        } else {
            $result = Pizza::getIngredients($id);
        }

        return json_encode($result);
    }
}
