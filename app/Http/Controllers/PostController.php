<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\User;
// use Intervention\Image\Facades\Image;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function __construct()
    //  {
    //      $this->middleware('edit')->only(['edit']);

    //  }
     public function edit(Post $post)
     {
         // $post= Post::all();
         return view('posts.edit', compact('post'));
     }


    public function index()
    {

        $users= User::all();
        $posts= Post::all();
        $approvedPosts = post::where('validation',2)->get();
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
        return view('posts.index', compact('approvedPosts','users', 'images','post'));

    }


    public function concludedPosts()
    {
        $concludedPosts = Post::where([
            ['validation',3],['user_id', auth()->user()->id]])->latest()->get();

        $users = User::all();
        $posts= Post::all();
        // $post = $posts[0];
        foreach($posts as $post)
        $images = json_decode($post->filename, true);
        return view('posts.conclude', compact('concludedPosts', 'users','images'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');

    }

    public function allposts()
    {
        $userPosts = Post::where('user_id', auth()->user()->id)->latest()->get();
        $userPosts =  POST::where([
            ['validation',2],['user_id', auth()->user()->id]])->latest()->get();
        $posts= Post::all();
        // $post = $posts[0];
        foreach($posts as $post)
         $images = json_decode($post->filename, true);
        return view('posts.all', compact('userPosts','images'));
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


    public function pendingposts()
    {
        $posts= Post::all();
        $unApprovedPosts = POST::where([
            ['validation',1],['user_id', auth()->user()->id]])->latest()->get();

            // $post = $posts[0];
            foreach($posts as $post)
            $images = json_decode($post->filename, true);

        return view('posts.pending', compact('unApprovedPosts','images'));
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        request()->validate([
            'proptype'=> 'required',
            'housetype'=>'nullable',
            'moderator'=>'sometimes|nullable',
         //    'star'=>'nullable',
            'bvn'=>'nullable',
            'review'=>'nullable',
            'phone'=>'required|min:11',
            'landmark'=>'required',
            'worth'=> 'required',
            'vacancy'=> 'required',
            'propdesc'=> 'required',
            'address'=> 'required',
            'grade'=> 'nullable',
            'validation'=>'sometimes|nullable',
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


       if($request->hasfile('filename'))
       {

          foreach($request->file('filename') as $image)
          {
              $name=$image->getClientOriginalName();
              $image->move(public_path().'/images/', $name);
              $dat[] = $name;
          }

       }

    //    $post= new post();
       $formatted= json_encode($dat);








       $post = new Post;

        $post->proptype=$request->input('proptype');
        $post->housetype=$request->input('housetype');
        $post->moderator=$request->input('moderator');
        $post->bvn=$request->input('bvn');
        $post->review=$request->input('review');
        $post->phone=$request->input('phone');
        $post->landmark=$request->input('landmark');
        $post->worth=$request->input('worth');
        $post->vacancy=$request->input('vacancy');
        $post->propdesc=$request->input('propdesc');
        $post->address=$request->input('address');
        $post->grade=$request->input('grade');
        $post->user_id = auth()->user()->id;
        $post->validation=$request->input('validation');
        $post->filename=$formatted;
        $post->save();
        return redirect('/post/create')->with('success', 'Post created');


    }






    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $approvedPosts = post::where('validation',2)->get();
        // dd($approvedPosts);
        $posts = Post::find($post);
        //  $post = $post[0];
        foreach($posts as $post)
         $images = json_decode($post->filename, true);

        return view('posts.show', compact('post', 'images','approvedPosts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        request()->validate([
            'proptype'=> 'required',
            'housetype'=>'nullable',
            // 'moderator'=>'',
         //    'star'=>'nullable',
            'bvn'=>'nullable',
            'review'=>'nullable',
            'phone'=>'required|min:11',
            'landmark'=>'required',
            'worth'=> 'required',
            'vacancy'=> 'required',
            'propdesc'=> 'required',
            'address'=> 'required',
            'grade'=> 'nullable',
            'validation'=>'required',
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

       if($request->hasfile('filename'))
       {

          foreach($request->file('filename') as $image)
          {
              $name=$image->getClientOriginalName();
              $image->move(public_path().'/images/', $name);
              $dat[] = $name;
          }
       }

    //    $post= new post();
       $formatted= json_encode($dat);
    //    $image = image::make(public_path('images'. $formatted))->fit(300,300);


       $post->proptype=$request->input('proptype');
       $post->housetype=$request->input('housetype');
    //    $post->moderator=$request->input('moderator');
       $post->bvn=$request->input('bvn');
       $post->review=$request->input('review');
       $post->phone=$request->input('phone');
       $post->landmark=$request->input('landmark');
       $post->worth=$request->input('worth');
       $post->vacancy=$request->input('vacancy');
       $post->propdesc=$request->input('propdesc');
       $post->address=$request->input('address');
       $post->grade=$request->input('grade');
       $post->validation=$request->input('validation');
       $post->filename=$formatted;
       $post->update();

        return redirect('/post')->with('updated','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('post');
    }
}








