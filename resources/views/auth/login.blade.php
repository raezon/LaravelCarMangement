@extends('layouts.app')

@section('main')

<section class="ftco-section">

<div class="container">
<div class="row justify-content-center">

<div class="col-md-6 text-center mb-5">
<h2 class="heading-section">App Gestion Parc Auto </h2>
<h4>Espace d'authentification</h4>
</div>

</div>
<div class="row justify-content-center">
<div class="col-md-6 col-lg-4">
<div class="login-wrap p-0">
<form method="POST" action="{{ route('login.custom') }}">
{{ csrf_field() }}
    <div class="form-group">
<label for="email">Nom d'utilisateur</label>
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
   @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    </div>

    <div class="form-group">
<label for="password">Mot de passe</label>
<input id="password" type="password" class="form-control" placeholder="Mot de Passe" name="password" required>
        @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
    </div>

    <div class="d-grid mx-auto">
        <button type="submit" class="form-control btn btn-primary submit px-3">Connexion</button>      
    </div> 
<div class="social d-flex text-center">
@if (Route::has('password.request'))
<a href="{{ route('password.request') }}" class="w-100 text-center">Mot de passe oublié</a>
@endif 
</div>
<div class="social d-flex text-center">
<a href="{{ route('register-user') }}" class="w-100 text-center">Vous n'avez pas un compte?</a>
</div>

</form>
</div>
</div>
</div>
</section>

@endsection

