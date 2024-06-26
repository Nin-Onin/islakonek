<?php

namespace App\Http\Controllers;

use App\Models\Island;
use Illuminate\Http\Request;

class IslandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $islands = Island::all();
        return view('pages.island.index', compact('islands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.island.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'area' => 'required',
            'total_population' => 'required',
            'islandImage' => 'nullable',
        ]);

        $newIsland = Island::create($data);

        return redirect(route('island.index'));
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Island $island)
    {
        return view('pages.island.edit', compact('island'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Island $island)
    {
        $data = $request->validate([
            'name' => 'required',
            'area' => 'required',
            'total_population' => 'required',
            'islandImage' => 'required',
        ]);

        $island->update($data);

        return redirect(route('island.index'))->with('success', 'Island Updated Succesffully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Island $island)
    {
        $island->delete();
        return redirect(route('island.index'))->with('success', 'Island deleted Succesffully');
    }
}
