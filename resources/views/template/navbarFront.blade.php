
<nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
    <div class="container-fluid" style="background-color:rgba(0,0,0,0.6)">
      <a class="navbar-brand" href="{{route('first')}}"><img style="  height: 55px;width: 55px;border-radius: 50%;"  src="https://static.vecteezy.com/system/resources/thumbnails/004/206/401/small/hi-logo-monogram-emblem-style-with-crown-shape-design-template-free-vector.jpg"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          @if(!Auth::user())
        <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}" style="font-size: 20px;color:white;margin-left:50px"> <img src="./uploads/login.png" style="width:40px;margin-top:-5px">  Se connecter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}" style="font-size: 20px;color:white;margin-left:50px"><img src="./uploads/identifier.png" style="width:30px;margin-top:-5px">  s'identifier</a>
          </li>
          @endif
          @if(Auth::user())
        
        <form id="logout-form" action="{{ url('logout') }}" method="POST">
        {{ csrf_field() }}
            <button type="submit" style="font-size: 20px;color:white;margin-left:50px; border:none; background-color: transparent;margin-top:8px"> <img src="./uploads/logout.png" style="width:40px;margin-top:-5px">  Se Déconnecter</button>
        </form>
           
        
          @endif
          
          <li class="nav-item">
            
          @if(Auth::user() && Auth::user()->hasRole("admin"))
            <a class="nav-link" href="{{route('form.add')}}" style="font-size: 20px;color:white;margin-left:50px;"> <img src="./uploads/shoe.png" style="width:35px;margin-top:-5px">  ajouter un produit</a>
            @endif
          </li>
          </ul>
          
          
        
        @if(Auth::user())
        <form class="d-flex">
          <a class="nav-link"  href="{{route('Panier',['id_user' =>Auth::user()->id])}}" style="font-size: 20px;color:white;margin-right:40px"><img src={{asset("./uploads/user_icon.png")}} style="margin-top:-7px;margin-right:10px;">{{Auth::user()->name}}</a>
          @if(Auth::user() && Auth::user()->hasRole("utilisateur"))
          <a class="btn btn-outline-light" href="{{route('Panier',['id_user' =>Auth::user()->id])}}" style=><i style="color:black;padding-top:7px; "class="fas fa-shopping-cart"></i></a>
          @endif
        </form>
        @endif

      </div>
    </div>
  </nav>
      <div class="wrapper">
         <input type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn" style="background-color:rgba(0,0,0,0.6)">
         
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
         <nav id="sidebar" style="z-index: 10; height:473px">
            <div class="title" style="background-color:black">
            Catégories
            </div>
            <ul class="list-items">
               <div class="x" style="color: #12364e;font-weight:bold"><i class="fas fa-male"></i>  Hommes</div>
               <li><a href="{{route('show1')}}">Les chaussures</a></li>
               <li><a href="{{route('show')}}">Les espadrilles</a></li>
               <div class="x" style="color: #5e5251;font-weight:bold"><i class="fas fa-female"></i>  Femmes</div>
               <li><a href="{{route('show2')}}">Les escarpins</a></li>
               <li><a href="{{route('show3')}}">Les sandales plates</a></li>
               <div class="x" style="color: #699171;font-weight:bold"><i class="fas fa-child"></i>  Enfants</div>
               <li><a href="{{route('show4')}}">Les bottines</a></li>
               <li><a href="{{route('show5')}}">Les espadrilles</a></li>
               <div class="x" style="color: #9e8c6c"><i class="fas fa-child"></i></div>
            </ul>
         </nav>
        </div>

<style>
.x{
    font-size: 20px;
}
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  /* font-family: 'Lobster', cursive; */
}
.wrapper{
  height: 100%;
  width: 300px;
  position: relative;
}
.wrapper .menu-btn{
  position: absolute;
  left: 20px;
  top: 10px;
  background: #4a4a4a;
  color: #fff;
  height: 45px;
  width: 45px;
  z-index: 9999;
  border: 1px solid #333;
  border-radius: 5px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}
#btn:checked ~ .menu-btn{
  left: 247px;
}
.wrapper .menu-btn i{
  position: absolute;
  transform: ;
  font-size: 23px;
  transition: all 0.3s ease;
}
.wrapper .menu-btn i.fa-times{
  opacity: 0;
}
#btn:checked ~ .menu-btn i.fa-times{
  opacity: 1;
  transform: rotate(-180deg);
}
#btn:checked ~ .menu-btn i.fa-bars{
  opacity: 0;
  transform: rotate(180deg);
}
#sidebar{
  position: fixed;
 
  height: 70%;
  width: 270px;
  overflow: hidden;
  left: -270px;
  transition: all 0.3s ease;
}
#btn:checked ~ #sidebar{
  left: 0;
}
#sidebar .title{
  line-height: 65px;
  text-align: center;
  background: #333;
  font-size: 25px;
  font-weight: 600;
  color: #f2f2f2;
  border-bottom: 1px solid #222;
}
#sidebar .list-items{
  position: relative;
  background: black;
  width: 100%;
  height: 100%;
  list-style: none;
}
#sidebar .list-items li{
  padding-left: 40px;
  line-height: 50px;
  border-top: 1px solid rgba(255,255,255,0.1);
  border-bottom: 1px solid #333;
  transition: all 0.3s ease;
}
#sidebar .list-items li:hover{
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  box-shadow: 0 0px 10px 3px #222;
}
#sidebar .list-items li:first-child{
  border-top: none;
}
#sidebar .list-items li a{
  color: #f2f2f2;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  height: 100%;
  width: 100%;
 
}
#sidebar .list-items li a i{
  margin-right: 20px;
}
#sidebar .list-items .icons{
  width: 100%;
  height: 40px;
  text-align: center;
  position: absolute;
  bottom: 100px;
  line-height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
}
#sidebar .list-items .icons a{
  height: 100%;
  width: 40px;
  display: block;
  margin: 0 5px;
  font-size: 18px;
  color: #f2f2f2;
  background: #4a4a4a;
  border-radius: 5px;
  border: 1px solid #383838;
  transition: all 0.3s ease;
}

.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: #202020;
  z-index: -1;
  width: 100%;
  text-align: center;
}
.content .header{
  font-size: 45px;
  font-weight: 700;
}
.content p{
  font-size: 40px;
  font-weight: 700;
}

</style>