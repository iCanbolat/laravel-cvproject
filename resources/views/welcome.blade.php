<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="icon" href="{{ asset ('img/pngegg.png')}}">
       
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
     
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>
    <body >


    
                
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
    <div class="container pt-3">
    <img src="{{ asset ('img/pngegg.png')}}" width="60" height="60" alt="" >

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
        @if (Route::has('login'))
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            @auth
                <a class="nav-link " href="{{Auth::user()->role_id ==1 ? route('employer') : route('employee') }}" style="font-size:large;font-weight:bold">
                <i style="color: #003777;" class="icofont-home px-1"></i> Home</a>
            @else
                <a class="nav-link " href="{{ route('login') }}" style="font-size:large;font-weight:bold">
                <i style="color: #003777;" class="icofont-login px-1"></i> Login</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item active pl-lg-3">
                <a class="nav-link" href="{{ route('register') }}"style="font-size:large;font-weight:bold">
                <i class="icofont-edit px-1" style="color: #003777;"></i>  Register</a>
            @endif
            @endauth
            </li>
        
            </ul>
        </div>
        @endif
        </nav>
    </div>


    <div class="container pb-5" >
        <div class="row  pt-sm-4   " style="height: 60vh;">   
            <div class="col-lg-6 col-sm-12 my-auto order-sm-2 order-lg-2">

                <div class="text-center pb-5 "> 
                    <h5 
                    style="background-color: #003777;padding: 7%;border-radius:100%;color:#fff;font-weight:bolder"
                    >PROFESSIONAL EMPLOYEE-EMPLOYER ZONE
                    </h5>

                    <button type="button"
                    class="btn btn-outline-primary py-2 px-5 my-2" 
                    >Search for employee  <i class="icofont-hand-drawn-right pl-2"></i>
                    </button><br>
                    
                    <button type="button"
                    class="btn btn-outline-primary py-2 px-5 my-2" 
                    >Search for employer  <i class="icofont-hand-drawn-right pl-2"></i>
                    </button>
                </div>

            </div>
            <div class="col-lg-6 col-sm-12 my-auto order-sm-1 order-lg-2">
                <img src="{{ asset('/img/undraw_online_cv_qy9w.svg')}}" class="img-fluid" alt="">
            </div>
        </div>

        <div class="row pt-sm-5" >
            <h1 class="mx-auto">How does it work?</h1>
            
        </div>
        <div class="container">
            <div class="row pt-sm-4" style="height: 38vh;">

              <div class="col-lg-6 my-auto pb-5">
                  <div class="text-center">
                  <h2 class="pb-4 employee">For Employee</h2>
                    <h5><i class="icofont-tick-boxed"></i> Register and build your profile.</h5>
                    <h5><i class="icofont-tick-boxed"></i> Upload your charming CV.</h5>
                    <h5><i class="icofont-tick-boxed"></i > Filter jobs and apply.</h5>
                    <h5><i class="icofont-tick-boxed"></i> Lastly You're Hired!</h5>
                  </div>                               
              </div>

              <div class="col-lg-6 my-auto pb-5">
                  <div class="text-center">
                  <h2 class="pb-4 employee">For Employer</h2>
                    <h5><i class="icofont-tick-boxed"></i> Register and build your company page.</h5>
                    <h5><i class="icofont-tick-boxed"></i> Post a job with proper tags.</h5>
                    <h5><i class="icofont-tick-boxed"></i > Also check out other cv.</h5>
                    <h5><i class="icofont-tick-boxed"></i> Lastly Find and Hire!</h5>
                  </div>                               
              </div>

            </div>
        </div>

    </div>

    <footer  >
        <div class="container-fluid mt-sm-5" style="background-color: #003777;">
            <div class="row py-3"  >
                <div class="col-lg-12 my-auto">
                    <div class="text-center">
                    <img src="{{ asset ('img/pngegg.png')}}" style="background-color:#fff;width:70px" alt=""   class="img-fluid rounded-circle p-2 mb-1  ">
                    <h5 class="text-white my-2" style="font-weight: bold;">Built by Canbolat</h5>
                    <a href=""><i class="icofont-linkedin " style="color: #fff;font-size:200%;"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </footer>


    <section>

    </section>




            

        

         <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
