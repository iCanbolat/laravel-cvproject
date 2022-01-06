@extends('layouts.back')



@section('content')


<div class="container pb-5" >
        <div class="row " style="min-height:70vh">
  <div class="col-sm-2 my-auto p-sm-1 ">
    <div class="list-group text-center " id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action text-center rounded-circle active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Profile Card </a>
      <a class="list-group-item list-group-item-action text-center rounded-circle " id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Applied</a>
       
    </div>
  </div>
  <div class="col-sm-10 my-auto">
    <div class="tab-content  " id="nav-tabContent">

    

    <!-- Profile Card Settings -->
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"> 

        <div class="row"> 
       <div class="col-sm-6 text-center  " style="font-weight: bold;">
       <form action="{{route('profile.store')}} " method="POST" enctype="multipart/form-data">
       @csrf
            <div class="form-group">
                <label for="exampleFormControlFile1">Profile Picture</label>
                <input type="file" class="form-control-file shadow-none"  name="image" id="profile-image">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">CV</label>
                <input type="file" class="form-control-file shadow-none"  name="cv" id="cv">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Full Name</label>
                <input type="text" class="form-control shadow-none" id="fullname" name="full_name"  placeholder="Full Name" value="{{ $infos->full_name ?? 'Full Name'}}" >
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Summary</label>
                <textarea class="form-control shadow-none" id="sum" rows="2" name="summary">{{$infos->summary ?? 'Summary'}}</textarea>
            </div>

            <div class="form-group  ">
                    <label for="exampleFormControlSelect1"> Location</label>
                    <select class="form-control shadow-none" name="location" id="exampleFormControlSelect1">
                        <option value=" {{$infos->location ?? 'Select'}} " selected>{{$infos->location ?? 'Select'}}</option>
                        <option value="Kartal">Kartal</option>
                        <option value="Kadıkoy">Kadıkoy</option>
                        <option value="Maltepe">Maltepe</option>
                        <option value="Besiktas">Besiktas</option>
                        <option value="Bostancı">Bostancı</option>
                    </select>
                </div>
                
                <div class="form-group ">
                    <label for="exampleFormControlSelect2">Sector</label>
                    <select class="form-control shadow-none" name="sector" id="exampleFormControlSelect2">
                        <option value=" {{$infos->location ?? 'Select'}}" selected>{{$infos->sector ?? 'Select'}}</option>
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
                            >Edit  <i class="icofont-hand-drawn-right pl-2"></i>
                            </button><br>
        </form>
                <div class="bg-success border text-light rounded-pill py-2">
                     Your cv has downloaded <strong class="h6 bg-light text-dark font-weight-bold mx-1 rounded-circle py-1 px-2">{{ $infos->hit  }}</strong> times !
                </div>
       </div>


      <div class="col-sm-6 ml-auto mt-sm-4 mt-lg-0 ">
          <div class="card " id="card" >
                <div class="card-header text-center text-white " style="background-color: #003777; ">Profile</div>
                
                <img src="{{ $infos->image ??  asset ('/img/signin-image.jpg')}}" 
                class="mx-auto img-fluid rounded-circle mt-4 shadow"
                id="profile-img" 
                width="31%" alt="">

                <div class="card-body text-center">
                <h5 class="card-title" id="card-name" style="font-weight: bold;">{{ $infos->full_name ?? 'Your Name  ' }} </h5>
                <p class="card-text" id="card-sum">{{ $infos->summary ?? 'Describe yourself ! ' }} </p>
                </div>
                <ul class="list-group list-group-flush mx-auto border-0">
                    <li class="list-group-item rounded-circle mb-2 text-white  text-center border-0" id="card-location"  > {{ $infos->location ?? 'Location' }} </li>
                    <li class="list-group-item rounded-circle mb-2 text-white  text-center border-0" id="card-sector"   > {{ $infos->sector ?? 'Sector' }} </li>
                </ul>
                <div class="card-body text-center" style="background-color: #003777;">
                    <a href="#" class="card-link   rounded-pill p-2" style="color: #003777;background-color:#fff">Check CV <i class="icofont-paperclip"    ></i></a>
               
                </div>

                     
                </div>
            </div>  
                  
            </div>
</div>


<!--Applications-->


<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
          
      <div class="col-md-12 mt-sm-5 m-lg-0"  >
             <div class="card" id="card">
               <div class="card-body overflow-auto" style="max-height: 50vh;">
            
               @foreach($applies as $apply)
               <div class="card my-2 rounded shadow py-3" id="{{$apply->id}}" role="button"  >

                   <div class="d-flex justify-content-end mr-3" style="font-size:larger;">

                   <!-- Delete -->
                        <form id="delete" action="{{ route('profile.destroy', $apply->id) }} " method="POST">
                            @csrf
                            @method('DELETE')
                             <a  onclick="document.getElementById('delete').submit()"><i style=" color: #31c4cc" class="icofont-ui-delete ml-3"></i></a>
                       </form>

                    </div>

                    <div class="row no-gutters">
                        
                        <div class="col-sm-2 pt-3 pl-2">
                        <img src="{{$apply->image}}" class="img-fluid" id="company-img" alt="...">
                        </div>
                        <div class="col-sm-10">
                        <div class="card-body">
                            <h4 class="card-title" style="font-weight: bold;" id="company-name"> {{$apply->name}} </h4>
                            <h5 class="card-title" style="font-weight: bold;" id="company-job"> {{$apply->job_title}} </h5>
                            <textarea class="card-text col-12 border-0 " 
                            style="background-color:transparent;resize:none;font-weight:bolder" 
                            rows="8"
                            disabled 
                            id="company-sum"
                            >
                            {{$apply->description}}
                            </textarea>
                            <div class="row">
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2  " id="location" style="background-color: #003777;"> {{$apply->location}} </div></div>
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2  " id="sector" style="background-color: #003777;">{{$apply->sector}} </div></div>
                                <div class="col-sm d-none"><div class="rounded-pill text-white text-center py-2  " style="background-color: #31c4cc"> Apply</div></div>
                            </div>
                          </div>
                        </div>                   
                    </div>
                </div>
                @endforeach
         

        </div>


      </div>
       
    </div>
  </div>




</div>
</div>






@endsection