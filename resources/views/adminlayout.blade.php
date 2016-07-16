<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="/assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
        <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
        </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-sidebar-fixed">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="\">
                       <img src="/assets/layouts/layout4/img/Home-bazaar-logo.png" alt="logo" class="logo-default" style="margin: 0px;width: 190px;height: 100px;" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE ACTIONS -->
                <!-- DOC: Remove "hide" class to enable the page header actions -->

                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    <!-- BEGIN HEADER SEARCH BOX -->
                    <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                    <form class="search-form" action="page_general_search_2.html" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control input-sm" placeholder="Search..." name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
                    <!-- END HEADER SEARCH BOX -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="separator hide"> </li>
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-bell"></i>
                                    <span class="badge badge-success"> 7 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>
                                            <span class="bold">12 pending</span> notifications</h3>
                                        <a href="#">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">just now</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span> New user registered. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Server #12 overloaded. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">10 mins</span>
                                                    <span class="details">
                                                          <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Server #2 not responding. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">14 hrs</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> Application error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">2 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Database overloaded 68%. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> A user IP blocked. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">4 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Storage Server #4 not responding dfdfdfd. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">5 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> System Error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">9 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Storage server failed. </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                            <li class="separator hide"> </li>
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-envelope-open"></i>
                                    <span class="badge badge-danger"> 4 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>You have
                                            <span class="bold">7 New</span> Messages</h3>
                                        <a href="#">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="../assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Lisa Wong </span>
                                                        <span class="time">Just Now </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="../assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Richard Doe </span>
                                                        <span class="time">16 mins </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="../assets/layouts/layout3/img/avatar1.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Bob Nilson </span>
                                                        <span class="time">2 hrs </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="../assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Lisa Wong </span>
                                                        <span class="time">40 mins </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="../assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Richard Doe </span>
                                                        <span class="time">46 mins </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END INBOX DROPDOWN -->
                            <li class="separator hide"> </li>
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-calendar"></i>
                                    <span class="badge badge-primary"> 3 </span>
                                </a>
                                <ul class="dropdown-menu extended tasks">
                                    <li class="external">
                                        <h3>You have
                                            <span class="bold">12 pending</span> tasks</h3>
                                        <a href="?p=page_todo_2">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">New release v1.2 </span>
                                                        <span class="percent">30%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">40% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Application deployment</span>
                                                        <span class="percent">65%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">65% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Mobile app release</span>
                                                        <span class="percent">98%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">98% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Database migration</span>
                                                        <span class="percent">10%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">10% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Web server upgrade</span>
                                                        <span class="percent">58%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">58% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Mobile development</span>
                                                        <span class="percent">85%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">85% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">New UI release</span>
                                                        <span class="percent">38%</span>
                                                    </span>
                                                    <span class="progress progress-striped">
                                                        <span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">38% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                     <span class="username username-hide-on-mobile"> Arzu </span>
                                    <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                    <img alt="" class="img-circle" src="../images/IMG_20160524_130824_427081888.jpg" /> </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="#">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-calendar"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-envelope-open"></i> My Inbox
                                            <span class="badge badge-danger"> 3 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-rocket"></i> My Tasks
                                            <span class="badge badge-success"> 7 </span>
                                        </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-lock"></i> Lock Screen </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->

                             <!-- BEGIN LANGUAGE BAR -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                <span class="sr-only">Toggle Quick Sidebar</span>
                                <i class="icon-logout"></i>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
               <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                     <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                     <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="500">
                        <li class="nav-item start active open">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <a href="\Admin">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                </a>
                                <span class="selected"></span>
                            </a>
                        </li>

                       <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">Category</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="\categoryList" class="nav-link ">
                                        <span class="title">Category List</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="\addCategory" class="nav-link ">
                                        <span class="title">New Category</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-feed"></i>
                                <span class="title">Products</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="\productList" class="nav-link ">
                                        <span class="title">Product list</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="\addProduct" class="nav-link ">
                                        <span class="title">New Product</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class=" icon-briefcase"></i>
                                <span class="title">Orders</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="\orders" class="nav-link ">
                                        <span class="title">orders</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">Blog</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="\blogList" class="nav-link ">
                                        <span class="title">Blog List</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="\addBlog" class="nav-link ">
                                        <span class="title">New Blog</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">Slider</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="\sliderlist" class="nav-link ">
                                        <span class="title">Slider List</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="\addSliderImage" class="nav-link ">
                                        <span class="title">New Slider</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                            </ul>
                        </li>

                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>




                   @yield('content')






