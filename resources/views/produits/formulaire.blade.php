@extends("layouts.app")
@section("content")
<div class="card" style="width: 28rem; margin:  auto; ">
    <div class="card-header bg-success text-white" >
        <h1 class="text-center">Ajouter un produit</h1>
    </div>
    <div class="card-body">
   
      
        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            
              </div>
        @endif
  

      <form method="post" action="{{ route('produit.store') }}">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom produit</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="description">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prix</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="prix">
  </div>
  <select class="form-select" aria-label="Default select example" name="categorie_id">
    @foreach ($categories as $categorie)
  <option selected value="{{$categorie->id}}">{{$categorie->nom}}</option>
  @endforeach
 
</select>
  <button type="submit" class="btn btn-success mt-3" >ajouter</button>
</form>

    </div>
</div>
@endsection