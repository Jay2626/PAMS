<!doctype html>
<?php
//start a session
session_start();
//config 
include('function/config.php');
//page loding time counter start
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
if(!isset($_SESSION['username'])){
	header('Location:login.php?error=2');
}
?>
<html>
<head>
	<!-- jQuery -->
	<script src="src/js/jquery-3.3.1.min.js"></script>
	<!-- Materialize-->
	<link rel="stylesheet" href="src/css/materialize.css">
	<script src="src/js/materialize.js"></script>
	<!-- Material Icons -->
	<link rel="stylesheet" href="src/icons/material-icons/material-icons.css">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- nicescroll-->
	<script src="src/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- datatables -->
	<link rel="stylesheet" type="text/css" href="src/plugins/DataTables/datatables.css">
	<script src="src/plugins/DataTables/datatables.js"></script>
	<!-- chartist -->
	<link rel="stylesheet" href="src/plugins/chartist/chartist.css">
	<script src="src/plugins/chartist/chartist.js"></script>
	<script src="src/plugins/chartist-pointlabelsx/chartist-plugin-pointlabels.min.js"></script>
	<!-- W3.CSS-->
	<link rel="stylesheet" href="src/css/w3.css">
	<link rel="stylesheet" href="src/css/pams.css">
</head>
<body class="" style="font-family: 'Roboto', sans-serif;">
<!-- sidebar -->
<div id="pSidebar" class="w3-sidebar w3-light-gray w3-col l2 w3-hide-small w3-hide-medium  scale-transition">
	<!-- sidebar header -->
	<div class="w3-container w3-blue-gray" style="">
		<!-- user profile image -->
		<div class="" style="padding: 20px 0 5px 0;">
			<img class="w3-image w3-circle w3-red" alt="user_photo" src="<?php echo $_SESSION['user_image']; ?>" style="height:70px ">
		</div>
		<div class="w3-display-container">
			<h5 class="w3-hover-opacity" style="margin:0;"><a href="myprofile.php"><?php echo $_SESSION['fullname'];?></a></h5>
			<p class="w3-hover-opacity" style="margin:0; padding-bottom:5px;"><a href="myaccount.php"><?php echo $_SESSION['type'];?></a></p>
			<div class="w3-right">
				<button onclick="myFunction('Demo1')" class="w3-display-right waves-light btn-floating btn-flat w3-hover-gray w3-right">
					<i class="material-icons">arrow_drop_down</i>
				</button>
			</div>
			<script>
			//for user's dropdown menu
			function myFunction(id) {
				var x = document.getElementById(id);
				if (x.className.indexOf("w3-show") == -1) {
					x.className += " w3-show";
				} else { 
					x.className = x.className.replace(" w3-show", "");
				}
			}
			</script>
		</div>
	</div>
	<!-- sidebar links -->
	<div class="w3-bar-block  w3-content w3-text-dark-gray">
		<?php 
		//contains classes for selected items in the sidebar
		$selected = "w3-blue";
		?>
		<!-- hidden menu -->
		<div class="w3-dark-gray w3-text-white w3-hide p-animate-dropdown" id="Demo1">
			<a href="myprofile.php" class="waves-effect w3-bar-item w3-button w3-padding-large <?php if($page == 'myprofile'){echo $selected;}?>">
				<i class="material-icons">account_circle</i>&emsp;My Profile</a>
			<!--a href="mysettings.php" class="waves-effect w3-bar-item w3-button w3-padding-large <?php if($page == 'settings'){echo $selected;}?>">
				<i class="material-icons">settings</i>&emsp;Settings</a-->
			<a href="function/logout.php" class="waves-effect w3-bar-item w3-button w3-padding-large <?php if($page == 'logout'){echo $selected;}?>">
				<i class="material-icons">exit_to_app</i>&emsp;Logout</a>
		</div>
		
		<a href="index.php" class="waves-effect w3-bar-item w3-button w3-padding-large <?php if($page == 'home'){echo $selected;}?>">
			<i class="material-icons">home</i>&emsp;Home</a>
		<!--a href="dts.php" class="waves-effect w3-bar-item w3-button w3-padding-large <?php if($page == 'dts'){echo $selected;}?>">
			<i class="material-icons">track_changes</i>&emsp;DTS</a-->			
		<a href="projects.php" class="waves-effect w3-bar-item w3-button w3-padding-large <?php if($page == 'projects'){echo $selected;}?>">
			<i class="material-icons">work</i>&emsp;Projects</a>
		<!--a href="myprojects.php" class="waves-effect w3-bar-item w3-button w3-padding-large <?php if($page == 'myprojects'){echo $selected;}?>">
			<i class="material-icons">work</i>&emsp;My Projects</a-->
		<a href="sao_records.php" class="waves-effect w3-bar-item w3-button w3-padding-large <?php if($page == 'sao'){echo $selected;}?>">
			<i class="material-icons">book</i>&emsp;SAO Records</a>
		<a href="assignments.php" class="waves-effect w3-bar-item w3-button w3-padding-large <?php if($page == 'assignments'){echo $selected;}?>">
			<i class="material-icons">assignment</i>&emsp;Assignments</a>
		<!--a href="workloads.php" class="waves-effect w3-bar-item w3-button w3-padding-large <?php if($page == 'workloads'){echo $selected;}?>">
			<i class="material-icons">business_center</i>&emsp;Workloads</a-->
		<!--a href="reports.php" class="waves-effect w3-bar-item w3-button w3-padding-large <?php if($page == 'reports'){echo $selected;}?>">
			<i class="material-icons">assessment</i>&emsp;Reports</a-->
		<a href="employees.php" class="waves-effect w3-bar-item w3-button w3-padding-large <?php if($page == 'employees'){echo $selected;}?>">
			<i class="material-icons">account_box</i>&emsp;Employees</a>
		<!--a href="ipcr.php" class="waves-effect w3-bar-item w3-button w3-padding-large <?php if($page == 'ipcr'){echo $selected;}?>">
			<i class="material-icons">show_chart</i>&emsp;IPCR</a-->
		<!--a href="archives.php" class="waves-effect w3-bar-item w3-button w3-padding-large <?php if($page == 'archives'){echo $selected;}?>">
			<i class="material-icons">archive</i>&emsp;Archives</a-->
	</div>
</div>
<script>
//for custom scrollbar
$(".w3-sidebar")
.niceScroll({
	cursorcolor:"rgba(255,255,255,0.5)", 
	cursorwidth:"12px", 
	background:"rgba(0,0,0,0)",
	cursorborder:"0px solid #ddd", 
	cursorborderradius:"5px",
	});
</script>
<script src="src/js/init.js"></script>