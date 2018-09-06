<?php
include('../config.php');
	$f = new Functions;

	//get the latest ID from the tables
	$case_query = $f->query("SELECT * FROM lfs_cases ORDER BY case_id DESC LIMIT 1");
		$case_rows = $case_query->fetch_assoc();
		
	$officer_query = $f->query("SELECT * FROM lfs_ac_officer ORDER BY ao_id DESC LIMIT 1");
		$officer_rows = $officer_query->fetch_assoc();
		
	$noc_query = $f->query("SELECT * FROM lfs_nature_of_case ORDER BY noc_id DESC LIMIT 1");
		$noc_rows = $noc_query->fetch_assoc();

	$cn_query = $f->query("SELECT * FROM lfs_case_number ORDER BY cn_id DESC LIMIT 1");
		$cn_rows = $cn_query->fetch_assoc();
	
	$cns_query = $f->query("SELECT * FROM lfs_cn_status ORDER BY cns_id DESC LIMIT 1");
		$cns_rows = $cns_query->fetch_assoc();

	//get the array
	if(isset($_POST)==true && empty($_POST)==false){ 
	$name = $_POST['ao_name'];   // array
	$position = $_POST['ao_position']; // array
	$agency = $_POST['ao_agency']; //array
	}
	
	//adds one from the latest ID 
	$case_id = $case_rows['case_id'] +1;
	$ao_id = $officer_rows['ao_id'] +1;
	$noc_id = $noc_rows['noc_id'] +1;
	$cn_id = $cn_rows['cn_id'] +1;
	$cns_id = $cns_rows['cns_id'] +1;

	//saves the input data into variables
	$ao_name = $_POST['ao_name'];
	$ao_position = $_POST['ao_position'];
	$ao_agency = $_POST['ao_agency'];
	$c_date_discovered = $_POST['c_date_discovered'];
	$c_date_filled = $_POST['c_date_filled'];
	$case_status = 'Pending';//$_POST['case_status'];
	$account_id = $_SESSION['account_id'];

	$c_amount_involved = $_POST['c_amount_involved'];
	$noc_data = $_POST['noc_data'];
	
	//generated casedata
	$cn_data = $_POST['cn_data'];
	$a = date("Y");
	$b = date("m");
	$c = rand(100,999);
	$d = date("d");
	$cn_data = "CN-".$a.''.$b.''.$c;
	
	$cns_data = "No status yet";

	
	//$cns_cn = $_POST['cns_cn'];
	$cns_cn = $a."-".$b."-".$d."-".$c;

	//insert into database
	$add_case = $f->query("INSERT INTO lfs_cases(case_id, c_amount_involved, c_date_discovered, c_date_filled, case_status, account_id ) 
	VALUES('$case_id', '$c_amount_involved', '$c_date_discovered', '$c_date_filled', '$case_status', '$account_id')");
	
	
	//insert multiple officer, their position and agency
	foreach ( $name as $name2 => $name3){
	}
	foreach ($position as $pos => $pos2){
	}
	foreach ($agency as $agency1 => $agency2){
	}
	$num = count($name) - 1;
	$num2 = count($name);
	
	for($x= $num; $x >= 0; $x--){
		
		$namee = $name[$x];
		
		$add_officer = $f->query("INSERT INTO lfs_ac_officer(ao_name, case_id) 
		VALUES('$namee', '$case_id')");
	
	$selectrow_query = $f->query("SELECT * FROM lfs_ac_officer ORDER BY ao_id DESC LIMIT 1");
		while($selectrow_result = $selectrow_query->fetch_assoc()){
		$newrow = $selectrow_result["ao_id"];
		$update_position = $f->query("UPDATE lfs_ac_officer SET ao_position='$position[$x]', agency_id='$agency[$x]' WHERE ao_id = '$newrow'");
		
		}
	}
	
	$add_noc = $f->query("INSERT INTO lfs_nature_of_case(noc_id, nature_of_case_id, case_id) 
	VALUES('$noc_id', '$noc_data', '$case_id')");
	
	$add_cn = $f->query("INSERT INTO lfs_case_number(cn_id, cn_data, noc_id) 
	VALUES('$cn_id', '$cn_data', '$noc_id')");
	
	$add_cns = $f->query("INSERT INTO lfs_cn_status(cns_id, cns_data, cns_cn, cn_id) 
	VALUES('$cns_id', '$cns_data', '$cns_cn', '$cn_id')");

	/*test !this code is used for testing
	echo "1 case_id = $case_id<br>
	2 ammout_involved = $c_amount_involved<br> 
	3 date_dis = $c_date_discovered<br> 
	4 date_filled = $c_date_filled<br>
	5 case_status = $case_status<br>
	6 acoount_id = $account_id<br>";
	echo "7 ao_id = $ao_id<br> 
	8 ao_name = $ao_name<br>
	9 ao_position = $ao_position<br> 
	10 ao_agency = $ao_agency<br>
	11 ao_agen_addrs = $ao_agency_address<br> 
	12 case_id = $case_id<br>";
	echo "13 noc_id = $noc_id<br> 
	14 noc_data = $noc_data<br>
	15 case_id = $case_id<br>";
	echo "16 cn_id = $cn_id<br> 
	17 cn_data = $cn_data<br>
	18 noc_id = $noc_id<br>";
	echo "19 cns_id = '$cns_id'<br>
	20 cns_data = '$cns_data'<br>
	21 cns_cn = '$cns_cn'<br>
	22 cn_id = '$cn_id'<br>
	";*/


if($add_case && add_officer && add_noc){
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
die(mysql_error());}
?>
?>