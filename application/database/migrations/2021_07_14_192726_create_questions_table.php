<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->double('marks', 15, 8)->nullable()->default(0.0);
            $table->mediumText('question')->nullable()->default('text');
            $table->json('options');
            $table->string('op1', 100)->nullable()->default('text');
            $table->string('op2', 100)->nullable()->default('text');
            $table->string('op3', 100)->nullable()->default('text');
            $table->string('op4', 100)->nullable()->default('text');

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
        Schema::dropIfExists('questions');
    }
}
