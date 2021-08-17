@extends('layouts.app')

@section('content')
<div class="container  "  >
    <div class="row justify-content-center">

    <div class="col-md-3   ">
    <div class="card" id="card">
                <div class="card-header text-center text-white" style="background-color: #003777;">Filter</div>
                
                
                <form method="POST" action="">
                <div class="card-body text-center p-4">
                
                
            
                <div class="form-group  ">
                    <label for="exampleFormControlSelect1"> Location</label>
                    <select class="form-control shadow-none" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>
                
                <div class="form-group ">
                    <label for="exampleFormControlSelect2">Sector</label>
                    <select class="form-control shadow-none" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput">Search</label>
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text " style="background-color: #fff;" id="addon-wrapping"><i class="icofont-search-2"></i></span>
                        </div>
                        <input type="text" class="form-control shadow-none "   aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                </div>

                <button
                            class="btn btn-outline-primary py-2 px-5 my-2" 
                            type="submit"
                            >Search  <i class="icofont-hand-drawn-right pl-2"></i>
                            </button>
                     
                </div>
                </form>
            </div>
    </div>
    
        <div class="col-md-9 mt-sm-5 m-lg-0"  >
            <div class="card" id="card">
               <div class="card-body">
            

               <div class="card my-2 rounded shadow" role="button" id="item"   >
                    <div class="row no-gutters">
                        <div class="col-sm-2 pt-3 pl-2">
                        <img src="{{asset('/img/pngegg.png')}}" class="img-fluid" alt="...">
                        </div>
                        <div class="col-sm-10">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: bold;">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="row">
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2  " style="background-color: #003777;"> dsdasds</div></div>
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2  " style="background-color: #003777;"> dsdasds</div></div>
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2  " style="background-color: #003777;"> dsdasds</div></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
               </div>
            </div>
        </div>


        <div class="col-md-6 details"  >
        <div class="card" id="card">
               <div class="card-body">
            
                    <h4 role="button" class="closee"><i class="icofont-close"></i></h4>
              
                    <div class="row no-gutters " >
                        <div class="col-sm-2 pt-3 pl-2">
                        <img src="{{asset('/img/pngegg.png')}}" class="img-fluid" alt="...">
                        </div>
                        <div class="col-sm-10">
                        <div class="card-body"   >
                            <h5 class="card-title" style="font-weight: bold;">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="row align-items-end" style="min-height: 10vh;">
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2  " style="background-color: #003777;"> dsdasds</div></div>
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2  " style="background-color: #003777;"> dsdasds</div></div>
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2  " style="background-color: #003777;"> <a href="" class="text-decoration-none"  >Apply Now</a></div></div>
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
    <script>
     
    </script>
@endsection
