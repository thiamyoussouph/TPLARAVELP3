@extends("layouts.app")
@section("content")
<h1 class="h1 text-success text-center">liste des produits</h1>
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
      <a href=""class="btn btn-outline-warning">editer</a>
      <a href=""class="btn btn-outline-danger">supprimer</a>
    </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection
    