<?php 
$page = "accounts";
include 'common/sidebar.php'?>
<!-- navbar -->
<div class="w3-col l10 m12 s12 w3-right">
<div class="w3-container w3-bar w3-light-gray w3-text-gray w3-card w3-display-container">
	<a class="w3-button w3-hover-none w3-hover-text-blue"><i class="material-icons w3-display-left">&nbsp;&nbsp;menu</i></a>
	<h2 class="w3-bar-item">&nbsp;&nbsp;Accounts</h2>
</div>
<!-- main content -->
<div class="w3-container w3-padding-16">
	<div class="w3-bar w3-round-xxlarge w3-card">
	<a onclick="p_modal('add_account')" class="w3-bar-item w3-button w3-white w3-text-blue-gray"><i class="material-icons w3-large">person_add</i> Add</a>
	<a class="w3-bar-item w3-button w3-white w3-text-blue-gray"><i class="material-icons w3-large">group_add</i> Add Multiple</a>
	<a class="w3-bar-item w3-button w3-white w3-text-blue-gray"><i class="material-icons w3-large">edit</i> Edit</a>
	<a class="w3-bar-item w3-button w3-white w3-text-blue-gray"><i class="material-icons w3-large">lock</i> Deactivate</a>
	<a class="w3-bar-item w3-button w3-white w3-text-blue-gray"><i class="material-icons w3-large">cached</i> Reset Password</a>
	<a href="profiles.php" class="w3-bar-item w3-button w3-white w3-text-blue-gray"><i class="material-icons w3-large">account_box</i> View Profiles</a>
	</div>
<br>
<!-- table -->
<table  id="table_idx" class="dataTable w3-table w3-striped w3-responsive">
	<thead class="w3-light-gray w3-text-black">
		<th style="width:1%;">
			<label>
				<input id="select_all"type="checkbox" />
				<span></span>
			</label>
		</th>
		<th class="w3-hide-small">Employee Id</th>
		<th>Fullname</th>
		<th>Account Type</th>
		<th>Username</th>
		<th>Status</th>
		<th>Action</th>
	</thead>
	<?php
	$f = new Functions;
	$get_account = $f->query("SELECT * FROM accounts");
	while($account = $get_account->fetch_assoc()){		
	?>	
	<tr class="w3-hover-light-gray">
		<td>
			<label>
				<input class="checkbox" type="checkbox"/>
				<span></span>
			</label>
		</td>
		<td class="w3-hide-small"><?php echo $account['account_id'];?></td>
		<td>None</td>
		<td><?php echo $account['ac_type'];?></td>
		<td><?php echo $account['ac_username'];?></td>
		<td><span class="w3-tag w3-green w3-round-xlarge">Online</span></td>
		<td>
		<div class="w3-dropdown-click">
			<button onclick="dropdown(1)" class="waves-effect w3-button w3-round w3-small w3-border"><i class="material-icons w3-small">settings</i> Options</button>
				<div id="1" class="w3-dropdown-content w3-bar-block w3-border" style="position:fixed;">
				<a href="#" class="w3-bar-item w3-button"><i class="material-icons w3-large">visibility</i> View</a>
				<a href="#" class="w3-bar-item w3-button"><i class="material-icons w3-large">edit</i> Edit</a>
				<a href="#" class="w3-bar-item w3-button"><i class="material-icons w3-large">lock</i> Deactivate</a>
				<a href="#" class="w3-bar-item w3-button"><i class="material-icons w3-large">cached</i> Reset password</a>
				</div>
		</div>
		</td>
	</tr>
	<?php } ?>
</table>


</div>
</div>
<?php include 'modal/account_add_modal.php'?>
<?php include 'common/footer.php'?>