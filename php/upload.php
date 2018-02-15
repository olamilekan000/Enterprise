
<?php $pageTitle = "Ledger"; ?>
<?php include("../inc/head.php");?>
<?php include("../inc/doc.php") ?>
<div class="container">
	<div class="ledger">
		<ul id="left2">
			<li><span id="Narrr">Date: </span> <input class="vhnum form-control" type="text" name="vNum" id="textbox" id="insrt"></li>
			<li><span id="Narrr">Account Code: </span> <input class="vhnum form-control" type="text" name="vNum" id="textbox" id="insrt"></li>
			<li><div style="position:relative;">
        	<a class='btn btn-primary' href='javascript:;'>
            	Choose File...
            	<input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
        	</a>
        	&nbsp;
        	<span class='label label-info' id="upload-file-info"></span>
			</div></li>
			<li><button0 class="btn btn-success">Import File...</button></li>
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