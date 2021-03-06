@extends('layouts.athentication')

@section('page-title', 'Login')
@section('form-title', 'Password Reset')
@section('new', 'Rembered your password?')
@section('new-action', 'Login')
@section('action-url', '/login')


@section('form')

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-control">
                <label for="email"> {{ __('Email') }} </label>
                <input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Type Registered Email Address" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>

@endsection