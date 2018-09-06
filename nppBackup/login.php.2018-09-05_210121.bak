<!DOCTYPE html>
<head>
<title>PAMS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="src/css/w3.css">
	<link rel="stylesheet" href="src/css/pams.css">
	<!-- jQuery -->
	<script src="src/js/jquery-3.3.1.min.js"></script>
	<!-- Materialize-->
	<link rel="stylesheet" href="src/css/materialize.css">
	<script src="src/js/materialize.js"></script>
	<script src="src/js/init.js"></script>
	<!-- icons -->
	<link rel="stylesheet" href="src/icons/material-icons/material-icons.css">	
</head>
<body
style="background: #aa4b6b;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3b8d99, #6b6b83, #aa4b6b);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3b8d99, #6b6b83, #aa4b6b); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
<!--
background-image: url('src/img/coa_bg30.png');
background-attachment: fixed;
background-position: center;
background-size: cover;
background-repeat: no-repeat;-->
">
	<!-- login -->
	<div class="w3-display-middle w3-col l3 m6 s12 w3-card-4 w3-round-large w3-white w3-container w3-padding-32" style="opacity:1;">
		<!-- middle -->
		<div class="w3-container w3-padding w3-text-dark-gray">
			<img class="w3-col l12 m12 s12" src="src/img/logo.png" alt="logo" style="height:75px;width:75px;margin-right:16px">
			<p style="padding-left:16px">
				<span class="w3-text-blue-gray">Project</span>
				<span class="w3-text-blue">Assignment</span>
				<br>
				<span class="w3-text-red">Management</span>
				<span class="w3-text-gray">System</span>
			</p>
		</div>
		<div class="w3-container w3-padding w3-text-dark-gray">
			<h5>Sign in</h5>
			<p>with your account</p>
		</div>
		<!-- Error Notification -->
		<?php if (isset($_GET['error']) && $_GET['error'] == '1') { ?>
		<div class="w3-margin w3-panel w3-red w3-display-container w3-round-large w3-small	" role="alert">
			<span onclick="this.parentElement.style.display='none'" class="w3-button w3-circle w3-hover-none w3-display-right"><i class="material-icons">close</i></span>
			<p>Error! Incorrect <b>username</b> or <b>password</b></p>
		</div> 
		<?php } ?>
		<?php if (isset($_GET['error']) && $_GET['error'] == '2') { ?>
		<div class="w3-margin w3-panel w3-green w3-display-container w3-round-large w3-small	" role="alert">
			<span onclick="this.parentElement.style.display='none'" class="w3-button w3-circle w3-hover-none w3-display-right"><i class="material-icons">close</i></span>
			<p>You have to <b>login</b> first!</p>
		</div> 
		<?php } ?>
		<form id="" method="post" action="function/submit_login.php" class="w3-container ">
			<div class="input-field">
				<input id="u" name="username" type="text" class="validate" autofocus required>
				<label for="u">Username</label>
			</div>
			<div class="input-field">
				<input id="p" name="password" type="password" class="validate" required>
				<label for="p">Password</label>
			</div>
			<br>
			<div class="w3-bar">
			<a class="w3-text-gray w3-small w3-button">Forgot password?</a>
			<button type="submit" class="waves-effect w3-button w3-hover-red w3-round w3-right w3-card w3-blue">LOGIN</button>
			</div>
		</form>
	</div>
	<a class="w3-display-bottomleft w3-text-white w3-padding">&copy; COA - Technical Service Office</a>
	<a class="w3-display-bottomright w3-text-white w3-padding" href="developers.php">Contact Developer</a>
</body>

</html>