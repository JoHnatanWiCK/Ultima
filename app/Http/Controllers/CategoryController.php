<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $categories=Category::all();

        return view('category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { $categories=Category::all();
        $validated = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'color' => ['required', 'string',  'max:255'],
            
        ]);
        $category= new Category();
        $category->nombre = $validated['nombre'];
        $category->color = $validated['color'];
       
        $category->save();

        return redirect()->route('category.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'color' => ['required', 'string',  'max:255'],
            
        ]);
      
        $category->nombre = $validated['nombre'];
        $category->color = $validated['color'];
       

        $category->save();
            return redirect('/indexC');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');

    }
}
