 <?php
$baseurl=url('/');
$user=Auth::user();
?>

<!-- Page Header Start -->
<!--================================-->
<div class="page-header">   
   <nav class="navbar navbar-default">
      <!--================================-->
      <!-- Brand and Logo Start -->
      <!--================================-->
      <div class="navbar-header">
         <div class="navbar-brand">
            <ul class="list-inline">
               <!-- Mobile Toggle and Logo -->
               <li class="list-inline-item"><a class="hidden-md hidden-lg" href="#" id="sidebar-toggle-button"><i data-feather="menu" class="wd-20"></i></a></li>
               <!-- PC Toggle and Logo -->
               <li class="list-inline-item"><a class=" hidden-xs hidden-sm" href="#" id="collapsed-sidebar-toggle-button"><i data-feather="menu" class="wd-20"></i></a></li>
               
            </ul>
         </div>
      </div>
      <!--/ Brand and Logo End -->
      <!--================================-->
      <!-- Header Right Start -->
      <!--================================-->
      <div class="header-right pull-right">
         <ul class="list-inline justify-content-end">            
            @if(false)
            <!-- Notifications Dropdown Start -->
            <!--================================-->
            <li class="list-inline-item dropdown hidden-xs ">
               <a class=" notification-icon" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i data-feather="bell" class="wd-20"></i>
               <span class="notification-count wave in"></span>
               </a>
               <div class="dropdown-menu dropdown-menu-right">
                  <!-- Top Notifications Area -->
                  <div class="top-notifications-area">
                     <!-- Heading -->
                     <div class="notifications-heading">
                        <div class="heading-title">
                           <h6>Notifications</h6>
                        </div>
                        <span>5+ New Notifications</span>
                     </div>
                     <div class="notifications-box" id="notificationsBox">
                        <a class="dropdown-item list-group-item" href="">
                           <div class="d-flex justify-content-between">
                              <div class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-success">
                                 <i data-feather="smile" class="wd-20"></i>
                              </div>
                           </div>
                           <div class="wd-100p">
                              <div class="d-flex justify-content-between">
                                 <h3 class="tx-13 tx-semibold mb-0">Your order is placed</h3>
                                 <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                              </div>
                              <div class="tx-gray-700">System reboot has been successfully completed</div>
                           </div>
                        </a>
                        <a class="dropdown-item list-group-item" href="">
                           <div class="d-flex justify-content-between">
                              <div class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-warning">
                                 <i data-feather="bell" class="wd-20"></i>
                              </div>
                           </div>
                           <div class="wd-100p">
                              <div class="d-flex justify-content-between">
                                 <h3 class="tx-13 tx-semibold mb-0">Document available</h3>
                                 <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                              </div>
                              <div class="tx-gray-700">New user feedback received</div>
                           </div>
                        </a>
                        <a class="dropdown-item list-group-item" href="">
                           <div class="d-flex justify-content-between">
                              <div class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-success">
                                 <i data-feather="check-circle" class="wd-20"></i>
                              </div>
                           </div>
                           <div class="wd-100p">
                              <div class="d-flex justify-content-between">
                                 <h3 class="tx-13 tx-semibold mb-0">Payment failed!</h3>
                                 <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                              </div>
                              <div class="tx-gray-700">New file has been uploaded</div>
                           </div>
                        </a>
                        <a class="dropdown-item list-group-item" href="">
                           <div class="d-flex justify-content-between">
                              <div class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-primary">
                                 <i data-feather="info" class="wd-20"></i>
                              </div>
                           </div>
                           <div class="wd-100p">
                              <div class="d-flex justify-content-between">
                                 <h3 class="tx-13 tx-semibold mb-0">Document available</h3>
                                 <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                              </div>
                              <div class="tx-gray-700">New order has been received</div>
                           </div>
                        </a>
                        <a class="dropdown-item list-group-item" href="">
                           <div class="d-flex justify-content-between">
                              <div class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-primary">
                                 <i data-feather="info" class="wd-20"></i>
                              </div>
                           </div>
                           <div class="wd-100p">
                              <div class="d-flex justify-content-between">
                                 <h3 class="tx-13 tx-semibold mb-0">New order available</h3>
                                 <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                              </div>
                              <div class="tx-gray-700">New order has been received</div>
                           </div>
                        </a>
                        <a class="dropdown-item list-group-item" href="">
                           <div class="d-flex justify-content-between">
                              <div class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-success">
                                 <i data-feather="smile" class="wd-20"></i>
                              </div>
                           </div>
                           <div class="wd-100p">
                              <div class="d-flex justify-content-between">
                                 <h3 class="tx-13 tx-semibold mb-0">Your order is placed</h3>
                                 <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                              </div>
                              <div class="tx-gray-700">System reboot has been successfully completed</div>
                           </div>
                        </a>
                        <a class="dropdown-item list-group-item" href="">
                           <div class="d-flex justify-content-between">
                              <div class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-warning">
                                 <i data-feather="bell" class="wd-20"></i>
                              </div>
                           </div>
                           <div class="wd-100p">
                              <div class="d-flex justify-content-between">
                                 <h3 class="tx-13 tx-semibold mb-0">Document available</h3>
                                 <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                              </div>
                              <div class="tx-gray-700">New user feedback received</div>
                           </div>
                        </a>
                     </div>
                     <div class="notifications-footer">
                        <a href="">View all Notifications</a>
                     </div>
                  </div>
               </div>
            </li>
            <!--/ Notifications Dropdown End -->
            <!--================================-->
            <!-- Messages Dropdown Start -->
            <!--================================-->
            <li class="list-inline-item dropdown hidden-xs">
               <a class=" message-icon" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i data-feather="message-square" class="wd-20"></i>
               <span class="messages-count wave in"></span>
               </a>
               <div class="dropdown-menu dropdown-menu-right">
                  <div class="top-message-area">
                     <div class="top-message-heading">
                        <div class="heading-title">
                           <h6>Messages</h6>
                        </div>
                        <span>5+ New Messages</span>
                     </div>
                     <div class="message-box" id="messageBox">
                        <a class="dropdown-item list-group-item" href="javascript:void(0)">
                           <div class="d-flex justify-content-between">
                              <div class="pd-r-10">
                                 <span class="avatar avatar-online">
                                 <img src="assets/images/users-face/1.png" class="img-fluid" alt="">
                                 <i></i>
                                 </span>
                              </div>
                              <div>
                                 <span class="tx-semibold">Mary Adams</span>
                                 <span class="small tx-gray-500 ft-right">Mar 20, 22:21pm</span>
                                 <div class="tx-gray-700">Congratulate! Socrates Itumayfor work anniversaries</div>
                              </div>
                           </div>
                        </a>
                        <a class="dropdown-item list-group-item" href="javascript:void(0)">
                           <div class="d-flex justify-content-between">
                              <div class="pd-r-10">
                                 <span class="avatar avatar-online">
                                 <img src="assets/images/users-face/2.png" class="img-fluid" alt="">
                                 <i></i>
                                 </span>
                              </div>
                              <div>
                                 <span class="tx-semibold">Richards Caleb</span>
                                 <span class="small tx-gray-500 ft-right">Mar 2, 22:21pm</span>
                                 <div class="tx-gray-700">Richards Caleb, just created a new blog post</div>
                              </div>
                           </div>
                        </a>
                        <a class="dropdown-item list-group-item" href="javascript:void(0)">
                           <div class="d-flex justify-content-between">
                              <div class="pd-r-10">
                                 <span class="avatar avatar-busy">
                                 <img src="assets/images/users-face/3.png" class="img-fluid" alt="">
                                 <i></i>
                                 </span>
                              </div>
                              <div>
                                 <span class="tx-semibold">Lane Richards</span>
                                 <span class="small tx-gray-500 ft-right">Mar 12, 22:21pm</span>
                                 <div class="tx-gray-700">Richards Caleb, just created a new blog post</div>
                              </div>
                           </div>
                        </a>
                        <a class="dropdown-item list-group-item" href="javascript:void(0)">
                           <div class="d-flex justify-content-between">
                              <div class="pd-r-10">
                                 <span class="avatar avatar-busy">
                                 <img src="assets/images/users-face/4.png" class="img-fluid" alt="">
                                 <i></i>
                                 </span>
                              </div>
                              <div>
                                 <span class="tx-semibold">Edward Lane</span>
                                 <span class="small tx-gray-500 ft-right">Mar 15, 02:21pm</span>
                                 <div class="tx-gray-700">Adrian Monino, added new comment on your photo</div>
                              </div>
                           </div>
                        </a>
                        <a class="dropdown-item list-group-item" href="javascript:void(0)">
                           <div class="d-flex justify-content-between">
                              <div class="pd-r-10">
                                 <span class="avatar avatar-offline">
                                 <img src="assets/images/users-face/5.png" class="img-fluid" alt="">
                                 <i></i>
                                 </span>
                              </div>
                              <div>
                                 <span class="tx-semibold">Lane Richards</span>
                                 <span class="small tx-gray-500 ft-right">Mar 20, 08:28pm</span>
                                 <div class="tx-gray-700">Edward Lane, added new comment on your photo</div>
                              </div>
                           </div>
                        </a>
                        <a class="dropdown-item list-group-item" href="javascript:void(0)">
                           <div class="d-flex justify-content-between">
                              <div class="pd-r-10">
                                 <span class="avatar avatar-offline">
                                 <img src="assets/images/users-face/6.png" class="img-fluid" alt="">
                                 <i></i>
                                 </span>
                              </div>
                              <div>
                                 <span class="tx-semibold">Edward Lane</span>
                                 <span class="small tx-gray-500 ft-right">Mar 21, 22:21pm</span>
                                 <div class="tx-gray-700">Edward Lane, just created a new blog post</div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="top-message-footer">
                        <a href="">View all Messages</a>
                     </div>
                  </div>
               </div>
            </li>
            <!--/ Messages Dropdown End -->
            <!--================================-->
            @endif
            <!-- Profile Dropdown Start -->
            <!--================================-->            
            <li class="list-inline-item dropdown">
               <a  href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <img src="{{$baseurl}}/avesta/images/users-face/women_avatar1.jpg" class="img-fluid wd-30 ht-30 rounded-circle" alt="">
               </a>
               <div class="dropdown-menu dropdown-menu-right dropdown-profile">
                  <div class="user-profile-area">
                     <div class="user-profile-heading">
                        <div class="profile-thumbnail">
                           <img src="{{$baseurl}}/avesta/images/users-face/women_avatar1.jpg" class="img-fluid wd-35 ht-35 rounded-circle" alt="">
                        </div>
                        <div class="profile-text">
                           <h6>{{Auth::user()->name}}</h6>
                           <span>{{Auth::user()->email}}</span>
                        </div>
                     </div>
                     {{-- <a href="" class="dropdown-item"><i data-feather="user" class="wd-16 mr-2"></i> My profile</a>                     
                     <a href="" class="dropdown-item"><i data-feather="settings" class="wd-16 mr-2"></i> Settings</a>
                     <a href="" class="dropdown-item"><i data-feather="activity" class="wd-16 mr-2"></i> My Activity</a>                     
                     <a href="" class="dropdown-item"><i data-feather="life-buoy" class="wd-16 mr-2"></i> Support</a> --}}
                     <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item"><i data-feather="power" class="wd-16 mr-2"></i> Sign-out</a>
                     <div class="navbar-item">
                                       
                </div>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form> 
                  </div>
               </div>
            </li>
            <!-- Profile Dropdown End -->
         </ul>
      </div>
      <!--/ Header Right End -->
   </nav>
</div>
<!--/ Page Header End -->


<script type="text/javascript">

 var _topbar = {};

 



</script>
