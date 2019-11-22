<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
// use app\controllers\image as image;

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
        $approvedPosts = post::where('validation',2)->latest()->get();
        $posts= Post::all();
        // $post = $posts[0];
        // foreach($posts as $post)
        //  $images = json_decode($post->filename, true);
         if(request()->has('proptype')){
            $approvedPosts= post::where('proptype', request('proptype'))->latest()->get();
        }elseif
        (request()->has('housetype')){
            $approvedPosts= post::where('housetype',request('housetype'))->latest()->get();
        }elseif
        (request()->has('landmark')){
            $approvedPosts= post::where('landmark',request('landmark'))->latest()->get();
        }elseif
        (request()->has('worth')){
            $approvedPosts= post::where('worth',request('worth'))->latest()->get();
        }elseif
        (request()->has('vacancy')){
            $approvedPosts= post::where('vacancy',request('vacancy'))->latest()->get();
        }else{
         $approvedPosts = post::where('validation',2)->latest()->get();

        }
        $post = $posts[0];
        foreach($posts as $post)

        $images = json_decode($post->filename, true);

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

    public function concludedPosts()
    {
        $concludedPosts = Post::where([
            ['validation',3],['moderator', auth()->user()->id]])->latest()->get();

        $users = User::all();
        $posts= Post::all();
        // $post = $posts[0];
        foreach($posts as $post)
        $images = json_decode($post->filename, true);
        return view('admin.conclude', compact('concludedPosts', 'users','images'));
    }




    public function pendingposts()
    {
        $unApprovedPosts = POST::where('validation',1)->latest()->get();
        $users = User::all();
        $posts= Post::all();
        // $post = $posts[0];
        foreach($posts as $post)
        $images = json_decode($post->filename, true);
        return view('admin.pending', compact('unApprovedPosts', 'users','images'));
    }





    public function approvedPosts()
    {
        $approvedPosts = Post::where([
            ['validation',2],['moderator', auth()->user()->id]])->latest()->get();

        $users = User::all();
        $posts= Post::all();
        // $post = $posts[0];
        foreach($posts as $post)
        $images = json_decode($post->filename, true);
        return view('admin.approved', compact('approvedPosts', 'users','images'));
    }







    public function supervisedpost()
    {
        $posts= Post::all();
        // $post = $posts[0];
        foreach($posts as $post)
        $images = json_decode($post->filename, true);
        $supervised = Post::where('moderator', auth()->user()->id)->latest()->get();

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
        $users = User::where('is_admin', 1)->latest()->get();
        $unApprovedPosts = post::where('validation',1)->latest()->get();
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

    // public function concluded()
    // {
    //     $concluded = Post::where('review', 1);
    //     $posts= Post::all();
    //     // $post = $posts[0];
    //     foreach($posts as $post)
    //     $images = json_decode($post->filename, true);

    //     return view('admin.concluded', compact('concluded', 'images'));
    // }



    public function myadminpending()
    {
        $adminpending = Post::where([
            ['validation',1],['moderator',auth()->user()->id]])->get();
            $posts = Post::all();
            foreach($posts as $post)
            $images = json_decode($post->filename, true);

            return view('admin.myadminpending',compact('adminpending','images'));
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
