@extends('layouts.back')



@section('content')


<div class="container pb-5" >
        <div class="row " style="min-height:70vh">
  <div class="col-sm-2 my-auto p-sm-1 ">
    <div class="list-group text-center " id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action text-center rounded-circle active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Profile Card </a>
      <a class="list-group-item list-group-item-action text-center rounded-circle" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile Statistic</a>
      <a class="list-group-item list-group-item-action text-center rounded-circle " id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Actions</a>
       
    </div>
  </div>
  <div class="col-sm-10 my-auto">
    <div class="tab-content  " id="nav-tabContent">


    <!-- Profile Card Settings -->
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"> 

        <div class="row"> 
       <div class="col-sm-6 text-center  " style="font-weight: bold;">
       <form>
            <div class="form-group">
                <label for="exampleFormControlFile1">Profile Picture</label>
                <input type="file" class="form-control-file shadow-none" id="image">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">CV</label>
                <input type="file" class="form-control-file shadow-none" id="cv">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Full Name</label>
                <input type="text" class="form-control shadow-none" id="fullname"   placeholder="Full Name"  >
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Summary</label>
                <textarea class="form-control shadow-none" id="sum" rows="2" name="summary"></textarea>
            </div>

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

            <button
                            class="btn btn-outline-primary py-2 px-5 my-2" 
                            type="submit"
                            >Edit  <i class="icofont-hand-drawn-right pl-2"></i>
                            </button><br>


        </form>
       </div>


      <div class="col-sm-6 ml-auto mt-sm-4 mt-lg-0 ">
          <div class="card " id="card" >
                <div class="card-header text-center text-white " style="background-color: #003777; ">Profile</div>
                
                <img src="{{asset ('/img/signin-image.jpg')}}" 
                class="mx-auto img-fluid rounded-circle mt-4 shadow" 
                width="31%" alt="">

                <div class="card-body text-center">
                <h5 class="card-title" id="card-name" style="font-weight: bold;">Fatih Canbolat</h5>
                <p class="card-text" id="card-sum">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush mx-auto border-0">
                    <li class="list-group-item rounded-circle mb-2 text-white  text-center border-0" id="card-location"  >Location</li>
                    <li class="list-group-item rounded-circle mb-2 text-white  text-center border-0" id="card-sector"   >Sector</li>
                </ul>
                <div class="card-body text-center" style="background-color: #003777;">
                    <a href="#" class="card-link   rounded-pill p-2" style="color: #003777;background-color:#fff">Check CV <i class="icofont-paperclip"    ></i></a>
               
                </div>

                     
                </div>
            </div>        
            </div>
</div>






@endsection