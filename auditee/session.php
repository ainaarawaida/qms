<?php
include_once '../db.php';

session_start(); 
	
	$uid = $_SESSION['uid'];
	
	$stmt = $conn->prepare("SELECT * FROM auditee WHERE auditee_no = '$uid'");

	$stmt->execute();
	
	$readrow = $stmt->fetch(PDO::FETCH_ASSOC);

	$uid = $readrow['auditee_no'];
	$name = $readrow['auditee_name'];
	$upass= $readrow['auditee_pass'];
	$email= $readrow['auditee_email'];
	$jabatan_unit= $readrow['jabatan_unit'];

		
if($uid==''){
	header("location:utama.php");
	}
	else {
	header("");
	}
?>