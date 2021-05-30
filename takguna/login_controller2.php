<?php
require_once("dbcon.php");
$conn = db_conn();

session_start();

if(isset($_POST['btn_login']))
{
  try{
    $admin=$conn->prepare("SELECT staff_no, staff_pass FROM admin WHERE staff_no = :staff_no AND staff_pass = :pass");
    $admin->bindParam(':staff_no',$staff_no,PDO::PARAM_STR);
    $admin->bindParam(':pass',$pass,PDO::PARAM_STR);

    $staff_no = $_POST['staff_no'];
    $pass = $_POST['pass'];
    $admin->execute();
    $row_admin = $admin->fetchAll();

    $juruaudit=$conn->prepare("SELECT staff_no, staff_pass FROM juruaudit WHERE staff_no = :staff_no AND staff_pass = :pass");
    $juruaudit->bindParam(':staff_no',$staff_no,PDO::PARAM_STR);
    $juruaudit->bindParam(':pass',$pass,PDO::PARAM_STR);

    $staff_no = $_POST['staff_no'];
    $pass = $_POST['pass'];
    $juruaudit->execute();
    $row_juruaudit = $juruaudit->fetchAll();

  }
}



//query for admin
$admin = "SELECT * FROM admin WHERE staff_no = '$staff_no'";
$staff_no = $_POST['staff_no'];
$row_admin = $stmt->fetchAll();

//query for juruaudit
$juruaudit = "SELECT * FROM juruaudit WHERE staff_no = '$staff_no'";
$staff_no = $_POST['staff_no'];
$row_juruaudit = $stmt->fetchAll();

//query for ketua juruaudit
$ketuajuruaudit = "SELECT * FROM ketua_juruaudit WHERE staff_no = '$staff_no'";
$staff_no = $_POST['staff_no'];
$row_ketuajuruaudit = $stmt->fetchAll();

//pemohon
if($staff_no == $row_staf['staff_no'])
{
  if($pass == $row_staf['kata_laluanstaf'])
  {
    
    //$_SESSION['id_pemohon'] = $id_pemohon;
    $_SESSION['nama_login'] = $row_staf['nama_staf'];

    echo ("<script type =\"text/javascript\">");
    echo ("alert('Anda Telah Berjaya Masuk Sebagai Pengguna.');");
    echo ("window.location=\"userHome.php\"");
    echo ("</script>");
    
    //echo $_SESSION['id_pemohon'];
    
  }
  else if($pass != $row_staf['kata_laluanstaf'])
  {
       echo ("<script type =\"text/javascript\">");
     echo ("alert('Maaf, log masuk tidak berjaya. Sila cuba sekali lagi');");
     echo ("window.location=\"index.php\"");
     echo ("</script>");
  }
  
  } else if ($noId != $row_staf['no_staf']){
    echo ("<script type =\"text/javascript\">");
     echo ("alert('Maaf, log masuk tidak berjaya. Sila cuba sekali lagi.');");
     echo ("window.location=\"index.php\"");
     echo ("</script>");
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