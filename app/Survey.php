<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $fillable=[
        'group',
        'attendance',
        'module_is_important',
        'module_material_is_important',
        'module_advanced_methods',
        'assessment_and_procedure',
        'the_teacher_virtually_teaches',
        'good_resources',
        'safe_environment',
        'quality',
        'preferences',
        'recommendation'];
}
