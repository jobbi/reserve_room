﻿
<!DOCTYPE html>
<!-- 
Template Name: Conquer - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0.3
Version: 1.5.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/conquer-responsive-admin-dashboard-template/3716838?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>ทำรายการจองห้องประชุม</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/gritter/css/jquery.gritter.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_conquer.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/clockface/css/clockface.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datepicker/css/datepicker.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-timepicker/compiled/timepicker.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-colorpicker/css/colorpicker.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/jquery-multi-select/css/multi-select.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch-conquer.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/jquery-tags-input/jquery.tagsinput.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="assets/css/style-conquer.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
<script language="javascript">
function fncSubmit()
{
	if(document.form_reserve.nameuser_db.value == "")
	{
		alert('กรุณากรอกชื่อ');
		document.form_reserve.nameuser_db.focus();
		return false;
	}	
	
	if(document.form_reserve.subject_db.value == "")
	{
		alert('กรุณากรอกหัวข้อการประชุม');
		document.form_reserve.subject_db.focus();		
		return false;
	}
	if(document.form_reserve.namepresident_db.value == "")
	{
		alert('กรุณากรอกชื่อประธานการประชุม');
		document.form_reserve.namepresident_db.focus();		
		return false;
	}
	if(document.form_reserve.people_db.value == "")
	{
		alert('กรุณาเลือกผู้เข้าประชุม');
		document.form_reserve.people_db.focus();		
		return false;
	}	
	if(document.form_reserve.amount_db.value == "")
	{
		alert('กรุณากรอกจำนวนผู้เข้าประชุม');
		document.form_reserve.amount_db.focus();		
		return false;
	}		
	if(document.form_reserve.select_reserve_db.value == "")
	{
		alert('กรุณาเลือกห้องประชุม');
		document.form_reserve.select_reserve_db.focus();		
		return false;
	}
	if(document.form_reserve.datefrom_db.value == "")
	{
		alert('กรุณาเลือกวันที่การประชุม');
		document.form_reserve.datefrom_db.focus();		
		return false;
	}		
	if(document.form_reserve.timefrom_db.value == "")
	{
		alert('กรุณาระบุเวลาเริ่มการประชุม');
		document.form_reserve.timefrom_db.focus();		
		return false;
	}		
	if(document.form_reserve.timeto_db.value == "")
	{
		alert('กรุณาระบุเวลาจบการประชุม');
		document.form_reserve.timeto_db.focus();		
		return false;
	}		
	if(document.form_reserve.description_db.value == "")
	{
		alert('กรุณากรอกรายเอียดการประชุม');
		document.form_reserve.description_db.focus();		
		return false;
	}		
	document.form_reserve.submit();
}
</script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="index.html">
		<img src="assets/img/logo.png" alt="logo" class="img-responsive"/>
		</a>
		<form class="search-form search-form-header" role="form" action="index.html">
			<div class="input-icon right">
				<i class="fa fa-search"></i>
				<input type="text" class="form-control input-medium input-sm" name="query" placeholder="Search...">
			</div>
		</form>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<img src="assets/img/menu-toggler.png" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			<!-- BEGIN NOTIFICATION DROPDOWN -->
			<li class="dropdown" id="header_notification_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="fa fa-warning"></i>
				<span class="badge badge-success">
					 6
				</span>
				</a>
				<ul class="dropdown-menu extended notification">
					<li>
						<p>
							 You have 14 new notifications
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-success">
									<i class="fa fa-plus"></i>
								</span>
								 New user registered.
								<span class="time">
									 Just now
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
								</span>
								 Server #12 overloaded.
								<span class="time">
									 15 mins
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-warning">
									<i class="fa fa-bell"></i>
								</span>
								 Server #2 not responding.
								<span class="time">
									 22 mins
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-info">
									<i class="fa fa-bullhorn"></i>
								</span>
								 Application error.
								<span class="time">
									 40 mins
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
								</span>
								 Database overloaded 68%.
								<span class="time">
									 2 hrs
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
								</span>
								 2 user IP blocked.
								<span class="time">
									 5 hrs
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-warning">
									<i class="fa fa-bell"></i>
								</span>
								 Storage Server #4 not responding.
								<span class="time">
									 45 mins
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-info">
									<i class="fa fa-bullhorn"></i>
								</span>
								 System Error.
								<span class="time">
									 55 mins
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
								</span>
								 Database overloaded 68%.
								<span class="time">
									 2 hrs
								</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="#">See all notifications <i class="fa fa-angle-right"></i></a>
					</li>
				</ul>
			</li>
			<!-- END NOTIFICATION DROPDOWN -->
			<!-- BEGIN INBOX DROPDOWN -->
			<li class="dropdown" id="header_inbox_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="fa fa-envelope"></i>
				<span class="badge badge-info">
					 5
				</span>
				</a>
				<ul class="dropdown-menu extended inbox">
					<li>
						<p>
							 You have 12 new messages
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
									<img src="./assets/img/avatar2.jpg" alt=""/>
								</span>
								<span class="subject">
									<span class="from">
										 Lisa Wong
									</span>
									<span class="time">
										 Just Now
									</span>
								</span>
								<span class="message">
									 Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh...
								</span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
									<img src="./assets/img/avatar3.jpg" alt=""/>
								</span>
								<span class="subject">
									<span class="from">
										 Richard Doe
									</span>
									<span class="time">
										 16 mins
									</span>
								</span>
								<span class="message">
									 Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh...
								</span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
									<img src="./assets/img/avatar1.jpg" alt=""/>
								</span>
								<span class="subject">
									<span class="from">
										 Bob Nilson
									</span>
									<span class="time">
										 2 hrs
									</span>
								</span>
								<span class="message">
									 Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh...
								</span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
									<img src="./assets/img/avatar2.jpg" alt=""/>
								</span>
								<span class="subject">
									<span class="from">
										 Lisa Wong
									</span>
									<span class="time">
										 40 mins
									</span>
								</span>
								<span class="message">
									 Vivamus sed auctor 40% nibh congue nibh...
								</span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
									<img src="./assets/img/avatar3.jpg" alt=""/>
								</span>
								<span class="subject">
									<span class="from">
										 Richard Doe
									</span>
									<span class="time">
										 46 mins
									</span>
								</span>
								<span class="message">
									 Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh...
								</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="inbox.html">See all messages <i class="fa fa-angle-right"></i></a>
					</li>
				</ul>
			</li>
			<!-- END INBOX DROPDOWN -->
			<!-- BEGIN TODO DROPDOWN -->
			<li class="dropdown" id="header_task_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="fa fa-check"></i>
				<span class="badge badge-warning">
					 5
				</span>
				</a>
				<ul class="dropdown-menu extended tasks">
					<li>
						<p>
							 You have 12 pending tasks
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										 New release v1.2
									</span>
									<span class="percent">
										 30%
									</span>
								</span>
								<span class="progress">
									<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											 40% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										 Application deployment
									</span>
									<span class="percent">
										 65%
									</span>
								</span>
								<span class="progress progress-striped">
									<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											 65% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										 Mobile app release
									</span>
									<span class="percent">
										 98%
									</span>
								</span>
								<span class="progress">
									<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											 98% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										 Database migration
									</span>
									<span class="percent">
										 10%
									</span>
								</span>
								<span class="progress progress-striped">
									<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											 10% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										 Web server upgrade
									</span>
									<span class="percent">
										 58%
									</span>
								</span>
								<span class="progress progress-striped">
									<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											 58% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										 Mobile development
									</span>
									<span class="percent">
										 85%
									</span>
								</span>
								<span class="progress progress-striped">
									<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											 85% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										 New UI release
									</span>
									<span class="percent">
										 18%
									</span>
								</span>
								<span class="progress progress-striped">
									<span style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											 18% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="#">See all tasks <i class="fa fa-angle-right"></i></a>
					</li>
				</ul>
			</li>
			<!-- END TODO DROPDOWN -->
			<li class="devider">
				 &nbsp;
			</li>
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<img alt="" src="assets/img/avatar3_small.jpg"/>
				<span class="username">
					 Nick
				</span>
				<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="extra_profile.html"><i class="fa fa-user"></i> My Profile</a>
					</li>
					<li>
						<a href="page_calendar.html"><i class="fa fa-calendar"></i> My Calendar</a>
					</li>
					<li>
						<a href="inbox.html"><i class="fa fa-envelope"></i> My Inbox
						<span class="badge badge-danger">
							 3
						</span>
						</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-tasks"></i> My Tasks
						<span class="badge badge-success">
							 7
						</span>
						</a>
					</li>
					<li class="divider">
					</li>
				</li>
				<li>
					<a href="login.html"><i class="fa fa-key"></i> Log Out</a>
				</li>
			</ul>
		</li>
		<!-- END USER LOGIN DROPDOWN -->
	</ul>
	<!-- END TOP NAVIGATION MENU -->
