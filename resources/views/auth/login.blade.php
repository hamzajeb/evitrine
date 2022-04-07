@extends('template.frontend')

@section('content')
<div class="container" id="login" style="border:2px solid black;width:40%; margin-top:40px;border-radius:10%">
<h2 style="color:white; text-align: center;">Se Connecter</h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3" >
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Adresse Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="color:black">
                                        {{ __('se souvient') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color:black;border-color:black">
                                    {{ __('Se connecter') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color:black">
                                        {{ __('Mot de passe oublié') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
        body{
            background-image:url("{{asset ('./uploads/home.png')}}");
            background-size: 100vw 100vh;
            background-repeat: no-repeat;
            height: 450px;
        }
        #login{
        position: absolute;
            top: 50vh;
            left: 50vw;
            transform: translate(-50%,-50%);
            background-color: rgb(158 140 108/0.3);
            padding: 40px;
           
            color: black;
            border-radius: 5px;
            border: 2px solid white;
        }
</style>
