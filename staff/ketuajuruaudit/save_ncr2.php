<?php
	include_once '../../conn.php';
	//include_once 'session.php';

	if($_POST['no_id'] == ""){
		$staff_no = $_POST['staff_no'];
		$no_audit = $_POST['no_audit'];
		$tarikh_audit = $_POST['tarikh_audit'];
		$no_ncr = $_POST['no_ncr'];
		$iso = $_POST['iso'];
		$jabatan_unit = $_POST['jabatan_unit'];
		$dokumen = $_POST['dokumen'];
		$keperluan = $_POST['keperluan'];
		$penemuan = $_POST['penemuan'];
		$bukti_objektif = $_POST['bukti_objektif'];
 
		$conn->query("INSERT INTO `ncr` VALUE('', '$staff_no', '$no_audit', '$tarikh_audit', '$no_ncr', '$iso', '$jabatan_unit', '$dokumen', '$keperluan', '$penemuan', '$bukti_objektif', 'Post')");
		echo $conn->insert_id;
	}else{
		$staff_no = $_POST['staff_no'];
		$no_audit = $_POST['no_audit'];
		$tarikh_audit = $_POST['tarikh_audit'];
		$no_ncr = $_POST['no_ncr'];
		$iso = $_POST['iso'];
		$jabatan_unit = $_POST['jabatan_unit'];
		$dokumen = $_POST['dokumen'];
		$keperluan = $_POST['keperluan'];
		$penemuan = $_POST['penemuan'];
		$bukti_objektif = $_POST['bukti_objektif'];
		$no_id = $_POST['no_id'];
		$conn->query("UPDATE `ncr` SET `staff_no` = '$staff_no', `no_audit` = '$no_audit', `tarikh_audit` = '$tarikh_audit', `no_ncr` = '$no_ncr', `iso` = '$iso', `jabatan_unit` = '$jabatan_unit', `dokumen` = '$dokumen', `keperluan` = '$keperluan', `penemuan` = '$penemuan', `bukti_objektif` = '$bukti_objektif', `status` = 'Post' WHERE `no_id` = '$no_id'");
	}
?>