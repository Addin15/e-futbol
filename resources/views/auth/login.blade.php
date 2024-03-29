@extends('layouts.nav')

@section('content')
<div class="flex h-screen">
    <div class="m-auto w-80">
        <div class="card-header mb-5 text-center font-bold text-xl">Log In</div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row mb-3">
                    <!-- <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                    <div class="col-md-8">
                        <div class="border-2 border-color-primary px-3 py-2">
                            <input id="email" type="email"
                                class="outline outline-0 border-none form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Email">
                        </div>


                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-5">
                    <!-- <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->

                    <div class="col-md-8">
                        <div class="border-2 border-color-primary px-3 py-2">
                            <input id="password" type="password"
                                class="outline outline-0 border-none form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password" placeholder="Password">
                        </div>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="flex content-center mt-3 mb-3">
                    <div class="m-auto">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>


                <div class="flex content-center my-2">
                    <button type="submit" class="btn bg-color-primary text-white px-10 py-1 m-auto">
                        {{ __('Login') }}
                    </button>

                </div>

                @if (Route::has('password.request'))
                <div class="flex content-center">
                    <a class="btn btn-link m-auto" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection