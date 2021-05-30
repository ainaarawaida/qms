<?php
require_once("db.php");
 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$conn = db_conn();

session_start();
$staff_no = $_POST['staff_no'];
$pass = $_POST['pass'];
$_SESSION['staff_no'] = $staff_no;


//query for admin
$admin = $conn->prepare("SELECT * FROM admin WHERE staff_no = '$staff_no'"); 
$staff_no = $_POST['staff_no'];
$row_admin = $admin->fetch(PDO::FETCH_ASSOC);

//query for juruaudit
$juruaudit = $conn->prepare("SELECT * FROM juruaudit WHERE staff_no = '$staff_no'");
$staff_no = $_POST['staff_no'];
$juruaudit->execute();
$row_juruaudit = $juruaudit->fetch(PDO::FETCH_ASSOC);

//query for ketua juruaudit
$ketuajuruaudit = $conn->prepare("SELECT * FROM ketua_juruaudit WHERE staff_no = '$staff_no'");
$staff_no = $_POST['staff_no'];
$row_ketuajuruaudit = $ketuajuruaudit->fetch(PDO::FETCH_ASSOC);

//pemohon
if($staff_no == $row_juruaudit['staff_no'])
{
  if($pass == $row_juruaudit['staff_pass'])
  {
    
    //$_SESSION['id_pemohon'] = $id_pemohon;
    $_SESSION['nama_login'] = $row_juruaudit['nama_staf'];

    //echo ("<script type =\"text/javascript\">");
    //echo ("alert('Anda Telah Berjaya Masuk Sebagai Pengguna.');");
    //echo ("window.location=\"home.php\"");
    //echo ("</script>");
    
    //echo $_SESSION['id_pemohon'];
    
  }
  else if($pass != $row_juruaudit['staff_pass'])
  {
      // echo ("<script type =\"text/javascript\">");
     //echo ("alert('Maaf, log masuk tidak berjaya. Sila cuba sekali lagi');");
     //echo ("window.location=\"login.php\"");
     //echo ("</script>");
  }
  
  } else if ($staff_no != $row_juruaudit['staff_no']){
    //echo ("<script type =\"text/javascript\">");
    // echo ("alert('Maaf, log masuk tidak berjaya. Sila cuba sekali lagi.');");
     //echo ("window.location=\"login.php\"");
    // echo ("</script>");
}
//admin
if($noId == $row_admin['no_admin'])
{
  if($pass == $row_admin['kata_laluanadmin'])
  {
    $_SESSION['nama_login'] = $row_admin['nama_admin'];
    header("Location: adminHome.php");
  }
  else if($pass != $row_admin['kata_laluanadmmin'])
  {
     echo ("<script type =\"text/javascript\">");
     echo ("alert('Maaf, log masuk tidak berjaya. Sila cuba sekali lagi.');");
     echo ("window.location=\"index.php\"");
     echo ("</script>");
  }
  } else if ($noId != $row_admin['no_admin']){
    echo ("<script type =\"text/javascript\">");
    echo ("alert('Maaf, log masuk tidak berjaya. Sila cuba sekali lagi.');");
    echo ("window.location=\"index.php\"");
    echo ("</script>");
  
}

?>