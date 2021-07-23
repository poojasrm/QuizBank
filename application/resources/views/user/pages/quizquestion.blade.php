<?php

$rstr=Request::get('rstr','a'.Str::random(10));

?>

<div class="wrapper">

    <div class="pageheader pd-t-25 pd-b-35">
     <div class="d-flex justify-content-between">
        <div class="clearfix">
           <div class="pd-t-5 pd-b-5">
              <h1 class="pd-0 mg-0 tx-20 tx-dark">{{$quiz->name}}</h1>
           </div>
           <div class="breadcrumb pd-0 mg-0">
              <a class="breadcrumb-item" href="javascript:void(0);" onclick="menuaction('quizes')">Back</a>                            
              <a class="breadcrumb-item" href="javascript:void(0);"  onclick="menuaction('quizquestion?quiz_id={{$quiz->id}}')"><i class="icon ion-ios-home-outline"></i> Quizname</a>
           </div>
        </div> 
             
     </div>
    </div>



    
    <div class="card">
        <div class="card-body">
            @foreach($quiz->questions as $question)
            <div class="row mb-5">
                <div class="col-md-1 text-left mb-2">
                    <div class="avatar avatar"><span class="avatar-initial rounded-circle bg-success p-2">Q {{$loop->index+1}}</span></div>
                </div> 
                <div class="col-md-9 mb-2">
                    <h6>{{$question->question}}</h6>
                    @foreach($question->options as $option)
                        <div class="@if($option['correct'])bg-soft-success @endif p-2 mb-2">{{$option['value']}}</div>
                    @endforeach
                </div> 
                <div class="col-md-2 text-right"><h6>{{$question->marks}} <span class="ml-2 p-1 btn btn-danger ti ti-trash "  onclick="_quizquestion.removeQuestion('{{$quiz->id}}','{{$question->id}}')"></span></h6></div> 
            </div>
            @endforeach
        </div>
    </div>
    
    <div class="row mt-2">
        <div class="col-md-12 text-center">
            <button class="btn btn-outline-primary" onclick="_quizquestion.showQuestionCreateForm('{{$rstr}}')"><i class="ti ti-plus mr-2"></i>New Question</button>
            <button class="btn btn-outline-success" onclick="_quizquestion.showAttachQuestionModal('{{$quiz->id}}')"><i class="ti ti-link mr-2"></i>Attach Question</button>
        </div>
    </div>


</div>

<div class="modal fade" id="attach_question_modal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-cog mr-2"></i>Attach Questions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body" id="attach_question_modal_body">
                 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="_quizquestion.saveQuizQuestion('{{$quiz->id}}')">Attach</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="configquestion_modal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-cog mr-2"></i>Question <span class="badge badge-primary" id="{{$rstr}}-config_questionid">New<span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
       
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Question</label>
            <textarea class="form-control" id="{{$rstr}}-config_question"></textarea>            
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Option 1</label>
             <div class="form-row">
              <input class="form-control col-1" id="{{$rstr}}-configquestion_op1_correct" style="height: 20px !important;margin-top:11px !important;" type="checkbox" />
              <textarea class="form-control col-11" id="{{$rstr}}-configquestion_op1"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Option 2</label>
             <div class="form-row">
              <input class="form-control col-1" id="{{$rstr}}-configquestion_op2_correct" style="height: 20px !important;margin-top:11px !important;" type="checkbox" />
              <textarea class="form-control col-11" id="{{$rstr}}-configquestion_op2"></textarea>
             </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Option 3</label>
            <div class="form-row">
              <input class="form-control col-1" id="{{$rstr}}-configquestion_op3_correct" style="height: 20px !important;margin-top:11px !important;" type="checkbox" />
              <textarea class="form-control col-11" id="{{$rstr}}-configquestion_op3"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Option 4</label>
            <div class="form-row">
              <input class="form-control col-1" id="{{$rstr}}-configquestion_op4_correct" style="height: 20px !important;margin-top:11px !important;"  type="checkbox" />
              <textarea class="form-control col-11" id="{{$rstr}}-configquestion_op4"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Marks</label>
            <input class="form-control" id="{{$rstr}}-configquestion_marks">
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="_quizquestion.saveQuestion('{{$rstr}}','{{$quiz->id}}')">Save</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    
var _quizquestion = {};

