@extends('template.frontend')
@section('title')
Panier
@endsection
@section('style')
    <style>
        body{
            background-image:url("{{asset ('./uploads/shopy.png')}}");
            background-size: 40vw 60vh;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: bottom left; 
        }
        

    </style>
@endsection
@section('content')
@if(count($produits)!=0)
<table class="table" style="margin: 0 auto;width:65vw">
    <thead>
      <tr>
        <th scope="col" style="font-size: 20px;text-align:center">Titre</th>
        <th scope="col" style="font-size: 20px;text-align:center">Produit</th>
        <th scope="col" style="font-size: 20px;text-align:center">Quantité</th>
        <th scope="col" style="font-size: 20px;text-align:center">Prix</th>
        <th scope="col" style="font-size: 20px;text-align:center">Supprimer</th>
      </tr>
    </thead>
    <tbody>
@endif
      
        <input type="hidden" {{$x=0;}} >
        @foreach($produits as $produit)
        
        <input type="hidden" {{$x=$x+$produit["prix"]*$produit["quantite"]}}>
        
      <tr style="border-bottom: 4px solid rgb(124, 123, 123);">
        <td style="font-size: 18px ;text-align:center">{{$produit["titre"]}}</td>
        <td style="text-align:center"><img src={{asset ('./uploads/'.$produit["image"])}} alt="" class="card__img" style="width: 100px"> </td>
        <td style="font-size: 18px;text-align:center">{{$produit["quantite"]}}</td>
        <td style="font-size: 18px;text-align:center">{{$produit["prix"]*$produit["quantite"]}} DH</td>
        <td style="font-size: 18px;text-align:center">
        <a id="supprimer" href="{{route('Supprimer',['id' => $produit['id']])}}" style="text-decoration:none;"><img src="{{asset ('./uploads/delete.png')}}" style="width:30px;"></a>
        
      </td>
      
   
      </tr>
     
      @endforeach
      
      <tr>
        <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>
        @if(count($produits)!=0)
        <td scope="col" style="font-size: 20px">Prix:  {{$x}} DH</td>
        @endif
      </tr>
      <tr>
        <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>
        @if(count($produits)!=0)
        <td scope="col" style="font-size: 40px"><a href="{{route('Payer',['id_user'=>Auth::user()->id])}}" class="btn btn-success" style="backgroung-color:#7F683B">Valider</a></td>
       @endif 
       @if (count($produits) == 0)
   
        <h3 style=" display: flex; justify-content: center; align-items: center; margin-top:35vh" >Votre Panier Est Vide ☹</h3>
   
    
        @endif
      </tr>
    </tbody>
  </table>

  <style>
.btn-success{
  background-color: rgba(0,0,0,0.6) !important;
  border-color: rgba(0,0,0,0.6) !important;
}
</style>
@endsection