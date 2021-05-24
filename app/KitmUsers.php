<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KitmUsers extends Model
{
    protected $fillable=['email','roles_id'];
    
    public function roles(){
        return $this->belongsTo(Roles::class,'roles_id');
    }
}
