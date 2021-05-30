<?php
	include_once '../conn.php';
	//include_once 'session.php';

	if($_POST['no_id'] == ""){
		$jabatan_unit = $_POST['jabatan_unit'];
		$staff_no = $_POST['staff_no'];
		$no_audit = $_POST['no_audit'];
		$tarikh_audit = $_POST['tarikh_audit'];
		$no_ncr = $_POST['no_ncr'];
		$iso = $_POST['iso'];
		$dokumen = $_POST['dokumen'];
		$keperluan = $_POST['keperluan'];
		$penemuan = $_POST['penemuan'];
		$bukti_objektif = $_POST['bukti_objektif'];
		$ketakakuran = $_POST['ketakakuran'];
		$pembetulan = $_POST['pembetulan'];
		$tindakan = $_POST['tindakan'];
 
		$conn->query("INSERT INTO `ncr` VALUE('', '$jabatan_unit', '$staff_no', '$no_audit', '$tarikh_audit', '$no_ncr', '$iso', '$dokumen', '$keperluan', '$penemuan', '$bukti_objektif', '$ketakakuran', '$pembetulan', '$tindakan', 'proses')");
		echo $conn->insert_id;
	}else{
		$jabatan_unit = $_POST['jabatan_unit'];
		$staff_no = $_POST['staff_no'];
		$no_audit = $_POST['no_audit'];
		$tarikh_audit = $_POST['tarikh_audit'];
		$no_ncr = $_POST['no_ncr'];
		$iso = $_POST['iso'];
		$dokumen = $_POST['dokumen'];
		$keperluan = $_POST['keperluan'];
		$penemuan = $_POST['penemuan'];
		$bukti_objektif = $_POST['bukti_objektif'];
		$ketakakuran = $_POST['ketakakuran'];
		$pembetulan = $_POST['pembetulan'];
		$tindakan = $_POST['tindakan'];
		$no_id = $_POST['no_id'];
		$conn->query("UPDATE `ncr` SET `jabatan_unit` = '$jabatan_unit', `staff_no` = '$staff_no', `no_audit` = '$no_audit', `tarikh_audit` = '$tarikh_audit', `no_ncr` = '$no_ncr', `iso` = '$iso', `dokumen` = '$dokumen', `keperluan` = '$keperluan', `penemuan` = '$penemuan', `bukti_objektif` = '$bukti_objektif', `ketakakuran` = '$ketakakuran', `pembetulan` = '$pembetulan', `tindakan` = '$tindakan', `status` = 'proses' WHERE `no_id` = '$no_id'");
	}
?>