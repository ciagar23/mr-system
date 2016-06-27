<?php
if (!defined('WEB_ROOT')) {
	exit;
}


		

$errorMessage = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
$successMessage = (isset($_GET['success']) && $_GET['success'] != '') ? $_GET['success'] : '';

if ($errorMessage == '')
{
$errorMessage = '';
}
else
{
$errorMessage = '<div class="msg msg-error">
			<p><strong>'.$errorMessage.'</strong></p>
		</div>';
}


if ($successMessage == '')
{
$successMessage = '';
}
else
{
$successMessage = '<div class="msg msg-ok">
			<p><strong>'.$successMessage.'</strong></p>
		</div>';
}


$session = $_SESSION["username"];

$sql = "SELECT *
        FROM tbl_user where user_name='$session'";
		$result = mysql_query($sql);
		$show = mysql_fetch_array($result);	
		$fname= $show['user_fname'];
		$lname= $show['user_lname'];
		$position= $show['user_position'];
		$department = $show['user_department'];


$n = count($script);
for ($i = 0; $i < $n; $i++) {
	if ($script[$i] != '') {
		echo '<script language="JavaScript" type="text/javascript" src="' . WEB_ROOT. 'admin/library/' . $script[$i]. '"></script>';
	}
}






$self = WEB_ROOT . 'admin/index.php';
?>


<!DOCTYPE html>
<!-- saved from url=(0059)http://baldtheme.com/theme/cleanizr/html/form-elements.html -->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" style=""><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- START META SECTION -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Medical Record System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0">
    <!--/ END META SECTION -->

    <!-- START STYLESHEET SECTION -->
    <!-- IMPORTANT! : This is for demo purpose only. All the available plugin will be loaded at once -->
    <!-- Stylesheet(Bootstrap) -->
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/bootstrap-responsive.min.css">
    <!--/ Stylesheet(Bootstrap) -->

    <!-- Stylesheet(Application) -->
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/style.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/custom.css">
    <link rel="stylesheet" id="base-color" href="<?php echo WEB_ROOT;?>admin/include/css/serene.css"><!-- Base Theme Color -->
    <link rel="stylesheet" id="base-bg" href="<?php echo WEB_ROOT;?>admin/include/css/bg1.css"><!-- Boxed Background -->
    <!--/ Stylesheet(Application) -->

    <!-- Stylesheet(Plugins) -->
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/jquery-ui-1.10.3.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/jquery.snippet.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/jquery.icheck.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/jquery.minicolors.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/jquery.cleditor.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/jquery.validationEngine.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/jquery.tagit.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/prettyphoto.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/dataTables-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/bootstrapSwitch.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/daterangepicker.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/bootstrap-fileupload.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/jquery.gritter.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/css/jquery.themer.min.css">
    <!--/ Stylesheet(Plugins) -->
    <!--/ END STYLESHEET SECTION -->

    <!-- START JAVASCRIPT SECTION - Load only modernizr script here -->
    <!-- Javascript(Modernizr) -->
    <script src="<?php echo WEB_ROOT;?>admin/include/js/modernizr-2.6.2.min.js"></script>
    <!--/ Javascript(Modernizr) -->
    <!--/ END JAVASCRIPT SECTION -->
<style>.cke{visibility:hidden;}</style><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><script type="text/javascript" src="<?php echo WEB_ROOT;?>admin/include/js/config.js"></script><link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>admin/include/js/editor.css"><script type="text/javascript" src="<?php echo WEB_ROOT;?>admin/include/js/en.js"></script><script type="text/javascript" src="<?php echo WEB_ROOT;?>admin/include/js/styles.js"></script>


<!--- diri naun -->

<script type="<?php echo WEB_ROOT;?>admin/include/text/javascript" src="<?php echo WEB_ROOT;?>admin/include/js-include/jquery-1.7.1.min.js"></script>
<script type="<?php echo WEB_ROOT;?>admin/include/text/javascript" src="<?php echo WEB_ROOT;?>admin/include/js-include/menu.js" ></script>
<script type="<?php echo WEB_ROOT;?>admin/include/text/javascript" src="<?php echo WEB_ROOT;?>admin/include/colorbox/jquery.colorbox.js"></script>


<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/common.js"></script>

<script>

	$(document).ready(function(){		
		$(".addProject").colorbox({width:"440px", inline:true, href:"#add-new-project"});
		$(".addMilestone").colorbox({width:"440px", inline:true, href:"#add-new-milestone"});		
		
	});
</script>



