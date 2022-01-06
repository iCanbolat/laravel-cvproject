<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $myPosts = Post::where('user_id',$user_id)->get();
        $employees =  Post::where('user_id', $user_id)->with('people')->get();

        return view('eProfile' , compact('employees' , 'myPosts'));
     
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
        $post = new Post ;
        $post->user_id = Auth::id();
        $post->company_name = $request->company_name;
        $post->job_title = $request->job_title;
        $post->description = $request->company_summary;
        $post->location = $request->location;
        $post->sector = $request->sector;

        if($request->hasFile('image'))
        {
            $imageName = $request->company_name.'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $post->image = 'uploads/'.$imageName;
        } 


        $post->save();
        return redirect()->back()->with("post_added","Post added successfully!");
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
     * Show hit views.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        Post::find($id)->increment('votes_count', 1);
        return redirect()->back();
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
        $post = Post::findOrFail($id) ;
        $post->user_id = Auth::id();
        $post->company_name = $request->company_name;
        $post->job_title = $request->job_title;
        $post->description = $request->company_summary;
        $post->location = $request->location;
        $post->sector = $request->sector;

        if($request->hasFile('image'))
        {
            $imageName = $request->company_name.'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $post->image = 'uploads/'.$imageName;
        } 


        $post->save();
        return redirect()->back()->with("updated","Post updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)    
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->back()->with("post_deleted","Post removed successfully!");
    }
    
}
