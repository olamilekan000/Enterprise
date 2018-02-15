<?php 

	$server = "localhost";
	$user   = "root";
	$pwd  	= "odukoya123";
	$db 	= "soumya";

	$conn  	= mysqli_connect($server, $user, $pwd, $db);

	
	// Select statements

	$sql = "SELECT Acct_Code FROM accounts";
	$sql2 = "SELECT cat_id FROM account_type";
	$SQL3 = "SELECT cat_id FROM general_ledger";

	$result = mysqli_query($conn,$sql);
	$res 	= mysqli_query($conn,$sql2);
	$res3 = mysqli_query($conn,$SQL3);

	


