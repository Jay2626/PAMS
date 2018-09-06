<?php 
$page = "assignments";
include 'common/sidebar.php'?>
<!-- navbar -->
<div id="pContent" class="w3-col l10 m12 s12 w3-right">
<div class="w3-container w3-bar w3-light-gray w3-text-gray w3-card w3-display-container">
	<a id="pCloseSidebar" onclick="p_close_big_sidebar()" class="w3-bar-item w3-button w3-hover-none w3-hover-text-blue" style="display:block;"><i class="material-icons w3-display-left">&nbsp;&nbsp;menu</i></a>
	<a id="pOpenSidebar" onclick="p_open_big_sidebar()" class="w3-bar-item w3-button w3-hover-none w3-hover-text-blue" style="display:none;"><i class="material-icons w3-display-left">&nbsp;&nbsp;close</i></a>
	<h2 class="w3-bar-item">Assignment</h2>
</div>
<div class="w3-container w3-padding-32">
	<div class="w3-row-padding">
		<div class="w3-col l2 s4">
			<div class="w3-blue-gray w3-padding w3-center w3-round-large">
				<h4>Projects with assignment: 85</h4>
			</div>
		</div>
		<div class="w3-col l2 s4">
			<div class="w3-red w3-padding w3-center w3-round-large">
				<h4>Projects without assignment: 13</h4>
			</div>
		</div>	
	</div>
	<br>
	<table  id="table_idx" class="dataTable w3-table w3-striped w3-responsive">
			<thead class="w3-light-gray w3-text-black">
				<th>SAO ID</th>
				<th>Reference No</th>
				<th>Recieved Date</th>
				<th>Entry Date</th>
				<th style="width:30%">Projects</th>	
			</thead>		
			<tr class="w3-hover-light-gray">
				<td>SAO-1234</td>
				<td>RN-1234</td>
				<td>10/10/2017</td>
				<td>10/20/2017</td>
				<td>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu maximus augue. Quisque vel lacus eu metus pretium cursus sit amet in diam.
				<span class="w3-text-blue w3-hover-text-red">&emsp;More <i class="material-icons w3-small">keyboard_arrow_down</i></span>
				</td>
				<td>
			</tr>
	</table>
	<br>
	<h2 class="w3-text-gray">Engineers' Workload</h2><br>
	<div class="w3-row-padding">
		<div class="w3-col l2 m3 s4" style="margin-bottom:10">
			<div class="w3-card w3-round-large w3-padding">
				<div class="w3-center w3-padding-16">
					<img class="w3-image w3-circle w3-center" style="height:80px" src="src/img/ru/ruf1.jpg">
				</div>
				<div class="w3-center" style="line-height: 0.5;">
					<p>Engr. Cruz</p>
				</div>
				<div class="w3-light-grey w3-round-large">
					<div class="w3-green w3-round-large" style="height:20px;width:50%; text-align: center">50%</div>
				</div>
			</div>
		</div>
		<div class="w3-col l2 m3 s4">
			<div class="w3-card w3-round-large w3-padding">
				<div class="w3-center w3-padding-16">
					<img class="w3-image w3-circle w3-center" style="height:80px;" src="src/img/ru/rum1.jpg">
				</div>
				<div class="w3-center" style="line-height: 0.5;">
					<p>Engr. Cruz</p>
				</div>
				<div class="w3-light-grey w3-round-large">
					<div class="w3-red w3-round-large" style="height:20px;width:90%; text-align: center">90%</div>
				</div>
			</div>			
		</div>
		<div class="w3-col l2 m3 s4">
			<div class="w3-card w3-round-large w3-padding">
				<div class="w3-center w3-padding-16">
					<img class="w3-image w3-circle w3-center" style="height:80px;" src="src/img/ru/rum2.jpg">
				</div>
				<div class="w3-center" style="line-height: 0.5;">
					<p>Engr. Cruz</p>
				</div>
				<div class="w3-light-grey w3-round-large">
					<div class="w3-green w3-round-large" style="height:20px;width:75%; text-align: center">75%</div>
				</div>
			</div>			
		</div>	
		<div class="w3-col l2 m3 s4">
			<div class="w3-card w3-round-large w3-padding">
				<div class="w3-center w3-padding-16">
					<img class="w3-image w3-circle w3-center" style="height:80px;" src="src/img/ru/ruf2.jpg">
				</div>
				<div class="w3-center" style="line-height: 0.5;">
					<p>Engr. Cruz</p>
				</div>
				<div class="w3-light-grey w3-round-large">
					<div class="w3-red w3-round-large" style="height:20px;width:100%; text-align: center">100%</div>
				</div>
			</div>			
		</div>	
		<div class="w3-col l2 m3 s4">
			<div class="w3-card w3-round-large w3-padding">
				<div class="w3-center w3-padding-16">
					<img class="w3-image w3-circle w3-center" style="height:80px;" src="src/img/ru/rum3.jpg">
				</div>
				<div class="w3-center" style="line-height: 0.5;">
					<p>Engr. Cruz</p>
				</div>
				<div class="w3-light-grey w3-round-large">
					<div class="w3-green w3-round-large" style="height:20px;width:60%; text-align: center">60%</div>
				</div>
			</div>			
		</div>	
		<div class="w3-col l2 m3 s4">
			<div class="w3-card w3-round-large w3-padding">
				<div class="w3-center w3-padding-16">
					<img class="w3-image w3-circle w3-center" style="height:80px;" src="src/img/ru/ruf3.jpg">
				</div>
				<div class="w3-center" style="line-height: 0.5;">
					<p>Engr. Cruz</p>
				</div>
				<div class="w3-light-grey w3-round-large">
					<div class="w3-green w3-round-large" style="height:20px;width:25%; text-align: center">25%</div>
				</div>
			</div>			
		</div>			
	</div>
	
</div>
</div>
<?php include 'common/footer.php'?>