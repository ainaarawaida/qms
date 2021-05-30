<?php
error_reporting(0);
require_once("../../db.php");
//session_start();
?>
<?php
if (isset($_POST['tambah'])) {
 
  try {
 
    $stmt = $conn->prepare("INSERT INTO laporan (fail_rujukan, klien, alamat_audit, tarikh_audit, tempoh, standard, rujukan, skop, aktiviti_klien, perubahan, amalan_terbaik, penilaian, bil_ncr, rumusan, cadangan ) VALUES(:fail_rujukan, :klien, :alamat_audit, :tarikh_audit, :tempoh, :standard, :rujukan, :skop, :aktiviti_klien, :perubahan, :amalan_terbaik, :penilaian, :bil_ncr, :rumusan, :cadangan)");
   
    $stmt->bindParam(':fail_rujukan', $fail_rujukan, PDO::PARAM_STR);
    $stmt->bindParam(':klien', $klien, PDO::PARAM_STR);
    $stmt->bindParam(':alamat_audit', $alamat_audit, PDO::PARAM_STR);
    $stmt->bindParam(':tarikh_audit', $tarikh_audit, PDO::PARAM_STR);
    $stmt->bindParam(':tempoh', $tempoh, PDO::PARAM_STR);
    $stmt->bindParam(':standard', $standard, PDO::PARAM_STR);
    $stmt->bindParam(':rujukan', $rujukan, PDO::PARAM_STR);
    $stmt->bindParam(':skop', $skop, PDO::PARAM_STR);
    $stmt->bindParam(':bil_ncr', $bil_ncr, PDO::PARAM_STR);
    //$stmt->bindParam(':bil_kehadiran', $bil_kehadiran, PDO::PARAM_STR);
    //$stmt->bindParam(':bil_ofi', $bil_ofi, PDO::PARAM_STR);
    //$stmt->bindParam(':pelan_audit', $pelan_audit, PDO::PARAM_STR);
    $stmt->bindParam(':aktiviti_klien', $aktiviti_klien, PDO::PARAM_STR);
    //$stmt->bindParam(':staff_name', $staff_name, PDO::PARAM_STR);
    //$stmt->bindParam(':peranan', $peranan, PDO::PARAM_STR);
    $stmt->bindParam(':perubahan', $perubahan, PDO::PARAM_STR);
    $stmt->bindParam(':amalan_terbaik', $amalan_terbaik, PDO::PARAM_STR);
    $stmt->bindParam(':penilaian', $penilaian, PDO::PARAM_STR);
    $stmt->bindParam(':rumusan', $rumusan, PDO::PARAM_STR);
    $stmt->bindParam(':cadangan', $cadangan, PDO::PARAM_STR);
       
    $fail_rujukan = $_POST['fail_rujukan'];
    $klien = $_POST['klien'];
    $alamat_audit = $_POST['alamat_audit'];
    $tarikh_audit = $_POST['tarikh_audit'];
    $tempoh =  $_POST['tempoh'];
    $standard =  $_POST['standard'];
    $rujukan =  $_POST['rujukan'];
    $skop =  $_POST['skop'];
    $bil_ncr =  $_POST['bil_ncr'];
    //$bil_kehadiran =  $_POST['bil_kehadiran'];
    //$bil_ofi =  $_POST['bil_ofi'];
    //$pelan_audit = $_POST['pelan_audit'];
    $aktiviti_klien = $_POST['aktiviti_klien'];
    //$staff_name =  $_POST['staff_name'];
    //$peranan =  $_POST['peranan'];
    $perubahan =  $_POST['perubahan'];
    $amalan_terbaik =  $_POST['amalan_terbaik'];
    $penilaian =  $_POST['penilaian'];
    $rumusan =  $_POST['rumusan'];
    $cadangan =  $_POST['cadangan'];
       
    $stmt->execute();
    echo "Laporan dihantar";
    header("Location: utama.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
?>