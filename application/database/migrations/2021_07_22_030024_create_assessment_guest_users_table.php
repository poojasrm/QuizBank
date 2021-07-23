<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentGuestUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessment_guest_users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('assessment_id');
            $table->bigInteger('guest_user_id');
            $table->dateTime('startdatetime')->nullable();
            $table->integer('marks')->nullable();
            $table->json('useroption')->nullable();
            $table->integer('status')->unsigned()->nullable()->default(1);  //1=>nottaken 2=>submitted
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
        Schema::dropIfExists('assessment_guest_users');
    }
}
