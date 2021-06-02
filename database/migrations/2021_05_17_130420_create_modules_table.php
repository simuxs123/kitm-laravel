<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->integer('teacher_id');
            $table->string('teacher_surname');
            $table->string('module_name');
            $table->string('group_name');
            $table->timestamps();
        });
    }

    {
        Schema::dropIfExists('modules');
    }
}
