<?php
$baseurl=url('/');

?>
<!--================================-->
<!-- Page Sidebar Start -->
<!--================================-->
<div class="page-sidebar">
    <div class="logo">
       <a class="logo-img" href="index.html">      
       <center> 
       <img class="desktop-logo" style="margin-left: 55px;" src="{{$baseurl}}/logo.png" alt="">
       <img class="small-logo" style="margin-left: -5px;" src="{{$baseurl}}/logo_sm.png" alt="">
        </center>
       </a>         
       <a id="sidebar-toggle-button-close"><i class="wd-20" data-feather="x"></i> </a>
    </div>
    <!--================================-->
    <!-- Sidebar Menu Start -->
    <!--================================-->
    <div class="page-sidebar-inner">
       <div class="page-sidebar-menu">
          <ul class="accordion-menu">
             <!-- <li class="mg-l-20-force mg-t-25-force menu-navigation">Navigation</li> -->

             <li class="active mg-t-25-force">
                <a href="javascript: void(0);"  onclick="menuaction('dashboard')"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span></a>                
            </li>

            <li>
                <a href="javascript: void(0);" onclick="menuaction('quizes')"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Quiz</span></a>                
            </li>

            <li>
                <a href="javascript: void(0);" onclick="menuaction('questions')"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Questions</span></a>
                
            </li> 

            <li>
                <a href="javascript: void(0);" onclick="menuaction('assignquiz')"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Assign Test</span></a>
                
            </li>             

            <li class="mg-l-20-force mg-t-25-force menu-navigation">Components & Uses</li>

            <li>
                <a href="javascript: void(0);" onclick="menuaction('help')"><i data-feather="box" class="align-self-center menu-icon"></i><span>Help</span></a>
            </li>

             <!-- <li class="open active">
                <a href=""><i data-feather="home"></i>
                <span>Dashboard</span><i class="accordion-icon fa fa-angle-left"></i></a>
                <ul class="sub-menu" style="display: block;">
                   
                   <li class="active"><a href="index.html">Sales</a></li>
                   <li><a href="index2.html">Analytics</a></li>
                   <li><a href="index3.html">Cryptocurrency</a></li>
                   <li><a href="index4.html">Helpdesk</a></li>
                   <li><a href="index5.html">Project</a></li>
                </ul>
             </li> -->
          </ul>
       </div>
    </div>
    <!--/ Sidebar Menu End -->
    <!--================================-->
    <!-- Sidebar Footer Start -->
    <!--================================-->
    <div class="sidebar-footer">                                    
       <a class="pull-left" href="pages-profile.html" data-toggle="tooltip" data-placement="top" data-original-title="Profile">
       <i data-feather="user" class="wd-16"></i></a>                                    
       <a class="pull-left " href="mailbox.html" data-toggle="tooltip" data-placement="top" data-original-title="Mailbox">
       <i data-feather="mail" class="wd-16"></i></a>
       <a class="pull-left" href="aut-unlock.html" data-toggle="tooltip" data-placement="top" data-original-title="Lockscreen">
       <i data-feather="lock" class="wd-16"></i></a>
       <a class="pull-left" href="logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();" data-toggle="tooltip" data-placement="top" data-original-title="Sing Out">
       <i data-feather="log-out" class="wd-16"></i></a>
       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
    </div>
    <!--/ Sidebar Footer End -->
</div>
 <!--/ Page Sidebar End -->
 <!--================================-->

<script type="text/javascript">

function menuaction(pageurl,data){
    
    url = "user/"+pageurl;
    ajaxcall(url,data,'GET','appcontent');   
}

function ajaxcall(pageurl,data,type,responsediv){
    
    
    $.ajax({
        type: type,
        url: pageurl,
        data: data,
        success: function(res) {
            $('#'+responsediv).html(res);
        }
    })    
}

function notify(title,msg)
{

  var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            width: 250,
            timerProgressBar: true,
            onOpen: function(toast) {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
          });

    if(title=='Success')
    {
      Toast.fire({
        icon: 'success',
        title: msg
      })
    }
    if(title=='Error')
    {
      Toast.fire({
        icon: 'error',
        title: msg
      })
    }
    if(title=='Notification')
    {
      Toast.fire({
        icon: 'info',
        title: msg
      })

    }
    if(title=='Warning')
    {
      Toast.fire({
        icon: 'warning',
        title: msg
      })

    }
}



</script>
