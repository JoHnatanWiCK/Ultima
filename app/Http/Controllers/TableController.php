<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class TableController extends Controller
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
        $tables=Table::all();

        return view('table.index',compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tables=Table::all();
        return view('table.create',compact('tables'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $validated = $request->validate([
            'capacidad' => ['required',  'max:10'],
            
            
        ]);
        $tables= new Table();
        $tables->capacidad = $validated['capacidad'];
   
       
        $tables->save();

        return redirect()->route('table.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Table $table)
    {
        return view('table.show', compact('table'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Table $table)
    {
        return view('table.edit',compact('table'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Table $table)
    {
        $validated = $request->validate([
            'capacidad' => ['required'],
            
            
        ]);
      
        $table->capacidad = $validated['capacidad'];
      
       

        $table->save();
            return redirect('/indexM');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Table $table)
    {
        $table->delete();
        return redirect()->route('table.index');

    }
}
