<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->integer('module_id');
            $table->integer('teacher_id');
            $table->string('module_name');
            $table->string('group');
            $table->string('attendance');
            $table->integer('module_is_important');
            $table->integer('module_material_is_important');
            $table->integer('module_advanced_methods');
            $table->integer('assessment_and_procedure');
            $table->integer('the_teacher_virtually_teaches');
            $table->integer('good_resources');
            $table->integer('safe_environment');
            $table->integer('quality');
            $table->longText('preferences');
            $table->integer('recommendation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveys');
    }
}
