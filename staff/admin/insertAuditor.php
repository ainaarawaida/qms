<?php
error_reporting(0);
require_once("../../db.php");
?>
<?php
if (isset($_POST['tambah'])) {
 
  try {
 
    $stmt = $conn->prepare("INSERT INTO juruaudit (staff_no, staff_name, staff_pass, staff_email, staff_noTel ) VALUES(:staff_no, :staff_name, :Staff_pass, :staff_email, :staff_noTel)");
   
    $stmt->bindParam(':staff_no', $staff_no, PDO::PARAM_STR);
    $stmt->bindParam(':staff_name', $staff_name, PDO::PARAM_STR);
    $stmt->bindParam(':Staff_pass', $Staff_pass, PDO::PARAM_STR);
    $stmt->bindParam(':staff_email', $staff_email, PDO::PARAM_STR);
    $stmt->bindParam(':staff_noTel', $staff_noTel, PDO::PARAM_STR);
       
    $staff_no = $_POST['staff_no'];
    $staff_name = $_POST['staff_name'];
    $Staff_pass = $_POST['Staff_pass'];
    $staff_email =  $_POST['staff_email'];
    $staff_noTel =  $_POST['staff_noTel'];
       
    $stmt->execute();
    echo "Juruaudit berjaya didaftarkan";
    header("Location: listAuditor.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
?>