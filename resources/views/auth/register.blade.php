@extends('layouts.app')

@section('content')

@isset($url)
<form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
@else
<form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
@endisset
@csrf
    <div class="row gtr-50 gtr-uniform">
        <div class="col-7 col-12-mobilep">
            Nom complet :
            <input type="text" name="name" id="name" placeholder="Nom Prénom"/>
        </div>
        <div class="col-7 col-12-mobilep">
            Adresse mail :
            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <input type="text" name="email" id="email" placeholder="Adresse mail"/>
        </div>
        <div class="col-7 col-12-mobilep">
            Mot de passe :
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            <input type="password" name="password" id="password" placeholder="Mot de passe" />
        </div>
        <div class="col-7 col-12-mobilep">
            Confirmation du mot de passe :
            <input type="password" name="password_confirmation" id="password-confirm" placeholder="Confirmez le mot de passe" />
        </div>
    </div>
    <br>
    <div class="row gtr-50 gtr-uniform">
        
        <div class="col-4 col-12-mobilep">
            <input type="submit" value="Valider" class="fit" />
        </div>
    </div>
</form>
@endsection
