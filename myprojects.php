<?php 
$page = "myprojects";
include 'common/sidebar.php'?>
<div class="w3-col l10 m12 s12 w3-right">
	<div class="w3-container w3-bar w3-light-gray w3-text-gray w3-card w3-display-container">
		<a class="w3-button w3-hover-none w3-hover-text-blue"><i class="material-icons w3-display-left">&nbsp;&nbsp;menu</i></a>
		<h2 class="w3-bar-item">&nbsp;&nbsp;My Projects</h2>
	</div>
	<br>
	<div class="w3-container">
		<div class="w3-bar w3-round-large w3-card w3-text-blue-gray">
			<a class="w3-bar-item w3-button w3-text-blue-gray w3-hover-blue-gray"><i class="material-icons w3-medium">keyboard_arrow_left</i>Previous</a>
			<a class="w3-bar-item w3-button w3-text-blue-gray w3-hover-blue-gray">Next<i class="material-icons w3-medium">keyboard_arrow_right</i></a>
			<a class="w3-bar-item w3-button w3-text-blue-gray w3-hover-blue-gray">All</a>
			<a class="w3-bar-item w3-button w3-text-blue-gray w3-hover-blue-gray">Today</a>
			<a class="w3-bar-item w3-button w3-text-blue-gray w3-hover-blue-gray">This Month</a>
			<a class="w3-bar-item w3-button w3-text-blue-gray w3-hover-blue-gray dropdown-trigger" data-target='by-date-drop'>By Date</a>
			<a class="w3-bar-item w3-button w3-text-blue-gray w3-hover-blue-gray">By Status</a>	
		</div><br>
		<div class="w3-container w3-panel w3-responsive">
			<table  id="table_idx" class="dataTable w3-striped">
				<thead class="w3-light-gray w3-text-black">
				  <th>Project ID</th>
				  <th>Reference No.</th>
				  <th>Description</th>
				  <th>Agency</th>
				  <th>Address</th>
				  <th>Cost</th>
				  <th>Contractor</th>
				  <th>Type</th>
				  <th>Action</th>
				</thead>
				<tr class="">
				  <td>PR-1234</td>
				  <td>RN-1234</td>
				  <td>Multi-purpose Building</td>
				  <td>DepEd</td>
				  <td><i class="material-icons">place</i> Rawis, Legazpi City </td>
				  <td>Php. 1, 700, 000.00</td>
				  <td>BU Builders</td>
				  <td>Infrastracture</td>
				  <td class="w3-center"><i class="material-icons">expand_more</i></td>
				</tr>				
				<?php $var ='
				<tr class="">
				  <td>PR-1234</td>
				  <td>RN-1234</td>
				  <td>Multi-purpose Building</td>
				  <td>DepEd</td>
				  <td><i class="material-icons">place</i> Rawis, Legazpi City </td>
				  <td>Php. 1, 700, 000.00</td>
				  <td>BU Builders</td>
				  <td>Infrastracture</td>
				  <td class="w3-center"><i class="material-icons">expand_more</i></td>
				</tr>';
				for($x= 0; $x<0; $x++){
					echo $var;
				}
				?>	
			</table>
		</div>
	</div>
</div>
<?php include 'common/footer.php'?>