<?php
$rstr=Request::get('rstr','a'.Str::random(10));

?>
<div class="wrapper">
    <div class="pageheader pd-t-25 pd-b-35">
     <div class="d-flex justify-content-between">
        <div class="clearfix">
           <div class="pd-t-5 pd-b-5">
              <h1 class="pd-0 mg-0 tx-20 tx-dark">Quizes</h1>
           </div>
           <div class="breadcrumb pd-0 mg-0">
              <a class="breadcrumb-item" href="javascript:void(0);"><i class="icon ion-ios-home-outline"></i> {{config('app.name')}}</a>
              <a class="breadcrumb-item" href="">Quizes</a>              
           </div>
        </div>
        <div class="d-flex align-items-center">
          <button class="btn btn-outline-primary" onclick="_quizbank.showQuizCreateForm('{{$rstr}}')"><i class="ti ti-plus mr-2 "></i> New Quiz</button>      
        </div>
     </div>
    </div>
    <div class="row">
        @foreach($quizes as $quiz)
        <div class="col-md-4 mb-3">
            <div class="card h-100" style="min-height: 150px;">
              <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <h5 class="card-title text-primary">{{$quiz->name??''}}</h5>
                    </div>
                    <div class="col-2 text-right">
                        <div class="dropdown" data-toggle="dropdown" aria-expanded="false">
                          <a href=""><i class="ti-more-alt"></i></a>
                          <div class="dropdown-menu dropdown-menu-right" >
                              <button class="dropdown-item" type="button" onclick="_quizbank.editQuiz('{{$quiz->id}}','{{$quiz->name}}','{{$quiz->description}}','{{$rstr}}')"><i class='ti ti-settings text-primary'></i> Edit</button>
                              <button class="dropdown-item" type="button" onclick=""><i class='ti ti-settings text-primary'></i> Edit Questions</button>
                              <button class="dropdown-item" type="button" onclick=""><i class='ti ti-trash text-danger'></i> Delete</button>
                              <button class="dropdown-item" type="button" onclick=""><i class='ti ti-receipt text-success'></i> Assign</button>
                          </div>
                       </div>
                    </div>
                </div>
                <p class="card-text">{{$quiz->description??''}}</p>                
                <p class="card-subtitle  text-muted"><i class="fa fa-calendar"></i> Date :{{date('d M Y',strtotime($quiz->created_at))}} </p>
                <div class="row">
                    <div class="col-6">
                       <button class=" mt-4 btn-sm btn btn-primary btn-block" onclick="menuaction('quizquestion')"><i class="ti ti-eye  mr-2"></i>View Quiz</button>
                    </div>
                    <div class="col-6">
                       <button class=" mt-4 btn-sm btn btn-success btn-block"><i class="ti ti-receipt mr-2"></i>Assign</button>
                    </div>                      
                 </div>
              </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

<div class="modal fade" id="quizconfig_modal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-cog mr-2"></i>Quiz Config <span class="badge badge-primary" id="{{$rstr}}-config_quizid">New<span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
       
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Quiz Name:</label>
            <input type="text" class="form-control" id="{{$rstr}}-config_quizname">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Quiz Descrition:</label>
            <textarea class="form-control" id="{{$rstr}}-config_quizdescription"></textarea>
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="_quizbank.saveQuiz('{{$rstr}}')">Save</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
 
 var _quizbank = {};

 _quizbank.showQuizCreateForm = function(rstr)
 {
    $('#'+rstr+'-config_quizname').val('');
    $('#'+rstr+'-config_quizdescription').val('');
    $('#'+rstr+'-config_quizid').val('New');
    $('#quizconfig_modal').modal('show');
 }   

 _quizbank.editQuiz = function(id,name,description,rstr)
 {
    $('#'+rstr+'-config_quizname').val(name);
    $('#'+rstr+'-config_quizdescription').val(description);
    $('#'+rstr+'-config_quizid').text(id);
    $('#quizconfig_modal').modal('show');
 }

_quizbank.saveQuiz = function(rstr)
{
    data = {};    
    data['_token']= "{{ csrf_token() }}";
    data['action'] = 'savequiz';
    data['quizname']        = $('#'+rstr+'-config_quizname').val();
    data['quizdescription'] = $('#'+rstr+'-config_quizdescription').val();
    data['quizid']          = $('#'+rstr+'-config_quizid').text();
    //TODO Action
    ajaxcall('user',data,'POST');
}

</script>