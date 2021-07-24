<?php
//dd($userassessment_chart);
?>
<div class="wrapper">

<div class="pageheader pd-t-25 pd-b-35">
 <div class="d-flex justify-content-between">
    <div class="clearfix">
       <div class="pd-t-5 pd-b-5">
          <h1 class="pd-0 mg-0 tx-20 tx-dark">Dashboard</h1>
       </div>
       <div class="breadcrumb pd-0 mg-0">
          <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> {{config('app.name')}}</a>
          <a class="breadcrumb-item" href="">Dashboard</a>          
       </div>
    </div>
 </div>

<div class="row mt-4 ">
   <div class="col-md-6 col-lg-6 col-xl-3">
      <div class="card bg-soft-primary mg-b-30">
         <div class="card-body">
            <div class="float-right"><i class='fa fa-users' style="font-size: 40px;"></i></div>
            <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Total Quizes</h5>
            <div class="d-flex justify-content-between align-items-center">
               <h2 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">{{$totalquiz}}</h2>
            </div>

         </div>
      </div>
   </div>
   <div class="col-md-6 col-lg-6 col-xl-3">
      <div class="card bg-soft-warning mg-b-30">
         <div class="card-body">
            <div class="float-right"><i class='fa fa-users' style="font-size: 40px;"></i></div>
            <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Total Questions</h5>
            <div class="d-flex justify-content-between align-items-center">
               <h2 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">{{$totalquestion}}</h2>
            </div>            
         </div>
      </div>
   </div>
   <div class="col-md-6 col-lg-6 col-xl-3">
      <div class="card bg-soft-danger mg-b-30">
         <div class="card-body">
            <div class="float-right"><i class='fa fa-users' style="font-size: 40px;"></i></div>
            <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Total Assignements</h5>
            <div class="d-flex justify-content-between align-items-center">
               <h2 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">{{$totalassessment}}</h2>
            </div>            
         </div>
      </div>
   </div>
   <div class="col-md-6 col-lg-6 col-xl-3">
      <div class="card bg-soft-success mg-b-30">
         <div class="card-body">
            <div class="float-right"><i class='fa fa-users' style="font-size: 40px;"></i></div>
            <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Total Quiz Takers</h5>
            <div class="d-flex justify-content-between align-items-center">
               <h2 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">{{$totalusers}}</h2>
            </div>
            
         </div>
      </div>
   </div>
<!--/ Heard Card End -->               
</div>


<div class="row mt-5" >
   <div class="col-md-12">      
      <div class="card card-body" >
         <div class="card-title"><h3><i class="fa fa-users mr-2"></i>Quiz Attempted By Users</h3></div>
         <div class="card-body" id="chart">
         </div> 
      </div>
   </div>
</div>

</div>



</div><!-- container -->



<script type="text/javascript">

$(document).ready(function(){

var userassessment_chart = JSON.parse(atob("{{ base64_encode(json_encode($userassessment_chart))}}"));


//console.log(userassessment_chart);
showUserAssessmentChart(userassessment_chart['usercount'],userassessment_chart['assessmentname']);

});

function showUserAssessmentChart(users,assessments)
{
   
   var options = {
          series: [{
          name: 'Users',
          data: users,
        }],
          chart: {
          height: 450,
          type: 'bar',
        },
        plotOptions: {
          bar: {
            borderRadius: 10,
            columnWidth: '20%',
            dataLabels: {
              position: 'top', // top, center, bottom
            },
          }
        },
        dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val;
          },
          offsetY: -20,
          style: {
            fontSize: '12px',
            colors: ["#304758"]
          }
        },
        
        xaxis: {
          categories: assessments,
          position: 'bottom',
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            fill: {
              type: 'gradient',
              gradient: {
                colorFrom: '#D8E3F0',
                colorTo: '#BED1E6',
                stops: [0, 100],
                opacityFrom: 0.4,
                opacityTo: 0.5,
              }
            }
          },
          tooltip: {
            enabled: true,
          }
        },
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val;
            }
          }
        
        },        
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();   
}   


</script>