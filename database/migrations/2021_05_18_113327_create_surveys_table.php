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
            $table->string('group');
            $table->string('attendance');
            $table->string('module_is_important');
            $table->string('module_material_is_important');
            $table->string('module_advanced_methods');
            $table->string('assessment_and_procedure');
            $table->string('the_teacher_virtually_teaches');
            $table->string('good_resources');
            $table->string('safe_environment');
            $table->string('quality');
            $table->longText('preferences');
            $table->string('recommendation');
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
