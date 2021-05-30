<?php
	include_once '../../conn.php';
	//include_once 'session.php';
 
	if($_POST['no_id'] == ""){
		$staff_no = $_POST['staff_no'];
		$jabatan_unit = $_POST['jabatan_unit'];
		$klausa = $_POST['klausa'];
		$perincian = $_POST['perincian'];
		$susulan = $_POST['susulan'];
		$tarikh_tindakan = $_POST['tarikh_tindakan'];
 
		$conn->query("INSERT INTO `ofi` VALUE('', '$staff_no', '$jabatan_unit', '$klausa', '$perincian', '$susulan', '$tarikh_tindakan', 'draf')");
		echo $conn->insert_id;
	}else{
		$staff_no = $_POST['staff_no'];
		$jabatan_unit = $_POST['jabatan_unit'];
		$klausa = $_POST['klausa'];
		$perincian = $_POST['perincian'];
		$susulan = $_POST['susulan'];
		$tarikh_tindakan = $_POST['tarikh_tindakan'];
		$no_id = $_POST['no_id'];
		$conn->query("UPDATE `ofi` SET `staff_no` = '$staff_no', `jabatan_unit` = '$jabatan_unit', `klausa` = '$klausa', `perincian` = '$perincian', `susulan` = '$susulan', `tarikh_tindakan` = '$tarikh_tindakan' WHERE `no_id` = '$no_id' && `status` = 'draf'");
	}
?>