<?php
//this connects all modular files to the database 
//using the cofiguration file located at the fuction folder.
include('fuction/config.php');
	
	$f = new Functions;
	//view data
	$get_data = $f->query("SELECT * FROM projects");
	$fetched_rows = $get_data->fetch_assoc();
	//insert data
	$insert_data = $f->query("INSERT INTO projects(project_id, data)
	VALUES('1', 'sample')");
	//update data
	$insert_data = $f->query("INSERT INTO projects(project_id, data)
	VALUES('1', 'sample')");
	//delete data
	$delete_data = $f->query("DELETE * FROM projects WHERE project_id == '1'");
	
?>