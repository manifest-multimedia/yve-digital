<x-auth-layout>

    <x-slot name="title">
    YVE - Music Distribution Platform Login    
    </x-slot>
    
<p class="auth-description">Login to Your Account 
    <br> Don't have an account? 
    <a href="/register">Register</a>
</p>

<x-alert-error />

<form method="POST" action="{{ route('login') }}">
    @csrf
<div class="auth-credentials m-b-xxl">
    <label for="signInEmail" class="form-label">Email address</label>
    <input type="email" class="form-control m-b-md" id="signInEmail" aria-describedby="signInEmail" 
    placeholder="info@yvedigital.com" name="email" required autofocus>

    <label for="signInPassword" class="form-label">Password</label>
    <input type="password" class="form-control" id="signInPassword" aria-describedby="signInPassword" 
    placeholder="Password"  name="password" required autocomplete="current-password">
</div>

<div class="auth-submit">
    <button type="submit" class="btn btn-primary">Login</button>
    <a href="#" class="auth-forgot-password float-end">Forgot password?</a>
</div>
</form> 
<div class="divider"></div>
<div class="auth-alts">
@if (JoelButcher\Socialstream\Socialstream::show())

    
        <a href="/oauth/facebook" class="auth-alts-facebook"></a>
        <a href="/oauth/google" class="auth-alts-google"></a>
       
    


@endif
</div>
{{-- <div class="auth-alts">
    <a href="#" class="auth-alts-google"></a>
    <a href="/oauth/facebook" class="auth-alts-facebook"> Facebook Login</a>
    <a href="#" class="auth-alts-twitter"></a>
</div> --}}

</x-auth-layout>
{{-- @extends('layouts.athentication')

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
@endsection --}}