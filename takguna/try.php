<?php  

 include_once 'db.php';
 session_start();


      if(isset($_POST["login"]))  
      {

        $noId = $_POST["noId"];
        try
        {

        $sql = "SELECT * FROM juruaudit, admin WHERE juruaudit.staff_no = admin.staff_no AND staff_no = :noId AND staff_pass = :pass";
        //$sql = $sql."tbl_esukan_app.fld_cust_id = tbl_customers_a175275.fld_cust_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':noId', $noId, PDO::PARAM_STR);
        $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
        $stmt->execute();
        //$readrow = $stmt->fetchAll();
        $readrow = $stmt->fetch(PDO::FETCH_ASSOC);

        $noId = $readrow['staff_no'];
        $pass = $readrow['staff_pass'];
        //$name = $readrow['Username'];
        //$email= $readrow['Email'];  

          /*$juruaudit = $conn->prepare("SELECT * FROM juruaudit WHERE staff_no = :noId AND staff_pass = :pass");
          //$result_juruaudit =  $conn->prepare($juruaudit);
          $juruaudit->bindParam(':noId',$noId,PDO::PARAM_STR);
          $juruaudit->bindParam(':pass',$pass,PDO::PARAM_STR);
          $noId = $_POST['noId'];
          $pass = $_POST['pass'];
          $juruaudit->execute();
          $row = $juruaudit->fetch(PDO::FETCH_ASSOC);
          //$result_juruaudit = $juruaudit->fetchAll();*/


if($noId == $readrow['staff_no'])
{
  if($pass == $readrow['staff_pass'])
  {
    
    //$_SESSION['id_pemohon'] = $id_pemohon;
    //$_SESSION['nama_login'] = $result_juruaudit['staff_name'];
$_SESSION["staff_no"]=$noId;
    echo ("<script type =\"text/javascript\">");
    echo ("alert('Anda Telah Berjaya Masuk Sebagai Pengguna.');");
    echo ("window.location=\"home.php\"");
    echo ("</script>");
    
    //echo $_SESSION['id_pemohon'];
    
  }
  else if($pass !== ($readrow["pass"]))
  {
    echo ("<script type =\"text/javascript\">");
     echo ("alert('Maaf, log masuk tidak berjaya. Sila cuba sekali lagi');");
     echo ("window.location=\"home.php\"");
     echo ("</script>");
  }
  
  }


}
 
catch(PDOException $e)
  {
    $e->getMessage();
  }
}

 ?>