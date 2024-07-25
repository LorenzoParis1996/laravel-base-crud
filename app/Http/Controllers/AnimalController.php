<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animal::all();
        return view('pages.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome'=>'required|unique:animals|max:20|min:3',
            'nome_specie'=>'required|unique:animals|max:30|min:4',
            'eta'=>'required|integer|min:1|max:50',
            'sesso'=>'required|unique:animals|max:1',
            'habitat'=>'required|unique:animals|max:30|min:4'
        ]);

        $NewAnimal= new Animal($data); //con le fillable, e commenti i dati o non li metti (i dati singoli)
        //$NewAnimal = new Animal(); // senza le fillable, e metti anche i dati singoli
        //$NewAnimal-> nome = $data['nome'];
        //$NewAnimal-> nome_specie = $data['nome_specie'];
        //$NewAnimal-> eta = $data['eta'];
        //$NewAnimal-> sesso = $data['sesso'];
        //$NewAnimal-> habitat = $data['habitat'];
        $NewAnimal-> save();

        return redirect()->route('pages.show', $NewAnimal);
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        return view('pages.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        return view('pages.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        $data = $request->validate([
            'nome'=>'required|max:20|min:3',
            'nome_specie'=>'required|max:30|min:4',
            'eta'=>'required|integer|min:1|max:50',
            'sesso'=>'required|max:1',
            'habitat'=>'required|max:30|min:4'
        ]);

        //$animal-> nome = $data['nome'];
        //$animal-> nome_specie = $data['nome_specie'];
        //$animal-> eta = $data['eta'];
        //$animal-> sesso = $data['sesso'];
        //$animal-> habitat = $data['habitat'];
        $animal-> update($data);

        return redirect()->route('pages.show', $animal);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()->route('pages.index');
    }
}
