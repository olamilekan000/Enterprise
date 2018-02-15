<?php 


$server = "localhost";
$user   = "root";
$pwd  	= "odukoya123";
$db 	= "soumya";

$conn  	= mysqli_connect($server, $user, $pwd, $db);


if ($conn) {
	# code...

	echo "connection successful";
}



		$vData = $_POST['vhnData2'];
		$vMnth = $_POST['mnth2'];
		$vFinYrData = $_POST['finYrData2'];
		$vPeriodData = $_POST['periodData2'];
		$vNarrData = $_POST['narrData2'];
		$vAmtData = $_POST['amtData2'];
		$vTypeData = $_POST['typeData2'];
		$vAcctCodeData = $_POST['acctCodeData2'];
		$vSignData = $_POST['signData2'];
		$vTransDateData = $_POST['transDateData2'];
		$vday = $_POST['daiy2'];

		$vcrtTxt = $_POST['crtTxt2'];
		$vcreatnarr = $_POST['creatnarr2'];
		$vcrtinsrt = $_POST['crtinsrt2'];



$sqlIn = "INSERT INTO journal_voucher(voucher_number, trans_date, narr, 
		Amt, cat_id, acct_code, sign, fin_yr, period, month, day) 

	VALUES('$vData', '$vTransDateData', '$vNarrData', '$vAmtData', '$vTypeData', '$vAcctCodeData', '$vSignData', '$vFinYrData', '$vPeriodData', '$vMnth', '$vday')";

$sqlIn = "INSERT INTO  accounts(acct_code, name, cat_id) 
		 VALUES('$vcrtTxt' ,'$vcreatnarr', '$vcrtinsrt')";
			$res = mysqli_query($conn, $sqlIn);

			// if ($res) {
				
			// 	echo "<script> alert('Insert true');</script>";
			// }else{
			// 	echo "<script> alert('Insert not true');</script>";
			// }

	
