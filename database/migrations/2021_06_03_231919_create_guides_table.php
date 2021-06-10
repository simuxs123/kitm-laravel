<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guides', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('first_number_of_lessons_discussed_by_the_supervisor')->nullable();
            // $table->text('second_number_of_lessons_discussed_by_the_supervisor')->nullable();
            // $table->text('third_number_of_lessons_discussed_by_the_supervisor')->nullable();
            $table->text('managers_comment_on_activities_and_suggestions')->nullable();
            $table->text('assistance_in_the_next_school_year')->nullable();
            $table->text('first_help_which_I_need')->nullable();
            // $table->text('second_help_which_I_need')->nullable();
            // $table->text('third_help_which_I_need')->nullable();
            $table->integer('guide_evaluation')->nullable();
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guides');
    }
}
