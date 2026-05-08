<style>
	input[type="text"],
	input[type="email"],
	input[type="number"],
	input[type="date"] {
		width: 95%;
		padding: 5px;
		margin-top: 5px;
	}

	.form {
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	.button {
		background-color: #0d6efd;
		color: white;
		padding: 10px 18px;
		border: none;
		border-radius: 5px;
	}

	.th {
		text-align: center;
		font-weight: bold;
		font-size: 40px;
	}

	.sth {
		font-weight: bold;
	}

	.subnote {
		font-weight: lighter;
		color: #808080;
		margin-top: 4px;
		font-size: 10px;
	}

	.row {
		display: flex;
		width: 80%;
	}

	.col {
		flex: 1;
		padding: 5px;
	}

	.col-25 {
		flex: none;
		width: 25%;
	}
</style>

<!-- Form -->
<form method="post" class="form">
	<div class="row">
		<div class="col th"> Sample Registration </div>
	</div>
	<!-- Name -->
	<div class="row">
		<div class="col"> Given Name<br> <input type="text" placeholder="e.g. Dan Nathan" name="fname"> </div>
		<div class="col"> Middle Name<br> <input type="text" placeholder="e.g. Montano" name="mname"> </div>
		<div class="col"> Last Name<br> <input type="text" placeholder="e.g. Valeriano" name="lname"> </div>
	</div>
	<!-- Email & Bday -->
	<div class="row">
		<div class="col"> Email Address<br> <input type="email" placeholder="Enter Email" name="email">
			<p class="subnote"> We'll never share your email to anyone. </p>
		</div>
		<div class="col"> Birthday<br> <input type="date" name="bday"> </div>
	</div>
	<!-- Address -->
	<div class="row">
		<div class="col"> Address<br> <input type="text" placeholder="Unit No / House / Bldg Name" name="add1"> </div>
		<div class="col"> <br> <input type="text" placeholder="Street / Village / Subdiv" name="add2"> </div>
	</div>
	<!-- City - Zip Code - Country/Region -->
	<div class="row">
		<div class="col"> City<br> <input type="text" placeholder="e.g. Manila" name="city"> </div>
		<div class="col"> Zip Code<br> <input type="number" placeholder="e.g. 1111" name="zcode"> </div>
		<div class="col"> Country/Region<br> <input type="text" placeholder="e.g. Philippines" name="country"> </div>
	</div>
	<!-- Contact Num - Gender -->
	<div class="row">
		<div class="col"> Phone Number<br> <input type="number" placeholder="e.g. 096767676767" name="pnum"> </div>
		<div class="col col-25">
			Gender<br>
			<input type="radio" id="male" name="gender" value="male">
			<label for="male">Male</label>

			<input type="radio" id="female" name="gender" value="female">
			<label for="female">Female</label>
		</div>
	</div>
	<!-- Dependents -->
	<div class="row">
		<div class="col sth"> Dependents </div>
	</div>
	<div class="row">
		<div class="col"> Given Name<br> <input type="text" placeholder="e.g. Dan Nathan" name="d1fname"> </div>
		<div class="col"> Middle Name<br> <input type="text" placeholder="e.g. Montano" name="d1mname"> </div>
		<div class="col"> Last Name<br> <input type="text" placeholder="e.g. Valeriano" name="d1lname"> </div>
		<div class="col"> Birthday<br> <input type="date" name="d1bday"> </div>
	</div>
	<div class="row">
		<div class="col"> Given Name<br> <input type="text" placeholder="e.g. Dan Nathan" name="d1fname"> </div>
		<div class="col"> Middle Name<br> <input type="text" placeholder="e.g. Montano" name="d1mname"> </div>
		<div class="col"> Last Name<br> <input type="text" placeholder="e.g. Valeriano" name="d1lname"> </div>
		<div class="col"> Birthday<br> <input type="date" name="d1bday"> </div>
	</div>
	<div class="row">
		<div class="col"> Given Name<br> <input type="text" placeholder="e.g. Dan Nathan" name="d1fname"> </div>
		<div class="col"> Middle Name<br> <input type="text" placeholder="e.g. Montano" name="d1mname"> </div>
		<div class="col"> Last Name<br> <input type="text" placeholder="e.g. Valeriano" name="d1lname"> </div>
		<div class="col"> Birthday<br> <input type="date" name="d1bday"> </div>
	</div>
	<div class="row">
		<div class="col"> Given Name<br> <input type="text" placeholder="e.g. Dan Nathan" name="d1fname"> </div>
		<div class="col"> Middle Name<br> <input type="text" placeholder="e.g. Montano" name="d1mname"> </div>
		<div class="col"> Last Name<br> <input type="text" placeholder="e.g. Valeriano" name="d1lname"> </div>
		<div class="col"> Birthday<br> <input type="date" name="d1bday"> </div>
	</div>
	<!-- Cofirmation & Button -->
	<div class="row">
		<div class="col">
			<input type="checkbox" name="confirm" value="yes">
			I agree all the following information is correct.
			<br>
			<input class="button" type="submit" name="register">
		</div>
	</div>
	202410543 - Dan Nathan M. Valeriano
</form>

<?php

?>