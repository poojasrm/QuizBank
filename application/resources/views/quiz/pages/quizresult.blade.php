<?php
///dump($useranswers);

$starttime = $assessmentguestuser->assessment->scheduledate;
$duration = $assessmentguestuser->assessment->duration;

$endtime = date("Y-m-d H:i:s", strtotime('+'.$duration.' minutes', strtotime($starttime)));

$currenttime = date('Y-m-d H:i:s',strtotime('+330 minutes',strtotime(date('Y-m-d H:i:s'))));

$isOver = $currenttime > $endtime;

?>



<div class="row mt-3 mb-5">
    <div class='col-md-12 text-center'>
        <div class="card border-0 bg-soft-primary card-body">
        <h3 class="card-title text-primary">Hello! {{$assessmentguestuser->guestuser->name}} </h3>
        <h5 class="card-text">You have Scored <span class="badge badge-success ml-2 mr-2">{{$assessmentguestuser->marks}}</span> Out of <span class="badge badge-primary ml-2 mr-2">{{$assessmentguestuser->assessment->quiz->questions->sum('marks')}}</h5>
        </div>
    </div>
</div>

<div class="row">
    <div class='col-md-12 text-primary text-center'>
        <h2>Solved Quiz</h2>
    </div>
</div>
<hr/>
<div class="card border-0">
    <div class="card-body">
        @foreach($assessmentguestuser->assessment->quiz->questions as $question)
        <div class="row">
            <div class="col-1 text-center mb-2">
                <div class="avatar avatar"><span class="avatar-initial rounded-circle bg-success p-2">Q {{$loop->index+1}}</span></div>
            </div> 
            <div class="col-9 mb-2 ml-3">
                <h6>{{$question->question}}</h6>
               @foreach($question->options as $option)
                    <div class="@if($option['correct'])bg-soft-success @endif p-2 mb-2">
                    {{$option['value']}}
                    </div>
               @endforeach

            </div>
            <div class="col-1 text-right"><h6>{{$question->marks}} </h6></div> 
        </div>
        @endforeach
    </div>
</div>
