<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use App\Models\Gender;
use App\Models\Universe;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index()
    {
        $superheroes = Superhero::all();
        return view('superheroes.index', compact('superheroes'));
    }

    public function create()
    {
        $genders = Gender::all();
        $universes = Universe::all();
        return view('superheroes.create', compact('genders', 'universes'));
    }

    public function store(Request $request)
    {
        Superhero::create($request->all());
        return redirect()->route('superheroes.index')->with('success', 'Superhero created successfully.');
    }

    public function edit(Superhero $superhero)
    {
        $genders = Gender::all();
        $universes = Universe::all();
        return view('superheroes.edit', compact('superhero', 'genders', 'universes'));
    }

    public function update(Request $request, Superhero $superhero)
    {
        $superhero->update($request->all());
        return redirect()->route('superheroes.index')->with('success', 'Superhero updated successfully.');
    }

    public function destroy(Superhero $superhero)
    {
        $superhero->delete();
        return redirect()->route('superheroes.index')->with('success', 'Superhero deleted successfully.');
    }
}
