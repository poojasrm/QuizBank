<?php
//dd($assessmentguestuser->assessment->quiz->questions->toArray());
use Illuminate\Support\Carbon;
//$starttime = $assessmentguestuser->assessment->scheduledate;
//$duration = $assessmentguestuser->assessment->duration;

//$endtime = Carbon::create($starttime)->addMinutes($duration+330);
//$endtime = date("Y-m-d H:i:s", strtotime('+'.$duration.' minutes', strtotime($starttime)));

//$currenttime = date('Y-m-d H:i:s',strtotime('+330 minutes',strtotime(date('Y-m-d H:i:s'))));
//dump($starttime,$duration,$endtime,$currenttime);
//dump((strtotime($endtime)-strtotime($currenttime)));
//dump($endtime,$endtime->diffinMinutes(Carbon::now()->add) * 1000);
//dd($endtime>$currenttime);



?>
<div class="row mt-3">  
  <div class="col-md-12 text-center">
      <h2>{{$assessmentguestuser->assessment->name}}</h2>
   </div>
</div>
<div class="row mb-0 pb-0">  
  <div class="col-md-12 text-center">
      <p> <i class="fa fa-clock-o mr-2"></i> <span id="timer">15:22</span> </p>
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
                @foreach($question->options as $key=>$option)
                    <div class="row mt-3">
                      <div class="col-1 pr-0 mr-0 text- left">
                        <input type="checkbox" data='{{$question->id}}|{{$key}}' class="form-control" style="height: 20px !important;" name=""/>
                      </div>
                      <div class='col-10 text-left'>
                        <p class="mb-2">
                        
                          {{$option['value']}}

                        </p>    
                      </div>
                    </div>
                    
                @endforeach
            </div>
            <div class="col-1 text-right"><h6>{{$question->marks}} </h6></div> 
        </div>
        @endforeach
    </div>
</div>

<div class="row">
  <div class="col-12 text-center">
      <button class="btn btn-success" onclick="submitQuiz('{{$assessmentguestuser->id}}','{{$assessmentguestuser->assessment_id}}')"> Submit </button>
  </div>
  
</div>

<script type="text/javascript">

var testtime = '{{$assessmentguestuser->assessment->duration}}';
var teststarttime = '{{$assessmentguestuser->assessment->scheduledate}}';



function startTimer(duration) {

    clearInterval(window.myInterval);
    var start = Date.now();
    start += duration;
    window.myInterval = setInterval(function() {
        now = Date.now();
        timer = (start - now) / 1000;
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        textTimer = minutes + ":" + seconds;
        $('#timer').text(textTimer)
        if (timer < 0) {
            submitQuiz();
            clearInterval(window.myInterval);

        }
    }, 1000);
}

function submitQuiz(assessmentguestuser_id,assessment_id)
{
  data = {};

  data['assessmentguestuser_id'] = assessmentguestuser_id;

  useranswer = {};

  $('input').each(function(e){

    if($(this).prop('checked'))
    {
      temp = $(this).attr('data').split("|");
      q_id = temp[0];

      useroption = temp[1];

      if(!useranswer[q_id]) useranswer[q_id] = [];
      useranswer[q_id].push(useroption);
    

    }


  });

  data['useranswers'] = useranswer;

  
  ajaxcall(assessment_id+'?status=end',data,'GET','app_content',function(res){});
}

</script>


</div>
