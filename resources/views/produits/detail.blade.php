@extends('layouts.app')
@section('content')

<div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem; margin:  auto; margin-top: 50px;">
 
  <div class="card-body">
    <h5 class="card-title bg-success text-white h1">{{ $produit->nom }}</h5>
   
    <p class="card-text H2">{{ $produit->description }}</p>
    <p class="card-text h2">{{ $produit->prix }}</p>
    <a href="{{ route('produit.index') }}" class="btn btn-success">retour  </a>
  </div>
</div>
@endsection