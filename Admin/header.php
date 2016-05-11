<?php
        function isActive($name, $page_name){
            return ($name == $page_name)? 'active' : '';
        }



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/sme_logo.png">

        <title>SME4me || <?php echo $page_title; ?></title>

        <!-- DataTables -->
             <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
             <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
             <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
             <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
             <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
             <link href="assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css" />

             <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
             <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
             <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
             <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
             <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
             <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
             <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

             <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
             <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
             <!--[if lt IE 9]>
             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
             <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
             <![endif]-->

             <script src="assets/js/modernizr.min.js"></script>
     <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
       })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

       ga('create', 'UA-69506598-1', 'auto');
       ga('send', 'pageview');
     </script>


         </head>


         <body>


             <!-- Navigation Bar-->
             <header id="topnav">
                 <div class="topbar-main">
                     <div class="container">

                         <!-- Logo container-->
                         <div class="logo">
                             <a href="index-2.html" class="logo"><img src='assets/images/sme_logo.png' alt='SME LOGO' hight='40' width='40' > <span>SME4.me</span></a>
                         </div>
                         <!-- End Logo container-->

                         <div class="menu-extras">

                             <ul class="nav navbar-nav navbar-right pull-right">
                                 <li>
                                     <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                          <input type="text" placeholder="Search..." class="form-control">
                                          <a href="#"><i class="fa fa-search"></i></a>
                                     </form>
                                 </li>
                                 <li class="dropdown hidden-xs">
                                     <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                         <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                                     </a>
                                     <ul class="dropdown-menu dropdown-menu-lg">
                                         <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                         <li class="list-group nicescroll notification-list">
                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                               <div class="media">
                                                  <div class="pull-left p-r-10">
                                                     <em class="fa fa-diamond fa-2x text-primary"></em>
                                                  </div>
                                                  <div class="media-body">
                                                     <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                     <p class="m-0">
                                                         <small>There are new settings available</small>
                                                     </p>
                                                  </div>
                                               </div>
                                            </a>

                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                               <div class="media">
                                                  <div class="pull-left p-r-10">
                                                     <em class="fa fa-cog fa-2x text-custom"></em>
                                                  </div>
                                                  <div class="media-body">
                                                     <h5 class="media-heading">New settings</h5>
                                                     <p class="m-0">
                                                         <small>There are new settings available</small>
                                                     </p>
                                                  </div>
                                               </div>
                                            </a>

                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                               <div class="media">
                                                  <div class="pull-left p-r-10">
                                                     <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                  </div>
                                                  <div class="media-body">
                                                     <h5 class="media-heading">Updates</h5>
                                                     <p class="m-0">
                                                         <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                     </p>
                                                  </div>
                                               </div>
                                            </a>

                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                               <div class="media">
                                                  <div class="pull-left p-r-10">
                                                     <em class="fa fa-user-plus fa-2x text-info"></em>
                                                  </div>
                                                  <div class="media-body">
                                                     <h5 class="media-heading">New user registered</h5>
                                                     <p class="m-0">
                                                         <small>You have 10 unread messages</small>
                                                     </p>
                                                  </div>
                                               </div>
                                            </a>

                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                               <div class="media">
                                                  <div class="pull-left p-r-10">
                                                     <em class="fa fa-diamond fa-2x text-primary"></em>
                                                  </div>
                                                  <div class="media-body">
                                                     <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                     <p class="m-0">
                                                         <small>There are new settings available</small>
                                                     </p>
                                                  </div>
                                               </div>
                                            </a>

                                            <!-- list item-->
                                             <a href="javascript:void(0);" class="list-group-item">
                                                 <div class="media">
                                                     <div class="pull-left p-r-10">
                                                      <em class="fa fa-cog fa-2x text-custom"></em>
                                                     </div>
                                                     <div class="media-body">
                                                       <h5 class="media-heading">New settings</h5>
                                                       <p class="m-0">
                                                         <small>There are new settings available</small>
                                                     </p>
                                                     </div>
                                               </div>
                                            </a>
                                         </li>
                                         <li>
                                             <a href="javascript:void(0);" class="list-group-item text-right">
                                                 <small class="font-600">See all notifications</small>
                                             </a>
                                         </li>
                                     </ul>
                                 </li>

                                 <li class="dropdown">
                                     <a href="#" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                     <ul class="dropdown-menu">
                                         <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                         <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                         <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                         <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                     </ul>
                                 </li>
                             </ul>

                             <div class="menu-item">
                                 <!-- Mobile menu toggle-->
                                 <a class="navbar-toggle">
                                     <div class="lines">
                                         <span></span>
                                         <span></span>
                                         <span></span>
                                     </div>
                                 </a>
                                 <!-- End mobile menu toggle-->
                             </div>
                         </div>

                     </div>
                 </div>
                 <!-- End topbar -->
