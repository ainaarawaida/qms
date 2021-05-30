<?php
 
if (isset($_POST['edit_form'])) {
 
  include "../../db.php";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
    $stmt = $conn->prepare("UPDATE ncr SET staff_no = :staff_no, no_audit = :no_audit, tarikh_audit =:tarikh_audit, no_ncr =:no_ncr, iso =:iso, jabatan_unit =:jabatan_unit, dokumen = :dokumen, keperluan = :keperluan, penemuan = :penemuan, bukti_objektif =:bukti_objektif, ketakakuran =:ketakakuran, pembetulan =:pembetulan, tindakan =:tindakan, tindakankesan = :tindakankesan, tindakantakkesan =:tindakantakkesan, selesai =:selesai, belumselesai = :belumselesai WHERE no_id = :no_id");
 
    $stmt->bindParam(':staff_no', $staff_no, PDO::PARAM_STR);
    $stmt->bindParam(':no_audit', $no_audit, PDO::PARAM_STR);
    $stmt->bindParam(':tarikh_audit', $tarikh_audit, PDO::PARAM_STR);
    $stmt->bindParam(':no_ncr', $no_ncr, PDO::PARAM_STR);
    $stmt->bindParam(':iso', $iso, PDO::PARAM_STR);
    $stmt->bindParam(':jabatan_unit', $jabatan_unit, PDO::PARAM_STR);
    $stmt->bindParam(':dokumen', $dokumen, PDO::PARAM_STR);
    $stmt->bindParam(':keperluan', $keperluan, PDO::PARAM_STR);
    $stmt->bindParam(':penemuan', $penemuan, PDO::PARAM_STR);
    $stmt->bindParam(':bukti_objektif', $bukti_objektif, PDO::PARAM_STR);
    $stmt->bindParam(':ketakakuran', $ketakakuran, PDO::PARAM_STR);
    $stmt->bindParam(':pembetulan', $pembetulan, PDO::PARAM_STR);
    $stmt->bindParam(':tindakan', $tindakan, PDO::PARAM_STR);
    $stmt->bindParam(':tindakankesan', $tindakankesan, PDO::PARAM_STR);
    $stmt->bindParam(':tindakantakkesan', $tindakantakkesan, PDO::PARAM_STR);
    $stmt->bindParam(':selesai', $selesai, PDO::PARAM_STR);
    $stmt->bindParam(':belumselesai', $belumselesai, PDO::PARAM_STR);
    $stmt->bindParam(':no_id', $no_id, PDO::PARAM_INT);
       
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
        $ketakakuran = $_POST['ketakakuran'];
        $pembetulan = $_POST['pembetulan'];
        $tindakan = $_POST['tindakan'];
        $tindakankesan = $_POST['tindakankesan'];
        $tindakantakkesan = $_POST['tindakantakkesan'];
        $selesai = $_POST['selesai'];
        $belumselesai = $_POST['belumselesai'];
        $no_id = $_POST['no_id'];
 
    $stmt->execute();
     
    header("Location:susulan.php");
    }
 
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
 
    $conn = null;
  }
else {
  echo "Error: You have execute a wrong PHP. Please contact the web administrator.";
  die();
}
 
?>