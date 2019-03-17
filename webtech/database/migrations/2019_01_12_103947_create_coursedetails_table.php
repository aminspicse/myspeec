<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursedetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coursedetails', function (Blueprint $table) {
            $table->increments('course_id');
            $table->string('course_name');
            $table->string('course_fee');
            $table->string('course_duration');
            $table->text('course_details');
            $table->integer('course_status')->default(1);
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
        Schema::dropIfExists('coursedetails');
    }
}
