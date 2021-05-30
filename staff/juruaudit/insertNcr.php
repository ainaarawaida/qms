<?php
error_reporting(0);
require_once("../../db.php");
//session_start();
?>
<!--<?php
if (isset($_POST['tambah'])) {
 
  try {
 
    $stmt = $conn->prepare("INSERT INTO ncr (no_audit, staff_no, no_ncr, tarikh_audit, iso, jabatan_unit, dokumen, keperluan, penemuan, bukti_objektif, status ) VALUES(:no_audit, :staff_no, :no_ncr, :tarikh_audit, :iso, :jabatan_unit, :dokumen, :keperluan, :penemuan, :bukti_objektif, :Dihantar)");
   
    $stmt->bindParam(':no_audit', $no_audit, PDO::PARAM_STR);
    $stmt->bindParam(':staff_no', $staff_no, PDO::PARAM_STR);
    $stmt->bindParam(':no_ncr', $no_ncr, PDO::PARAM_STR);
    $stmt->bindParam(':tarikh_audit', $tarikh_audit, PDO::PARAM_STR);
    $stmt->bindParam(':iso', $iso, PDO::PARAM_STR);
    $stmt->bindParam(':jabatan_unit', $jabatan_unit, PDO::PARAM_STR);
    $stmt->bindParam(':dokumen', $dokumen, PDO::PARAM_STR);
    $stmt->bindParam(':keperluan', $keperluan, PDO::PARAM_STR);
    $stmt->bindParam(':penemuan', $penemuan, PDO::PARAM_STR);
    $stmt->bindParam(':penemuan', $penemuan, PDO::PARAM_STR);
    $stmt->bindParam(':Dihantar', $status, PDO::PARAM_STR);
       
    $no_audit = $_POST['no_audit'];
    $staff_no = $_POST['staff_no'];
    $no_ncr = $_POST['no_ncr'];
    $tarikh_audit = $_POST['tarikh_audit'];
    $iso =  $_POST['iso'];
    $jabatan_unit =  $_POST['jabatan_unit'];
    $dokumen =  $_POST['dokumen'];
    $keperluan =  $_POST['keperluan'];
    $penemuan =  $_POST['penemuan'];
    $bukti_objektif =  $_POST['bukti_objektif'];
    $status =  $_POST['Dihantar'];
       
    $stmt->execute();
    echo "NCr berjaya dihantar dan masih dalam proses";
    header("Location: utama.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
?>-->

<?php

/*if (isset($_POST['simpan'])) {
 
  try {
 
    $stmt = $conn->prepare("INSERT INTO ncr (no_audit, staff_no, no_ncr, tarikh_audit, iso, jabatan_unit, dokumen, keperluan, penemuan, bukti_objektif ) VALUES(:no_audit, :staff_no, :no_ncr, :tarikh_audit, :iso, :jabatan_unit, :dokumen, :keperluan, :penemuan, :bukti_objektif)");
   
    $stmt->bindParam(':no_audit', $no_audit, PDO::PARAM_STR);
    $stmt->bindParam(':staff_no', $staff_no, PDO::PARAM_STR);
    $stmt->bindParam(':no_ncr', $no_ncr, PDO::PARAM_STR);
    $stmt->bindParam(':tarikh_audit', $tarikh_audit, PDO::PARAM_STR);
    $stmt->bindParam(':iso', $iso, PDO::PARAM_STR);
    $stmt->bindParam(':jabatan_unit', $jabatan_unit, PDO::PARAM_STR);
    $stmt->bindParam(':dokumen', $dokumen, PDO::PARAM_STR);
    $stmt->bindParam(':keperluan', $keperluan, PDO::PARAM_STR);
    $stmt->bindParam(':penemuan', $penemuan, PDO::PARAM_STR);
    $stmt->bindParam(':bukti_objektif', $bukti_objektif, PDO::PARAM_STR);
       
    $no_audit = $_POST['no_audit'];
    $staff_no = $_POST['staff_no'];
    $no_ncr = $_POST['no_ncr'];
    $tarikh_audit = $_POST['tarikh_audit'];
    $iso =  $_POST['iso'];
    $jabatan_unit =  $_POST['jabatan_unit'];
    $dokumen =  $_POST['dokumen'];
    $keperluan =  $_POST['keperluan'];
    $penemuan =  $_POST['penemuan'];
    $bukti_objektif =  $_POST['bukti_objektif'];
       
    $stmt->execute();
    echo "NCr berjaya dihantar dan masih dalam proses";
    header("Location: utama.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}*/

if (isset($_POST['update'])) {
     
  try {

    $stmt = $conn->prepare("UPDATE ncr SET no_id = :no_id, no_audit = :no_audit, no_ncr = :no_ncr, tarikh_audit = :tarikh_audit, iso = :iso, jabatan_unit = :jabatan_unit, dokumen = :dokumen, keperluan = :keperluan, penemuan = :penemuan, bukti_objektif = :bukti_objektif WHERE no_id = :oldno_id");
   
    $stmt->bindParam(':no_id', $no_id, PDO::PARAM_STR);
    $stmt->bindParam(':no_audit', $no_audit, PDO::PARAM_STR);
    $stmt->bindParam(':no_ncr', $no_ncr, PDO::PARAM_STR);
    $stmt->bindParam(':tarikh_audit', $tarikh_audit, PDO::PARAM_STR);
    $stmt->bindParam(':iso', $iso, PDO::PARAM_STR);
    $stmt->bindParam(':jabatan_unit', $jabatan_unit, PDO::PARAM_STR);
    $stmt->bindParam(':dokumen', $dokumen, PDO::PARAM_STR);
    $stmt->bindParam(':keperluan', $keperluan, PDO::PARAM_STR);
    $stmt->bindParam(':penemuan', $penemuan, PDO::PARAM_STR);
    $stmt->bindParam(':bukti_objektif', $bukti_objektif, PDO::PARAM_STR);
    $stmt->bindParam(':oldno_id', $oldno_id, PDO::PARAM_STR);
       
    $no_id = $_POST['no_id'];
    $no_audit = $_POST['no_audit'];
    $no_ncr = $_POST['no_ncr'];
    $tarikh_audit = $_POST['tarikh_audit'];
    $iso = $_POST['iso'];
    $jabatan_unit = $_POST['jabatan_unit'];
    $dokumen = $_POST['dokumen'];
    $keperluan = $_POST['keperluan'];
    $penemuan = $_POST['penemuan'];
    $bukti_objektif = $_POST['bukti_objektif'];
    $oldno_id = $_POST['oldno_id'];
    
       
    $stmt->execute();
    echo '<script type="text/javascript">'; 
    echo 'alert("Kemaskini berjaya!");'; 
    echo 'window.location.href = "listDraftNcr.php";';
    echo '</script>';
 
    //header("Location: listAuditor.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}

if (isset($_GET['edit'])) {
   
  try {
 
    $stmt = $conn->prepare("SELECT * FROM ncr where no_id = :no_id");
   
    $stmt->bindParam(':no_id', $no_id, PDO::PARAM_STR);
       
    $no_id = $_GET['edit'];
     
    $stmt->execute();
 
    $editrow = $stmt->fetch(PDO::FETCH_ASSOC);
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}

?>