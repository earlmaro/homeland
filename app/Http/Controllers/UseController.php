<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UseController extends Controller
{

    public function myadminpending()
    {
        
        $adminpending = Post::where([
            ['validation',1],['user_id', auth()->user()->id]]);

            return view('admin/myadminpending',compact('adminpending'));
    }

}
