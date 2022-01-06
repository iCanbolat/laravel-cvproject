<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class eHomeController extends Controller
{
    public function index()
    {
        $employees = Info::all();
        return view('eHome' , compact('employees'));
    }
    public function download(Request $request)
    {
        $hit = Info::where('id', request('id'))
        ->increment('hit');   
        $hit->save(); 
    }

    public function search(Request $request )
    {
        if(request()->ajax()){
                
            if($request->location !== 'all'){
                $data =  Info::where('location', $request->location)->get();
            } 
            elseif($request->sector !=='all'){
                $data = Info::where('sector', $request->sector)->get();
            }
            elseif($request->sector && $request->location !=='all' ){
                $data =  Info::where('location', $request->location)
                ->where('sector', $request->sector)
                ->get();
            }
            else{
                $data = Info::all();       
        }
       }
        
     
        $output ='';

        if(count($data)>0){

            foreach($data as $e){
                $output .='
                <div class="card mb-5" id="card">
               <div class="card-body">
                 <div class="row" style="min-height: 45vh;">
                    <div class="col-md-5 ">
                        
                        <div class="card " data-tilt data-tilt-glare data-tilt-max-glare="0.2" >
                            <div class="card-header text-center text-white " style="background-color: #003777; ">Profile</div>
                            
                            <img src=" '.$e->image.' " 
                            class="mx-auto img-fluid rounded-circle mt-4 shadow" 
                            width="31%" alt="">

                            <div class="card-body text-center">
                            <h5 class="card-title" style="font-weight: bold;">'.$e->full_name.'</h5>
                            <p class="card-text">'.$e->summary.'.</p>
                            </div>
                            <ul class="list-group list-group-flush mx-auto border-0">
                                <li class="list-group-item rounded-circle mb-2 text-white  text-center border-0"  >'.$e->location.'</li>
                                <li class="list-group-item rounded-circle mb-2 text-white  text-center border-0"   >'.$e->sector.'</li>
                            </ul>
                            <div class="card-body text-center" style="background-color: #003777;">
                                <a href="'.$e->cv.'" type="button" download="'.$e->full_name.'" class="card-link rounded-pill p-2" style="color: #003777;background-color:#fff">Download CV <i class="icofont-paperclip"    ></i></a>
                                

                            </div>

                            
                        </div>
                        
                    </div>
                    <div class="col-md-7 ml-auto" >
                            <iframe src="'.$e->cv.'#toolbar=0" type="" style="width: 100%;height:100%"></iframe>
                        </div>
                </div>  


               </div>
            </div>
                ';
            }
           
        }
        else{
            return 'No match Found';
        }
        


        return $output;

    }

}
