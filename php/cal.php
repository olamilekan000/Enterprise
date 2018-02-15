<?php 
	
	if (isset($_POST['Dr'])) {
		
		$debit = $_POST['Dr'];
		$credit = $_POST['Cr'];
		$diffrnce = $_POST['subt'];

		$diffrnce = $debit - $credit;
	}


 ?>