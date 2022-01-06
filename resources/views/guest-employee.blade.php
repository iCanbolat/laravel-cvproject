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
                     
                     id="location"
                     name="location">
                     
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
                  
                     id="sector"
                     name="sector">

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
    
    <div class="col-md-9 mt-sm-5 m-lg-0" id="content"  >
 
        @foreach($jobPosts as $post)
            <div class="card mb-4" id="card" data-tilt data-tilt-max="5" data-tilt-glare data-tilt-max-glare="0.2">
               <div class="card-body">
            
                
               <div class="card my-2 rounded shadow item" role="button" id="{{$post->id}}"    >
                    <div class="row no-gutters">
                        <div class="col-sm-2 pt-3 pl-2">
                        <img src="{{$post->image}}" class="img-fluid resim" alt="...">
                        </div>
                        <div class="col-sm-10">
                        <div class="card-body">
                            <h4 style="font-weight: bolder;">{{ $post->company_name }}</h4>
                            <h5 class="card-title" style="font-weight: bold;">{{ $post->job_title }}</h5>
                            <p class="card-text">{{ $post->description }}.</p>
                            <div class="row">
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2 sector " style="background-color: #003777;"> {{$post->sector}}</div></div>
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2 location " style="background-color: #003777;"> {{$post->location}}</div></div>
                                <a href="{{ route('login') }}" class="col-sm"><div class="rounded-pill text-white text-center py-2  " style="background-color: #003777;"> Apply Now!</div></a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
               </div>
               
            </div>
            @endforeach
        </div>

        
        <div class="col-md-6 details"  id="">
        <div class="card itemm"  id="card">
               <div class="card-body">
            
                    <h4 role="button" class="closee"><i class="icofont-close"></i></h4>
              
                    <div class="row no-gutters " >
                        <div class="col-sm-2 pt-3 pl-2">
                        <img src=" " class="img-fluid resimm" alt="...">
                        </div>
                        <div class="col-sm-10">
                        <div class="card-body"   >
                            <h4 style="font-weight: bolder;" class="isim"> </h4>
                            <h5 class="card-title title" style="font-weight: bold;"> </h5>
                            <p class="card-text description"> .</p>
                            <div class="row align-items-end" style="min-height: 10vh;">
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2 sectorr " style="background-color: #003777;">  </div></div>
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2 locationn " style="background-color: #003777;">  </div></div>
                                <div class="col-sm" role="button">
                                    <div class="rounded-pill apply  text-center py-2 "> 

                                      <button 
                                         id="apply"
                                         class="border-0 bg-transparent "
                                         type="submit">Apply Now ! 
                                    </button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>                    
               </div>
            </div>
        </div>   
      </div>
    </div>
</div>
@endsection