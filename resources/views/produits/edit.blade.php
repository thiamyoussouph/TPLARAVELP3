@extends("layouts.app")
@section("content")
<div class="card" style="width: 28rem; margin:  auto; ">
    <div class="card-header bg-success text-white" >
        <h1 class="text-center">Ajouter un produit</h1>
    </div>
    <div class="card-body">
      
      <form method="post" action="{{ route('produit.update', $produit->id) }}">
        @csrf
        @method("PUT")
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom produit</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom" value="{{ $produit->nom }}">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="{{ $produit->description }}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prix</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="prix" value="{{ $produit->prix }}">
  </div>
  <button type="submit" class="btn btn-success">modifier</button>
<a href="{{ route('produit.index') }}" class="btn btn-secondary">Annuler</a>
</form>

    </div>
</div>
@endsection