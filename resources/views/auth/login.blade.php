@extends('layouts.app')

@section('content')
<section class="ftco-section">

<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
<h2 class="heading-section">Se Connecter</h2>

</div>
</div>
<div class="row justify-content-center">
<div class="col-md-6 col-lg-4">
<div class="login-wrap p-0">
<form method="POST" action="{{ route('login.custom') }}">
{{ csrf_field() }}
    <div class="form-group">
<label for="email">{{ __('Login') }}</label>
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email/Mobile">
   @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    </div>

    <div class="form-group">
<label for="password">{{ __('Mot de passe') }}</label>
<input id="password" type="password" class="form-control" placeholder="Mot de Passe" name="password" required>
        @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
    </div>

    <div class="d-grid mx-auto">
<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>

@if (Route::has('password.request'))
<a href="{{ route('password.request') }}" class="w-100 text-center">Mot de passe oublié</a>
@endif       
    </div>
</div> 
<div>
<div class="social d-flex text-center">
<a href="{{ route('register-user') }}" class="w-100 text-center">Vous n'avez pas un compte?</a>
</div>
<div class="social d-flex text-center">


</form>
</div>
</div>
</div>
</section>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.9eD6_Mep8S.js"></script><script>eval(mod_pagespeed_T07FyiNNgg);</script>
<script>eval(mod_pagespeed_zB8NXha7lA);</script>
<script>eval(mod_pagespeed_xfgCyuItiV);</script>

@endsection