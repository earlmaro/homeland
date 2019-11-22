<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
   protected $guarded =[];

   public function user(){
    return $this->belongsTo(User::class);
}
protected $casts = ['filename' => 'array'];

public function admin(){
    return $this->belongsTo(admin::class);
}



// public function commit(){
//     return $this->hasMany(commit::class);
// }


}
