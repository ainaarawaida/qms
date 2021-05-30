<?php
  include_once '../../conn.php';
  //include_once 'session.php';
 
  if($_POST['no_id'] == ""){
    $klausa = $_POST['klausa'];
    $jabatan_unit = $_POST['jabatan_unit'];
    $perincian = $_POST['perincian'];
    $susulan = $_POST['susulan'];
    $tarikh_tindakan = $_POST['tarikh_tindakan'];
 
    $conn->query("INSERT INTO `ofi` VALUE('', '$klausa', '$jabatan_unit', '$perincian', '$susulan', '$tarikh_tindakan', 'draf')");
    echo $conn->insert_id;
  }else{
    $klausa = $_POST['klausa'];
    $jabatan_unit = $_POST['jabatan_unit'];
    $perincian = $_POST['perincian'];
    $susulan = $_POST['susulan'];
    $tarikh_tindakan = $_POST['tarikh_tindakan'];
    $no_id = $_POST['no_id'];
    $conn->query("UPDATE `ofi` SET `staff_no` = '$staff_no', `no_audit` = '$no_audit', `tarikh_audit` = '$tarikh_audit', `no_ncr` = '$no_ncr', `iso` = '$iso', `jabatan_unit` = '$jabatan_unit', `dokumen` = '$dokumen', `keperluan` = '$keperluan', `penemuan` = '$penemuan', `bukti_objektif` = '$bukti_objektif', `ketakakuran` = '$ketakakuran', `pembetulan` = '$pembetulan', `tindakan` = '$tindakan', `tindakankesan` = '$tindakankesan', `tindakantakkesan` = '$tindakantakkesan', `selesai` = '$selesai', `belumselesai` = '$belumselesai' WHERE `no_id` = '$no_id' && `status` = 'draf'");
  }
?>