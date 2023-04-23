<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <!-- link css -->
    <link rel="stylesheet" href="{{URL::asset('src/css/dist/normaliz.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('src/css/dist/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('src/css/dist/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('src/css/dist/main.css')}}" />
    <!-- icons script -->
    <script src="https://kit.fontawesome.com/92c7a83d65.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="login-sign-forms">
        <!-- start container -->
        <div class="container">
            
            <!-- start card -->
            <div class="card bx-shadow padding-20">
                <!-- start form-top -->
                <div class="forms-top">
                    
                </div>
                <!-- end form-top -->
                
                <!-- start login-form -->
                <form action="{{ route('login') }}" class="form d-flex column gap-20" id="login-form" method="POST">
                    @csrf
                    <div class="input-group">
                        <label for="">Enter Your Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="input-group">
                        <label for="">Enter Your Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                  
                    </div>

                    <button class="form-toggle btn ">Don't Have Account? Create A New</button>
                    {{-- <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div> --}}

                    <div class="btn-container">
                        {{-- <button class="btn" type="submit">login</button> --}}
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn ">
                              Login
                            </button>

                            {{-- @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif --}}
                        </div>
                    </div>


                </form>
                <!-- end login-form -->
                
                <!-- start signup-form -->
                <form action="{{ route('register') }}" class="form d-flex column gap-20" id="signup-form" method="POST">
                   @csrf
                    
                    <div class="input-group">
                        <label for="">Enter Your Full Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                 
                    </div>
                    
                    <div class="input-group">
                        <label for="">Enter Your Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="input-group">
                        <label for="">Enter Your Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                  
                    </div>
                    <div class="input-group">
                        <label for="">Confirm Your Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>    

                    <button class="form-toggle btn ">Already Have Account? Login Now</button>

                    
                    <div class="btn-container">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn">
                                Signup                           
                            </button>
                        </div>
                    </div>


                </form>
                <!-- end signup-form -->

                
            </div>
            <!-- end card -->
            
        </div>
        <!-- end container -->
    </div>


    <script src="src/js/jquery-3.6.0.js"></script>
    <script src="src/js/owl.carousel.min.js"></script>
    <script src="src/js/main.js"></script>
</body>

</html>