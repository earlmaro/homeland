<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commit extends Model
{

    protected $guarded = [

    ];
    public function post(){
        return $this->belongsTo(post::class);
    }

    public function user(){
        return $this->hasMany(user::class);
    }


}
