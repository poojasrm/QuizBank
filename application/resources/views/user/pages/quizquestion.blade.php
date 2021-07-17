<?php

$rstr=Request::get('rstr','a'.Str::random(10));

?>

<div class="wrapper">

    <div class="pageheader pd-t-25 pd-b-35">
     <div class="d-flex justify-content-between">
        <div class="clearfix">
           <div class="pd-t-5 pd-b-5">
              <h1 class="pd-0 mg-0 tx-20 tx-dark">Quiz Name</h1>
           </div>
           <div class="breadcrumb pd-0 mg-0">
              <a class="breadcrumb-item" href="javascript:void(0);" onclick="menuaction('quizes')">Back</a>                            
              <a class="breadcrumb-item" href="javascript:void(0);"  onclick="menuaction('quizquestion')"><i class="icon ion-ios-home-outline"></i> Quizname</a>
           </div>
        </div> 
        <div class="d-flex align-items-center">
          <button class="btn btn-primary btn-lg " style="font-size: 18px;" onclick=""><i class="ti ti-save mr-2 "></i> Save</button>      
        </div>      
     </div>
    </div>



    
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-1 text-left mb-2">
                    <div class="avatar avatar"><span class="avatar-initial rounded-circle bg-success p-2">Q 99</span></div>
                </div> 
                <div class="col-md-10 mb-2">
                    <h6>Here Question Will ComeHere Question Will ComeHere Question Will ComeHere Question Will Come
                    Here Question Will ComeHere Question Will Come</h6>
                    <p>Option 1</p>
                    <p>Option 1</p>
                    <p>Option 1</p>
                    <p>Option 1</p>
                </div> 
                <div class="col-md-1 text-right"><h6>5</h6></div> 
            </div>
        </div>
    </div>
    
    <div class="row mt-2">
        <div class="col-md-12 text-center">
            <button class="btn btn-outline-primary"><i class="ti ti-plus mr-2"></i>New Question</button>
            <button class="btn btn-outline-success"><i class="ti ti-link mr-2"></i>Attach Question</button>
        </div>
    </div>


</div>
