<?php
	require_once "connection.php";

	$vin = mysqli_real_escape_string($connect, $_POST['vin']);

	$query = "SELECT * FROM `vin-label` WHERE vin = '$vin'";
	$result = mysqli_query($connect, $query);

	$row = mysqli_fetch_assoc($result);

	if ($row) {
		$msg = "<div class='bg-success text-white p-3 ml-auto mr-auto text-center'>
						Hey Boss, Year of this car is <strong>{$row['year']}</strong>
				</div>";
		$_SESSION['ms'] = $msg;
		// echo $_SESSION['ms'];

		header('location:vin-id.php');
	}else{
		$message = "<div class='bg-danger text-white p-3 ml-auto mr-auto text-center'>
						There is no Record for this vin label
					</div>";
		$_SESSION['error'] = $message;

		header('location:vin-id.php');

	}



?>