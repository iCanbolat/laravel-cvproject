<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Applies;
use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $jobPosts = Post::all() ;
        return view('home', compact('jobPosts'));
    }
    public function welcome(){

        return view('welcome');
    }
    public function guest(){
        
        $jobPosts = Post::all() ;
        return view('guest-employee', compact('jobPosts'));
    }
    public function guestt(){

        $employees = Info::all() ;
        return view('guest-employer', compact('employees'));
    }
    public function apply(Request $request){
        
        $apply = Applies::firstOrNew(
            ['user_id' =>  Auth::id(),
             'posts_id' => request('id')] ,
             
            ['user_id' =>  request(Auth::id())],
            ['posts_id' =>  request('id')]);

        $hit = Post::where('id', request('id'))
        ->increment('hit');    
            
        $hit->save();
        $apply->save();

    }
    public function search(Request $request )
    {
        if(request()->ajax()){
                
            if($request->location !== 'all'){
                $data =  Post::where('location', $request->location)->get();
            } 
            elseif($request->sector !=='all'){
                $data = Post::where('sector', $request->sector)->get();
            }
            elseif($request->sector && $request->location !=='all' ){
                $data =  Post::where('location', $request->location)
                ->where('sector', $request->sector)
                ->get();
            }
            else{
                $data = Post::all();       
        }
       }
        
     
        $output ='';

        if(count($data)>0){

            foreach($data as $post){
                $output .='
                <div class="card mb-4" id="card" data-tilt data-tilt-max="5" data-tilt-glare data-tilt-max-glare="0.2">
                <div class="card-body">
             
                 
                <div class="card my-2 rounded shadow item" role="button" id="'.$post->id.'"    >
                     <div class="row no-gutters">
                         <div class="col-sm-2 pt-3 pl-2">
                         <img src="'.$post->image.'" class="img-fluid resim" alt="...">
                         </div>
                         <div class="col-sm-10">
                         <div class="card-body">
                             <h4 style="font-weight: bolder;">'. $post->company_name.'</h4>
                             <h5 class="card-title" style="font-weight: bold;">'. $post->job_title.'</h5>
                             <p class="card-text">'. $post->description.'.</p>
                             <div class="row">
                                 <div class="col-sm"><div class="rounded-pill text-white text-center py-2 sector " style="background-color: #003777;"> '.$post->sector.'</div></div>
                                 <div class="col-sm"><div class="rounded-pill text-white text-center py-2 location " style="background-color: #003777;"> '.$post->location.'</div></div>
                                 <div class="col-sm"><div class="rounded-pill text-white text-center py-2  " style="background-color: #003777;"> Apply Now!</div></div>
                             </div>
                         </div>
                         </div>
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
