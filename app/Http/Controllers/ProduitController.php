<?php

namespace App\Http\Controllers;


use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prduits= Produit::all();
       
        return view("produits.index",compact("prduits"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories= Categorie::all();
        return view("produits.formulaire",compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate=$request->validate([
            "nom"=>"required|string|max:35|min:3|unique:produits",
            "prix"=>"required",
            "description"=>"required",
            "categorie_id"=>"required"
        ],[
            "nom.required"=>"le nom est obligatoire ",
            "nom.string"=>"le nom doit etre une chaine de caractere",
            "nom.max"=>"le nom doit pas depasser 35 caracteres",
            "nom.min"=>"le nom doit pas etre inferieur a 3 caracteres",
            "nom.unique"=>"le nom doit etre unique",
            "prix.required"=>"le prix est obligatoire",
            "description.required"=>"la description est obligatoire",
            "categorie_id.required"=>"la la categorie  doit obligatoire"
        ]);


        //premiere methode
    // Produit::create([
    //     "nom"=>$request->nom,
    //     "prix"=>$request->prix,
    //     "description"=>$request->description
    // ]);
//deuxieme methode
    $produit= new Produit();
    $produit->nom=$request->nom;
    $produit->prix=$request->prix;
    $produit->description=$request->description;
    $produit->categorie_id=$request->categorie_id;
    $produit->save();
    return redirect()->route("produit.index")->with("success","le produit a ete ajouter avec succes");

    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
       

        return view("produits.detail",compact("produit"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        return view("produits.edit",compact("produit"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
         $produit->nom=$request->nom;
    $produit->prix=$request->prix;
    $produit->description=$request->description;
    $produit->save();
    return redirect()->route("produit.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route("produit.index");
    }
}
