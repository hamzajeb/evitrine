@extends('template.backend')
@section('title')
Evatrine/ajouter_article
@endsection

@section('content')
<div class="row my-4">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Ajouter un nouveau produit
                </h3>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('card.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                      <label for="exampleFormControlInput1">titre</label>
                      <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">prix</label>
                        <input type="text" class="form-control" name="prix" id="exampleFormControlInput1" placeholder="prix">
                      </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">image</label>
                        <input type="file" class="form-control" name="image" id="exampleFormControlInput1" >
                      </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">description</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" placeholder="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">category</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" type="text" class="form-control" name="category" id="id"><br>
                            <option selected>selectionner categorie</option>
                            <option value="chaussuresHomme">Les chaussures/Homme</option>
                            <option value="espadrillesHomme">les espadrilles/Homme</option>
                            <option value="escarpinsFemme">Les escarpins/femme</option>
                            <option value="sandalesFemme">Les sandales plates/femme</option>
                            <option value="bottinesEnfant">les bottines/enfant</option>
                            <option value="spadrillesEnfant">les espadrilles/enfant</option>
                        </select>
                      </div>
                    <div class="form-group">
                        <br>
                        <button class="btn btn-primary">
                            Valider
                        </button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection


