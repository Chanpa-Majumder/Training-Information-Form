<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->increments('training_id');
            $table->string('training_name', 255);
            $table->string('training_type');
            $table->text('applying_information');
            $table->text('objectives');
            $table->string('courses');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('provided_resources');
            $table->text('accommodation');
            $table->text('testimonial')->nullable();
            $table->text('daily_schedule');
            $table->text('fees_structure');
            $table->text('responsible_person');
            $table->string('training_slug');
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
        Schema::drop('trainings');
    }
}
