@extends('layouts.wel')

@section('content')

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form" >
                    @csrf
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
                    <span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <span class="focus-input100" data-placeholder="Email"></span>
                        @error('email')--}}
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                        <input type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                        <div class="text-center">
							<span class="txt1">
								Don’t have an account?
							</span>

                            <a class="txt2" href="{{route('register')}}">
                                Sign Up
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
