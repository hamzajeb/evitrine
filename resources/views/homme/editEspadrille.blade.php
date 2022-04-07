@extends('template.backend')
@section('title')
Evatrine/espadrille_Homme/modifier
@endsection
@section('content')
<div class="row my-4">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Modifier  {{$espadrille->titre}}
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
                <form action="{{route('espadrille.update',$espadrille->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="exampleFormControlInput1">titre</label>
                        <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="title" value="{{$espadrille->titre}}">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">prix</label>
                          <input type="text" class="form-control" name="prix" id="exampleFormControlInput1" placeholder="title" value="{{$espadrille->prix}}">
                        </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">image</label>
                          <input type="file" class="form-control" name="image" id="exampleFormControlInput1" >
                        </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" placeholder="description" >{{$espadrille->description}}</textarea>
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlTextarea1">category</label>
                          <input type="text" class="form-control" name="image" id="exampleFormControlInput1" value="{{$espadrille->category}}" readonly>
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