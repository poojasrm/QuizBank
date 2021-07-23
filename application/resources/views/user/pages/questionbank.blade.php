<?php
$rstr=Request::get('rstr','a'.Str::random(10));

//dd($questions);
?>
<div class="wrapper">

<div class="pageheader pd-t-25 pd-b-35">
 <div class="d-flex justify-content-between">
    <div class="clearfix">
       <div class="pd-t-5 pd-b-5">
          <h1 class="pd-0 mg-0 tx-20 tx-dark">Questions</h1>
       </div>
       <div class="breadcrumb pd-0 mg-0">
          <a class="breadcrumb-item" href="javascript:void(0);"><i class="icon ion-ios-home-outline"></i> {{config('app.name')}}</a>
          <a class="breadcrumb-item" href="">Questions</a>          
       </div>
    </div>
    <div class="d-flex align-items-center">
      <button class="btn btn-outline-primary" onclick="_questionbank.showQuestionCreateForm('{{$rstr}}')"><i class="ti ti-plus mr-2 "></i> New Question</button>      
   </div>
 </div>
</div>


<div class="row">
   <div class="col-md-12 pb-5 mb-5">
      <div class="card">
      <table class="table">
         <thead class="thead-light">
            <tr>
               <th style="width:5%">#</th>
               <th style="width:80%">Question</th>
               <th style="width:5%">Marks</th>
               <th style="width:5%">Action</th>
            </tr>
         </thead>
         <tbody>
            @foreach($questions as $question)            
            <tr>
               <th scope="row">{{$question->id}}</th>
               <td>{{$question->question}}</td>
               <td class='text-center'>{{$question->marks}}</td>
               <td class="text-center">
                  <div class="dropdown" data-toggle="dropdown" aria-expanded="false">
                    <a href=""><i class="ti-more-alt"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" style="z-index: 999;" >
                        <button class="dropdown-item" type="button" onclick=""><i class='ti ti-settings text-primary'></i> view</button>
                        <button class="dropdown-item" type="button" onclick="_questionbank.editQuestion('{{$question->id}}','{{$question->question}}','{{$question->marks}}','{{json_encode($question->options)}}','{{$rstr}}')"><i class='ti ti-pencil text-primary'></i> edit</button>
                        <button class="dropdown-item" type="button" onclick=""><i class='ti ti-trash text-danger'></i> Delete</button>
                    </div>
                 </div>
               </td>
            </tr>
            @endforeach
            
         </tbody>
      </table>
   </div>
   
</div>


</div><!-- container -->

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
        <button type="button" class="btn btn-primary" onclick="_questionbank.saveQuestion('{{$rstr}}')">Save</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
   
_questionbank = {};

_questionbank.showQuestionCreateForm = function(rstr)
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


_questionbank.editQuestion = function(questionid,question,marks,options,rstr)
 {  
   $('#'+rstr+'-config_questionid').val(questionid);
   $('#'+rstr+'-config_question').val(question);
   $('#'+rstr+'-configquestion_marks').val(marks);
   options = JSON.parse(options);

   Object.values(options).forEach(function(data,i)
   {
      $('#'+rstr+'-configquestion_op'+(i+1)).val(data.value);  
      $('#'+rstr+'-configquestion_op'+(i+1)+'_correct').prop('checked',data.correct);          
   });
   

   $('#configquestion_modal').modal('show');
 } 

 
 _questionbank.saveQuestion = function(rstr)
 {
   data = {};
   data['_token']= "{{ csrf_token() }}";
   data['action'] = 'savequestion';
   data['questionid'] = $('#'+rstr+'-config_questionid').val();
   data['question'] = $('#'+rstr+'-config_question').val();
   data['marks']    = $('#'+rstr+'-configquestion_marks').val();
   
   var options = {};
   options.op1 = {"correct":$('#'+rstr+'-configquestion_op1_correct').prop('checked') ,"value":$('#'+rstr+'-configquestion_op1').val()};  
   options.op2 = {"correct":$('#'+rstr+'-configquestion_op2_correct').prop('checked') ,"value":$('#'+rstr+'-configquestion_op2').val()};  
   options.op3 = {"correct":$('#'+rstr+'-configquestion_op3_correct').prop('checked') ,"value":$('#'+rstr+'-configquestion_op3').val()};  
   options.op4 = {"correct":$('#'+rstr+'-configquestion_op4_correct').prop('checked') ,"value":$('#'+rstr+'-configquestion_op4').val()};  

   data['options'] = JSON.stringify(options);
  // console.log(data);
   //TODO Save Question
   ajaxcall('user',data,'POST','FAKE_DIV',function(res){
      
      


      if(res['status'] == 'ok')
      {
        notify('success',res['msg']);
        $('#configquestion_modal').modal('hide');
        $('#configquestion_modal').on('hidden.bs.modal',function(e){
                menuaction('questions');          
        });


      }
      else notify('error',res['msg']);

   });

 }  

</script>