<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dish;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     public function __construct()
     {
         $this->middleware('auth');
     }


    public function index()
    {
        $dishes=Dish::all();

        return view('dish.index',compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('dish.create',compact('categories'));
    }


    



    public function store(Request $request)
    { $dishes=Dish::all();
        $validated = $request->validate([
            'nombre_plato' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string',  'max:255'],
            'precio' => ['required'],
            'category_id' => ['required']
        ]);
        $dish= new Dish();
        $dish->nombre_plato = $validated['nombre_plato'];
        $dish->descipcion = $validated['descripcion'];
        $dish->precio = $validated['precio'];
        $dish->category_id = $validated['category_id'];
        $dish->save();

        return redirect()->route('dish.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        return view('dish.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish)
    {$categories=Category::all();
        return view('dish.edit',compact('dish','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $dish)
    {
        $validated = $request->validate([
            'nombre_plato' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string',  'max:255'],
            'precio' => ['required'],
            'category_id' => ['required']
        ]);
      
        $dish->nombre_plato = $validated['nombre_plato'];
        $dish->descipcion = $validated['descripcion'];
        $dish->precio = $validated['precio'];
        $dish->category_id = $validated['category_id'];;

        $dish->save();
            return redirect('/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        {
            $dish->delete();
            return redirect()->route('dish.index');
    
        }
    }
}
