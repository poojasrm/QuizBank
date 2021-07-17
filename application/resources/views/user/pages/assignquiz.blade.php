<?php
$rstr=Request::get('rstr','a'.Str::random(10));

?>
<div class="wrapper">

<div class="pageheader pd-t-25 pd-b-35">
 <div class="d-flex justify-content-between">
    <div class="clearfix">
       <div class="pd-t-5 pd-b-5">
          <h1 class="pd-0 mg-0 tx-20 tx-dark">Assign Quiz</h1>
       </div>
       <div class="breadcrumb pd-0 mg-0">
          <a class="breadcrumb-item" href="javascript:void(0);"><i class="icon ion-ios-home-outline"></i> {{config('app.name')}}</a>
          <a class="breadcrumb-item" href="">Assignation</a>          
       </div>
    </div>
     <div class="d-flex align-items-center">
       <button class="btn btn-outline-primary" onclick="_assignquiz.showQuizAssignForm('{{$rstr}}')"><i class="ti ti-plus mr-2 "></i> Schedule Quiz</button>      
     </div>
 </div>
</div>

<div class="row">
  @foreach($assessments as $assessment)
  <div class="col-md-4 ">
      <div class="card" style="min-height: 150px;">
        <div class="card-body">
          <div class="row">
              <div class="col-10">
                  <a href="javascript::void()"><h5 class="card-title text-primary">{{$assessment->name}}</h5></a>
              </div>
              <div class="col-2 text-right">
                  <div class="dropdown" data-toggle="dropdown" aria-expanded="false">
                    <a href=""><i class="ti-more-alt"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" >
                        <button class="dropdown-item" type="button" onclick=""><i class='ti ti-pencil text-primary'></i> Edit</button>
                        <button class="dropdown-item" type="button" onclick=""><i class='ti ti-file text-primary'></i> Report</button>
                        <button class="dropdown-item" type="button" onclick=""><i class='ti ti-trash text-danger'></i> Delete</button>
                    </div>
                 </div>
              </div>
          </div>
          <div class="row mb-2 mt-0 pt-0">
            <div class="col-6">
               <p class="card-text text-muted" style="font-size: 12px;"><i class="fa fa-users"></i> Users : 20</p> 
            </div>
            <div class="col-6">
               <p class="card-text text-muted" style="font-size: 12px;"><i class="fa fa-clock-o"></i> Duration : {{$assessment->duration}}</p> 
            </div>
          </div>          
          <p class="card-text">{{$assessment->description}}</p>
          
          
          <p class="card-subtitle text-muted" style="font-size: 12px;"><i class="fa fa-calendar"></i> Date : {{$assessment->scheduledate}}</p>
          <div class="row">
            <div class="col-6">
               <button class=" mt-4 btn-sm btn btn-primary btn-block" onclick="_assignquiz.editAssessment('{{$assessment->id}}','{{$assessment->name}}','{{$assessment->description}}','{{$assessment->accesstype}}','{{$assessment->duration}}','{{$assessment->scheduledate}}','{{$rstr}}')"><i class="ti ti-pencil mr-2"></i>Edit</button>
            </div>
            <div class="col-6">
               <button class=" mt-4 btn-sm btn btn-success btn-block"><i class="ti ti-receipt mr-2"></i>Report</button>
            </div>                      
         </div>  

        </div>
      </div>
  </div>
  @endforeach
</div>



</div><!-- container -->

