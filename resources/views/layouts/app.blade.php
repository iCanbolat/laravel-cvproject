<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('img/pngegg.png') }}">

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Styles -->
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
</head>
<body >
    <div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
    <div class="container pt-3">
    <a href="{{url('/')}}"><img src="{{ asset ('img/pngegg.png')}}" width="60" height="60" alt="" ></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">

        
            <ul class="navbar-nav ml-auto">
            @guest
            @if (Route::has('login'))
            <li class="nav-item active">
                <a class="nav-link " href="{{ route('login') }}" style="font-size:large;font-weight:bold">
                <i style="color: #003777;" class="icofont-login px-1"></i> Login</a>
            </li>
            @endif
            @if (Route::has('register'))
            <li class="nav-item active pl-lg-3">
                <a class="nav-link" href="{{ route('register') }}"style="font-size:large;font-weight:bold">
                <i class="icofont-edit px-1" style="color: #003777;"></i>  Register</a>
            @endif
            @else
            </li>
 
            

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="font-weight: bold;color:black" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                   {{ Auth::user()->name }} <i class="icofont-simple-down"></i>
                </a>             

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{Auth::user()->role_id ==1 ? url('eProfile') : url('profile') }}">
                        {{ __('Profile') }} 
                    </a>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
            </ul>
        </div>
       
        </nav>
   

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class=" footer  " >
        <div class="container-fluid mt-sm-5 " style="background-color: #003777;height:auto">
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
    <style>
        
    </style>
    <script src="{{ asset('js/app.js') }}"  ></script>
    <script src="{{ asset('js/vanilla-tilt.js') }}"  ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"  ></script>


    <script>
        
        $('#location , #sector').on('change',function(){
             var location = $('#location').val();
             var sector = $('#sector').val();
             
            $.ajax({
                url:'search',
                type:'GET',
                data:{
                    'location':location,
                    'sector':sector,
                },
                success:function(data){
                    $('#content').html(data);
                }
            })
        }) ;
        
        $('#e_location , #e_sector').on('change',function(){
             var location = $('#e_location').val();
             var sector = $('#e_sector').val();
             
            $.ajax({
                url:'search-employee',
                type:'GET',
                data:{
                    'location':location,
                    'sector':sector,
                },
                success:function(data){
                    $('#contentt').html(data);
                }
            })
        }) ;
        $('#apply').on('click',function(){
             var id = $(this).parents('.details').attr('id');
            
            $.ajax({
                url:'home',
                headers:{'X-CSRF-TOKEN':'{{csrf_token()}}'},
                type:'POST',
                data:{
                    'id':id,
                },
                success:function(data){
                    toastr.success("Applied Successfully !");
                }
            })
            
        }) ;

        $('#downloadcv').on('click',function(){
            var id = $(this).children('.a').attr('id');
        
        $.ajax({
            url:'/eHome',
            headers:{'X-CSRF-TOKEN':'{{csrf_token()}}'},
            type:'POST',
            data:{
                'id':id,
            },
            success:function(data){
                toastr.success("Downloading ...");
            }
        })
        
    }) ;   

    $(document).ready(function() {

        $('#content').on('click', '.item', (function(){
        
            $('.details').toggleClass('details-view');
            var id = $(this).attr('id');
            var image = $(this).children().children().children('.resim').attr('src');
            var name = $(this).children().children().children().children('h4').text();
            var title = $(this).children().children().children().children('h5').text();
            var description = $(this).children().children().children().children('p').text();
            var sector = $(this).children().children().children().children().children().children('.sector').text();
            var location = $(this).children().children().children().children().children().children('.location').text();


            $('.isim').text(name);
            $('.details').attr('id', id);
            $('.resimm').attr('src', image);
            $('.title').text(title);
            $('.description').text(description);
            $('.sectorr').text(sector);
            $('.locationn').text(location);
            console.log(id)
 

        }));

        $('.closee').click(function(){
            $('.details').removeClass('details-view')
        });
        
        $("#role_id").prop('checked', false , function(){
            $(this).val('1')
        });  

 


});
</script>
</body>
</html>
