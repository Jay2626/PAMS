<?php
include('../config.php');
	$f = new Functions;
	
	//generating id
	$y = date("Y");
	$m = date("m");
	$d = date("d");
	$r = rand(1000,9999);
	$employee_id = "EMP-".$y.''.$m.''.$d.''.$r;
	
	$fn = $_POST['fn'];
	$mn = $_POST['mn'];
	$ln = $_POST['ln'];
	$sex = $_POST['sex'];
	$bd = $_POST['bd'];
	$homr = $_POST['home'];
	$current = $_POST['current'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$pos1 = $_POST['pos1'];
	$pos2 = $_POST['pos2'];
	
	//insert employee
	$add_employee = $f->query("INSERT INTO employees(employee_id, emp_firstname, emp_middlename, emp_lastname, emp_sex, emp_birthdate) 
	VALUES('$employee_id', '$fn ', '$mn','$ln', '$sex', '$bd')");

	if($f){
	header('Location:../../employee_add.php?error=0');
	}
	else{
	header('Location:../../employee_add.php?error=1');	
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