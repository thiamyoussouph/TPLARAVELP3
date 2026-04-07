<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categories.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate=$request->validate([
            "nom"=>"required|string|max:25|min:3|unique:categories",
        ],[
            "nom.required"=>"le nom est obligatoire ",
            "nom.string"=>"le nom doit etre une chaine de caractere",
            "nom.max"=>"le nom doit pas depasser 25 caracteres",
            "nom.min"=>"le nom doit pas etre inferieur a 3 caracteres",
            "nom.unique"=>"le nom doit etre unique",
        ]);
        $categorie= new Categorie();
        $categorie->nom=$request->nom;
        $categorie->save();
        return redirect()->route("produit.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        //
    }
}
