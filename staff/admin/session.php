<?php
//error_reporting(0);
include_once '../../db.php';

session_start(); 
	
	$uid = $_SESSION['uid'];
	
	$stmt = $conn->prepare("SELECT * FROM admin WHERE staff_no = '$uid'");

	$stmt->execute();
	
	$readrow = $stmt->fetch(PDO::FETCH_ASSOC);

	$uid = $readrow['staff_no'];
	$name = $readrow['staff_name'];
	$pass= $readrow['staff_pass'];
	$email= $readrow['staff_email'];

		
if($uid==''){
	header("location:utama.php");
	}
	else {
	header("");
	}
?>