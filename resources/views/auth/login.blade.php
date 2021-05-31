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
    @csrf
    <div class="form-group mb-3">
        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
            autofocus>
        @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    </div>

    <div class="form-group mb-3">
        <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
        @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
    </div>

    <div class="form-group mb-3">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember"> Remember Me
            </label>
        </div>
    </div>

    <div class="d-grid mx-auto">
        <button type="submit" class="btn btn-dark btn-block">Signin</button>
    </div>
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