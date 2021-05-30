<?php
error_reporting(0);
require_once("../../db.php");
//session_start();
?>
<?php
if (isset($_POST['tambah'])) {
 
  try {
 
    $stmt = $conn->prepare("INSERT INTO ncr (no_audit, no_ncr, tarikh_audit, iso, jabatan_unit, dokumen, keperluan, penemuan, bukti_objektif ) VALUES(:no_audit, :no_ncr, :tarikh_audit, :iso, :jabatan_unit, :dokumen, :keperluan, :penemuan, :bukti_objektif)");
   
    $stmt->bindParam(':no_audit', $no_audit, PDO::PARAM_STR);
    $stmt->bindParam(':no_ncr', $no_ncr, PDO::PARAM_STR);
    $stmt->bindParam(':tarikh_audit', $tarikh_audit, PDO::PARAM_STR);
    $stmt->bindParam(':iso', $iso, PDO::PARAM_STR);
    $stmt->bindParam(':jabatan_unit', $jabatan_unit, PDO::PARAM_STR);
    $stmt->bindParam(':dokumen', $dokumen, PDO::PARAM_STR);
    $stmt->bindParam(':keperluan', $keperluan, PDO::PARAM_STR);
    $stmt->bindParam(':penemuan', $penemuan, PDO::PARAM_STR);
    $stmt->bindParam(':bukti_objektif', $bukti_objektif, PDO::PARAM_STR);
       
    $no_audit = $_POST['no_audit'];
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
}
?>