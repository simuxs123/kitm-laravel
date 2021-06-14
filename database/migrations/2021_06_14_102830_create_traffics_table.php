<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrafficsTable extends Migration
{
    public function up()
    {
        Schema::create('traffics', function (Blueprint $table) {
            $table->id();
            $table->integer('visitor');
            $table->integer('visits')->default(0);
            $table->integer('Jan')->default(0);
            $table->integer('Feb')->default(0);
            $table->integer('Mar')->default(0);
            $table->integer('Apr')->default(0);
            $table->integer('May')->default(0);
            $table->integer('Jun')->default(0);
            $table->integer('Jul')->default(0);
            $table->integer('Aug')->default(0);
            $table->integer('Sep')->default(0);
            $table->integer('Oct')->default(0);
            $table->integer('Nov')->default(0);
            $table->integer('Dec')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('traffics');
    }
}
