<?php
include_once('header.php');

function checkEmail($str)
{
	return preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $str);
}



function validatePatient($patient_var)
{
	$err = array();

	if(($patient_var['phone']))
	{
		if( !preg_match("/^[0-9]{1,}$/", $patient_var['phone']) )
		{
			$err[]='Your phone number is not valid!';
		}
	}

	if(!$patient_var['first_name'])
	{
		$err[] = 'First name must be filled!';
	}

	return $err;
}



function prePatient(&$patient_var)
{
	$patient_var['first_name'] = ucwords($patient_var['first_name']);
	$patient_var['last_name'] = ucwords($patient_var['last_name']);
	$patient_var['address'] = ucwords($patient_var['address']);
}





function addPatient($patient_var)
{
	global $link;
	prePatient($patient_var);
	$err = validatePatient($patient_var);
	if(!count($err))
	{
		$patient_var['first_name'] = mysqli_real_escape_string($link, $patient_var['first_name']);
		$patient_var['last_name'] = mysqli_real_escape_string($link, $patient_var['last_name']);
		$patient_var['phone'] = mysqli_real_escape_string($link, $patient_var['phone']);

		$query = "INSERT INTO patients(first_name,last_name,age,sex,phone,address,height,weight,allergies)
					VALUES(
					'".$patient_var['first_name']."', '".$patient_var['last_name']."',
					'".$patient_var['age']."',
					'".$patient_var['sex']."',
					'".$patient_var['phone']."',
					'".$patient_var['address']."',
					'".$patient_var['height']."',
					'".$patient_var['weight']."',
					'".$patient_var['allergies']."')";
		// Escape the input data
		if(mysqli_query($link, "INSERT INTO patients(first_name,last_name,age,sex,phone,address,height,weight,allergies)
					VALUES(
					'".$patient_var['first_name']."', '".$patient_var['last_name']."',
					'".$patient_var['age']."',
					'".$patient_var['sex']."',
					'".$patient_var['phone']."',
					'".$patient_var['address']."',
					'".$patient_var['height']."',
					'".$patient_var['weight']."',
					'".$patient_var['allergies']."')"))
		{
			$new_patient_id = mysqli_insert_id($link);
			$_SESSION['msg']['reg-success']="Patient successfully added! Patient id is <strong>".$new_patient_id."</strong>";
			// add not for patient if it exists
		}
		else $err[]='An unknown error has occured.';
	}

	if(count($err))
	{
		$_SESSION['msg']['reg-err'] = implode('<br />',$err);
		return 0;
	}
	else
	{
		return $new_patient_id;
	}
}

?>
