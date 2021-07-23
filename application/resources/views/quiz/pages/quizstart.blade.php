<?php
$rstr=Request::get('rstr','a'.Str::random(10));

$starttime = $assessment->scheduledate;
$duration = $assessment->duration;

$endtime = date("Y-m-d H:i:s", strtotime('+'.$duration.' minutes', strtotime($starttime)));

$currenttime = date('Y-m-d H:i:s',strtotime('+330 minutes',strtotime(date('Y-m-d H:i:s'))));

$isOver = $currenttime > $endtime;
?>
@include('quiz.partial.header')
@include('quiz.partial.topbar')
<div class="page-inner" id="app_content">    
    
    <div class="row mt-3">
      <div class="col-md-12 text-center">
          <h2>{{$assessment->name}}</h2>
       </div>
    </div>
    
    <div class="row mt-3">
      <div class="col-md-12 text-center">
         
         <table class="table border-0">         
         <tbody >
            <tr>
               <th>Total Question</th>
               <td>{{$assessment->quiz->questions->count()}}</td>
            </tr>
            <tr>
               <th>Total Marks</th>
               <td>{{$assessment->quiz->questions->sum('marks')}}</td>
            </tr>
            <tr>
               <th>Created By</th>
               <td>{{$assessment->user->name}}</td>
            </tr>
            <tr>
               <th>Duration</th>
               <td>{{$assessment->duration}} min</td>
            </tr>
            <tr>
               <th>Start Time</th>
               <td class="@if($isOver)bg-soft-danger @endif">{{date('d M Y h:m A',strtotime($assessment->scheduledate))}}</td>
            </tr>
         </tbody>
         </table>
         
       </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-12 text-center">
          @if($isOver)            
            <button class="btn btn-success" onclick="_quizstart.showUserForm()">View Result</button>
          @else
            <button class="btn btn-success" onclick="_quizstart.showUserForm()">Start Now</button>
          @endif
       </div>
    </div>    


<div class="modal fade" id="userform_modal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-cog mr-2"></i>Take Quiz</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="{{$rstr}}-name">
          </div>
          <div class="form-group">
            <label for="name" class="col-form-label">Email:</label>
            <input type="email" class="form-control" id="{{$rstr}}-email">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        @if($isOver)
        <button type="button" class="btn btn-primary" onclick="_quizstart.startQuiz('{{$rstr}}','{{$assessment->id}}','end')" > View Result </button>
        @else
        <button type="button" class="btn btn-primary" onclick="_quizstart.startQuiz('{{$rstr}}','{{$assessment->id}}','start')" >Start Quiz</button>
        @endif
      </div>
    </div>
  </div>
</div>



    <footer class="page-footer" style="position: fixed;bottom:0px;right: 0px;width:100%;">
       <div class="pd-t-4 pd-b-0 pd-x-20 col text-right ">
          <div class="tx-10 tx-uppercase tx-gray-500 tx-spacing-1">
             <p class="pd-y-10 mb-0">&copy; 2021 QuizBank</p>
          </div>
       </div>
    </footer>

</div>

<script type="text/javascript">
   
 var _quizstart = {};

 _quizstart.showUserForm = function()
 {
   $('#userform_modal').modal('show');
 }  

 _quizstart.startQuiz = function(rstr,assessment_id,status)
 {
   data = {};
   data['assessment_id'] = assessment_id;
   data['name']          = $('#'+rstr+'-name').val();
   data['email']         = $('#'+rstr+'-email').val();
   $('#userform_modal').modal('hide');
   $('#userform_modal').on('hidden.bs.modal',function(e){
   
      ajaxcall(assessment_id+'?status='+status,data,'GET','app_content',function(res){
      

      });   
   });
   

 }
</script>

@include('quiz.partial.footer')