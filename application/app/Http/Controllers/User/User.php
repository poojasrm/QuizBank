<?php

namespace App\Http\Controllers\User;

use App\Models\quiz;
use App\Models\question;
use App\Models\assessment;


use Request;
use App\Http\Controllers\Controller;
use Response;

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
        if($page == 'dashboard')    return $this->showDashboard();
        if($page == 'quizes')       return $this->showQuizes();
        if($page == 'quizquestion') return $this->showQuizQuestion();
        if($page == 'questions')    return $this->showQuestions();
        if($page == 'assignquiz')   return $this->showAssingQuiz();
        if($page == 'help')         return $this->showHelp();


        return Response($page);
    }

    public function store()
    {
        $action  = Request::get('action');

        if($action == 'savequiz') return $this->saveQuiz();
        if($action == 'savequestion') return $this->saveQuestion();
        if($action == 'saveassessment') return $this->saveAssessment();

    }


    private function saveQuiz()
    {
        $quizid   = Request::get('quizid','new');
        $quizname = Request::get('quizname');
        $quizdescription = Request::get('quizdescription');        
        
        
        $QUIZ = new quiz;

        $quiz = $QUIZ->findOrNew($quizid);
        $quiz->name = $quizname;
        $quiz->description = $quizdescription;
        $quiz->save();
        
        return Response::json(['status'=>'ok','msg'=>'Created']);
    }

    private function saveQuestion()
    {
        $questionid    = Request::get('questionid','new');
        $question_text = Request::get('question');
        $marks    = Request::get('marks');
        $op1      = Request::get('op1');
        $op2      = Request::get('op2');
        $op3      = Request::get('op3');
        $op4      = Request::get('op4');
        
        
        $QUESTION = new question;

        $question = $QUESTION->findOrNew($questionid);
        $question->question = $question_text; 
        $question->marks    = $marks; 
        $question->op1      = $op1;
        $question->op2      = $op2;
        $question->op3      = $op3; 
        $question->op4      = $op4; 
        
        $question->save();


        return Response::json(['status'=>'ok','msg'=>'Created']);
    }

    private function saveAssessment()
    {
        $assessment_id     = Request::get('assessment_id','new');
        $quizname          = Request::get('quizname');
        $quizdescription   = Request::get('quizdescription');        
        $quizduration      = Request::get('quizduration');
        $quizdatetime      = Request::get('quizdatetime');
        $quizaccesstype    = Request::get('quizaccesstype');
        
        $ASSESSMENT = new assessment;

        $assessment = $ASSESSMENT->findOrNew($assessment_id);        
        $assessment->name         = $quizname;
        $assessment->description  = $quizdescription;
        $assessment->duration     = $quizduration;
        $assessment->scheduledate = $quizdatetime;
        $assessment->accestype    = $quizaccesstype;
        $assessment->save();
        
        return Response::json(['status'=>'ok','msg'=>'Created']);
    }

    private function showDashboard()
    {
        return view('user.pages.dashboard');
    }

    private function showQuizes()
    {
        
        $quizes = quiz::all();
        return view('user.pages.quizbank',['quizes'=>$quizes]);
    }

    private function showQuizQuestion()
    {
        return view('user.pages.quizquestion');
    }

    private function showAssingQuiz()
    {
        $assessments = assessment::all();
        $quizes      = quiz::all();
        return view('user.pages.assignquiz',['assessments'=>$assessments,'quizes'=>$quizes]);
    }

    private function showQuestions()
    {
        $questions = question::all();
        return view('user.pages.questionbank',['questions'=>$questions]);
    }

    private function showHelp()
    {
        return view('user.pages.help');
    }


}

