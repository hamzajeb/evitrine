@extends('template.frontend')
@section('title')
Evatrine/chaussure_Homme
@endsection

@section('content')
<br>
<p style="font-size: 5vw;text-align:center;color:#12364E;font-weight:bold ">Chaussures pour homme</p>
@if (session()->has('success'))
<div class="alert alert-success">
    {{session()->get('success')}}
</div>   
@endif
<div class="row" style="margin-top:50px;">
        @foreach ($chaussures as $chaussure)
        <div style="display:inline-block;width:320px;margin:0 auto;" >
            <div class="card col-lg-3 col-md-4 col-sm-6 col-12   " >
                <img src={{asset ('./uploads/'.$chaussure["image"])}} alt="" class="card__img"> 
              <br>
                <div class="card__content"> 
                     <div class="card__data">
                         <h1 class="card__title">{{$chaussure["titre"]}}</h1>
                         <span class="card__preci">{{$chaussure["prix"]}}  DH</span>
                         <p class="card__description">{{$chaussure["description"]}}</p>
                         @if(!Auth::user())
                         <a href="{{route('first')}}" class="card__button">Ajouter au panier</a>
                         @endif
                         @if(Auth::user() && Auth::user()->hasRole("utilisateur"))
                        
                         <form action="{{route('addPanier',['titre' =>$chaussure["titre"],'prix' =>$chaussure["prix"],'image' =>$chaussure["image"],'id_user'=>Auth::user()->id ])}}" method="GET" >
                         <label style="color : black"> Quantité :</label>
                         <input type="number" name="quantite" value=1 style="width : 40px;margin-bottom:15px">
                         
                         <button type="submit" class="card__button" >Ajouter au panier</button>
                         </form>
                         
                         @endif
                     </div>
                </div>
            </div>
            <br>
            <br>
            <div style="display:flex;justify-content:center;margin-top :-10px;margin-bottom:20px">
            @if(Auth::user() && Auth::user()->hasRole("admin"))
            <div class="btn"><a href="{{route('chaussure.edit',$chaussure["id"])}}" class="btn btn-primary"><img src="./uploads/modify.png" style="width:20px;margin-top:-5px"> Modifier</a></div>
            <form action="{{route('chaussure.delete',$chaussure->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <div class="btn">
                <button type="submit" class="btn btn-danger"><img src="./uploads/delete2.png" style="width:20px;margin-top:-5px"> Supprimer</button>
              </div>
          </form>
        
        
        @endif
        </div>
        </div>
         @endforeach
         
         <div class="d-flex justify-content-center my-4" >
            {{ $chaussures ->links() }} 
            </div>
        </div>
@endsection

@section('style')
    <style>
        body{
            background-image:url("{{asset ('./uploads/shoe_male.png')}}");
            background-size: 100vw 100%;
            background-repeat: no-repeat;
        }
        :root {
  /*===== Colores =====*/
  --first-color: black;
  --white-color: #E9EAEC;
  --dark-color: #FDAC53;
  --dark-color-lighten: #F2F5FF;
  /*===== Fuente y tipografia =====*/
  --body-font: 'Poppins', sans-serif;
  --h1-font-size: 1.5rem;
  --h2-font-size: 1.25rem;
  --normal-font-size: 1rem;
  --small-font-size: .875rem;
}

/*===== BASE =====*/
*, ::before, ::after {
  box-sizing: border-box;
}

.btn-primary{
background-color: #12364E !important;
border-color : #12364E !important;
}
.btn-danger{
  background-color: black !important;
  border-color : black !important; 
 
}


h1, p {
  margin: 0;
}

a {
  text-decoration: none;
}

img {
  max-width: 100%;
  height: auto;
}

/*===== CARD =====*/


.card {
  width: 320px;
  height: 400px;
  background-color: rgb(255 255 255/0.8);
  border-radius: 1rem;
  padding: 4rem 2rem 0;
  color: var(--white-color);
  overflow-y: hidden;
  margin-top:10px;
}

.card__img {
  position: absolute;
  width: 260px;
  margin-top:-30px;
  filter: drop-shadow(5px 10px 15px rgba(8,9,13,.4));
}

.card__data {
  transform: translateY(13.2rem);
  text-align: center;
}

.card__title {
  font-size: var(--h1-font-size);
  color:black;
  margin-bottom: .5rem;
}

.card__preci {
  display: inline-block;
  font-size: var(--h2-font-size);
  font-weight: 500;
  color:black;
  margin-bottom: 1.25rem;
}

.card__description {
  font-size: 15px;
  text-align: initial;
  margin-bottom: 1.25rem;
  color:black;
  opacity: 0;
}

.card__button {
  display: block;
  width: max-content;
  padding: 5px;
  background-color: #12364E;
  color: var(--white-color);
  border-radius: .5rem;
  font-weight: 600;
  transition: .2s;
  opacity: 0;
}

.card__button:hover {
  box-shadow: 0 18px 40px -12px rgba(242,162,12,.35);
}

.card__img, 
.card__data, 
.card__title, 
.card__preci, 
.card__description {
  transition: .5s;
}

/* Hover card effect */
.card:hover .card__img {
  transform: translate(-1.5rem, -9.5rem) rotate(-20deg);
}

.card:hover .card__data {
  transform: translateY(4.8rem);
}

.card:hover .card__title {
  transform: translateX(-2.3rem);
  margin-bottom: 0;
}

.card:hover .card__preci {
  transform: translateX(-6.8rem);
}



.card:hover .card__description, 
.card:hover .card__button {
  transition-delay: .2s;
  opacity: 1;
}

.card:hover{
    overflow: visible;
}
    </style>
@endsection