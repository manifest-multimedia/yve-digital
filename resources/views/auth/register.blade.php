@extends('layouts.athentication')

@section('page-title', 'Sign Up')
@section('form-title', 'Get Started')
@section('new', 'Already have an account?')
@section('new-action', 'Login')
@section('action-url', '/')


@section('form')

<x-jet-validation-errors class="mb-4" />

@if (session('status'))
<div class="mb-4 font-medium text-sm text-green-600">
    {{ session('status') }}
</div>
@endif

<form method="POST" action="{{ route('register') }}">
    @csrf
    
        <div class="form-group">
            {{-- <label for="name">Name</label> --}}
            <input type="text" class="form-control" id="name" placeholder="Full Name" name="name" required autofocus autocomplete="name">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="name" placeholder="Email" name="email" required>
        </div>

        <div class="form-group">
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required autocomplete="new-password">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
        </div>
        

        {{-- <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1">
                <option selected disabled="">Country</option>
                <option>Ghana</option>
                <option>Nigeria</option>
                <option>Togo</option>
            </select>
        </div> --}}

        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="mt-4">
            <x-jet-label for="terms">
                <div class="flex items-center">
                    <x-jet-checkbox name="terms" id="terms"/>

                    <div class="ml-2">
                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                        ]) !!}
                    </div>
                </div>
            </x-jet-label>
        </div>
        @endif 

        <button type="submit" class="btn btn-primary btn-block mt-1 mb-2 btn-circle shadow-btn2 acctacces-btn">Sign Up</button>
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
                    <a href="/oauth/facebook"  class="btn btn-lg btn-circle fb-btn shadow-btn1 ml-2"> <img src="{{asset('images/facebook.png')}}" class="img-fluid mr-2">FACEBOOK</a>
                </div>
            </div>
        </div>
    
    @endif

   
</div>
@endsection

   

