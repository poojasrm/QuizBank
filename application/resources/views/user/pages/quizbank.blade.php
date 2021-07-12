
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
          <button class="btn btn-outline-primary" onclick="_quizbank.showQuizCreateForm()"><i class="ti ti-plus mr-2 "></i> New Quiz</button>      
        </div>
     </div>
    </div>
    <div class="row">
        <div class="col-md-4 ">
            <div class="card" style="min-height: 150px;">
              <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <h5 class="card-title text-primary">Quiz Name</h5>
                    </div>
                    <div class="col-2 text-right">
                        <div class="dropdown" data-toggle="dropdown" aria-expanded="false">
                          <a href=""><i class="ti-more-alt"></i></a>
                          <div class="dropdown-menu dropdown-menu-right" >
                              <button class="dropdown-item" type="button" onclick=""><i class='ti ti-settings text-primary'></i> Edit</button>
                              <button class="dropdown-item" type="button" onclick=""><i class='ti ti-settings text-primary'></i> Edit Questions</button>
                              <button class="dropdown-item" type="button" onclick=""><i class='ti ti-trash text-danger'></i> Delete</button>
                              <button class="dropdown-item" type="button" onclick=""><i class='ti ti-receipt text-success'></i> Assign</button>
                          </div>
                       </div>
                    </div>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                
                <p class="card-subtitle  text-muted"><i class="fa fa-calendar"></i> Date : 29/03/1999 </p>
                <div class="row">
                    <div class="col-6">
                       <button class=" mt-4 btn-sm btn btn-primary btn-block"><i class="ti ti-eye  mr-2"></i>View Quiz</button>
                    </div>
                    <div class="col-6">
                       <button class=" mt-4 btn-sm btn btn-success btn-block"><i class="ti ti-receipt mr-2"></i>Assign</button>
                    </div>                      
                 </div>
              </div>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="quizconfig_modal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-cog"></i>Quiz Config <span class="badge badge-primary">New<span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
       
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Quiz Name:</label>
            <input type="text" class="form-control" id="config_quizname">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Quiz Descrition:</label>
            <textarea class="form-control" id="config_quizdescription"></textarea>
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="_quizbank.saveQuiz()">Save</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
 
 var _quizbank = {};

 _quizbank.showQuizCreateForm = function()
 {
    $('#config_quizname').val('');
    $('#config_description').val('');
    $('#quizconfig_modal').modal('show');
 }   

</script>