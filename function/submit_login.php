<?php
//start session
session_start();
//connect to the database
include('config.php');
//funtion to connect to db
$f = new Functions;
//values from the login form
$username = $_POST['username'];
$password = $_POST['password'];
//validates the account
$search = $f->query("SELECT * FROM accounts WHERE ac_username = '$username' AND ac_password = '$password'");
$result = $search->fetch_assoc();
//validation condition
if($result['ac_username'] != ""){
	//employee id of the user
	$employee_id = $result['employee_id'];
	//get employee details
	$get_employees = $f->query("SELECT CONCAT(emp_firstname, ' ', emp_middlename, ' ', emp_lastname) AS fullname, emp_user_image FROM employees where employee_id = '$employee_id'");
	$employee = $get_employees->fetch_assoc();
	//session variables
	$_SESSION['employee_id'] = $result['employee_id']; 
	$_SESSION['user_image'] = $employee['emp_user_image'];
	$_SESSION['fullname'] = $employee['fullname'];
	$_SESSION['username'] = $result['ac_username'];
	$_SESSION['type'] = $result['ac_type'];
	header('Location:..\index.php');
} 
else{
	//if incorect values redirect to login.php
	header('Location:../login.php?error=1');
	
	
}

?>