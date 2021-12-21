<?php

namespace App\Http\Controllers;

use App\Models\coffeeBeanTable;
use Illuminate\Http\Request;

class CoffeeBeanTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coffeeBeanTable= coffeeBeanTable::latest()->paginate(10);
        return view('coffeeBeanTable.index',compact('coffeeBeanTable'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coffeeBeanTable.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $request->validate([
            
            'Name' => 'required',
            'Caffeine_Level' => 'required',
            'Cost_lb' => 'required',
            'Bean_Type' => 'required',
            'Roast' => 'required',
            'Grind' => 'required',
            'Country_of_Origin' => 'required',
            
        ]);

        coffeeBeanTable::create($request->all());
        return redirect()->route('coffeeBeanTable.index')->with('success','Coffee Bean Table created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\coffeeBean  $coffeeBean
     * @return \Illuminate\Http\Response
     */
    public function show(coffeeBeanTable $coffeeBeanTable)
    {
        return view('coffeeBeanTable.show',compact('coffeeBeanTable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\coffeeBean  $coffeeBean
     * @return \Illuminate\Http\Response
     */
    public function edit(coffeeBeanTable $coffeeBeanTable)
    {
        return view('coffeeBeanTable.edit',compact('coffeeBeanTable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\coffeeBean  $coffeeBean
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, coffeeBeanTable $coffeeBeanTable)
    {
         $request->validate([
           'id' => 'required',
            'Name' => 'required',
            'Caffeine_Level' => 'required',
            'Cost_lb' => 'required',
            'Bean_Type' => 'required',
            'Roast' => 'required',
            'Grind' => 'required',
            'Country_of_Origin' => 'required',
        ]);
        $coffeeBeanTable->update($request->all());
        return redirect()->route('coffeeBeanTable.index')->with('success','Coffee Bean Table updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\coffeeBean  $coffeeBean
     * @return \Illuminate\Http\Response
     */
    public function destroy(coffeeBeanTable $coffeeBeanTable)
    {
        $coffeeBeanTable->delete();
        return redirect()->route('coffeeBeanTable.index')->with('success','Coffee Bean Table  deleted successfully');
    }
}
