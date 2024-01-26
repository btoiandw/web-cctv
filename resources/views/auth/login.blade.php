<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo-cctv1.png') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
    .bg-text {
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/opacity/see-through */
        color: white;
        font-weight: bold;
        border: 3px solid #f1f1f1;
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 40%;
        padding-top: 2rem;
        padding-bottom: 1.5rem;
        text-align: center;
        border-radius: 20px;
    }
    .btn-submit{
        padding-bottom: 10px;
        padding-top: 10px;
        padding-left: 40px;
        padding-right: 40px;
        font-size: 20px;
        font-weight: bold;
    }
    .btn-submit:hover{
        background-color: #86A7FC;
        box-shadow: 4px 4px #888888; 
        color: #000;
        font-size: 20px;
        font-weight: bold;
    }
</style>

<body>
    <div
        style="background-image: url('{{ asset('img/bg1.jpg') }}'); position: fixed;
            width: 100vw;
            height: 100vh;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            -webkit-background-size: cover;
            background-size: cover;
            filter: blur(4px);
            -webkit-filter: blur(4px);
            ">
    </div>
    <div class=" container-fluid">

        <div class="bg-text">
            <div class="row mt-3 mb-3">
                <h1 style="font-weight: 900">LOGIN</h1>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row mt-3 mb-3">
                    <label for="username" class="col-md-3 col-form-label text-md-end font-weight-bolder">{{ __('Username') }}</label>
                    <div class="col-md-8">
                        <input id="usename" type="text" class="form-control " name="username"
                            value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-3 col-form-label text-md-end font-weight-bolder">{{ __('Password') }}</label>

                    <div class="col-md-8">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- <div class="row mb-3">
                    <div class="col-md-4 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input text-md-end" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div> --}}

                <div class="row mb-0 justify-content-center">
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary btn-submit">
                            {{ __('LOGIN') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div
            style="position: absolute;
                top: 30%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 2;">
            <img src="{{ asset('img/logo-kppmu.png') }}" alt="logo-kppmu" srcset="" width="150px">
            <img src="{{ asset('img/logo-cctv1.png') }}" alt="logo-cctv" srcset="" width="100px">
        </div>
    </div>

    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="username"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="usename" type="text" class="form-control " name="username"
                                        value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

</body>

</html>
