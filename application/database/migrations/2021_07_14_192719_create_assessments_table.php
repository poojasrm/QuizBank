<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->string('name');            
            $table->mediumText('description')->nullable();   
            $table->bigInteger('quizzes_id');
            $table->bigInteger('user_id');
            $table->dateTime('scheduledate')->nullable()->default('1970-01-01 00:00:00');
            $table->integer('duration')->unsigned()->nullable()->default(10);
            $table->integer('accestype')->unsigned()->nullable()->default(1); //1=>public 2=>private
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
        Schema::dropIfExists('assessments');
    }
}
