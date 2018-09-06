<?php 
$page = "workloads";
include 'common/sidebar.php'?>
<!-- navbar -->
<div id="pContent" class="w3-col l10 m12 s12 w3-right">
<div class="w3-container w3-bar w3-light-gray w3-text-gray w3-card w3-display-container">
	<a id="pCloseSidebar" onclick="p_close_big_sidebar()" class="w3-bar-item w3-button w3-hover-none w3-hover-text-blue" style="display:block;"><i class="material-icons w3-display-left">&nbsp;&nbsp;menu</i></a>
	<a id="pOpenSidebar" onclick="p_open_big_sidebar()" class="w3-bar-item w3-button w3-hover-none w3-hover-text-blue" style="display:none;"><i class="material-icons w3-display-left">&nbsp;&nbsp;close</i></a>
	<h2 class="w3-bar-item">Workloads</h2>
</div>
<!--div class="res-col-container w3-gray w3-padding w3-container w3-text-white" style="">
	<div class="res-col w3-container w3-col l4 m6 s6 w3-center w3-padding" style="">
		<h1 class="">This Month</h1>
		<div class="ct-chart ct-major-eleventh" id="chart"></div>
		<script>
		// Initialize a Line chart in the container with the ID chart1
		new Chartist.Line('#chart', {
			labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5'],
			series: [[100, 120, 180, 200, 300]],
			}
		);
		</script>
	</div>
</div>-->
<div class="w3-container w3-padding-32">
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
					<div class="w3-green w3-round-large" style="height:16px;  font-size:12px; width:50%; text-align: center">38</div>
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
					<div class="w3-red w3-round-large" style="height:16px;  font-size:12px; width:90%; text-align: center">48</div>
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
					<div class="w3-green w3-round-large" style="height:16px;  font-size:12px; width:75%; text-align: center">56</div>
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
					<div class="w3-red w3-round-large" style="height:16px;  font-size:12px; width:100%; text-align: center">83</div>
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
					<div class="w3-green w3-round-large" style="height:16px;  font-size:12px; width:60%; text-align: center">55</div>
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
					<div class="w3-green w3-round-large" style="height:16px;  font-size:12px; width:25%; text-align: center">14</div>
				</div>
			</div>			
		</div>			
	</div>
	<br>
	<div class="w3-container w3-panel w3-col l12 m12 s12 w3-responsive">
		<table class="dataTable w3-striped">
			<thead class="w3-light-gray">
				<th>Engineers Name</th>
				<th style="width:20%">Workload</th>
				<th>Pending Projects</th>
				<th>Previous Pending</th>
				<th>Total Pending</th>
			</thead>
			<tr>
				<td><img class="w3-image w3-circle w3-center" style="height:30px; margin-right:10px" src="src/img/ru/ruf3.jpg">Juan Dela Cruz</td>
				<td>
					<div class="w3-light-grey w3-round">
						<div class="w3-green w3-round" style="height:16px; font-size:12px; width:25%; text-align: center">16</div>
					</div>
				</td>
				<td>28</td>
				<td>56</td>
				<td>84</td>
			</tr>
			<tr>
				<td><img class="w3-image w3-circle w3-center" style="height:30px; margin-right:10px" src="src/img/ru/ruf4.jpg">Juan Dela Cruz</td>
				<td>
					<div class="w3-light-grey w3-round">
						<div class="w3-green w3-round" style="height:16px; font-size:12px; width:25%; text-align: center">16</div>
					</div>
				</td>
				<td>28</td>
				<td>56</td>
				<td>84</td>
			</tr>
			<tr>
				<td><img class="w3-image w3-circle w3-center" style="height:30px; margin-right:10px" src="src/img/ru/rum4.jpg">Juan Dela Cruz</td>
				<td>
					<div class="w3-light-grey w3-round">
						<div class="w3-green w3-round" style="height:16px; font-size:12px; width:25%; text-align: center">16</div>
					</div>
				</td>
				<td>28</td>
				<td>56</td>
				<td>84</td>
			</tr>
		</table>
	</div>
</div>

</div>
<?php include 'common/footer.php'?>