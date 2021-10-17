@extends('layouts.athentication')

@section('page-title', 'Login')
@section('form-title', 'Welcome')
@section('new', 'New Here?')
@section('new-action', 'Sign Up')
@section('action-url', '/register')


@section('form')

<x-jet-validation-errors class="mb-4" />

@if (session('status'))
<div class="mb-4 font-medium text-sm text-green-600">
    {{ session('status') }}
</div>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf
    
    <div class="form-group">
       <!-- <label for="email">Email</label> -->
        <input type="email" class="form-control" id="email" placeholder="info@yvedigital.com" name="email" required autofocus>
    </div>

    <div class="form-group">
        <!-- <label for="email">Password</label> -->
        <input type="Password" class="form-control" id="password" placeholder="Password"  name="password" required autocomplete="current-password">
    </div>

    <button type="submit" class="btn btn-primary btn-block mb-4 btn-circle shadow-btn2 acctacces-btn">Log In</button>

</form>

<div class="social-logins text-center">

    <div class="text-left mb-4">
        @if (Route::has('password.request'))
        <small class="fgp">
        <a href="{{ route('password.request') }}">
            {{ __('Forgot password?') }}
        </a>
        </small>
        @endif
        
    
    </div>

    <small class="orsignin">OR LOG IN WITH</small>

    @if (JoelButcher\Socialstream\Socialstream::show())
        <div class="social-logins-btn d-flex justify-content-center">
            <div class="btn-toolbar mt-2" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                    <a href="/oauth/google"  class="btn btn-lg btn-circle google-btn shadow-btn1 mr-2"> <img src="{{asset('images/google.png')}}" class="img-fluid mr-2">GOOGLE</a>
                </div>
                <div class="btn-group" role="group" aria-label="Third group">
                    <a href="/oauth/facebook"  class="btn btn-lg btn-circle fb-btn shadow-btn1 ml-2"> <img src="{{asset('images/facebook_icon.png')}}" class="img-fluid mr-2">FACEBOOK</a>
                </div>
            </div>
        </div>
    
    @endif

   
</div>
@endsection