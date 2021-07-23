<?php

$rstr=Request::get('rstr','a'.Str::random(10));

?>
<div class="row">
   <div class="col-md-12 pb-5 mb-5">
      <div class="card">
      <table class="table">
         <thead class="thead-light">
            <tr>
               <th>Select</th>
               <th style="width:5%">#</th>
               <th style="width:80%">Question</th>
               <th style="width:5%">Marks</th>               
            </tr>
         </thead>
         <tbody>
            @foreach($questions as $question)            
            <tr>
               <th><input type="checkbox" data="{{$question->id}}" class="question-checkbox" class='form-control' style="height: 20px !important;" /></th>
               <th scope="row">{{$question->id}}</th>
               <td>{{$question->question}}</td>
               <td class='text-center'>{{$question->marks}}</td>              
            </tr>
            @endforeach
            
         </tbody>
      </table>      
   </div>
   
</div>

<script type="text/javascript">


   
</script>