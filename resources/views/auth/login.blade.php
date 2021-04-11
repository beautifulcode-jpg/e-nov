@extends('layouts.app')

@section('content')

<ul style="justify-content: center" class="actions small">
    @guest
    <li><a href="/login/admin" class="button  small">Admin</a></li>
    <li><a href="/login/writer" class="button  small">Rédaction</a></li>
    <li><a href="/register" class="button  small">S'enregistrer</a></li>
    @endguest
</ul>

@isset($url)
<form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
@else
<form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
@endisset
    @csrf
    <div class="row gtr-50 gtr-uniform">
        <div class="col-6 col-12-mobilep">
            Adresse mail :
            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <input type="text" name="email" id="email" placeholder="Adresse mail"/>
        </div>
        <div class="col-6 col-12-mobilep">
            Mot de passe :
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            <input type="password" name="password" id="password" placeholder="Mot de passe" />
        </div>
    </div>
    <br>
    <div class="row gtr-50 gtr-uniform">
        <div class="col-8 col-12-mobilep">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                <label class="form-check-label" for="remember">
                    {{ __('Se souvenir de ce navigateur') }}
                </label>
            </div>
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
