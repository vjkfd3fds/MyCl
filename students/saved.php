<?php 
	include_once '../backend-php/connect.php';

	if (isset($_COOKIE['id'])) {
		$id = $_COOKIE['id'];

		$sql = "SELECT * FROM saved";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$institution = $row['institution'];
	}

	$sql = "SELECT * FROM college_details WHERE institution = '$institution'";
	$result = $conn->query($sql);

	$row = $result->fetch_assoc();
	echo $row['institution'] . '<br />';
	echo $row['university'] . '<br />';
	echo $row['programs'] . '<br />';
	echo $row['course'] . '<br />';
?>