
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
      <button class="btn btn-outline-primary"><i class="ti ti-plus mr-2 "></i> New Question</button>      
   </div>
 </div>
</div>


<div class="row">
   <div class="col-md-12">
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
            @for($i=0;$i<=5;$i++)
            <tr>
               <th scope="row">1</th>
               <td>Here Question Will Come</td>
               <td class='text-center'>5</td>
               <td class="text-center">
                  <div class="dropdown" data-toggle="dropdown" aria-expanded="false">
                    <a href=""><i class="ti-more-alt"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" >
                        <button class="dropdown-item" type="button" onclick=""><i class='ti ti-settings text-primary'></i> view</button>
                        <button class="dropdown-item" type="button" onclick=""><i class='ti ti-pencil text-primary'></i> edit</button>
                        <button class="dropdown-item" type="button" onclick=""><i class='ti ti-trash text-danger'></i> Delete</button>
                    </div>
                 </div>
               </td>
            </tr>
            @endfor
            
         </tbody>
      </table>
   </div>
   
</div>


</div><!-- container -->


