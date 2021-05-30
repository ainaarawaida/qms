<?php
include_once '../db.php';
include_once 'session.php';
?>
<?php if (isset($_POST['update'])) {
     
  try {

    $stmt = $conn->prepare("UPDATE ncr SET ketakakuran = :ketakakuran, pembetulan = :pembetulan, tindakan = :tindakan WHERE jabatan_unit = '$uid'");
   
    $stmt->bindParam(':ketakakuran', $ketakakuran, PDO::PARAM_STR);
    $stmt->bindParam(':pembetulan', $pembetulan, PDO::PARAM_STR);
    $stmt->bindParam(':tindakan', $tindakan, PDO::PARAM_STR);
       
    $ketakakuran = $_POST['ketakakuran'];
    $pembetulan = $_POST['pembetulan'];
    $tindakan = $_POST['tindakan'];
    
       
    $stmt->execute();
    echo '<script type="text/javascript">'; 
    echo 'alert("NCR telah dikemaskini!");'; 
    echo 'window.location.href = "tindakan.php";';
    echo '</script>';
 
    //header("Location: listAuditor.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
?>