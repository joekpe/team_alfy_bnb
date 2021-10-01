@extends('layouts.app')

@section('content')
<style>
    body{
        background-color: white;
    },
    form{
        padding-top: 300px;
    },
    .parent {
        position: relative;
        width: 100%;
        margin: 0%;
    }
    .one, .two {
        position: absolute;
        height: 100vh;
        width: 65%;
    }
    .one {
        left: 0;
        top: 0;
        background-color: white;
        -webkit-clip-path: polygon(0 0, 100% 0%, 50% 100%, 0% 100%);
        clip-path: polygon(0 0, 100% 0%, 50% 100%, 0% 100%); 
    }
    .two {
        right: 0;
        top: 0;
        background-image: url('/images/house.svg');
        -webkit-clip-path: polygon(50% 0, 100% 0%, 100% 100%, 0% 100%);
        clip-path: polygon(50% 0, 100% 0%, 100% 100%, 0% 100%); 
        background-repeat: no-repeat;
        background-position: 95%;
        background-size: 500px;
        background-color: rgb(51, 43, 59);
    }
</style>
<div class="parent">
    <div class="one">
        <h3 align="center">Create a Guest BnB Continental Account</h3>
        <div class="container h-100 justify-content-center align-items-center">
            <p align="center"><img src="{{ asset('images/logo.png') }}" alt=""></p>
            <form method="POST" action="{{ route('register') }}">
                @csrf


                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row mb-0 ">
                    <div class="col-md-8 offset-md-4 d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Create Account') }}
                        </button>
                    </div>
                </div>
            </form>
            <div class="col-md-8 offset-md-4">
                <span style="display: inline-block;" class="col-md-2"><hr></span>
                <span>Or create account with</span>
                <span class="col-md-2"  style="display: inline-block;" ><hr></span>
            </div>
            <p class="col-md-8 offset-md-4">Already have an account? <a href="/">Login</a></p>
        </div>
    
    </div>
    <div class="two">

    </div>
</div>
@endsection
