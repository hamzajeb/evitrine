@extends('template.frontend')
@section('title')
Evatrine
@endsection
@section('style')
    <style>
        body{
            background-image:url("{{asset ('./uploads/home.png')}}");
            background-size: 100vw 100vh;
            background-repeat: no-repeat;
        }
        .texte{
            position: absolute;
            top: 50vh;
            left: 50vw;
            transform: translate(-50%,-50%);
            height: 450px;
            width: 400px;
            background-color: rgb(158 140 108/0.3);
            padding: 40px;
            text-align: center;
            color: black;
            border-radius: 5px;
            border: 2px solid white;
        }
    </style>
@endsection
@section('content')
    <div class="texte">
    
        <img style="  height: 95px;width: 95px;border-radius: 50%;border:2px solid ;opacity:1"  src="https://static.vecteezy.com/system/resources/thumbnails/004/206/401/small/hi-logo-monogram-emblem-style-with-crown-shape-design-template-free-vector.jpg">
        <p style="font-size: 25px">HI est la meilleur. HI sont les meilleures chaussures. Cela méritait d’être la meilleure marque de chaussures au monde. C’est la durabilité, le confort et les designs sont les meilleurs.</p>
    </div>
@endsection