</div>
<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<div class="clearfix">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li>
					<form class="search-form" role="form" action="index.html" method="get">
						<div class="input-icon right">
							<i class="fa fa-search"></i>
							<input type="text" class="form-control input-medium input-sm" name="query" placeholder="Search...">
						</div>
					</form>
				</li>
				<li class="start ">
					<a href="index.html">
					<i class="fa fa-home"></i>
					<span class="title">
						Dashboard
					</span>
					</a>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-cogs"></i>
					<span class="title">
						Page Layouts
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="layout_session_timeout.html">
							<span class="badge badge-warning">
								new
							</span>
							Session Timeout</a>
						</li>
						<li>
							<a href="layout_idle_timeout.html">
							<span class="badge badge-important">
								new
							</span>
							User Idle Timeout</a>
						</li>
						<li>
							<a href="layout_language_bar.html">
							<span class="badge badge-important">
								new
							</span>
							Language Switch Bar</a>
						</li>
						<li>
							<a href="layout_disabled_menu.html">
							Disabled Menu Links</a>
						</li>
						<li>
							<a href="layout_sidebar_reversed.html">
							<span class="badge badge-success">
								new
							</span>
							Right Sidebar Page</a>
						</li>
						<li>
							<a href="layout_sidebar_fixed.html">
							Sidebar Fixed Page</a>
						</li>
						<li>
							<a href="layout_sidebar_closed.html">
							Sidebar Closed Page</a>
						</li>
						<li>
							<a href="layout_blank_page.html">
							Blank Page</a>
						</li>
						<li>
							<a href="layout_boxed_page.html">
							Boxed Page</a>
						</li>
						<li>
							<a href="layout_boxed_not_responsive.html">
							Non-Responsive Layout</a>
						</li>
						<li>
							<a href="layout_ajax.html">
							Content Loading via Ajax</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-bookmark"></i>
					<span class="title">
						UI Features
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="ui_general.html">
							General</a>
						</li>
						<li>
							<a href="ui_buttons.html">
							Buttons</a>
						</li>
						<li>
							<a href="ui_typography.html">
							Typography</a>
						</li>
						<li>
							<a href="ui_modals.html">
							Modals</a>
						</li>
						<li>
							<a href="ui_extended_modals.html">
							Extended Modals</a>
						</li>
						<li>
							<a href="ui_tabs_accordions_navs.html">
							Tabs, Accordions & Navs</a>
						</li>
						<li>
							<a href="ui_toastr.html">
							<span class="badge badge-warning">
								new
							</span>
							Toastr Notifications</a>
						</li>
						<li>
							<a href="ui_datepaginator.html">
							<span class="badge badge-success">
								new
							</span>
							Date Paginator</a>
						</li>
						<li>
							<a href="ui_tree.html">
							Tree View</a>
						</li>
						<li>
							<a href="ui_nestable.html">
							Nestable List</a>
						</li>
						<li>
							<a href="ui_ion_sliders.html">
							<span class="badge badge-important">
								new
							</span>
							Ion Range Sliders</a>
						</li>
						<li>
							<a href="ui_noui_sliders.html">
							<span class="badge badge-success">
								new
							</span>
							NoUI Range Sliders</a>
						</li>
						<li>
							<a href="ui_jqueryui_sliders.html">
							jQuery UI Sliders</a>
						</li>
						<li>
							<a href="ui_knob.html">
							Knob Circle Dials</a>
						</li>
					</ul>
				</li>
				<li class="active ">
					<a href="javascript:;">
					<i class="fa fa-table"></i>
					<span class="title">
						Form Stuff
					</span>
					<span class="selected">
					</span>
					<span class="arrow open">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="form_controls.html">
							Form Controls</a>
						</li>
						<li>
							<a href="form_layouts.html">
							Form Layouts</a>
						</li>
						<li class="active">
							<a href="form_component.html">
							Form Components</a>
						</li>
						<li>
							<a href="form_editable.html">
							<span class="badge badge-warning">
								new
							</span>
							Form X-editable</a>
						</li>
						<li>
							<a href="form_wizard.html">
							Form Wizard</a>
						</li>
						<li>
							<a href="form_validation.html">
							Form Validation</a>
						</li>
						<li>
							<a href="form_image_crop.html">
							<span class="badge badge-important">
								new
							</span>
							Image Cropping</a>
						</li>
						<li>
							<a href="form_fileupload.html">
							Multiple File Upload</a>
						</li>
						<li>
							<a href="form_dropzone.html">
							Dropzone File Upload</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-sitemap"></i>
					<span class="title">
						Pages
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="page_inbox.html">
							<span class="badge badge-important">
								4
							</span>
							Inbox</a>
						</li>
						<li>
							<a href="page_locked.html">
							User Locked</a>
						</li>
						<li>
							<a href="page_portfolio.html">
							<span class="badge badge-warning badge-roundless">
								new
							</span>
							Portfolio</a>
						</li>
						<li>
							<a href="page_blog.html">
							Blog</a>
						</li>
						<li>
							<a href="page_blog_item.html">
							Blog Post</a>
						</li>
						<li>
							<a href="page_about.html">
							About Us</a>
						</li>
						<li>
							<a href="page_contact.html">
							Contact Us</a>
						</li>
						<li>
							<a href="page_calendar.html">
							<span class="badge badge-important">
								14
							</span>
							Calendar</a>
						</li>
						<li>
							<a href="page_profile.html">
							User Profile</a>
						</li>
						<li>
							<a href="page_faq.html">
							FAQ</a>
						</li>
						<li>
							<a href="page_invoice.html">
							Invoice</a>
						</li>
						<li>
							<a href="page_pricing_table.html">
							Pricing Tables</a>
						</li>
						<li>
							<a href="page_404_option1.html">
							404 Page Option 1</a>
						</li>
						<li>
							<a href="page_404_option2.html">
							404 Page Option 2</a>
						</li>
						<li>
							<a href="page_500_option1.html">
							500 Page Option 1</a>
						</li>
						<li>
							<a href="page_500_option2.html">
							500 Page Option 2</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-folder-open"></i>
					<span class="title">
						4 Level Menu
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							<i class="fa fa-cogs"></i> Item 1
							<span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="javascript:;">
									<i class="fa fa-user"></i>
									Sample Link 1
									<span class="arrow">
									</span>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="#"><i class="fa fa-times"></i> Sample Link 1</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-pencil"></i> Sample Link 1</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-edit"></i> Sample Link 1</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="fa fa-user"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-external-link"></i> Sample Link 2</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-bell"></i> Sample Link 3</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							<i class="fa fa-globe"></i> Item 2
							<span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="#"><i class="fa fa-user"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-external-link"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-bell"></i> Sample Link 1</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
							<i class="fa fa-folder-open"></i>
							Item 3 </a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-th"></i>
					<span class="title">
						Data Tables
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="table_basic.html">
							Basic Tables</a>
						</li>
						<li>
							<a href="table_responsive.html">
							Responsive Tables</a>
						</li>
						<li>
							<a href="table_managed.html">
							Managed Tables</a>
						</li>
						<li>
							<a href="table_editable.html">
							Editable Tables</a>
						</li>
						<li>
							<a href="table_advanced.html">
							Advanced Tables</a>
						</li>
						<li>
							<a href="table_ajax.html">
							Ajax Datatables</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-file-text"></i>
					<span class="title">
						Portlets
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="portlet_general.html">
							General Portlets</a>
						</li>
						<li>
							<a href="portlet_draggable.html">
							Draggable Portlets</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-map-marker"></i>
					<span class="title">
						Maps
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="maps_google.html">
							Google Maps</a>
						</li>
						<li>
							<a href="maps_vector.html">
							Vector Maps</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="charts.html">
					<i class="fa fa-bar-chart-o"></i>
					<span class="title">
						Visual Charts
					</span>
					</a>
				</li>
				<li class="last ">
					<a href="login.html">
					<i class="fa fa-user"></i>
					<span class="title">
						Login
					</span>
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
</div>
<!-- END SIDEBAR -->
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-success">Save changes</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			<div class="theme-panel hidden-xs hidden-sm">
				<div class="toggler">
					<i class="fa fa-gear"></i>
				</div>
				<div class="theme-options">
					<div class="theme-option theme-colors clearfix">
						<span>
							 Theme Color
						</span>
						<ul>
							<li class="color-black current color-default tooltips" data-style="default" data-original-title="Default">
							</li>
							<li class="color-grey tooltips" data-style="grey" data-original-title="Grey">
							</li>
							<li class="color-blue tooltips" data-style="blue" data-original-title="Blue">
							</li>
							<li class="color-red tooltips" data-style="red" data-original-title="Red">
							</li>
							<li class="color-light tooltips" data-style="light" data-original-title="Light">
							</li>
						</ul>
					</div>
					<div class="theme-option">
						<span>
							 Layout
						</span>
						<select class="layout-option form-control input-small">
							<option value="fluid" selected="selected">Fluid</option>
							<option value="boxed">Boxed</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Header
						</span>
						<select class="header-option form-control input-small">
							<option value="fixed" selected="selected">Fixed</option>
							<option value="default">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Sidebar
						</span>
						<select class="sidebar-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Sidebar Position
						</span>
						<select class="sidebar-pos-option form-control input-small">
							<option value="left" selected="selected">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Footer
						</span>
						<select class="footer-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
				</div>
			</div>
			<!-- END BEGIN STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Form Components <small>form components and widgets</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Form Stuff</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Form Components</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>ทำรายการจองห้องประชุม
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form name ="form_reserve" action="save_reserve.php" method="post" class="form-horizontal form-bordered" onSubmit="JavaScript:return fncSubmit();>
								<div class="form-body">
									<div class="form-group">
									<label class="control-label col-md-3">ชื่อผู้จอง</label>
										<div class="col-md-4">
											<input type="text" class="form-control" maxlength="25" name="nameuser" id="maxlength_defaultconfig">
											<span class="help-block">
												
											</span>
											
										</div>
										
										</div>
									<div class="form-group">
									<label class="control-label col-md-3">หัวข้อประชุม</label>
										<div class="col-md-4">
											<input type="text" class="form-control" maxlength="25" name="subject" id="maxlength_defaultconfig">
											<span class="help-block">
												
											</span>
										</div>
										</div>
									<div class="form-group">
									<label class="control-label col-md-3">ชื่อประธานการประชุม</label>
										<div class="col-md-4">
											<input type="text" class="form-control" maxlength="25" name="namepresident" id="maxlength_defaultconfig">
											<span class="help-block">
												 
											</span>
										</div>
										</div>
										
										<div class="form-group">
									<label class="control-label col-md-3">รายชื่อผู้เข้าร่วมการประชุม</label>
												<div class="form-group last">
										<div class="col-md-9">
											<select name="people" class="multi-select" multiple="" id="my_multi_select3">
												<option value="CI">นาย</option>
												<option value="HR">นาง</option>
												<option value="CU">นางสาว</option>
									
												
											</select>
										</div>
									</div>
										</div>
									<div class="form-group">
									<label class="control-label col-md-3">จำนวนผู้เข้าร่วมประชุม</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_number" type="text" name="amount"/>
											<span class="help-block">
												 
											</span>
										</div>
										</div>
										<div class="form-group">
										<label class="control-label col-md-3">เลือกห้องประชุม</label>
										<div class="col-md-4">
											<select id="select2_sample2" name="select_reserve" class="form-control">
												<optgroup label="ห้องประชุมขนาด 10 คน">
												<option name="re01">ห้องประชุม 1</option>
												<option name="re02">ห้องประชุม 2</option>
												<option name="re03">ห้องประชุม 3</option>
												<option name="re04">ห้องประชุม 4</option>
												</optgroup>
												<optgroup label="ห้องประชุมขนาด 15 คน">
												<option name="re05">ห้องประชุม 5</option>
												<option name="re06">ห้องประชุม 6</option>
												</optgroup>
												<optgroup label="ห้องประชุมขนาด 20 คน">
												<option name="re07">ห้องประชุม 7</option>
												<option name="re08">ห้องประชุม 8</option>
												<option name="re09">ห้องประชุม 9</option>
												<option name="re10">ห้องประชุม 10</option>
												</optgroup>
												<optgroup label="ห้องประชุมขนาด 30 คน">
												<option name="re11">ห้องประชุม 11</option>
												<option name="re12">ห้องประชุม 12</option>
												<option name="re13">ห้องประชุม 13</option>
												<option name="re14">ห้องประชุม 14</option>
												</optgroup>
											
											</select>
										</div>
									</div>
									<div class="form-group">
									<label class="control-label col-md-3">วันที่ประชุม</label>
										<div class="col-md-4">
											<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
												<input type="text" class="form-control" name="date">
												
											</div>
											<!-- /input-group -->
											
										</div>
									</div>
									<div class="form-group">
									<label class="control-label col-md-3">จากเวลา</label>
										<div class="col-md-3">
											<div class="input-group bootstrap-timepicker">
												<input type="text" name="timefrom"class="form-control timepicker-default">
												<span class="input-group-btn">
													<button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
												</span>
											</div>
										</div>
									</div>
										<div class="form-group">
										<label class="control-label col-md-3">ถึงเวลา</label>
										<div class="col-md-3">
											<div class="input-group bootstrap-timepicker">
												<input type="text" name="timeto"class="form-control timepicker-default">
												<span class="input-group-btn">
													<button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
												</span>
											</div>
										</div>
									</div>
									<div class="form-group">
									<label class="control-label col-md-3">รายละเอียดการประชุม</label>
										<div class="col-md-9">
											<textarea name="description"class="ckeditor form-control"  rows="6"></textarea>
										</div>
										</div>
										<div class="form-group">
										<label class="control-label col-md-3">เอกสารแนบ</label>
										<div class="col-md-4">
											<input type="file" name="file" class="default"/>
										</div>
										</div>
									</div>
									
								
								</div>
								<tr>
								<td>
								<div class="form-actions fluid">
									<div class="row">
										<div class="col-md-12">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn btn-info"><i class="fa fa-check"></i> ยืนยัน</button>
												<button type="button" class="btn btn-default">ยกเลิก</button>
											</div>
										</div>
									</div>
								</div>
								</td>
								</tr>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
		
		
			<!-- END PAGE CONTENT-->
		</div>
	</div>
</div>
<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
<div class="footer-inner">
	
</div>
<div class="footer-tools">
	<span class="go-top">
		<i class="fa fa-angle-up"></i>
	</span>
</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap2-typeahead.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="assets/plugins/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="assets/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="assets/plugins/clockface/js/clockface.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-multi-select/js/jquery.quicksearch.js"></script>
<script src="assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/app.js"></script>
<script src="assets/scripts/form-components.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   App.init();
   FormComponents.init();
});
</script>
<!-- BEGIN GOOGLE RECAPTCHA -->
<script type="text/javascript">
var RecaptchaOptions = {
   theme : 'custom',
   custom_theme_widget: 'recaptcha_widget'
};
</script>
<script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LcrK9cSAAAAALEcjG9gTRPbeA0yAVsKd8sBpFpR"></script>
<!-- END GOOGLE RECAPTCHA -->
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>