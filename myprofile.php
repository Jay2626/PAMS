<?php include 'common/sidebar.php'?>
<!-- navbar -->
<div id="pContent" class="w3-col l10 m12 s12 w3-right">
<div class="w3-container w3-bar w3-light-gray w3-text-gray w3-card w3-display-container">
	<a id="pCloseSidebar" onclick="p_close_big_sidebar()" class="w3-bar-item w3-button w3-hover-none w3-hover-text-blue" style="display:block;"><i class="material-icons w3-display-left">&nbsp;&nbsp;menu</i></a>
	<a id="pOpenSidebar" onclick="p_open_big_sidebar()" class="w3-bar-item w3-button w3-hover-none w3-hover-text-blue" style="display:none;"><i class="material-icons w3-display-left">&nbsp;&nbsp;close</i></a>
	<h2 class="w3-bar-item">My Profile</h2>
</div>
	<div class="w3-col l8">
		<!-- cover -->
		<div class="w3-center w3-dark-gray w3-display-container w3-padding-48" 
		style="background: #348F50;  /* fallback for old browsers */
		background: -webkit-linear-gradient(to right, #56B4D3, #348F50);  /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to right, #56B4D3, #348F50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		">
		<!--
		padding: 20px 0 5px 0; 
		background-image:url('src/img/banner2.jpg'); 
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;"-->
			<img class="w3-image w3-circle w3-card" src="<?php echo $_SESSION['user_image']; ?>" style="height:130px">
			<h2 class=""><?php echo $_SESSION['fullname']; ?></h2>
		</div>
		<div class="w3-bar w3-light-gray w3-border-left">
			<h2 class="w3-bar-item">Recent Projects</h2>
		</div>
		
		<div class="w3-bar w3-light-gray">
			<a class="w3-bar-item w3-button" onclick="p_tab('list')">List</a>
			<a class="w3-bar-item w3-button" onclick="p_tab('cat')">Categories</a>
		</div>
		<!-- list -->
		<div class="w3-container p-tab-content" id="list">
			<table>
				<thead>
					<th>Description</th>
					<th>Status</th>
					<th>Action</th>
				</thead>
			<tr>
				<td>Multi-purpose Fuction Hall For Daraga National High School, worth Php. 1, 560, 000.00</td>
				<td><span class="w3-tag w3-blue w3-round-xlarge">Ongoing</span></td>
				<td><a href="project_detail.php" class="w3-text-blue">View Details</a></td>
			</tr>
			<tr>
				<td>1.2km Suspession Bridge across Yawa River, worth Php. 3, 990, 000.00</td>
				<td><span class="w3-tag w3-green w3-round-xlarge">Completed</span></td>
				<td><a href="project_detail.php" class="w3-text-blue">View Details</a></td>
			</tr>
			</table>
		</div>
		<!-- categories -->
		<div id="cat" class="w3-container p-tab-content w3-padding-16"  style="display:none">
			<div class="w3-row-padding">
				<div class="w3-col l2 w3-blue w3-p">Bridges</div>
			</div>
		</div>
		

	</div>
	<?php
	$employee_id = $_SESSION['employee_id'];
	$f = new Functions;
	$get_employees = $f->query("SELECT * FROM employees where employee_id = '$employee_id'");
	$employee = $get_employees->fetch_assoc();
	?>

	<div class="w3-col l4 w3-container w3-padding w3-large w3-blue-gray" style="">
		<h3><b>Basic Info</b></h3>
		<ul class="w3-ul">
			<li>Fullname<span class="w3-right"><?php echo $_SESSION['fullname']; ?></span></li>
			<li>Date of Birth<span class="w3-right"><?php echo $employee['emp_birthdate']; ?></span></li>
			<li>Age<span class="w3-right"><?php echo $employee['emp_birthdate']; ?></span></li>
			<li>Sex<span class="w3-right"><?php echo $employee['emp_sex']; ?></span></li>
			<li>Position<span class="w3-right"><?php echo $employee['emp_position']; ?></span></li>
		</ul>
		<h3><b>Contact Details</b></h3>
		<ul class="w3-ul">
			<li>Mobile<span class="w3-right"><?php echo $employee['emp_mobile']; ?></span></li>
			<li>Email<span class="w3-right"><a base target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=<?php echo $employee['emp_email']; ?>&su=TSO_Notification&shva=1"><?php echo $employee['emp_email']; ?></a></span></li>
			<li>Home Address<span class="w3-right"><a base target="_blank" href="https://maps.google.com/?q=<?php echo $employee['emp_home_address']; ?>"><?php echo $employee['emp_home_address']; ?></a></span></li>
			<li>Current Address<span class="w3-right"><a base target="_blank" href="https://maps.google.com/?q=<?php echo $employee['emp_current_address']; ?>"><?php echo $employee['emp_current_address']; ?></a></span></li>
		</ul>
		
		<h4><b>About</b></h4>
			<p>An upright officer of COA Region Five</p>
	</div>
<div class="w3-container">

	
</div>
</div>
<?php include 'common/footer.php'?>