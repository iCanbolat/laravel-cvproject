<?php

namespace App\Http\Controllers;
use App\Models\Info;
use App\Models\Applies;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = Info::where('id', Auth::id())->first();
        $applies = User::find(Auth::id())->applies ;
        return view('profile' , compact('infos','applies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        function save(Request $request){

            if($request->hasFile('image'))
            {
                $imageName = $request->full_name.'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('uploads'),$imageName);
                return 'uploads/'.$imageName;
            }   
        };
        function cv(Request $request){
            if($request->hasFile('cv'))
            {
                $cvName = $request->id.'.'.$request->cv->getClientOriginalExtension();
                $request->cv->move(public_path('uploads'),$cvName);
                return 'uploads/'.$cvName;
            } 
        };

        $info = Info::updateOrCreate(
            ['id' => Auth::id()],

            ['id' => Auth::id(),   
             'full_name' => request('full_name'),
             'summary' => request('summary'),
             'location' =>  request('location') ,
             'sector' => request('sector') ,
             'image' => save($request),
             'cv' => cv($request)
            ]
        );

        return redirect()->back()->with("post_added","Your Profile edited successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $applied = Applies::where([
            ['user_id', '=', Auth::id()],
            ['posts_id', '=', $id]
        ])->get();
        $applied->delete();

        return redirect()->back()->with("post_deleted","Apply removed successfully!");
    }
}
