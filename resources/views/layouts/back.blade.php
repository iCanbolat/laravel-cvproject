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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    </head>
    <body >


    
                
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
    <div class="container pt-3">
    <a  href="{{url('/')}}"><img src="{{ asset ('img/pngegg.png')}}" width="60" height="60" alt="" ></a>

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


    <main class="py-4">
            @yield('content')
        </main>


    



    <!-- Footer  -->

    <footer  >
        <div class="container-fluid mt-sm-5 " style="background-color: #003777;">
            <div class="row py-2"  >
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




            

        

         <script src="{{ asset('js/app.js') }}"  ></script>
         <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 
         @if (Session::has('post_added'))
            <script>
                toastr.success("{!! Session::get('post_added') !!}");
            </script>
            @endif


            @if (Session::has('post_deleted'))
            <script>
                toastr.success("{!! Session::get('post_deleted') !!}");
            </script>
            @endif    


         <script>
         $(document).ready(function(){

            $('#fullname').on("input", function(){
                var word = $(this).val()
                $('#card-name').text(word);
            });
            $('#sum').on("input", function(){
                var word = $(this).val()
                $('#card-sum').text(word);
            });
            $('#skill').on("input", function(){
                var word = $(this).val()
                $('#card-skill').text(word);
            });
         })
         


         $('#companyimage').change(function(event){
             var url = URL.createObjectURL(event.target.files[0]);
             $('#company-img').attr("src" , url);
         })
         $('#profile-image').change(function(event){
             var url = URL.createObjectURL(event.target.files[0]);
             $('#profile-img').attr("src" , url);
         })

         $('#companyname').on("input", function(){
                var word = $(this).val()
                $('#company-name').text(word);
            });

            $('#jobtitle').on("input", function(){
                var word = $(this).val()
                $('#company-job').text(word);
            });

        $('#companysummary').on("input", function(){
            var word = $(this).val()
            $('#company-sum').text(word);
        });


        $('#exampleFormControlSelect1').on('change', function() {
            $('#location').text(this.value);
            });

        $('#exampleFormControlSelect2').on('change', function() {
            $('#sector').text(this.value);
            });
            
            
         
         

        </script>
    </body>
</html>
