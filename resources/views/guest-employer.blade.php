@extends('layouts.app')

@section('content')
<div class="container  "  >
    <div class="row justify-content-center">

    <div class="col-md-3   ">
    <div class="card" id="card">
                <div class="card-header text-center text-white" style="background-color: #003777;">Filter</div>
                
                
             <form method="GET" action="">
                <div class="card-body text-center p-4">
                
                
            
                <div class="form-group  ">
                    <label for="location"> Location</label>
                    <select
                     class="form-control shadow-none"
                     
                     id="e_location"
                     name="e_location">
                     
                    <option value="all" >All</option>
                    <option value="Kartal">Kartal</option>
                    <option value="Kadıkoy">Kadıkoy</option>
                    <option value="Maltepe">Maltepe</option>
                    <option value="Besiktas">Besiktas</option>
                    <option value="Bostancı">Bostancı</option>
                    </select>
                </div>
                
                <div class="form-group ">
                    <label for="sector">Sector</label>
                    <select 
                     class="form-control shadow-none"
                  
                     id="e_sector"
                     name="e_sector">

                    <option value="all" >All</option>
                    <option value="Tech">Tech</option>
                    <option value="Food">Food</option>
                    <option value="Pharmachy">Pharmacy</option>
                    <option value="Mechanic">Mechanic</option>
                    <option value="Health">Health</option>
                    </select>
                </div>            

                <button
                            class="btn btn-outline-primary py-2 px-5 my-2" 
                            type="submit"
                            >Reset  <i class="icofont-hand-drawn-right pl-2"></i>
                            </button>
                     
                </div>
                </form>
            </div>
    </div>
    
        <div class="col-md-9 mt-sm-5 m-lg-0"  id="contentt">
            @foreach($employees as $e)
            <div class="card mb-5" id="card">
               <div class="card-body">
                 <div class="row" style="min-height: 45vh;">
                    <div class="col-md-5 ">
                        
                        <div class="card " data-tilt data-tilt-glare data-tilt-max-glare="0.2" >
                            <div class="card-header text-center text-white " style="background-color: #003777; ">Profile</div>
                            
                            <img src="{{ $e->image }}" 
                            class="mx-auto img-fluid rounded-circle mt-4 shadow" 
                            width="31%" alt="">

                            <div class="card-body text-center">
                            <h5 class="card-title" style="font-weight: bold;">{{$e->full_name}}</h5>
                            <p class="card-text">{{$e->summary}}.</p>
                            </div>
                            <ul class="list-group list-group-flush mx-auto border-0">
                                <li class="list-group-item rounded-circle mb-2 text-white  text-center border-0"  >{{$e->location}}</li>
                                <li class="list-group-item rounded-circle mb-2 text-white  text-center border-0"   >{{$e->sector}}</li>
                            </ul>
                            <div class="card-body text-center" id="downloadcv" style="background-color: #003777;">
                                <a href="{{$e->cv}}" id="{{$e->id}}" type="button" download="{{$e->full_name}}" class="card-link rounded-pill p-2 a" style="color: #003777;background-color:#fff">Download CV <i class="icofont-paperclip"    ></i></a>
                            </div> 
                        </div>
                        
                    </div>
                    <div class="col-md-7 ml-auto" >
                            <iframe src="{{$e->cv}}#toolbar=0" type="" style="width: 100%;height:100%"></iframe>
                        </div>
                </div>  


               </div>
            </div>
            @endforeach
        </div>

        
    </div>
    </div>
</div>
    <script>
     
    </script>
@endsection
