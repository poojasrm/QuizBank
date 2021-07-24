<div class="row">
   <div class="col-md-12 pb-5 mb-5">
      <div class="card">
      <table class="table">
         <thead class="thead-light">
            <tr>
               <th style="">#</th>
               <th style="">UserName</th>
               <th style="">Email</th>
               <th class="text-center">Marks</th>
            </tr>
         </thead>
         <tbody>
            @foreach($assessmentguestusers as $assessmentguestuser)            
            <tr>
               <th scope="row">{{$assessmentguestuser->id}}</th>
               <td>{{$assessmentguestuser->guestuser->name}}</td>
               <td >{{$assessmentguestuser->guestuser->email}}</td>
               <td class="text-center">
                  {{$assessmentguestuser->marks}}
               </td>
            </tr>
            @endforeach
            
         </tbody>
      </table>
   </div>
   
</div>