<!-- BEGIN QUICK SIDEBAR -->
           <a href="javascript:;" class="page-quick-sidebar-toggler">
               <i class="icon-login"></i>
           </a>
           <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
               <div class="page-quick-sidebar">
                   <ul class="nav nav-tabs">
                       <li class="active">
                           <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                               <span class="badge badge-danger">2</span>
                           </a>
                       </li>
                       <li>
                           <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                               <span class="badge badge-success">7</span>
                           </a>
                       </li>
                       <li class="dropdown">
                           <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                               <i class="fa fa-angle-down"></i>
                           </a>
                           <ul class="dropdown-menu pull-right">
                               <li>
                                   <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                       <i class="icon-bell"></i> Alerts </a>
                               </li>
                               <li>
                                   <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                       <i class="icon-info"></i> Notifications </a>
                               </li>
                               <li>
                                   <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                       <i class="icon-speech"></i> Activities </a>
                               </li>
                               <li class="divider"></li>

                           </ul>
                       </li>
                   </ul>
                   <div class="tab-content">
                       <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                           <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                               <h3 class="list-heading">Staff</h3>
                               <ul class="media-list list-items">
                                   <li class="media">
                                       <div class="media-status">
                                           <span class="badge badge-success">8</span>
                                       </div>
                                       <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                                       <div class="media-body">
                                           <h4 class="media-heading">Bob Nilson</h4>
                                           <div class="media-heading-sub"> Project Manager </div>
                                       </div>
                                   </li>
                                   <li class="media">
                                       <img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">
                                       <div class="media-body">
                                           <h4 class="media-heading">Nick Larson</h4>
                                           <div class="media-heading-sub"> Art Director </div>
                                       </div>
                                   </li>
                                   <li class="media">
                                       <div class="media-status">
                                           <span class="badge badge-danger">3</span>
                                       </div>
                                       <img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">
                                       <div class="media-body">
                                           <h4 class="media-heading">Deon Hubert</h4>
                                           <div class="media-heading-sub"> CTO </div>
                                       </div>
                                   </li>
                                   <li class="media">
                                       <img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">
                                       <div class="media-body">
                                           <h4 class="media-heading">Ella Wong</h4>
                                           <div class="media-heading-sub"> CEO </div>
                                       </div>
                                   </li>
                               </ul>
                               <h3 class="list-heading">Customers</h3>
                               <ul class="media-list list-items">
                                   <li class="media">
                                       <div class="media-status">
                                           <span class="badge badge-warning">2</span>
                                       </div>
                                       <img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">
                                       <div class="media-body">
                                           <h4 class="media-heading">Lara Kunis</h4>
                                           <div class="media-heading-sub"> CEO, Loop Inc </div>
                                           <div class="media-heading-small"> Last seen 03:10 AM </div>
                                       </div>
                                   </li>
                                   <li class="media">
                                       <div class="media-status">
                                           <span class="label label-sm label-success">new</span>
                                       </div>
                                       <img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">
                                       <div class="media-body">
                                           <h4 class="media-heading">Ernie Kyllonen</h4>
                                           <div class="media-heading-sub"> Project Manager,
                                               <br> SmartBizz PTL </div>
                                       </div>
                                   </li>
                                   <li class="media">
                                       <img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">
                                       <div class="media-body">
                                           <h4 class="media-heading">Lisa Stone</h4>
                                           <div class="media-heading-sub"> CTO, Keort Inc </div>
                                           <div class="media-heading-small"> Last seen 13:10 PM </div>
                                       </div>
                                   </li>
                                   <li class="media">
                                       <div class="media-status">
                                           <span class="badge badge-success">7</span>
                                       </div>
                                       <img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">
                                       <div class="media-body">
                                           <h4 class="media-heading">Deon Portalatin</h4>
                                           <div class="media-heading-sub"> CFO, H&D LTD </div>
                                       </div>
                                   </li>
                                   <li class="media">
                                       <img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">
                                       <div class="media-body">
                                           <h4 class="media-heading">Irina Savikova</h4>
                                           <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                       </div>
                                   </li>
                                   <li class="media">
                                       <div class="media-status">
                                           <span class="badge badge-danger">4</span>
                                       </div>
                                       <img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">
                                       <div class="media-body">
                                           <h4 class="media-heading">Maria Gomez</h4>
                                           <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                           <div class="media-heading-small"> Last seen 03:10 AM </div>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                           <div class="page-quick-sidebar-item">
                               <div class="page-quick-sidebar-chat-user">
                                   <div class="page-quick-sidebar-nav">
                                       <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                           <i class="icon-arrow-left"></i>Back</a>
                                   </div>
                                   <div class="page-quick-sidebar-chat-user-messages">
                                       <div class="post out">
                                           <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                           <div class="message">
                                               <span class="arrow"></span>
                                               <a href="javascript:;" class="name">Bob Nilson</a>
                                               <span class="datetime">20:15</span>
                                               <span class="body"> When could you send me the report ? </span>
                                           </div>
                                       </div>
                                       <div class="post in">
                                           <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                           <div class="message">
                                               <span class="arrow"></span>
                                               <a href="javascript:;" class="name">Ella Wong</a>
                                               <span class="datetime">20:15</span>
                                               <span class="body"> Its almost done. I will be sending it shortly </span>
                                           </div>
                                       </div>
                                       <div class="post out">
                                           <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                           <div class="message">
                                               <span class="arrow"></span>
                                               <a href="javascript:;" class="name">Bob Nilson</a>
                                               <span class="datetime">20:15</span>
                                               <span class="body"> Alright. Thanks! :) </span>
                                           </div>
                                       </div>
                                       <div class="post in">
                                           <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                           <div class="message">
                                               <span class="arrow"></span>
                                               <a href="javascript:;" class="name">Ella Wong</a>
                                               <span class="datetime">20:16</span>
                                               <span class="body"> You are most welcome. Sorry for the delay. </span>
                                           </div>
                                       </div>
                                       <div class="post out">
                                           <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                           <div class="message">
                                               <span class="arrow"></span>
                                               <a href="javascript:;" class="name">Bob Nilson</a>
                                               <span class="datetime">20:17</span>
                                               <span class="body"> No probs. Just take your time :) </span>
                                           </div>
                                       </div>
                                       <div class="post in">
                                           <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                           <div class="message">
                                               <span class="arrow"></span>
                                               <a href="javascript:;" class="name">Ella Wong</a>
                                               <span class="datetime">20:40</span>
                                               <span class="body"> Alright. I just emailed it to you. </span>
                                           </div>
                                       </div>
                                       <div class="post out">
                                           <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                           <div class="message">
                                               <span class="arrow"></span>
                                               <a href="javascript:;" class="name">Bob Nilson</a>
                                               <span class="datetime">20:17</span>
                                               <span class="body"> Great! Thanks. Will check it right away. </span>
                                           </div>
                                       </div>
                                       <div class="post in">
                                           <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                           <div class="message">
                                               <span class="arrow"></span>
                                               <a href="javascript:;" class="name">Ella Wong</a>
                                               <span class="datetime">20:40</span>
                                               <span class="body"> Please let me know if you have any comment. </span>
                                           </div>
                                       </div>
                                       <div class="post out">
                                           <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                           <div class="message">
                                               <span class="arrow"></span>
                                               <a href="javascript:;" class="name">Bob Nilson</a>
                                               <span class="datetime">20:17</span>
                                               <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="page-quick-sidebar-chat-user-form">
                                       <div class="input-group">
                                           <input type="text" class="form-control" placeholder="Type a message here...">
                                           <div class="input-group-btn">
                                               <button type="button" class="btn green">
                                                   <i class="icon-paper-clip"></i>
                                               </button>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                           <div class="page-quick-sidebar-alerts-list">
                               <h3 class="list-heading">General</h3>
                               <ul class="feeds list-items">
                                   <li>
                                       <div class="col1">
                                           <div class="cont">
                                               <div class="cont-col1">
                                                   <div class="label label-sm label-info">
                                                       <i class="fa fa-check"></i>
                                                   </div>
                                               </div>
                                               <div class="cont-col2">
                                                   <div class="desc"> You have 4 pending tasks.
                                                       <span class="label label-sm label-warning "> Take action
                                                           <i class="fa fa-share"></i>
                                                       </span>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col2">
                                           <div class="date"> Just now </div>
                                       </div>
                                   </li>
                                   <li>
                                       <a href="javascript:;">
                                           <div class="col1">
                                               <div class="cont">
                                                   <div class="cont-col1">
                                                       <div class="label label-sm label-success">
                                                           <i class="fa fa-bar-chart-o"></i>
                                                       </div>
                                                   </div>
                                                   <div class="cont-col2">
                                                       <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="col2">
                                               <div class="date"> 20 mins </div>
                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <div class="col1">
                                           <div class="cont">
                                               <div class="cont-col1">
                                                   <div class="label label-sm label-danger">
                                                       <i class="fa fa-user"></i>
                                                   </div>
                                               </div>
                                               <div class="cont-col2">
                                                   <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col2">
                                           <div class="date"> 24 mins </div>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="col1">
                                           <div class="cont">
                                               <div class="cont-col1">
                                                   <div class="label label-sm label-info">
                                                       <i class="fa fa-shopping-cart"></i>
                                                   </div>
                                               </div>
                                               <div class="cont-col2">
                                                   <div class="desc"> New order received with
                                                       <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col2">
                                           <div class="date"> 30 mins </div>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="col1">
                                           <div class="cont">
                                               <div class="cont-col1">
                                                   <div class="label label-sm label-success">
                                                       <i class="fa fa-user"></i>
                                                   </div>
                                               </div>
                                               <div class="cont-col2">
                                                   <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col2">
                                           <div class="date"> 24 mins </div>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="col1">
                                           <div class="cont">
                                               <div class="cont-col1">
                                                   <div class="label label-sm label-info">
                                                       <i class="fa fa-bell-o"></i>
                                                   </div>
                                               </div>
                                               <div class="cont-col2">
                                                   <div class="desc"> Web server hardware needs to be upgraded.
                                                       <span class="label label-sm label-warning"> Overdue </span>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col2">
                                           <div class="date"> 2 hours </div>
                                       </div>
                                   </li>
                                   <li>
                                       <a href="javascript:;">
                                           <div class="col1">
                                               <div class="cont">
                                                   <div class="cont-col1">
                                                       <div class="label label-sm label-default">
                                                           <i class="fa fa-briefcase"></i>
                                                       </div>
                                                   </div>
                                                   <div class="cont-col2">
                                                       <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="col2">
                                               <div class="date"> 20 mins </div>
                                           </div>
                                       </a>
                                   </li>
                               </ul>
                               <h3 class="list-heading">System</h3>
                               <ul class="feeds list-items">
                                   <li>
                                       <div class="col1">
                                           <div class="cont">
                                               <div class="cont-col1">
                                                   <div class="label label-sm label-info">
                                                       <i class="fa fa-check"></i>
                                                   </div>
                                               </div>
                                               <div class="cont-col2">
                                                   <div class="desc"> You have 4 pending tasks.
                                                       <span class="label label-sm label-warning "> Take action
                                                           <i class="fa fa-share"></i>
                                                       </span>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col2">
                                           <div class="date"> Just now </div>
                                       </div>
                                   </li>
                                   <li>
                                       <a href="javascript:;">
                                           <div class="col1">
                                               <div class="cont">
                                                   <div class="cont-col1">
                                                       <div class="label label-sm label-danger">
                                                           <i class="fa fa-bar-chart-o"></i>
                                                       </div>
                                                   </div>
                                                   <div class="cont-col2">
                                                       <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="col2">
                                               <div class="date"> 20 mins </div>
                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <div class="col1">
                                           <div class="cont">
                                               <div class="cont-col1">
                                                   <div class="label label-sm label-default">
                                                       <i class="fa fa-user"></i>
                                                   </div>
                                               </div>
                                               <div class="cont-col2">
                                                   <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col2">
                                           <div class="date"> 24 mins </div>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="col1">
                                           <div class="cont">
                                               <div class="cont-col1">
                                                   <div class="label label-sm label-info">
                                                       <i class="fa fa-shopping-cart"></i>
                                                   </div>
                                               </div>
                                               <div class="cont-col2">
                                                   <div class="desc"> New order received with
                                                       <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col2">
                                           <div class="date"> 30 mins </div>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="col1">
                                           <div class="cont">
                                               <div class="cont-col1">
                                                   <div class="label label-sm label-success">
                                                       <i class="fa fa-user"></i>
                                                   </div>
                                               </div>
                                               <div class="cont-col2">
                                                   <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col2">
                                           <div class="date"> 24 mins </div>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="col1">
                                           <div class="cont">
                                               <div class="cont-col1">
                                                   <div class="label label-sm label-warning">
                                                       <i class="fa fa-bell-o"></i>
                                                   </div>
                                               </div>
                                               <div class="cont-col2">
                                                   <div class="desc"> Web server hardware needs to be upgraded.
                                                       <span class="label label-sm label-default "> Overdue </span>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col2">
                                           <div class="date"> 2 hours </div>
                                       </div>
                                   </li>
                                   <li>
                                       <a href="javascript:;">
                                           <div class="col1">
                                               <div class="cont">
                                                   <div class="cont-col1">
                                                       <div class="label label-sm label-info">
                                                           <i class="fa fa-briefcase"></i>
                                                       </div>
                                                   </div>
                                                   <div class="cont-col2">
                                                       <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="col2">
                                               <div class="date"> 20 mins </div>
                                           </div>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                       </div>
                       <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                           <div class="page-quick-sidebar-settings-list">
                               <h3 class="list-heading">General Settings</h3>
                               <ul class="list-items borderless">
                                   <li> Enable Notifications
                                       <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                   <li> Allow Tracking
                                       <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                   <li> Log Errors
                                       <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                   <li> Auto Sumbit Issues
                                       <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                   <li> Enable SMS Alerts
                                       <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                               </ul>
                               <h3 class="list-heading">System Settings</h3>
                               <ul class="list-items borderless">
                                   <li> Security Level
                                       <select class="form-control input-inline input-sm input-small">
                                           <option value="1">Normal</option>
                                           <option value="2" selected>Medium</option>
                                           <option value="e">High</option>
                                       </select>
                                   </li>
                                   <li> Failed Email Attempts
                                       <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                                   <li> Secondary SMTP Port
                                       <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                                   <li> Notify On System Error
                                       <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                   <li> Notify On SMTP Error
                                       <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                               </ul>
                               <div class="inner-content">
                                   <button class="btn btn-success">
                                       <i class="icon-settings"></i> Save Changes</button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- END QUICK SIDEBAR -->
       </div>
       <!-- END CONTAINER -->
       <!-- BEGIN FOOTER -->
       <div class="page-footer">
           <div class="page-footer-inner"> 2014 &copy; Metronic by keenthemes.
               <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
           </div>
           <div class="scroll-to-top">
               <i class="icon-arrow-up"></i>
           </div>
       </div>
       <!-- END FOOTER -->
       <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
      <script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
       <script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
       <script src="/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
       <script src="/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
       <script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
       <script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
       <script src="/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
       <script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
       <!-- END CORE PLUGINS -->
       <!-- BEGIN PAGE LEVEL PLUGINS -->
       <script src="/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
       <script src="/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
       <script src="/assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
       <script src="/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
       <script src="/assets/pages/scripts/components-bootstrap-select.min.js" type="text/javascript"></script>
       <script src="/assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
       <!-- END PAGE LEVEL PLUGINS -->
       <!-- BEGIN THEME GLOBAL SCRIPTS -->
       <script src="/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
       <script src="/assets/global/scripts/app.min.js" type="text/javascript"></script>

       <!-- END THEME GLOBAL SCRIPTS -->
       <!-- BEGIN PAGE LEVEL SCRIPTS -->
       <script src="/assets/pages/scripts/components-editors.min.js" type="text/javascript"></script>
       <script src="/assets/pages/scripts/table-datatables-editable.min.js" type="text/javascript"></script>
        <script src="/assets/global/scripts/datatable.js" type="text/javascript"></script>
       <script src="/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
       <script src="/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
       <script src="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
       <!-- END PAGE LEVEL SCRIPTS -->
       <!-- BEGIN THEME LAYOUT SCRIPTS -->
       <script src="/assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
       <script src="/assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
       <script src="/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
       <!-- END THEME LAYOUT SCRIPTS -->
   </body>

</html>
