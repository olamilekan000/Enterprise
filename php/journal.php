<?php  include "connect.php";  ?>
<?php $pageTitle = "Journal Entry"; ?>
<?php include("../inc/head.php");?>
<?php include("../inc/doc.php") ?>
				<ul id="part">
					<li><span id="Narrr">Day: </span><input class="Day form-control" id="dait" id="insrt" type="text" name="day" id="textbox" value= 0.00/></li>
					<li><span id="Narrr">Month: </span><input class="month form-control" id="dait" id="insrt" type="Text" name="Mnth" id="textbox" value= 0.00/></li>
					<li><span id="Narrr">Financial Year:</span> <input class="finYrData form-control" id="dait" id="insrt" type="Text" name="finYr" id="textbox"  value= 0.00/></li>
					<li><span id="Narrr">Date: </span><input class="dateData form-control" type="text" name="transdateData" id="textboxAmt" id="insrt"></li>
					<li><span id="Narrr">Period: </span><input class="periodData form-control" id="dait" type="Text" name="Period" id="textbox" id="insrt" value= 0.00/></li>
				</ul>
			 

			<br><br><br>
 
			<div class="rightSection">
				<ul id="sign">
					<li><span id="Narrr">Dr: </span><input class="num1 form-control" type="text" name="Dr" value = 0.00 id="textbox" id="Dr" id="insrt"/></li>
					<li><span id="Narrr">Cr: </span><input class="num2 form-control"  type="text" name="Cr" value = 0.00 id="textbox" id="Cr" id="insrt"/></li>
					<li><span id="Narrr">Difference: </span><input class="subt form-control" type="text" value = 0.00 name="subt" id="textbox"/></li>
					<li><span id="Narrr">Balance: </span><input value = 0.00 class="form-control" type="number" name="bals" id="textbox" id="bal"></li>
				</ul>

				<ul id="Amt">
					<li><span id="Narrr">Amount: </span><input class="amtData form-control" value= 0.00 type="text" name="Amt" id="textboxAmt" id="insrt"></li>
					<li><span id="Narrr">Sign: </span>
						<select class='signData form-control form-control-sm'
						id="signs" id="textbox" name="sign" id="insrt">
							<option>Cr</option>
							<option>Dr</option>
						</select>
					</li>
				</ul>
			</div>


			<div class="leftSection">
				<div class="lefft">
					<ul id="left2">
						<li><span id="Narrr">Voucher No: </span><input class="vhnum form-control" type="text" name="vNum" id="textbox" id="insrt" value= 0.00></li>
						<li><span id="Narrr">Account type: </span>
							<select class='typeData form-control form-control-sm' name="type" id="insrt">
								<?php 
									while ($row = mysqli_fetch_array($res)) {
										echo "<option value='".$row['cat_id']."' id='listbox'>".$row['cat_id']."</option>";
									}
								 ?>
							</select>
						</li>
						<li>
							<span id="Narrr">Account Code: </span>
							<select class='acctCodeData form-control form-control-sm acctCode' name='acctCode' id="insrt">
							<?php
								while ($row = mysqli_fetch_array($result)) {
									echo "<option value='".$row['Acct_Code']."' id='listbox'>".$row['Acct_Code']."</option>";
								}
							?>
						</select>
						</li>
						<li><span id="Narrr">Narration:</span> <br> <textarea class="narrData form-control" id="narr" id="textbox" name="narr" id="insrt " value= "JHCUUU"></textarea></li>

					</ul>

				</div>
			</div>

			<div id="btns">
				<ul>
					<li><button class="btn btn-primary" id="klick">Close</button>
					</li>
					<li><input type="submit" name="add" value="Add" class="add btn btn-secondary" id="klick" onclick="takeInput()">
					</li>
					<li><button class="btn btn-danger" id="klick" onclick="">Remove</button></li>
					<li><button class="btn btn-success" id="klick">Save</button></li>
				</ul>
			</div>

			<div class="table">
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
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<div class="x">
					<tbody id="tbodi">
						
						
						
					</tbody>
					</div>
				</table>
			</div>

<div id="myModaledit" class="modal fade" role="document">	<div class="modal-dialog modal-lg">	
	<div id="dialog" title="Edit">

		<h1>Edit</h1>
			<br>
		<h6>Vouher no:</h6>
		<input class="form-control" class="vh" type="text" id="wedth">
		<br>
		<br>
		<h6>Trans. Date:</h6>
		<input class="form-control td" type="text" id="wedth">
		<br>
		<br>
		<h6>Fin. Year:</h6>
		<input class="form-control fy" type="text" id="wedth">
		<br>
		<br>
		<h6>Period:</h6>
		<input class="form-control perd" type="text" id="wedth">
		<br>
		<br>
		<h6>Day:</h6>
		<input class="form-control dy" type="text-area" id="wedth">
		<br>
		<br>
		<h6>Month:</h6>
		<input class="form-control mnt" type="text" id="wedth">
		<br>
		<br>
		<h6>Sign:</h6>
		<select class="signData form-control sgn">
			<option>Dr</option>
			<option>Cr</option>
		</select>
		<br>
		<br>
		<h6>Narration:</h6>
		<input class="form-control nrr" type="text" id="wedth">
		<br>
		<br>
		<h6>Type:</h6>
		<input class="form-control tpe" type="text" id="wedth">
		<br>
		<br>
		<h6>Acct. Code:</h6>
		<input class="form-control actcde" type="text" id="wedth">
		<br>
		<br>
		<h6>Amount:</h6>
		<input class="form-control amnt" type="text" id="wedth">
		<br>
		<br>
		<button class="btn btn-primary" onclick="edit()">Edit</button>
	</div>
</div>
</div>

<div id="myModalDelete" class="modal fade" role="document">	<div class="modal-dialog modal-lg">	
	<div id="dialog" title="Edit">

		<h1>Delete</h1>
			<br>
		<h6>Vouher no:</h6> 
		<input class="form-control" class="vh" type="text" id="wedth">
		<br>
		<br>
		<h6>Trans. Date:</h6>
		<input class="form-control td" type="text" id="wedth">
		<br>
		<br>
		<h6>Fin. Year:</h6>
		<input class="form-control fy" type="text" id="wedth">
		<br>
		<br>
		<h6>Period:</h6>
		<input class="form-control perd" type="text" id="wedth">
		<br>
		<br>
		<h6>Day:</h6>
		<input class="form-control dy" type="text-area" id="wedth">
		<br>
		<br>
		<h6>Month:</h6>
		<input class="form-control mnt" type="text" id="wedth">
		<br>
		<br>
		<h6>Sign:</h6>
		<select class="signData form-control sgn">
			<option>Dr</option>
			<option>Cr</option>
		</select>
		<br>
		<br>
		<h6>Narration:</h6>
		<input class="form-control nrr" type="text" id="wedth">
		<br>
		<br>
		<h6>Type:</h6>
		<input class="form-control tpe" type="text" id="wedth">
		<br>
		<br>
		<h6>Acct. Code:</h6>
		<input class="form-control actcde" type="text" id="wedth">
		<br>
		<br>
		<h6>Amount:</h6>
		<input class="form-control amnt" type="text" id="wedth">
		<br>
		<br>
		<button class="btn btn-primary" onclick=" ">Edit</button>
	</div>
</div>
</div>


<?php include("../inc/foot.php");?>
