<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::all();
        $approvedPosts = post::where('validation',2)->get();
        $posts= Post::all();
        // $post = $posts[0];
        foreach($posts as $post)
         $images = json_decode($post->filename, true);
         if(request()->has('proptype')){
            $approvedPosts= post::where('proptype', request('proptype'))->get();
        }elseif
        (request()->has('housetype')){
            $approvedPosts= post::where('housetype',request('housetype'))->get();
        }elseif
        (request()->has('landmark')){
            $approvedPosts= post::where('landmark',request('landmark'))->get();
        }elseif
        (request()->has('worth')){
            $approvedPosts= post::where('worth',request('worth'))->get();
        }elseif
        (request()->has('vacancy')){
            $approvedPosts= post::where('vacancy',request('vacancy'))->get();
        }else{
         $approvedPosts = post::where('validation',2)->get();

        }


        return view('admin.index', compact('approvedPosts','users','images'));

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


    public function pendingposts()
    {
        $unApprovedPosts = POST::where('validation',1)->get();
        $users = User::all();
        $posts= Post::all();
        // $post = $posts[0];
        foreach($posts as $post)
        $images = json_decode($post->filename, true);
        return view('admin.pending', compact('unApprovedPosts', 'users','images'));
    }



    public function supervisedpost()
    {
        $posts= Post::all();
        // $post = $posts[0];
        foreach($posts as $post)
        $images = json_decode($post->filename, true);
        $supervised = Post::where('moderator', auth()->user()->id)->get();

        return view('admin/supervise', compact('supervised','images'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $users = User::where('is_admin', 1)->get();
        $unApprovedPosts = post::where('validation',1)->get();
        // dd($approvedPosts);
        $posts = Post::find($post);
        //  $post = $post[0];
        foreach($posts as $post)
         $images = json_decode($post->filename, true);

        return view('admin.show', compact('post','users','images'));
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

    public function concluded()
    {
        $concluded = Post::where('review', 1);
        $posts= Post::all();
        // $post = $posts[0];
        foreach($posts as $post)
        $images = json_decode($post->filename, true);

        return view('admin.concluded', compact('concluded', 'images'));
    }



    public function myadminpending()
    {
        $adminpending = Post::where([
            ['validation',1],['user_id', auth()->user()->id]]);

            return view('admin.myadminpending',compact('adminpending'));
    }





    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        $data = request()->validate([
            'moderator'=>'sometimes|nullable',
            'validation'=>'sometimes|string',
            'review'=>''
        ]);

        $post->update($data);
        return back()->with('updated','Post Added to your chart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
