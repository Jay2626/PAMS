<?php 
$page = 'dts';
include 'common/sidebar.php'?>
<!-- navbar -->
<div id="pContent" class="w3-col l10 m12 s12 w3-right">
<div class="w3-container w3-bar w3-light-gray w3-text-gray w3-card w3-display-container">
	<a id="pCloseSidebar" onclick="p_close_big_sidebar()" class="w3-bar-item w3-button w3-hover-none w3-hover-text-blue" style="display:block;"><i class="material-icons w3-display-left">&nbsp;&nbsp;menu</i></a>
	<a id="pOpenSidebar" onclick="p_open_big_sidebar()" class="w3-bar-item w3-button w3-hover-none w3-hover-text-blue" style="display:none;"><i class="material-icons w3-display-left">&nbsp;&nbsp;close</i></a>
	<h2 class="w3-bar-item">Document Tracking System</h2>
</div>
	<div class="w3-blue w3-container" style="padding:0px">
		<div class="w3-col l3 w3-container">
			<h2>Incoming Documents</h2>
			<h2 class="w3-jumbo">15</h2>
			<a class="w3-green w3-round w3-button w3-small">Recieve</a>
		</div>
		<div class="w3-col l9" style="position: relative;  height: 200px; overflow: hidden;">
			<img class="" src="src/img/m2.jpg" style="position: absolute; max-width: 100%;width: 100%; height: auto;top: 80%; left: 50%;transform: translate( -50%, -50%);">
		</div>
	</div>
	<div class="w3-container">
	<br>
		
		<div class="w3-bar w3-round-large w3-card">
			<a class="w3-bar-item w3-button w3-text-blue-gray"><i class="material-icons w3-medium">folder</i> File</a>
			<a class="w3-bar-item w3-button w3-text-blue-gray"><i class="material-icons w3-medium">folder</i> Documents to be Recieved</a>
			<a class="w3-bar-item w3-button w3-text-blue-gray"><i class="material-icons w3-medium">folder</i> Pending Documents</a>
		</div>
		<div class="w3-container w3-panel w3-responsive">
			<table  id="table_idx" class="dataTable w3-striped">
				<tr class="">
					<th class="">
						<label>
							<input id="select_all" type="checkbox" />
							<span></span>
						</label>
					</th>
					<th>Reference No.</th>
					<th>Document Type</th>
					<th>Date Created</th>
					<th>Orignating Officer</th>
					<th>Subject</th>
					<th>Action</th>
				</tr>
				<tr class="">
					<td>
						<label>
							<input class="checkbox" type="checkbox"/>
							<span></span>
						</label>
					</td>
					<td>RCV-2018</td>
					<td>Indorsement</td>
					<td>Aug 27, 2018 - 3:48 PM</td>
					<td>NGS-Cluster 2/ RSA Dela Cruz</td>
					<td>Reconstruction of Rawis Road</td>
					<td><a class="w3-green w3-round w3-button waves-effect"><i class="material-icons w3-medium">assignment_returned</i> Recieve</a></td>
				</tr>
				<?php $var ='
				';
				for($x= 0; $x<0; $x++){
					echo $var;
				}
				?>	
			</table>
		</div>
	</div>
</div>
<?php include 'common/footer.php'?>