</head>
<body style="">
    <!-- START Template Wrapper -->
    <!-- If you want to enable the fixed sidebar or fixed header, just add `.fixed-sidebar` or `.fixed-header` class to the `#wrapper` div below -->
    <!-- IMPORTANT! : fixed sidebar will automatically add `.fixed-header` class to the `#wrapper` div -->
    <!-- If you want to enable the boxed layout, just add `.boxed-layout` class to the `#wrapper` div below -->
    <div id="wrapper" class="boxed-layout">
        <!-- START Template Canvas -->
        <div id="canvas">
            <!-- START Themer -->
            <!-- You can remove this. For demo purpose only -->
            <!--/ END Themer -->
            <!-- START Template Header -->
<header id="header">
                <!-- START Logo -->
                <div class="logo hidden-phone hidden-tablet">
                    <font size="+5" color="#FFFF00">Medical Record System</font><br>
                    <font size="+1" color="#FFFFFF">Colegio San Agustin - Bacolod</font>
                </div>
                <!--/ END Logo -->
               
                       

                <!-- START Mobile Sidebar Toggler -->
                <a href="http://baldtheme.com/theme/cleanizr/html/form-elements.html#" class="toggler" data-toggle="sidebar"><span class="icon icone-reorder"></span></a>
                <!--/ END Mobile Sidebar Toggler -->

                <!-- START Toolbar -->
                
                <!--/ END Toolbar -->
          </header>
            <!--/ END Template Header -->

            <!-- START Template Sidebar -->
            <aside id="sidebar" class="ps-container">
                <!-- START Sidebar Content -->
                <div class="sidebar-content">
                    <!-- START Sidebar Tab -->
                    <ul class="nav nav-tabs">
                        <li class="active"></li>
                        <li class=""></li>
                    </ul>
                    <!--/ END Sidebar Tab -->



                    <!-- START Tab Content -->
                    <div class="tab-content">
                        <!-- START Tab Pane(menu) -->
                        <div class="tab-pane active" id="tab-menu">
                            <!-- START Sidebar Menu -->
                            <nav id="nav" class="accordion">
                                <ul id="navigation">
                                    <!-- START Menu Divider -->
                                    <li class="divider">
                                    
                                     Hi <?php echo $fname; ?> <?php echo $lname; ?> 
                (<?php echo $position; ?> , <?php echo $department; ?>)
                                    
                                    
                                    </li>
                                    <!--/ END Menu Divider -->

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a href="<?php echo WEB_ROOT; ?>admin/">
                                            <span class="icon icone-dashboard"></span>
                                            <span class="text">Home</span>
                                            <span class="label label-inverse">0</span>
                                        </a>
                                    </li>
                                    <!--/ END Menu -->




<!-- ADMIN############################################################################################################### -->

<? if ($position =='ADMIN' || $position =='STAFF')
{?>
                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu2">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Profile</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu2" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/profile"><span class="icon icone-angle-right"></span> View Profile</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/profile/index.php?view=modify"><span class="icon icone-angle-right"></span> Edit Profile</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
                                    
                                    

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu3">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">User</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu3" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/user/"><span class="icon icone-angle-right"></span> View User</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/user/index.php?view=add"><span class="icon icone-angle-right"></span> Add User</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
                                    

                                    

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu4">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Appointment</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu4" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/appointment/"><span class="icon icone-angle-right"></span> View Appointments</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
                                    
                                                                        

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu5">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Patient</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu5" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/patient/"><span class="icon icone-angle-right"></span> View Patients</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/patient/index.php?view=add"><span class="icon icone-angle-right"></span> Add a Patient</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
                                    
                                                                        

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu6">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Medicine</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu6" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/medicine/"><span class="icon icone-angle-right"></span> View Medicine</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/medicine/index.php?view=add"><span class="icon icone-angle-right"></span> Add New Medicine</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/medicine/index.php?view=modify"><span class="icon icone-angle-right"></span> Update Medicine</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->                                                      

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu7">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Student's History</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu7" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/studenthistory/"><span class="icon icone-angle-right"></span> View History</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
                                    

                                                      

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu8">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Tour</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu8" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/tour/"><span class="icon icone-angle-right"></span> View Tour</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/tour/index.php?view=add"><span class="icon icone-angle-right"></span> Add Tour</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->

                                                      

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu9">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Reports</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu9" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/reports/"><span class="icon icone-angle-right"></span> View Reports</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
                                    
                                                      

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu10">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Medical Records</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu10" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/medicalrecords/"><span class="icon icone-angle-right"></span> View Medical Records</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
                                                     

                                                      

                                    
  <? } 
  else
  
  ?>

