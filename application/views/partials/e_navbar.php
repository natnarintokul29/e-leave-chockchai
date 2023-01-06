           <!-- Topbar Start -->
           <div class="navbar-custom">
               <ul class="list-unstyled topnav-menu float-right mb-0">
                   <li class="dropdown notification-list">
                       <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                           <i class="dripicons-bell noti-icon"></i>
                           <span class="badge badge-pink rounded-circle noti-icon-badge">4</span>
                       </a>
                       <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                           <div class="dropdown-header noti-title">
                               <h5 class="text-overflow m-0"><span class="float-right">
                                       <span class="badge badge-danger float-right">5</span>
                                   </span>Notification</h5>
                           </div>

                           <div class="slimscroll noti-scroll">

                               <a href="javascript:void(0);" class="dropdown-item notify-item">
                                   <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                   <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                               </a>

                               <!-- item-->
                               <a href="javascript:void(0);" class="dropdown-item notify-item">
                                   <div class="notify-icon bg-primary">
                                       <i class="mdi mdi-settings-outline"></i>
                                   </div>
                                   <p class="notify-details">New settings
                                       <small class="text-muted">There are new settings available</small>
                                   </p>
                               </a>

                               <!-- item-->
                               <a href="javascript:void(0);" class="dropdown-item notify-item">
                                   <div class="notify-icon bg-warning">
                                       <i class="mdi mdi-bell-outline"></i>
                                   </div>
                                   <p class="notify-details">Updates
                                       <small class="text-muted">There are 2 new updates available</small>
                                   </p>
                               </a>

                               <!-- item-->
                               <a href="javascript:void(0);" class="dropdown-item notify-item">
                                   <div class="notify-icon">
                                       <img src="<?= base_url('assets/images/users/avatar-4.jpg') ?>" class="img-fluid rounded-circle" alt="" />
                                   </div>
                                   <p class="notify-details">Karen Robinson</p>
                                   <p class="text-muted mb-0 user-msg">
                                       <small>Wow ! this admin looks good and awesome design</small>
                                   </p>
                               </a>

                               <!-- item-->
                               <a href="javascript:void(0);" class="dropdown-item notify-item">
                                   <div class="notify-icon bg-danger">
                                       <i class="mdi mdi-account-plus"></i>
                                   </div>
                                   <p class="notify-details">New user
                                       <small class="text-muted">You have 10 unread messages</small>
                                   </p>
                               </a>

                               <!-- item-->
                               <a href="javascript:void(0);" class="dropdown-item notify-item">
                                   <div class="notify-icon bg-info">
                                       <i class="mdi mdi-comment-account-outline"></i>
                                   </div>
                                   <p class="notify-details">Caleb Flakelar commented on Admin
                                       <small class="text-muted">4 days ago</small>
                                   </p>
                               </a>

                               <!-- item-->
                               <a href="javascript:void(0);" class="dropdown-item notify-item">
                                   <div class="notify-icon bg-secondary">
                                       <i class="mdi mdi-heart"></i>
                                   </div>
                                   <p class="notify-details">Carlos Crouch liked
                                       <b>Admin</b>
                                       <small class="text-muted">13 days ago</small>
                                   </p>
                               </a>
                           </div>

                           <!-- All-->
                           <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                               View all
                               <i class="fi-arrow-right"></i>
                           </a>

                       </div>
                   </li>

                   <li class="dropdown notification-list">
                       <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                           <img src="<?= base_url('assets/images/users/avatar-1.jpg') ?>" alt="user-image" class="rounded-circle">
                           <span class="pro-user-name ml-1">
                               Maxine K <i class="mdi mdi-chevron-down"></i>
                           </span>
                       </a>
                       <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                           <!-- item-->
                           <div class="dropdown-header noti-title">
                               <h6 class="text-overflow m-0">Welcome !</h6>
                           </div>

                           <!-- item-->
                           <a href="javascript:void(0);" class="dropdown-item notify-item">
                               <i class="fe-user"></i>
                               <span>Profile</span>
                           </a>


                           <div class="dropdown-divider"></div>

                           <!-- item-->
                           <a href="javascript:void(0);" class="dropdown-item notify-item">
                               <i class="fe-log-out"></i>
                               <span>Logout</span>
                           </a>

                       </div>
                   </li>
               </ul>

               <!-- LOGO -->
               <div class="logo-box">
                   <a href="index.html" class="logo text-center">
                       <span class="logo-lg">
                           <!-- <img src="<?= base_url('assets/images/logo-light.png') ?>" alt="" height="25"> -->
                           <!-- <span class="logo-lg-text-light">E-leave.Chokchai</span> -->
                           <span style="font-size: 22px;">E-leave.Chokchai</span>
                       </span>
                       <span class="logo-sm">
                           <!-- <img src="<?= base_url('assets/images/logo-sm.png') ?>" alt="" height="28"> -->
                       </span>
                   </a>
               </div>

               <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                   <li>
                       <button class="button-menu-mobile waves-effect waves-light">
                           <i class="fe-menu"></i>
                       </button>
                   </li>
               </ul>
           </div>
           <!-- end Topbar -->

           <script>
               let domain = window.location.protocol+'//'+window.location.hostname+'/'+window.location.pathname.split('/')[1]+'/'
           </script>