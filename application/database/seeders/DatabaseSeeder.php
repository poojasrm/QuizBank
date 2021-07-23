<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Assessment;
use App\Models\GuestUser;
use Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         $user = User::create(['name'=>'Admin','email'=>'admin@gmail.com','password'=>Hash::make('admin')]);

        $quiz = Quiz::create(['name'=>'test','description'=>'hfhjdk']);
        $question = Question::create(['question'=>'thisis question','marks'=>'3','options'=>'hii']);
        $quiz->questions()->attach($question->id);

        $assessment = Assessment::create(['quizzes_id'=>$quiz->id,'name'=>$quiz->name,'user_id'=>$user->id]);
        $guestuser = GuestUser::create(['name'=>'himanshu','email'=>'himanshu@gmai.com']);

    }
}