<!-- TEACHER############################################################################################################### -->

<? if ($position =='FACULTY')
{?>
                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu2">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Profile</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu2" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/profile"><span class="icon icone-angle-right"></span> View Profile</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/profile/index.php?view=modify"><span class="icon icone-angle-right"></span> Edit Profile</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
   

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu4">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Appointment</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu4" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/appointment/"><span class="icon icone-angle-right"></span> View Appointments</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/appointment/index.php?view=add"><span class="icon icone-angle-right"></span> Make an Appointment</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
       

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu11">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Student's Attendance</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu11" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/studentattendance/"><span class="icon icone-angle-right"></span> View Attendance</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->


                                    
  <? } 
  else
  
  ?>

<!-- ENCODER############################################################################################################### -->
<? if ($position =='ENCODER')
{?>
                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu2">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Profile</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu2" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/profile"><span class="icon icone-angle-right"></span> View Profile</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/profile/index.php?view=modify"><span class="icon icone-angle-right"></span> Edit Profile</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
                                    
                                    

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu3">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">User</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu3" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/user/"><span class="icon icone-angle-right"></span> View User</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/user/index.php?view=add"><span class="icon icone-angle-right"></span> Add User</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
                                    

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu5">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Patient</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu5" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/patient/"><span class="icon icone-angle-right"></span> View Patients</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/patient/index.php?view=add"><span class="icon icone-angle-right"></span> Add a Patient</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
                                    
                                                                        

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu6">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Medicine</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu6" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/medicine/"><span class="icon icone-angle-right"></span> View Medicine</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/medicine/index.php?view=add"><span class="icon icone-angle-right"></span> Add New Medicine</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/medicine/index.php?view=modify"><span class="icon icone-angle-right"></span> Update Medicine</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->                                                      
              

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu12">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Encode</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu12" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/encode/"><span class="icon icone-angle-right"></span> View</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/encode/index.php?view=add"><span class="icon icone-angle-right"></span> Add</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/encode/index.php?view=modify"><span class="icon icone-angle-right"></span> Modify</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
                                    
  <? } 
  else
  
  ?>
  
  <!-- STUDENT##################################################################################################3###-->
