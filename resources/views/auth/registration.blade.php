@extends('layouts.app')
@section('content')
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
<h2 class="heading-section">S'Inscrire</h2>

</div>
</div>
<div class="row justify-content-center">
<div class="col-md-6 col-lg-4">
<div class="login-wrap p-0">
<form action="{{ route('register.custom') }}" method="POST">
@csrf
<div class="form-group">
                            <label for="matricule">{{ __('Matricule') }}</label>
                                <input id="matricule" type="string" class="form-control @error('matricule') is-invalid @enderror" name="matricule" value="{{ old('matricule') }}" required autocomplete="matricule" placeholder="Entrer votre Matricule">
                                @error('matricule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                           
                        </div>
                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Entrer votre email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                           
                        </div>
                        <div class="form-group">
                            <label for="password">{{ __('Mot de passe') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new_password" placeholder="Entrer votre Mot de passe">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">{{ __('Mot de passe') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new_password" placeholder="Confirmer votre Mot de passe">
                        </div>
<div class="form-group">
<button type="submit" class="form-control btn btn-primary submit px-3">S'Inscrire</button>
<div class="social d-flex text-center">
</div>
</form>
</section>
@endsection