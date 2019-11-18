<?php

use Illuminate\Http\Request;

Route::group(['midldleware' => 'api'], function () {
    Route::get('/post', function () {
        return post::latest()->orderBy('created_at', 'desc')->get();
    });

    Route::get('/post/{{id}}', function ($id) {
        return post::findorfail($id);
    });


    Route::post('/post/store', function (Request $request) {


        $data = request()->validate([
            'proptype' => 'required',
            'housetype' => 'nullable',
            'moderator' => 'nullable',
            //    'star'=>'nullable',
            'bvn' => 'nullable',
            'review' => 'nullable',
            'phone' => 'required|min:11',
            'landmark' => 'required',
            'postworth' => 'required',
            'vacancy' => 'required',
            'propdesc' => 'required',
            'address' => 'required',
            'grade' => 'nullable',
            'validation' => 'required',
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);





        if ($request->hasfile('filename')) {

            foreach ($request->file('filename') as $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path() . '/images/', $name);
                $dat[] = $name;
            }
        }

        //    $post= new post();
        $formatted = json_encode($dat);


        Post::create([

            'proptype' => $data['proptype'],
            'housetype' => $request->has('housetype') ? $request->input('housetype') : NULL,
            'landmark' => $data['landmark'],
            'moderator' => $request->has('moderator') ? $request->input('moderator') : NULL,
            // 'star' => $request->has('star') ? $request->input('star') : NULL,
            // 'bvn' => '',
            'bvn' => $request->has('bvn') ? $request->input('bvn') : NULL,
            'phone' => $data['phone'],
            // 'review' => '',
            'review' => $request->has('review') ? $request->input('review') : NULL,
            'worth' => $data['postworth'],
            'vacancy' => $data['vacancy'],
            'propdesc' => $data['propdesc'],
            'address' => $data['address'],
            'grade' => $request->has('grade') ? $request->input('grade') : NULL,
            'validation' => $data['validation'],
            'user_id' => auth()->id(),
            'filename' => $formatted


        ]);
        //    $post->save();
        return redirect('/post/create')->with('success', 'Post created');
    });
    Route::patch('/post/{{id}}', function (Request $request, $id) {
        return post::findorfail($id)->update($data = request()->validate([
            'proptype' => 'required',
            'housetype' => 'nullable',
            'moderator' => 'nullable',
            //    'star'=>'nullable',
            'bvn' => 'nullable',
            'review' => 'nullable',
            'phone' => 'required|min:11',
            'landmark' => 'required',
            'postworth' => 'required',
            'vacancy' => 'required',
            'propdesc' => 'required',
            'address' => 'required',
            'grade' => 'nullable',
            'validation' => 'required',
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]));





        if ($request->hasfile('filename')) {

            foreach ($request->file('filename') as $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path() . '/images/', $name);
                $dat[] = $name;
            }
        }

        //    $post= new post();
        $formatted = json_encode($dat);


        Post::create([

            'proptype' => $data['proptype'],
            'housetype' => $request->has('housetype') ? $request->input('housetype') : NULL,
            'landmark' => $data['landmark'],
            'moderator' => $request->has('moderator') ? $request->input('moderator') : NULL,
            // 'star' => $request->has('star') ? $request->input('star') : NULL,
            // 'bvn' => '',
            'bvn' => $request->has('bvn') ? $request->input('bvn') : NULL,
            'phone' => $data['phone'],
            // 'review' => '',
            'review' => $request->has('review') ? $request->input('review') : NULL,
            'worth' => $data['postworth'],
            'vacancy' => $data['vacancy'],
            'propdesc' => $data['propdesc'],
            'address' => $data['address'],
            'grade' => $request->has('grade') ? $request->input('grade') : NULL,
            'validation' => $data['validation'],
            'user_id' => auth()->id(),
            'filename' => $formatted


        ]);
        //    $post->save();
        return redirect('/post/create')->with('success', 'Post updated');
    });

    Route::get('/post/{{id}}', function ($id) {
        return post::destroy($id);
    });


});

// Route::resource('/post', 'PostController');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('admin', 'AdminController@index')->middleware('admin');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
