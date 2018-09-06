<?php include 'common/sidebar.php'?>
<!-- navbar -->
<div id="pContent" class="w3-col l10 m12 s12 w3-right">
<div class="w3-container w3-bar w3-light-gray w3-text-gray w3-card w3-display-container">
	<a id="pCloseSidebar" onclick="p_close_big_sidebar()" class="w3-bar-item w3-button w3-hover-none w3-hover-text-blue" style="display:block;"><i class="material-icons w3-display-left">&nbsp;&nbsp;menu</i></a>
	<a id="pOpenSidebar" onclick="p_open_big_sidebar()" class="w3-bar-item w3-button w3-hover-none w3-hover-text-blue" style="display:none;"><i class="material-icons w3-display-left">&nbsp;&nbsp;close</i></a>
	<h2 class="w3-bar-item">Add Employee</h2>
</div>
		<?php if (isset($_GET['error']) && $_GET['error'] == '0') { ?>
		<div id="xrd" class="w3-padding-24 w3-container w3-green w3-display-container" role="alert">
			<span onclick="this.parentElement.style.display='none'" class="w3-button w3-circle w3-hover-none w3-display-right"><i class="material-icons">close</i></span>
			<h5>Successful! <a href="employees.php" class="w3-bottombar">View</a></h5>
		</div> 
		<?php } ?>
<div class="w3-container w3-padding-16">
	<div class="w3-container w3-round-large w3-padding">
		<form action="function/employees/add_employees.php" method="post">
			<h3 class="">Personal Details</h3>
			
			<div class="w3-col l6">
				<div class="row">
					<div class="input-field col l4">
						<input name="fn" id="f" type="text" class="validate" required/>
						<label for="f">Firstname</label>
					</div>
					<div class="input-field col l4">
						<input name="mn" id="m" type="text" class="validate" required/>
						<label for="m">Middlename</label>
					</div>
					<div class="input-field col l4">
						<input name="ln" id="l" type="text" class="validate" required/>
						<label for="l">Lastname</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col l4">
						<select name="sex" class="icons" class="validate" required>
							<option value="" disable selected>Select Sex</option>
							<option value="Male" data-icon="src/img/sex/male.png">Male</option>
							<option value="Female" data-icon="src/img/sex/female.png">Female</option>
						<select>
					<label>Choose Sex</label>
					</div>
					<div class="input-field col l4">
						<input name="bd" id="d" type="text" class="datepicker"/>
						<label for="d">Date of Birth</label>
					</div>
					<div class="input-field col l4">
						<select name="ms" class="icons">
							<option value="0" disabled>Select Status</option>
							<option value="Single" data-icon="src/img/civil_status/single.png">Single</option>
							<option value="Married" data-icon="src/img/civil_status/married.png">Married</option>
							<option value="Separated" data-icon="src/img/civil_status/separated.png">Separated</option>
							<option value="Widowed" data-icon="src/img/civil_status/widowed.png">Widowed</option>
						</select>
					</div>
				</div>
				<h3 class="">Contact Details</h3>
				<div class="row">
					<div class="input-field col l6">
						<input name="home"  id="ha" type="text"/>
						<label for="ha">Home Address</label>
					</div>
					<div class="input-field col l6">
						<input  name="current" id="ca" type="text"/>
						<label for="ca">Current Address</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col l6">
						<input name="mobile"  id="mo" type="text"/>
						<label for="mo">Mobile Number<label>
					</div>
					<div class="input-field col l6">
						<input  name="email" id="ma" type="email"/>
						<label for="mail">Email Address</label>
					</div>
				</div>
				<h3 class="">Position Details</h3>
				<div class="row">
					<div class="input-field col l6">
						<select  name="pos1" class="icons" multiple>
							<option value="0" disabled>Choose</option>
							<option value="1" data-icon="src/img/crown.png">TAS</option>
							<option value="2" data-icon="src/img/crown.png">SA</option>
							<option value="2" data-icon="src/img/crown.png">STAS</option>
							
						</select>
						<label>Choose Position 1</label>
					</div>
					<div class="input-field col l6">
						<select name="pos2" class="icons" multiple>
							
						</select>
						<label>Choose Position 2</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col l12">
						<button type="submit" class="w3-green w3-btn">Submit</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
<body>
</html>
<?php include 'common/footer.php'?>