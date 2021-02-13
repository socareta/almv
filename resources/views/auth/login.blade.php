@extends('layouts.app')

@section('content')
<div class="container" style="height:70vh;margin:160px auto;">
    <div class="row justify-content-center">
        <div class="col-md-6 " >
            <div class="card">

                <div class="card-body">
                    <h2 class="text-center">SIGN IN</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <div class="col-md-12">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">

                            <div class="col-md-12">
                                <label for="">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 justify-content-center">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>

                                
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-12 text-center">
                             @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            <p>
                            New to Alo Moves? <a href=""> Sign Up</a>
                            </p>

                            OR

                            <a href="" class="btn btn-block btn-light   ">SIGN IN WITH FACEBOOK</a>
                            <a href="" class="btn btn-block  btn-light">SIGN IN WITH INSTAGRAM</a>
                        </div>
                      
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
