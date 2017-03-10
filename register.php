<?php
include('header.php');
include_once('gen-sched-func.php');
include_once('add-patient-func.php');

if (isset($_POST['submit'])) { //If the Register form has been submitted
                //Returns 0 on error, otherwise new patient id
	$retval = addPatient($_POST);
	if ($retval) {
                                // Redirect("edit-sched.php?id={$retval}");
                                // exit();
	}
}
if ($_SESSION['msg']['reg-err']) {
	echo '<div class="err">' . $_SESSION['msg']['reg-err'] . '</div>';
	unset($_SESSION['msg']['reg-err']);
}

if ($_SESSION['msg']['reg-success']) {
	echo '<div class="success">' . $_SESSION['msg']['reg-success'] . '</div>';
	unset($_SESSION['msg']['reg-success']);
}
?>

<form action="" method="post" enctype="multipart/form-data" style="width:auto">
	<div style='font-size:20px;font-weight:bold;'><br>Add Patient</div>
	<div>
		<div style='font-size:15px;'><br>Basic details</div>
		<div>
			<p>
				<label for="first_name">First Name:&nbsp;&nbsp;</label>
				<input type="text" name="first_name" id="first_name" style="width:477px" />
				*
			</p>

			<p>
				<label for="last_name">Last Name:&nbsp;&nbsp;</label>
				<input type="text" name="last_name" id="last_name" style="width:477px" />
			</p>

			<p>
				<label for="age">Age:&nbsp;&nbsp;</label>
				<input type="number" name="age" id="age"/>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<label class="grey" for="sex">Sex:&nbsp;&nbsp;</label>
				<select name="sex" style="margin-right:60px;">
					<option value='Male'>Male</option>
					<option value='Female'>Female</option>
				</select>
			</p>

			<p>
				<label for="phone">Phone number:&nbsp;&nbsp;</label>
				<input type="text" name="phone" id="phone"  />
			</p>
		</div>
		<div style='font-size:15px;'><br>Extra details</div>
		<div>
			<p>
				<label for="address">Address:&nbsp;&nbsp;</label><br />
				<textarea name="address" id="address" rows=3 cols=70></textarea>
			</p>
			<p>
				<label for="height">Height (in cm):&nbsp;&nbsp;</label><br />
				<input type="number" name="height" id="height"  />
			</p>
			<p>
				<label for="weight">Weight (in kg):&nbsp;&nbsp;</label><br />
				<input type="number" name="weight" id="weight"  />
			</p>
			<p>
				<label for="allergies">Allergies:&nbsp;&nbsp;</label><br />
				<textarea name="allergies" id="allregies" rows=3 cols=70></textarea>
			</p>

</div>
</div>
<p>
	<input type="submit" name="submit" value="Register"/>
</p>

</form>
<?php
include('footer.php');
?>
