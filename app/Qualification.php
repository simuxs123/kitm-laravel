<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $fillable=[
        'user_id',
        'name',
        // 'surname',
        'duty',
        'category',
        'seminar',
        'date',
        'hours',
        'certificate',
        'location'
    ];

    public function users(){
        return $this->belongsTo(KitmUsers::class,'id');
    }
}
