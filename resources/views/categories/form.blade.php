@extends("layouts.app")
@section("content")
<div class="card" style="width: 28rem; margin:  auto; ">
    <div class="card-header bg-success text-white" >
        <h1 class="text-center">Ajouter une categorie</h1>
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
  

      <form method="post" action="{{ route('categorie.store') }}">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom categorie</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
   
  </div>
 
  <button type="submit" class="btn btn-success">ajouter</button>
</form>

    </div>
</div>
@endsection