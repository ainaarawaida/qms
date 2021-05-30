<?php
error_reporting(0);
require_once("../../db.php");
//session_start();
?>
<?php 
//Update
if (isset($_POST['update'])) {
     
  try {

    $stmt = $conn->prepare("UPDATE juruaudit SET staff_no = :staff_no, staff_name = :staff_name, staff_email = :staff_email, staff_noTel = :staff_noTel WHERE staff_no = :oldstaff_no");
   
    $stmt->bindParam(':staff_no', $staff_no, PDO::PARAM_STR);
    $stmt->bindParam(':staff_name', $staff_name, PDO::PARAM_STR);
    $stmt->bindParam(':staff_email', $staff_email, PDO::PARAM_STR);
    $stmt->bindParam(':staff_noTel', $staff_noTel, PDO::PARAM_STR);
    $stmt->bindParam(':oldstaff_no', $oldstaff_no, PDO::PARAM_STR);
       
    $staff_no = $_POST['staff_no'];
    $staff_name = $_POST['staff_name'];
    $staff_email = $_POST['staff_email'];
    $staff_noTel = $_POST['staff_noTel'];
    $oldstaff_no = $_POST['oldstaff_no'];
    
       
    $stmt->execute();
    echo '<script type="text/javascript">'; 
    echo 'alert("Kemaskini berjaya!");'; 
    echo 'window.location.href = "listAuditor.php";';
    echo '</script>';
 
    //header("Location: listAuditor.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}

if (isset($_GET['delete'])) {
 
  try {
 
    $stmt = $conn->prepare("DELETE FROM juruaudit WHERE staff_no = :staff_no");
   
    $stmt->bindParam(':staff_no', $staff_no, PDO::PARAM_STR);
       
    $staff_no = $_GET['delete'];
     
    $stmt->execute();
 
    header("Location: listAuditor.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}

if (isset($_GET['edit'])) {
   
  try {
 
    $stmt = $conn->prepare("SELECT * FROM juruaudit where staff_no = :staff_no");
   
    $stmt->bindParam(':staff_no', $staff_no, PDO::PARAM_STR);
       
    $staff_no = $_GET['edit'];
     
    $stmt->execute();
 
    $editrow = $stmt->fetch(PDO::FETCH_ASSOC);
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
?>