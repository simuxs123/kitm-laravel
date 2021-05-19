<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable=['module_name','teacher_name','teacher_surname', 'group_name'];

    public function surveys() {
        return $this->hasMany(Survey::class);
    }
}
