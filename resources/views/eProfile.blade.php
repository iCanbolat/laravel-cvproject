@extends('layouts.back')

@section('content')


<div class="container pb-5  " >
        <div class="row  " style="min-height:70vh">
  <div class="col-sm-2 my-auto p-sm-1   ">
    <div class="list-group text-center " id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action text-center rounded-circle active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Post Job </a>
      <a class="list-group-item list-group-item-action text-center rounded-circle" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Applicants</a>
      <a class="list-group-item list-group-item-action text-center rounded-circle " id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Posts</a>
       
    </div>
  </div>
  <div class="col-sm-10 my-auto">
    <div class="tab-content  " id="nav-tabContent">


    <!-- Profile Card Settings -->
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"> 

        <div class="row"> 
       


      <div class="col-md-12 ml-auto mt-sm-4 mt-lg-0 mb-5">
      <div class="card" id="card">
               <div class="card-body overflow-auto" style="max-height: 50vh;">
            

               <div class="card my-2 rounded shadow py-3" role="button"  >
                    <div class="row no-gutters">
                        <div class="col-sm-2 pt-3 pl-2">
                        <img src="{{asset('/img/pngegg.png')}}" class="img-fluid" id="company-img" alt="...">
                        </div>
                        <div class="col-sm-10">
                        <div class="card-body">
                            <h4 class="card-title" style="font-weight: bold;" id="company-name">Card title</h4>
                            <h5 class="card-title" style="font-weight: bold;" id="company-job">Card title</h5>
                            <textarea class="card-text col-12 border-0 " 
                            style="background-color:transparent;resize:none;font-weight:bolder" 
                            rows="8"
                            disabled 
                            id="company-sum"
                            >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                            </textarea>
                            <div class="row">
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2  " id="location" style="background-color: #003777;"> Location</div></div>
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2  " id="sector" style="background-color: #003777;"> Sector</div></div>
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2  " style="background-color: #31c4cc"> Apply</div></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                   


               </div>
            </div>
            </div> 
            
            
    <div class="col-md-12 text-center mt-4 " style="font-weight: bold;">
       <form action="{{route('eProfile.store')}} " method="POST" enctype="multipart/form-data">
       @csrf
            <div class="form-group ">
                <label for="exampleFormControlFile1">Company Picture</label>
                <input type="file" class="form-control-file shadow-none" name="image" id="companyimage">
            </div>


            <div class="form-group">
                <label for="exampleFormControlInput1">Company Name</label>
                <input type="text" class="form-control shadow-none" id="companyname" name="company_name"  placeholder="Full Name"  >
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Job Title</label>
                <input type="text" class="form-control shadow-none" id="jobtitle" name="job_title"   placeholder="Full Name"  >
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Summary</label>
                <textarea class="form-control shadow-none" id="companysummary" rows="2" name="company_summary"></textarea>
            </div>

            <div class="form-group  ">
                    <label for="exampleFormControlSelect1"> Location</label>
                    <select class="form-control shadow-none" name="location" id="exampleFormControlSelect1">
                    <option >Select</option>
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
                    <option >Select</option>
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
                           
                            >Post  <i class="icofont-hand-drawn-right pl-2"></i>
                            </button><br>


        </form>
       </div>




            </div>
