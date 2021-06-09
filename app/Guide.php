<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    protected $fillable=[
        'user_id',
        'first_number_of_lessons_discussed_by_the_supervisor',
        // 'second_number_of_lessons_discussed_by_the_supervisor',
        // 'third_number_of_lessons_discussed_by_the_supervisor',
        'managers_comment_on_activities_and_suggestions',
        'assistance_in_the_next_school_year',
        'first_help_which_I_need',
        // 'second_help_which_I_need',
        // 'third_help_which_I_need',
        'guide_evaluation'
    ];
}
