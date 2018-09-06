<?php 
$page = "employees";
include 'common/sidebar.php'?><!-- navbar -->
<div class="w3-col l10 m12 s12 w3-right">
<div class="w3-container w3-bar w3-light-gray w3-text-gray w3-card w3-display-container">
	<a class="w3-button w3-hover-none w3-hover-text-blue"><i class="material-icons w3-display-left">&nbsp;&nbsp;menu</i></a>
	<h2 class="w3-bar-item">&nbsp;&nbsp;Employees</h2>
</div>
<!-- main content -->
<div class="w3-container w3-padding-16">
	<div class="w3-bar w3-round-xxlarge w3-card">
		<a  href="employee_add.php" class="w3-bar-item w3-button w3-white w3-text-blue-gray"><i class="material-icons w3-large">person_add</i> Add Personnel</a>
		<a class="w3-bar-item w3-button w3-white w3-text-blue"><i class="material-icons w3-large">photo</i> Card View</a>
		<a class="w3-bar-item w3-button w3-white w3-text-blue-gray"><i class="material-icons w3-large">border_all</i> Table View</a>
		<a href="accounts.php" class="w3-bar-item w3-button w3-white w3-text-blue-gray"><i class="material-icons w3-large">list</i> View Accounts</a>
	</div>
<br>
<div class="w3-row-padding">
	<?php
	$f = new Functions;
	
	$get_employee = $f->query("SELECT CONCAT(emp_firstname, ' ', emp_middlename, ' ', emp_lastname) AS fullname, employee_id, emp_sex, emp_user_image FROM employees");
	
	while($employee = $get_employee->fetch_assoc()){		
	?>
	<div class="w3-col l2 s4" style="padding-bottom:16px">
		<?php if($employee['emp_sex'] == 'Female'){?>
		<div class="w3-display-container w3-round-large shroom-haze w3-hover-opacity">
			<img class="w3-image w3-round-large" style="" src="
			<?php 
			if($employee['emp_user_image'] != null){
				echo $employee['emp_user_image'];
			} 
			else{ 
				echo 'src/img/fu.png';
				} ?>">
		<?php } if($employee['emp_sex'] == 'Male'){?>
		<div class="w3-display-container w3-round-large pun-yeta w3-hover-opacity">
			<img class="w3-image w3-round-large" style="" src="
			<?php 
			if($employee['emp_user_image'] != null){
				echo $employee['emp_user_image'];
			} 
			else{ 
				echo 'src/img/mu.png';
				} ?>">
		 <?php } ?>
			<div class="w3-display-bottomleft w3-round-large w3-bar w3-padding-small w3-text-white" style="text-shadowr:1px 1px 5px #111111; background: rgba(0, 0, 0, 0.2)">
				<h5 style="margin:2px;"><?php echo $employee['fullname'];?></h5>
				<span><i class="material-icons w3-text-ble w3-medium">account_circle</i> TAS I</span>
			</div>
			<div class="w3-display-middle w3-display-hover">
				<form action="profile.php" method="post">
					<input type="text" name="employee_id" value="<?php echo $employee['employee_id'];?>" hidden>
					<button href="profile.php" type="submit" class="w3-white w3-round-xlarge w3-button w3-hover-blue">View</button>
				</form>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
</div>
</div>
<?php include 'common/footer.php'?>