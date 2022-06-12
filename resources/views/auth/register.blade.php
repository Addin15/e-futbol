<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Futbol: Register</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="flex h-screen">
            <div class="m-auto w-80">
                <div class="card-header mb-5 text-center font-bold text-xl">Sign Up</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <!-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label> -->

                            <div class="col-md-8">
                                <div class="border-2 border-color-primary px-3 py-2">
                                    <input id="name" type="text"
                                        class="outline outline-0 form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Username">
                                </div>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                            <div class="col-md-8">
                                <div class="border-2 border-color-primary px-3 py-2">
                                    <input id="email" type="email"
                                        class="outline outline-0 form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Email">
                                </div>


                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->

                            <div class="col-md-8">
                                <div class="border-2 border-color-primary px-3 py-2">
                                    <input id="password" type="password"
                                        class="outline outline-0 border-none form-control @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="new-password" placeholder="Password">
                                </div>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> -->

                            <div class="col-md-8">
                                <div class="border-2 border-color-primary px-3 py-2">
                                    <input id="password-confirm" type="password" class="outline outline-0 form-control"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Confirm Password">
                                </div>

                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="flex content-center">
                                <button type="submit" class="btn bg-color-primary text-white px-10 py-1 m-auto">
                                    {{ __('Sign Up') }}
                                </button>
                            </div>
                        </div>

                        <div class="flex content-center mt-3">
                            <div class="m-auto">
                                <div class="">Already have an account? <a
                                        class="font-bold inline-block text-color-primary" href="#"> Log
                                        In</a>
                                </div>

                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </body>

</html>