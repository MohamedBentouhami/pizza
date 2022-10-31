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
    public static function getIngredients($id)
    {

        return DB::select('SELECT gId,gNom, gPrix,cPizza,cGar FROM `garniture`
        join contient on cGar = gId
        join pizza on cPizza = pId
        where pId = ?', [$id]);
    }
    public static function getGarnitureD()
    {

        return DB::select('SELECT gNom,gId FROM `garniture` join contient on cGar = gId join pizza on cPizza = pId group by gNom,gId');
    }
}
