<?php
namespace App\Http\Controllers;

use App\Models\coffeeBeanTable;
use Illuminate\Http\Request;

class CoffeeBeanTableController extends Controller
{
    public function index()
    {
        $coffeeBeanTable= coffeeBeanTable::paginate(5);
        return view('coffeeBeanTable.index',compact('coffeeBeanTable'));
    }

    public function create()
    {
        return view('coffeeBeanTable.create');
    }

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
        return redirect()->route('coffeeBeanTable.index')->with('success','Coffee Bean Table Entry created successfully.');
    }

    public function show(coffeeBeanTable $coffeeBeanTable)
    {
        return view('coffeeBeanTable.show',compact('coffeeBeanTable'));
    }

    public function edit(coffeeBeanTable $coffeeBeanTable)
    {
        return view('coffeeBeanTable.edit',compact('coffeeBeanTable'));
    }

    public function update(Request $request, coffeeBeanTable $coffeeBeanTable)
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
        $coffeeBeanTable->update($request->all());
        return redirect()->route('coffeeBeanTable.index')->with('success','Coffee Bean Table Entry updated successfully');
    }

    public function destroy(coffeeBeanTable $coffeeBeanTable)
    {
        $coffeeBeanTable->delete();
        return redirect()->route('coffeeBeanTable.index')->with('success','Coffee Bean Table Entry deleted successfully');
    }
}
