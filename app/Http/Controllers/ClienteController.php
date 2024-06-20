<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Table;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function cliente(){
       
        return view('home.homecliente');
     }


     public function menu(){
        $dishes=Dish::all();
        $tables=Table::all();
        return view('home.menu',compact('dishes','tables'));
     }
}