_quizquestion.showAttachQuestionModal = function(quiz_id)
{   
    ajaxcall('user/showattachquestion?quiz_id='+quiz_id,'','GET','attach_question_modal_body',function(res){
        $('#attach_question_modal').modal('show');
    });
}


_quizquestion.saveQuizQuestion = function(quiz_id)
{
   data = {};
   data['quiz_id'] = quiz_id;
   data['_token']= "{{ csrf_token() }}";
   data['action'] = 'attachQuizQuestion';
   
   selected_question_ids = [];
   $('.question-checkbox').each(function(e){if($(this).prop('checked') == true) selected_question_ids.push($(this).attr('data'));});
   
   data['selected_questionids'] = JSON.stringify(selected_question_ids);
   
   ajaxcall('user',data,'POST','FakeDiv',function(res){
        $('#attach_question_modal').modal('hide');
        $('#attach_question_modal').on('hidden.bs.modal',function(e){
                notify('success','Questions Attached');
                menuaction('quizquestion?quiz_id='+quiz_id);          
        });
   });
}

_quizquestion.removeQuestion = function (quiz_id,question_id) {
    
    data = {};
    data['quiz_id'] = quiz_id;
    data['question_id'] = question_id;            
    ajaxcall('user/removequizquestion',data,'GET','FAKE_DIV',function(res){

        notify('success','Question Removed');
        menuaction('quizquestion?quiz_id='+quiz_id);

    });
}


_quizquestion.saveQuestion = function(rstr,quizid)
 {
   data = {};
   data['_token']     = "{{ csrf_token() }}";
   data['action']     = 'savequestionwithquiz';
   data['quiz_id']    = quizid;
   data['questionid'] = $('#'+rstr+'-config_questionid').val();
   data['question']   = $('#'+rstr+'-config_question').val();
   data['marks']      = $('#'+rstr+'-configquestion_marks').val();
   
   var options = {};
   options.op1 = {"correct":$('#'+rstr+'-configquestion_op1_correct').prop('checked') ,"value":$('#'+rstr+'-configquestion_op1').val()};  
   options.op2 = {"correct":$('#'+rstr+'-configquestion_op2_correct').prop('checked') ,"value":$('#'+rstr+'-configquestion_op2').val()};  
   options.op3 = {"correct":$('#'+rstr+'-configquestion_op3_correct').prop('checked') ,"value":$('#'+rstr+'-configquestion_op3').val()};  
   options.op4 = {"correct":$('#'+rstr+'-configquestion_op4_correct').prop('checked') ,"value":$('#'+rstr+'-configquestion_op4').val()};  

   data['options'] = JSON.stringify(options);
  
   ajaxcall('user',data,'POST','FAKE_DIV',function(res){
      
      


      if(res['status'] == 'ok')
      {
        notify('success',res['msg']);
        $('#configquestion_modal').modal('hide');
        $('#configquestion_modal').on('hidden.bs.modal',function(e){
                menuaction('quizquestion?quiz_id='+quizid);          
        });


      }
      else notify('error',res['msg']);

   });

 }  


 _quizquestion.showQuestionCreateForm = function(rstr)
 { 

   $('#'+rstr+'-config_questionid').val('new');
   $('#'+rstr+'-config_question').val('');
   $('#'+rstr+'-configquestion_marks').val('');
   $('#'+rstr+'-configquestion_op1').val('');   
   $('#'+rstr+'-configquestion_op2').val('');
   $('#'+rstr+'-configquestion_op3').val('');
   $('#'+rstr+'-configquestion_op4').val('');

   $('#configquestion_modal').modal('show');
 } 

</script>