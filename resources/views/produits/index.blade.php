 @extends("layouts.app")
@section("content")
<a href="{{ route('produit.create') }}" class="btn btn-success"style="margin-left:75%; margin-top: 50px;">Ajouter un produit</a>
<div class="card" style="width: 68rem; margin:  auto; ">
    <div class="card-header bg-success text-white">
        <h1 class="text-center">Liste des produits</h1>
    </div>
    <div class="card-body">
      

<table class="table table-hover">
  <thead class="table-success">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Prix</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($prduits as $produit)
    <tr>
      <th scope="row">{{ $produit->id }}</th>
      <td>{{ $produit->nom }}</td>
      <td>{{ $produit->description }}</td>
      <td>{{ $produit->prix }}</td>
      <td><a href="{{route('produit.detail',$produit->id )}}" class="btn btn-outline-success">detail</a>
      <a href="{{route('produit.edit',$produit->id )}}"class="btn btn-outline-warning">editer</a>
     <form action="{{ route('produit.delete', $produit->id) }}" method="post">
        @csrf
        @method("DELETE")
        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">sup</button>
      </form>
    </td>
    </tr>
  @endforeach
  </tbody>
</table>
    
    </div>
</div>
@endsection
