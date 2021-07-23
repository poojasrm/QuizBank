<?php

namespace App\Http\Controllers;


use App\Models\Assessment;
use App\Models\GuestUser;
use App\Models\AssessmentGuestUser;
use Request;

class TakeQuiz extends Controller
{
    //


    public function show($assessment_id)
    {
        $status = Request::get('status');

        // $assessmentguestuser = AssessmentGuestUser::where('assessment_id',$assessment_id)->latest()->first();
        // if($status != 'end')return view('quiz.pages.quizrun',['assessmentguestuser'=>$assessmentguestuser]);
        

        $assessment = Assessment::with('quiz.questions')->find($assessment_id);
        if($assessment)
        {             
         
            if($status == 'start') return $this->runQuiz($assessment_id);
            if($status == 'end')   return $this->showQuizResult($assessment_id);


            return view('quiz.pages.quizstart',['assessment'=>$assessment]);

        }
        

        return Response("Incorrect Link");
    }



    private function runQuiz($assessment_id)
    {
        $name = Request::get('name');
        $email    = Request::get('email');

        $guestuser = GuestUser::where('email',$email)->first();
        if(empty($guestuser)) $guestuser = GuestUser::create(['name'=>$name,'email'=>$email]);

        $assessmentguestuser = AssessmentGuestUser::where('guest_user_id',$guestuser->id)->where('assessment_id',$assessment_id)->first();

        if($assessmentguestuser)
        {
            if($assessmentguestuser->status == 2) return view('quiz.pages.quizresult',['assessmentguestuser'=>$assessmentguestuser]);
        }
        else
        {            
            $assessmentguestuser = AssessmentGuestUser::create(['assessment_id'=>$assessment_id,'guest_user_id'=>$guestuser->id,'marks'=>0,'startdatetime'=>now(),'useroption'=>'{}']);
            $guestuser->assessment()->attach($assessmentguestuser->id);
        }
        

        //TODO Check existing quiz
        // 
        return view('quiz.pages.quizrun',['assessmentguestuser'=>$assessmentguestuser]);
    }


    private function getAssessmentGuestUserId($assessment_id)
    {
        $name = Request::get('name');
        $email    = Request::get('email');

        $guestuser = GuestUser::where('email',$email)->first();
        if(!$guestuser) return null;
        
        $assessmentguestuser = AssessmentGuestUser::where('guest_user_id',$guestuser->id)->where('assessment_id',$assessment_id)->first();


        return $assessmentguestuser->id??null;

    }

    private function showQuizResult($assessment_id)
    {
        $assessmentguestuser_id = Request::get('assessmentguestuser_id');
        $useranswers = Request::get('useranswers');        

        if(empty($assessmentguestuser_id)) $assessmentguestuser_id = $this->getAssessmentGuestUserId($assessment_id);

        if(!$assessmentguestuser_id)  return Response("<div class='row mt-5'><div class='col-md-12 text-center'><div class='card card-body border-0 bg-soft-danger'><h4 class='card-title'>You have not Attended this quiz</h4></div></div></div>");

        $assessmentguestuser = AssessmentGuestUser::find($assessmentguestuser_id);
        if($assessmentguestuser->status == 1)
        {
            $questions = $assessmentguestuser->assessment->quiz->questions;
            $marks = 0;
            foreach($useranswers as $key=>$useroptions)
            {
                $q = $questions->where('id',$key)->first();

                $correctoptions = array_keys(array_filter($q->options,function($e){return $e['correct']==true;}));
                
                if($useroptions == $correctoptions){
                    $marks += $q->marks;
                }
            }
            
            $assessmentguestuser->marks = $marks;
            $assessmentguestuser->status = 2;
            $assessmentguestuser->useroption = $useranswers;
            $assessmentguestuser->save();    
        }
        
        
        return view('quiz.pages.quizresult',['assessmentguestuser'=>$assessmentguestuser]);
    }

}
