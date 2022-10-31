<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;



class Pizza
{

    public static function getAllPizzas()
    {

        return DB::select('select * from pizza');
    }
    public static function getGarniture()
    {

        return DB::select('SELECT * FROM `garniture` join contient on cGar = gId join pizza on cPizza = pId');
    }
}
