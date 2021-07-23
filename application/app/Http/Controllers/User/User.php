<?php

namespace App\Http\Controllers\User;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\Assessment;
use App\Models\AssessmentGuestUser;


use Request;
use App\Http\Controllers\Controller;
use Response;
use Auth;

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
        if($page == 'showattachquestion') return $this->showAttachQuestion();
        if($page == 'showassessmentreport') return $this->showAssessmentReport();


        //detroy
        if($page == 'removequizquestion') return $this->removeQuizQuestion();        


        return Response($page);
    }

    public function store()
    {
        $action  = Request::get('action');

        if($action == 'savequiz') return $this->saveQuiz();
        if($action == 'savequestion') return $this->saveQuestion();
        if($action == 'savequestionwithquiz') return $this->saveQuestionWithQuiz();
        if($action == 'saveassessment') return $this->saveAssessment();
        if($action == 'attachQuizQuestion') return $this->attachQuizQuestion();

    }


    private function removeQuizQuestion()
    {
        $quiz_id = Request::get('quiz_id');
        $question_id = Request::get('question_id');

        Quiz::find($quiz_id)->questions()->detach($question_id);

        return Response::json(['status'=>'ok','msg'=>"Quiz Updated"]);
    }

    private function attachQuizQuestion()
    {
        $quiz_id = Request::get('quiz_id');
        $selected_question_ids = json_decode(Request::get('selected_questionids'));

        
        Quiz::find($quiz_id)->questions()->attach($selected_question_ids);

        return Response::json(['status'=>'ok','msg'=>'Attached']);

    }
    private function showAttachQuestion()
    {
        $quiz_id = Request::get('quiz_id');

        $attached_questionids =  Quiz::find($quiz_id)->questions->pluck('id')->toArray();
        $questions = Question::whereNotIn('id',$attached_questionids)->get();

        return view('user.pages.attachquestion',['questions'=>$questions]);
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
        
        $msg = 'Created Successfully';
        if(strtolower($quizid) != 'new' ) $msg = "Updated Successfully";
        return Response::json(['status'=>'ok','msg'=>$msg]);
    }

    private function saveQuestion()
    {
        $questionid    = Request::get('questionid','new');
        $question_text = Request::get('question');
        $marks         = Request::get('marks');
        $options       = json_decode(Request::get('options'));
        
        
        
        $QUESTION = new question;

        $question = $QUESTION->findOrNew($questionid);
        $question->question = $question_text; 
        $question->marks    = $marks;         
        $question->options  = $options;
        
        $question->save();


        $msg = 'Created Successfully';
        if(strtolower($questionid) != 'new' ) $msg = "Updated Successfully";
        return Response::json(['status'=>'ok','msg'=>$msg]);
    }

    private function saveQuestionWithQuiz()
    {
        $questionid    = Request::get('questionid','new');
        $quiz_id       = Request::get('quiz_id');
        $question_text = Request::get('question');
        $marks         = Request::get('marks');
        $options       = json_decode(Request::get('options'));
        
        
        
        $QUESTION = new question;

        $question = $QUESTION->findOrNew($questionid);
        $question->question = $question_text; 
        $question->marks    = $marks;         
        $question->options  = $options;
        
        $question->save();

        Quiz::find($quiz_id)->questions()->attach($question->id);
        
        return Response::json(['status'=>'ok','msg'=>'Added Successfully']);
    }

    private function saveAssessment()
    {
        $assessment_id     = Request::get('assessment_id','new');
        $quizname          = Request::get('quizname');
        $quizid            = Request::get('quizid');
        $quizdescription   = Request::get('quizdescription');        
        $quizduration      = Request::get('quizduration');
        $quizdatetime      = Request::get('quizdatetime');
        $quizaccesstype    = Request::get('quizaccesstype');
        
        $ASSESSMENT = new assessment;

        $assessment = $ASSESSMENT->findOrNew($assessment_id);        
        $assessment->name         = $quizname;
        $assessment->description  = $quizdescription;
        $assessment->quizzes_id   = $quizid;
        $assessment->user_id      = Auth::user()->id;
        $assessment->duration     = $quizduration;
        $assessment->scheduledate = $quizdatetime;
        $assessment->accestype    = $quizaccesstype;
        $assessment->save();
        
        $msg = 'Created Successfully';
        if(strtolower($assessment_id) != 'new' ) $msg = "Updated Successfully";
        return Response::json(['status'=>'ok','msg'=>$msg]);
    }

    private function showDashboard()
    {
        return view('user.pages.dashboard');
    }

    private function showAssessmentReport()
    {
        $assessment_id = Request::get('assessment_id');

        $assessmentguestusers = AssessmentGuestUser::where('assessment_id',$assessment_id)->get();

        return view('user.pages.assessmentusers',['assessmentguestusers'=>$assessmentguestusers]);
    }
    private function showQuizes()
    {
        
        $quizes = quiz::all();
        return view('user.pages.quizbank',['quizes'=>$quizes]);
    }

    private function showQuizQuestion()
    {
        $quiz_id = Request::get('quiz_id');
        $quiz = Quiz::find($quiz_id);

        return view('user.pages.quizquestion',['quiz'=>$quiz]);
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
        //$questions = question::latest()->first();
        return view('user.pages.questionbank',['questions'=>$questions]);
    }

    private function showHelp()
    {
        return view('user.pages.help');
    }


}

