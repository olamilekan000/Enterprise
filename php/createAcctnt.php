<?php  include "connect.php";  ?>
<?php $pageTitle = "Ledger"; ?>
<?php include("../inc/head.php");?>
<?php include("../inc/doc.php") ?>
<div class="container">
	<div class="ledger">
		<ul id="left2">
			<li><span id="Narrr">Account type: </span>
					<select class='typeData form-control form-control-sm' name="type" id="insrt">
						<?php 
							while ($row = mysqli_fetch_array($res)) {
								echo "<option value='".$row['cat_id']."' id='listbox'>".$row['cat_id']."</option>";
							}
						 ?>
					</select>
			</li>
			<li><span id="Narrr">Account Code: </span> <input class="vhnum form-control" type="text" id="textbox" ></li>
			<li><span id="Narrr">Account Name: </span> <br><textarea class="form-control" type="text" id="crtnarr"></textarea></li>
			<li><button class ="btn btn-success" onclick="create()">Create Account</button></li>
		</ul>
	</div>
</div>
	

<?php include("../inc/foot.php");?>