<? if ($position =='STUDENT')
{?>
                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu2">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Profile</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu2" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/profile"><span class="icon icone-angle-right"></span> View Profile</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/profile/index.php?view=modify"><span class="icon icone-angle-right"></span> Edit Profile</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
                                    
                                    

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu3">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">User</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu3" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/user/"><span class="icon icone-angle-right"></span> View User</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/user/index.php?view=add"><span class="icon icone-angle-right"></span> Add User</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
                                    

                                    

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu4">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Appointment</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu4" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/appointment/"><span class="icon icone-angle-right"></span> View Appointments</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/appointment/index.php?view=add"><span class="icon icone-angle-right"></span> Make an Appointment</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
                                    
                                                                        

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu5">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Patient</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu5" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/patient/"><span class="icon icone-angle-right"></span> View Patients</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/patient/index.php?view=add"><span class="icon icone-angle-right"></span> Add a Patient</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
                                    
                                                                        

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu6">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Medicine</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu6" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/medicine/"><span class="icon icone-angle-right"></span> View Medicine</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/medicine/index.php?view=add"><span class="icon icone-angle-right"></span> Add New Medicine</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/medicine/index.php?view=modify"><span class="icon icone-angle-right"></span> Update Medicine</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->                                                      

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu7">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Student's History</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu7" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/studenthistory/"><span class="icon icone-angle-right"></span> View History</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
                                    

                                                      

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu8">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Tour</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu8" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/tour/"><span class="icon icone-angle-right"></span> View Tour</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/tour/index.php?view=add"><span class="icon icone-angle-right"></span> Add Tour</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->

                                                      

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu9">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Reports</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu9" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/reports/"><span class="icon icone-angle-right"></span> View Reports</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
                                    
                                                      

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu10">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Medical Records</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu10" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/medicalrecords/"><span class="icon icone-angle-right"></span> View Medical Records</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
                                                      

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu11">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Student's Attendance</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu11" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/studentattendance/"><span class="icon icone-angle-right"></span> View Attendance</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->

                                                      

                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a data-toggle="collapse" data-parent="#navigation" href="#submenu12">
                                            <span class="icon icone-beaker"></span>
                                            <span class="text">Encode</span>
                                            <span class="arrow icone-caret-down"></span>
                                        </a>
                                        <!-- START Submenu Menu -->
                                        <ul id="submenu12" class="collapse ">
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/encode/"><span class="icon icone-angle-right"></span> View</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/encode/index.php?view=add"><span class="icon icone-angle-right"></span> Add</a></li>
                                            <li class=""><a href="<?php echo WEB_ROOT; ?>admin/encode/index.php?view=modify"><span class="icon icone-angle-right"></span> Modify</a></li>
                                      
                                        </ul>
                                        <!--/ END Submenu Menu -->
                                    </li>
                                    
                                    <!--/ END Menu -->
                                    
  <? } 
  else
  {
  }
  
  ?>



                                    <!-- START Menu -->
                                    <li class="accordion-group ">
                                        <a href="<?php echo $self; ?>?logout">
                                            <span class="icon icone-dashboard"></span>
                                            <span class="text">Log out</span>
                                        </a>
                                    </li>
                                    <!--/ END Menu -->









                                    
                                    <!-- START Menu Divider -->
                                    <li class="divider">Other Stuff</li>
                                    <!--/ END Menu Divider -->
                                </ul>
                            </nav>
                            <!--/ END Sidebar Menu -->
                        </div>
                 
                 
                 
                 
                    
                    </div>
                    <!--/ END Tab Content -->
                </div>
                <!--/ END Sidebar Content -->
            <div class="ps-scrollbar-x" style="left: 0px; bottom: 3px; width: 0px;"></div><div class="ps-scrollbar-y" style="right: 3px; height: 0px;"></div></aside>
            <!--/ END Template Sidebar -->

            <!-- START Template Main Content -->
            <section id="main" style="min-height: 481px;">
                <!-- START Bootstrap Navbar -->
              <!--  <div class="navbar navbar-static-top">
                    <div class="navbar-inner">
                         Breadcrumb 
                        <ul class="breadcrumb">
                            <li><a href="http://baldtheme.com/theme/cleanizr/html/form-elements.html#">Forms</a> <span class="divider"></span></li>
                            <li class="active">Form-elements</li>
                        </ul>
                        <!--/ Breadcrumb -->

                        <!-- Daterange Picker 
                        <div id="reportrange" class="pull-right hidden-phone">
                            <span class="icon icon-calendar"></span>
                            <span id="rangedate">June 7, 2013 - June 13, 2013</span><span class="caret"></span>
                        </div> 
                         </div>
                         
                </div>
                        <!--/ Daterange Picker -->
                  
                <!--/ END Bootstrap Navbar -->

                <!-- START Content -->
               
       
          <?php echo $successMessage;?>  
          <?php require_once $content;?>  
          
          
                <!--/ END Content -->

            </section>
            <!--/ END Template Main Content -->

            <!-- START Template Footer -->
            <footer id="footer">
                <p>By: Group No. 4</p>

                <!-- START To Top Scroller -->
                <a href="http://baldtheme.com/theme/cleanizr/html/form-elements.html#" class="totop"><span class="icon icone-angle-up"></span></a>
                <!--/ END To Top Scroller -->
            </footer>
            <!--/ END Template Footer -->
      </div>
        <!--/ END Template Canvas -->
    </div>
    <!--/ END Template Wrapper -->

    <!-- IMPORTANT! : This is for demo purpose only. All the available plugin will be loaded at once -->
    <!-- START JAVASCRIPT SECTION - Include at the bottom of the page to reduce load time -->
    <!-- Javascript(Vendors) -->
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery-1.10.1.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery-ui-1.10.3.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery-migrate-1.2.1.min.js"></script>
    <!--/ Javascript(Vendors) -->

    <!-- Javascript(Plugins) -->
    <!--[if IE 8]><script src="/assets/respond/js/respond.min.js"></script><![endif]-->
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery.autosize.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/bootstrap.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/dataTables-bootstrap.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/daterangepicker.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery.easypiechart.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/bootstrap-fileupload.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery.formwizard.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/fullcalendar.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery.icheck.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery.placeholder.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery.inputmask.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery.minicolors.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/moment.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery.mousewheel.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery.prettyphoto.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/perfect-scrollbar.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/select2.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery.shuffle.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery.snippet.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery.sparkline.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/bootstrapSwitch.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/tag-it.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery-ui-timepicker.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/ckeditor.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery.cleditor.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery.gritter.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery.themer.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>admin/include/js/jquery.ba-resize.min.js"></script>


    <!--/ END JAVASCRIPT SECTION -->
</body></html>