<div class="modal fade" id="assignquiz_modal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-cog mr-2"></i>Assign Quiz <span class="badge badge-primary" id="assign_assessment_id">New<span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
       
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Select Quiz</label>
            <select type="text" class="form-control" onchange="_assignquiz.changeQuizEvent('{{$rstr}}',$(this).val())" id="{{$rstr}}-changeQuizEvent">
              <option>None</option>
              @foreach($quizes as $quiz)
              <option value="{{$quiz->id}}" >{{$quiz->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Quiz Name</label>
            <input type="text" class="form-control" id="{{$rstr}}-assign_quizname">
          </div>          
          <div class="form-group">
            <label for="message-text" class="col-form-label">Quiz Descrition</label>
            <textarea class="form-control" id="{{$rstr}}-assign_quizdescription"></textarea>
          </div>
          <div class="form-row">            
            <div class="form-group col-md-6">
              <label for="recipient-name" class="col-form-label">Quiz DateTime</label>
              <input type="datetime-local" class="form-control" id="{{$rstr}}-assign_quizdatetime">
            </div>
            <div class="form-group col-md-6">
              <label for="recipient-name" class="col-form-label">Quiz Duration</label>
              <input type="number" class="form-control" id="{{$rstr}}-assign_quizduration">
            </div>
          </div>
          <div class='form-row'>
            <div class="form-group col-md-6">
              <label for="recipient-name" class="col-form-label">Quiz Access</label>
              <select type="text" class="form-control" id="{{$rstr}}-assign_quizaccess">
                <option value="1">Private</option>
                <option value="2">Public</option>              
              </select>
            </div>
           {{--  <div class="form-group col-md-6">
              <label for="recipient-name" class="col-form-label">User Group</label>
              <select type="text" class="form-control" id="{{$rstr}}-assign_usergroupid">
                <option>None</option>
                <option>Group 1</option>
                <option>Group 2</option>
                <option>Group 3</option>
                <option>Group 4</option>
              </select>
            </div> --}}
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="_assignquiz.saveAssign('{{$rstr}}')">Save</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  

_assignquiz = {};

var quizesdata = JSON.parse(atob("{{ base64_encode($quizes)}}"));

_assignquiz.changeQuizEvent = function(rstr,quizid)
{
  selectedquiz = quizesdata.filter(function(e){if(e.id == quizid) return e;});
  $('#'+rstr+'-assign_quizname').val(selectedquiz[0].name);
  $('#'+rstr+'-assign_quizdescription').val(selectedquiz[0].description);
}

_assignquiz.editAssessment = function(id,name,description,accesstype,duration,scheduldate,rstr)
 {
    $('#'+rstr+'-assign_quizname').val(name);
    $('#'+rstr+'-assign_quizdescription').val(description);    
    // $('#'+rstr+'-assign_usergroupid').val('');
    $('#'+rstr+'-assign_quizaccess').val(accesstype);
    $('#'+rstr+'-assign_quizduration').val(duration);
    $('#'+rstr+'-assign_quizdatetime').val(scheduldate);
    $('#'+rstr+'-assign_assessment_id').text(id);

    $('#assignquiz_modal').modal('show');
 } 


 _assignquiz.showQuizAssignForm = function(rstr)
 {
    $('#'+rstr+'-assign_assessment_id').text('New');
    $('#'+rstr+'-assign_quizname').val('');
    $('#'+rstr+'-assign_quizdescription').val('');    
    $('#'+rstr+'-assign_usergroupid').val('');
    $('#'+rstr+'-assign_quizaccess').val('');
    $('#'+rstr+'-assign_quizduration').val('');
    $('#'+rstr+'-assign_quizdatetime').val('');
    $('#assignquiz_modal').modal('show');
 } 

 _assignquiz.saveAssign = function(rstr)
{
    data = {};
    data['_token']= "{{ csrf_token() }}";
    data['action'] = 'saveassessment';
    data['assessment_id']   = $('#'+rstr+'-assign_assessment_id').text();
    data['quizname']        = $('#'+rstr+'-assign_quizname').val();
    data['quizdescription'] = $('#'+rstr+'-assign_quizdescription').val();
    // data['quizid']          = $('#'+rstr+'-assign_quizid').val();
    data['quizduration']    = $('#'+rstr+'-assign_quizduration').val();
    data['quizdatetime']    = $('#'+rstr+'-assign_quizdatetime').val();
    // data['usergroupid']     = $('#'+rstr+'-assign_usergroupid').val();
    data['quizaccesstype']  = $('#'+rstr+'-assign_quizaccess').val();
    

    //TODO Action
    ajaxcall('user',data,'POST');
}

</script>

