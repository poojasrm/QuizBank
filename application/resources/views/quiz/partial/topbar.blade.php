 <?php
$baseurl=url('/');

?>

<!-- Page Header Start -->
<!--================================-->
<div class="page-header">  
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <a class="navbar-brand tx-bold ml-2" href="#"><img class="" style="height: 35px !important;" src="{{$baseurl}}/logo.png" alt="" /></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarColor01">
         {{-- <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Features</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Pricing</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">About</a>
           </li>
         </ul> --}}         
       </div>
   </nav>
</div>
<!--/ Page Header End -->


<script type="text/javascript">

 var _topbar = {};

function menuaction(pageurl,data){
    
    url = "quiz/"+pageurl;
    ajaxcall(url,data,'GET','appcontent');   
}

function ajaxcall(pageurl,data,type,responsediv,callback){
    
    
    $.ajax({
        type: type,
        url: pageurl,
        data: data,
        success: function(res) {              
            $('#'+responsediv).html(res);            
            callback(res);
        }
    });



}



function notify(type,msg)
{

      toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "4000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }

        toastr[type](msg);

}



</script>
