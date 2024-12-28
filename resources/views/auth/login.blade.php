{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('login')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('home.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Login Page')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Login</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-danger" href="{{ url('/') }}">Home</a></li>

                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Head End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <p class="fs-5 fw-medium text-danger">Login</p>
                    <h1 class="display-5 mb-4">Welcome Back!</h1>
                    <p class="mb-4">Please enter your credentials to log in.</p>

                    <form method="post" action="{{ route('login') }}">
                        @csrf


                        <div class="row g-3">

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="login" id="login"
                                        placeholder="Enter username / phone / email" :value="old('login')" required autofocus
                                        autocomplete="username">
                                    <label for="login">Username / Phone / Email</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password"
                                        required autocomplete="current-password">
                                    <label for="password">Password</label>
                                </div>
                                <x-input-error :messages="$errors->get('login')" class="mt-2 text-danger text-bold" />

                            </div>


                            <div class="col-md-12 mt-5">
                                {{-- <button class="btn btn-danger py-3 px-5" type="submit">Login</button> --}}
                                <input type="submit" class="btn btn-danger py-3 px-5" value="Sign In">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style=" object-fit: cover;">
                    <div class="position-relative rounded overflow-hidden h-100 ">
                        <img class="position-relative w-100 h-100" src="../assets/img/login.jpg"
                            style=" border:0; object-fit: cover; max-height: 26rem;" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


@endsection

{{-- <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" class="form-control" id="login" name="login" :value="old('login')" required
            autofocus autocomplete="username" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form> --}}