</div>

        <!-- Applicants -->

      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      
      <div class="col-md-12 mt-sm-5 m-lg-0"  >
             <div class="card" id="card">
               <div class="card-body overflow-auto" style="max-height: 50vh;">
            
               @foreach($employees as $e)
                @foreach($e->people as $p)
               <div class="card my-2 rounded shadow py-3" role="button"  >           
                 
                    <div class="row no-gutters">
                        <div class="col-sm-2 pt-3 pl-2">
                        <img src="{{ $p->image }}" class="img-fluid" id="company-img" alt="...">
                        </div>
                        <div class="col-sm-10">
                        <div class="card-body">
                            <h4 class="card-title" style="font-weight: bold;" id="company-name">{{ $p->full_name }}</h4>
                            <textarea class="card-text col-12 border-0 " 
                            style="background-color:transparent;resize:none;font-weight:bolder" 
                            rows="8"
                            disabled 
                            id="company-sum"
                            >{{ $p->summary }}
                            </textarea>
                            <div class="row">
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2  " id="location" style="background-color: #003777;"> {{ $p->location }}</div></div>
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2  " id="sector" style="background-color: #003777;"> {{$p->sector}}</div></div>
                                <div class="col-sm">
                                    <div class="rounded-pill text-white text-center py-2  " style="background-color: #31c4cc"> 
                                      <a href="{{$p->cv}}" type="button" download="{{$p->full_name}}" class="card-link "style="color: #fff;background-color:transparent">Download CV <i class="icofont-paperclip" ></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    </div>
                    @endforeach
                @endforeach

        </div>


      </div>
       
    </div>
        
      
      </div>

      <!-- Actions -->
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
          
      <div class="col-md-12 mt-sm-5 m-lg-0"  >
             <div class="card" id="card">
               <div class="card-body overflow-auto" style="max-height: 50vh;">
            
               @foreach($myPosts as $posts)
               <div class="card my-2 rounded shadow py-3" role="button"  >

                   <div class="d-flex justify-content-end mr-3" style="font-size:larger;">

                   <!-- Edit -->

                       <a href="" data-toggle="modal" data-target="#exampleModal{{ $posts->id }}"><i style="color: #31c4cc" class="icofont-edit"></i></a> 

                       <div class="modal fade" id="exampleModal{{ $posts->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                            <div class="modal-header " style="background-color: #003777;">
                                <h5 class="modal-title ml-auto pl-4 text-white" style="font-weight: bolder;"  id="exampleModalLabel">Edit Post</h5>
                                <button type="button" class="close text-white"  data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="col-md-12 text-center mt-4 " style="font-weight: bold;">
                            <form action="{{route('eProfile.update',$posts->id)}} " method="POST" enctype="multipart/form-data">
                            @method('PUT')    
                            @csrf
                                    <div class="form-group ">
                                        <label for="exampleFormControlFile1">Company Picture</label>
                                        <input type="file" class="form-control-file shadow-none" name="image" id="companyimage">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Company Name</label>
                                        <input type="text" class="form-control shadow-none" id="companyname" name="company_name" value="{{ $posts->company_name }}" >
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Job Title</label>
                                        <input type="text" class="form-control shadow-none" id="jobtitle" name="job_title"   value="{{ $posts->job_title }}"  >
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Summary</label>
                                        <textarea class="form-control shadow-none" style="resize: none;" id="companysummary" rows="4" name="company_summary">{{ $posts->description }}</textarea>
                                    </div>

                                    <div class="form-group  ">
                                            <label for="exampleFormControlSelect1"> Location</label>
                                            <select class="form-control shadow-none" name="location" id="exampleFormControlSelect1">
                                            <option value="{{ $posts->location }}" selected>{{ $posts->location }}</option>
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
                                            <option value="{{ $posts->sector }}" selected>{{ $posts->sector }}</option>
                                            <option value="Tech">Tech</option>
                                            <option value="Food">Food</option>
                                            <option value="Pharmachy">Pharmacy</option>
                                            <option value="Mechanic">Mechanic</option>
                                            <option value="Health">Health</option>
                                            </select>
                                        </div>
                                        
                            </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary py-2 px-5 my-2 " data-dismiss="modal">Close  <i class="icofont-close"></i></button>
                                
                                <button
                            class="btn btn-outline-primary py-2 px-5 my-2" 
                            type="submit"
                           
                            >Update  <i class="icofont-hand-drawn-right pl-2"></i>
                            </button>
                            </div>
                            </form>
                            </div>
                        </div>
                        </div>

                   <!-- Delete -->
                        <form id="delete" action="{{ route('eProfile.destroy',$posts->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                             <a  onclick="document.getElementById('delete').submit()"><i style=" color: #31c4cc" class="icofont-ui-delete ml-3"></i></a>
                       </form>

                    </div>

                    <div class="row no-gutters">
                        <div class="col-sm-2 pt-3 pl-2">
                        <img src="{{ $posts->image }}" class="img-fluid" id="company-img" alt="...">
                        </div>
                        <div class="col-sm-10">
                        <div class="card-body">
                            <h4 class="card-title" style="font-weight: bold;" id="company-name">{{ $posts->company_name }}</h4>
                            <h5 class="card-title" style="font-weight: bold;" id="company-job">{{ $posts->job_title }}</h5>
                            <textarea class="card-text col-12 border-0 " 
                            style="background-color:transparent;resize:none;font-weight:bolder" 
                            rows="8"
                            disabled 
                            id="company-sum"
                            >{{ $posts->description }}
                            </textarea>
                            <div class="row">
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2  " id="location" style="background-color: #003777;"> {{ $posts->location }}</div></div>
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2  " id="sector" style="background-color: #003777;"> {{$posts->sector}}</div></div>
                                <div class="col-sm"><div class="rounded-pill text-white text-center py-2  " style="background-color: #31c4cc"> Apply</div></div>
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