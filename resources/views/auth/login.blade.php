@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">

    <div class="col-lg-10 mt-5  ">
                <div class="card shadow-lg rounded">
                <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                             @csrf
                  <div class="form-group row p-5">

                     <div class="col-lg-6 col-sm-12   text-center">
                     <img src="{{ asset('img/signin-image.jpg')}}" class="img-fluid"><br>
                     <h5 class="mt-3"><a href=""> Create an account</a></h5>                   
                    </div>

                     <div class="col-lg-6 col-sm-12 text-center login">
                         <h3 class="mb-5"><strong>Sign in</strong></h3>
                         
                         <div class="form-group">                               

                                <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text " style="background-color: white;border :none ;
                                        border-bottom: 2px solid #003777;" id="addon-wrapping"><i class="icofont-user"></i></span>
                                    </div>
                                    <input type="email" id="email" class="form-control style shadow-none @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autocomplete="email" placeholder="example@hotmail.com"    aria-describedby="addon-wrapping">
                                    </div>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group">
                            <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text " style="background-color: white;border :none ;
                                        border-bottom: 2px solid #003777;" id="addon-wrapping"><i class="icofont-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control style shadow-none @error('password') is-invalid @enderror " id="password" name="password" required placeholder="password">
                                    
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>
                           
                            </div>

                            <div class="form-group">
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <button
                            class="btn btn-outline-primary py-2 px-5 my-2" 
                            type="submit"
                            >Login  <i class="icofont-hand-drawn-right pl-2"></i>
                            </button><br>

                            @if (Route::has('password.request'))
                                    <a class="btn btn-outline-primary py-2 px-5 my-2" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif


                            </form>
                    </div>
            
                    </div>
                </div>

                </div>
            </div>
    

@endsection
