
<?php $pageTitle = "Ledger"; ?>
<?php include("../inc/head.php");?>
<?php include("../inc/doc.php") ?>
<div class="container">
	<div class="ledger">
		<ul id="left2">
			<li><span id="Narrr">Date: </span> <input class="vhnum form-control" type="text" name="vNum" id="textbox" id="insrt"></li>
			<li><span id="Narrr">Account Code: </span> <input class="vhnum form-control" type="text" name="vNum" id="textbox" id="insrt"></li>
			<li><button class="btn btn-success">Spool Account</button></li>
		</ul>
		<table class="table table-bordered" id="tble">
			<thead>
				<tr>
					<th>Voucher No</th>
					<th>Trans. Date</th>
					<th>Fin. Year</th>
					<th>Period</th>
					<th>Day</th>
					<th>Month</th>
					<th>Narration</th>
					<th>Amount</th>
					<th>Type</th>
					<th>Acct. Code</th>
					<th>Sign</th>
				</tr>
			</thead>
			<div class="x">
			<tbody id="tbodi">
						
						
						
			</tbody>
			</div>
		</table>
	</div>
</div>
	

<?php include("../inc/foot.php");?>