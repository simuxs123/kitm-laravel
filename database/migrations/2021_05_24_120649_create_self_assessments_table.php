<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelfAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('self_assessments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');

            //                1

            $table->integer('dateOne')->nullable();
            $table->integer('dateTwo')->nullable();
            $table->string('name')->nullable();
            // $table->string('surname')->nullable();
            $table->string('role')->nullable();
            $table->string('category')->nullable();
            $table->string('work_experience')->nullable();
            $table->string('1_1_first')->nullable();
            // $table->string('1_1_second')->nullable();
            // $table->string('1_1_third')->nullable();
            $table->string('1_2')->nullable();
            $table->string('1_3')->nullable();
            $table->string('1_4')->nullable();
            $table->string('1_5')->nullable();
            $table->integer('1_6')->nullable();
            $table->string('1_6_first')->nullable();
            // $table->string('1_6_second')->nullable();
            // $table->string('1_6_third')->nullable();
            $table->string('1_6_link')->nullable();
            $table->string('1_7')->nullable();
            $table->string('1_7_first')->nullable();
            // $table->string('1_7_second')->nullable();
            // $table->string('1_7_third')->nullable();
            $table->string('1_8')->nullable();
            $table->string('1_9_first')->nullable();
            // $table->string('1_9_second')->nullable();
            // $table->string('1_9_third')->nullable();
            $table->string('1_9_success')->nullable();
            $table->string('1_9_failure')->nullable();
            $table->string('1_10')->nullable();
            $table->string('1_10_other')->nullable();
            $table->string('1_11_first')->nullable();
            // $table->string('1_11_second')->nullable();
            // $table->string('1_11_third')->nullable();
            $table->string('1_12')->nullable();
            $table->integer('1_13_islaike')->nullable();
            $table->integer('1_13_neislaike')->nullable();
            $table->integer('1_14_nr')->nullable();
            $table->integer('1_14_islaike')->nullable();
            $table->integer('1_14_neislaike')->nullable();
            $table->integer('1_15_nr')->nullable();
            $table->integer('1_15_1')->nullable();
            $table->integer('1_15_2')->nullable();
            $table->integer('1_15_3')->nullable();
            $table->integer('1_15_4')->nullable();
            $table->integer('1_16_1')->nullable();
            $table->integer('1_16_2')->nullable();
            $table->integer('1_16_3')->nullable();
            $table->integer('1_16_4')->nullable();
            $table->integer('1_16_5')->nullable();
            $table->string('1_16_6')->nullable();
            $table->integer('1_16_7')->nullable();
            $table->string('1_16_8')->nullable();
            $table->string('1_17')->nullable();
            $table->string('1_18')->nullable();

            //              2

            $table->json('2_1')->nullable();
            $table->integer('2_2')->nullable();
            $table->integer('2_3')->nullable();
            $table->string('2_4_1')->nullable();
            // $table->string('2_4_2')->nullable();
            // $table->string('2_4_3')->nullable();
            $table->string('2_5_1')->nullable();
            // $table->string('2_5_2')->nullable();
            // $table->string('2_5_3')->nullable();
            $table->string('2_5_4')->nullable();
            $table->string('2_5_5')->nullable();
            $table->string('2_5_6')->nullable();
            $table->integer('2_6_1')->nullable();
            $table->integer('2_6_2')->nullable();
            $table->string('2_7')->nullable();
            $table->string('2_8_1')->nullable();
            // $table->string('2_8_2')->nullable();
            // $table->string('2_8_3')->nullable();
            $table->string('2_9_1')->nullable();
            // $table->string('2_9_2')->nullable();
            // $table->string('2_9_3')->nullable();
            $table->string('2_10_1')->nullable();
            // $table->string('2_10_2')->nullable();
            // $table->string('2_10_3')->nullable();

            //              3

            $table->integer('3_hours')->nullable();
            $table->integer('3_I')->nullable();
            $table->integer('3_II')->nullable();
            $table->integer('3_III')->nullable();
            $table->integer('3_sum')->nullable();

            //             4


            $table->integer('4_1_1')->nullable();
            $table->integer('4_1_2')->nullable();
            $table->integer('4_1_3')->nullable();
            $table->integer('4_1_4')->nullable();
            $table->integer('4_1_5')->nullable();
            $table->string('4_1_6')->nullable();
            $table->integer('4_2_1')->nullable();
            $table->integer('4_2_2')->nullable();
            $table->integer('4_2_3')->nullable();
            $table->integer('4_2_4')->nullable();
            $table->integer('4_2_5')->nullable();
            $table->integer('4_2_6')->nullable();
            $table->integer('4_2_7')->nullable();
            $table->string('4_3_1')->nullable();
            $table->string('4_3_2')->nullable();
            $table->string('4_3_3')->nullable();
            $table->string('4_3_4')->nullable();
            $table->string('4_3_5')->nullable();
            $table->string('4_3_6')->nullable();
            $table->string('4_3_7')->nullable();
            $table->string('4_3_8')->nullable();
            $table->string('4_3_9')->nullable();
            $table->string('4_3_10')->nullable();
            $table->string('4_3_11')->nullable();
            $table->timestamps();
            $table->boolean('pateikta')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('self_assessments');
    }
}
