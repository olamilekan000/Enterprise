<?php 

$date = null;
$month = null;
$finYr = null;
$Period = null;
$amount = null;
$sign = null;
$vouhNum = null;
$type = null;
$acctCode = null;
$narr = null;
	
	if (isset($_POST['vNum'])) {

		$date = $_POST['date'];
		$month = $_POST['Mnth'];
		$finYr = $_POST['finYr'];
		$Period = $_POST['Period'];
		$amount = $_POST['Amt'];
		$sign = $_POST['sign'];
		$vouhNum = $_POST['vNum'];
		$type = $_POST['type'];
		$acctCode = $_POST['acctCode'];
		$narr = $_POST['narr'];


	}


 ?>