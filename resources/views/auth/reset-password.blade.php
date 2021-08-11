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

<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <div class="block">
        <label for="email" value="{{ __('Email') }}">
        <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
    </div>

    <div class="mt-4">
        <x-jet-label for="password" value="{{ __('Password') }}" />
        <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
    </div>

    <div class="form-group">
        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <button>
            {{ __('Reset Password') }}
        </button>
    </div>
</form>

   
</div>
@endsection



        

          

    