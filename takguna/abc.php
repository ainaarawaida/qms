<?php
include_once 'db.php';
session_start();
$noId = $_POST['noId'];
$pass = $_POST['pass'];
$_SESSION['noId'] = $noId;

//query for pemohon
$juruaudit = $conn->prepare("SELECT * FROM juruaudit WHERE staff_no = :noId AND staff_pass = :pass");
//$result_juruaudit =  $conn->prepare($juruaudit);
$juruaudit->bindParam(':noId',$noId,PDO::PARAM_STR);
$juruaudit->bindParam(':pass',$pass,PDO::PARAM_STR);
$noId = $_POST['noId'];
$pass = $_POST['pass'];
$juruaudit->execute();
$result_juruaudit = $juruaudit->fetchAll();
//$row_juruaudit = mysql_fetch_array($result_staf);

//query for admin
$admin = $conn->prepare("SELECT * FROM admin WHERE staff_no = :noId AND staff_pass = :pass");
//$result_juruaudit =  $conn->prepare($juruaudit);
$admin->bindParam(':noId',$noId,PDO::PARAM_STR);
$admin->bindParam(':pass',$pass,PDO::PARAM_STR);
$noId = $_POST['noId'];
$pass =$_POST['pass'];
$admin->execute();
$result_admin = $admin->fetchAll();
/*$admin = "SELECT * FROM admin WHERE no_admin = '$noId'";
$result_admin = mysql_query($admin, $conn);
$row_admin = mysql_fetch_array($result_admin);*/

//pemohon
if($noId == $juruaudit['noId'])
{
  if($pass == $juruaudit['pass'])
  {
    
    //$_SESSION['id_pemohon'] = $id_pemohon;
    $_SESSION['nama_login'] = $result_juruaudit['staff_name'];

    /*echo ("<script type =\"text/javascript\">");
    echo ("alert('Anda Telah Berjaya Masuk Sebagai Pengguna.');");
    echo ("window.location=\"home.php\"");
    echo ("</script>");*/
    
    //echo $_SESSION['id_pemohon'];
    
  }
  else if($pass != $result_juruaudit['staff_pass'])
  {
    /*echo ("<script type =\"text/javascript\">");
     echo ("alert('Maaf, log masuk tidak berjaya. Sila cuba sekali lagi');");
     echo ("window.location=\"home.php\"");
     echo ("</script>");*/
  }
  
  } else if ($noId != $result_juruaudit['staff_no']){
    /*echo ("<script type =\"text/javascript\">");
     echo ("alert('Maaf, log masuk tidak berjaya. Sila cuba sekali lagi.');");
     echo ("window.location=\"home.php\"");
     echo ("</script>");*/
}
//admin
if($noId == $result_admin['staff_no'])
{
  if($pass == $result_admin['staff_pass'])
  {
    $_SESSION['nama_login'] = $result_admin['staff_name'];
    header("Location: home.php");
  }
  else if($pass != $result_admin['staff_pass'])
  {
     /*echo ("<script type =\"text/javascript\">");
     echo ("alert('Maaf, log masuk tidak berjaya. Sila cuba sekali lagi.');");
     echo ("window.location=\"home.php\"");
     echo ("</script>");*/
  }
  } else if ($noId != $result_admin['staff_no']){
    /*echo ("<script type =\"text/javascript\">");
    echo ("alert('Maaf, log masuk tidak berjaya. Sila cuba sekali lagi.');");
    echo ("window.location=\"home.php\"");
    echo ("</script>");*/
  
}

?>