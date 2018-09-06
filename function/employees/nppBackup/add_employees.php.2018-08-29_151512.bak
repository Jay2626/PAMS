<?php
include('../config.php');
	$f = new Functions;
	
	//generating id
	$y = date("Y");
	$m = date("m");
	$d = date("d");
	$r = rand(100,999);
	$project_id = "PRO-".$y.''.$m.''.$d.''.$r;
	
	$reference_no = $_POST['reference_no'];
	$name = $_POST['name'];
	$location = $_POST['location'];
	$contractor = $_POST['contractor'];
	$cost = $_POST['cost'];
	$requesting_agency = $_POST['requesting_agency'];
	$agency_address = $_POST['agency_address'];
	$type = "1";
	$p_status = "1";
	$p_creation_date = "";
	
	echo "$reference_no";
	
	$validate_reference_no = $f->query("SELECT count(reference_no) FROM special_assignment_orders WHERE reference_no = '$reference_no'");
	$valid_reference_no = $validate_reference_no->fetch_assoc();
	
	if($valid_reference_no["count(reference_no)"] == 1){
		//insert into projects
		$add_projects = $f->query("INSERT INTO projects(project_id, reference_no, p_cost) 
		VALUES('$assignment_id', '$reference_no','190')");
	}
	else{
		//generating assignment_id
		$assignment_id = "SAO-".$y.''.$m.''.$d.''.$r;
		//insert into sao
		$add_sao_rn = $f->query("INSERT INTO special_assignment_orders(assignemt_id, reference_no) 
		VALUES('$project_id', '$reference_no','')");
		//insert into projects
		$add_projects = $f->query("INSERT INTO projects(project_id, reference_no, p_cost) 
		VALUES('$project_id', '$reference_no','190')");
	}
	
	
	
	
	
	if($add_projects){
	header('Location:../../projects.php');
	}
	else{
	die(mysql_error());}
	
/*
if($add_projects){
	header('Location:../../case.php?yes=1');
	//log
	$today = date("Y-m-d");
	$myfile = fopen("../../log/log".$today.".txt", "a+") or die("Unable to open file!");
	$timestamp = date("h:i:sa ");
		fwrite($myfile, $timestamp);
	$date = date("d-m-Y "); 
		fwrite($myfile, $date);
	$txt1 = "[Case]"; 
		fwrite($myfile, $txt1);
	$txt2 = " Case(".$case_id.") was added by user ".$account_id."\n";
		fwrite($myfile, $txt2);
	fclose($myfile);
}
else{
die(mysql_error());}*/
?>