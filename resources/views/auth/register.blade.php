@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-10 mt-5  ">
                <div class="card shadow-lg rounded">
                <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                             @csrf
                  <div class="form-group row p-5">

                     <div class="col-lg-6 col-sm-12 order-1   text-center">
                     <img src="{{ asset('img/signup-image.jpg')}}" class="img-fluid"><br>
                                   
                    </div>

                     <div class="col-lg-6 col-sm-12 text-center login">
                         <h3 class="mb-5"><strong>Sign up</strong></h3>
                         
                         <div class="form-group">       
                             
                         

                         <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text " style="background-color: white;border :none ;
                                        border-bottom: 2px solid #003777;" id="addon-wrapping"><i class="icofont-user"></i></span>
                                    </div>
                                    <input type="text" id="name" class="form-control style shadow-none @error('email') is-invalid @enderror" name="name" value="{{old('email')}}" required autocomplete="name" placeholder="Your name"    aria-describedby="addon-wrapping">
                                    </div>



                                <div class="input-group flex-nowrap mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text " style="background-color: white;border :none ;
                                        border-bottom: 2px solid #003777;" id="addon-wrapping"><i class="icofont-email"></i></span>
                                    </div>
                                    <input type="email" id="email" class="form-control style shadow-none @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autocomplete="email" placeholder="Example@hotmail.com"    aria-describedby="addon-wrapping">
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
                                    <input type="password" class="form-control style shadow-none @error('password') is-invalid @enderror " id="password" name="password" required placeholder="Password">
                                    
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>

                                <div class="input-group flex-nowrap mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text " style="background-color: white;border :none ;
                                        border-bottom: 2px solid #003777;" id="addon-wrapping"><i class="icofont-key-hole"></i></span>
                                    </div>
                                    <input type="password" class="form-control style shadow-none @error('password') is-invalid @enderror " id="password-confirm" name="password_confirmation" required placeholder="Confirm password">
                                    
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>
                           
                            </div>

                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1" name="role_id" value="1"/>
                                <label class="custom-control-label" for="customSwitch1">I am an employer</label>
                            </div>
                

                            <button
                            class="btn btn-outline-primary py-2 px-5 my-2 my-sm-3" 
                            type="submit"
                            >Register  <i class="icofont-hand-drawn-right pl-2"></i>
                            </button><br>

                          


                            </form>
                    </div>
            
                    </div>
                </div>
    </div>
</div>
@endsection
