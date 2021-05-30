<?php  

 include_once 'db.php';
 session_start();


      if(isset($_POST["login"]))  
      {
      	try
      	{

      		$juruaudit = $conn->prepare("SELECT * FROM juruaudit WHERE staff_no = :noId AND staff_pass = :pass");
//$result_juruaudit =  $conn->prepare($juruaudit);
$juruaudit->bindParam(':noId',$noId,PDO::PARAM_STR);
$juruaudit->bindParam(':pass',$pass,PDO::PARAM_STR);
$noId = $_POST['noId'];
$pass = $_POST['pass'];
$juruaudit->execute();
$result_juruaudit = $juruaudit->fetchAll();


if(isset($_POST["noId"])==$noId)
{
  if($pass == $result_juruaudit['pass'])
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
  
  }


      }
 }


 ?>