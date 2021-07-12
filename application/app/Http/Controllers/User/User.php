<?php

namespace App\Http\Controllers\User;

use Request;
use App\Http\Controllers\Controller;

class User extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user/index');
    }

    public function show($page)
    {
        if($page == 'dashboard') return $this->showDashboard();
        if($page == 'quizes')  return $this->showQuizes();
        if($page == 'questions')    return $this->showQuestions();
        if($page == 'assignquiz')    return $this->showAssingQuiz();
        if($page == 'help')      return $this->showHelp();


        return Response($page);
    }

    private function showDashboard()
    {
        return view('user.pages.dashboard');
    }

    private function showQuizes()
    {
        return view('user.pages.quizbank');
    }

    private function showAssingQuiz()
    {
        return view('user.pages.assignquiz');
    }

    private function showQuestions()
    {
        return view('user.pages.questionbank');
    }

    private function showHelp()
    {
        return view('user.pages.help');
    }


}

