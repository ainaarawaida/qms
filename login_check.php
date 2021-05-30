<?php
error_reporting(0);
include_once 'db.php';
session_start();

if(isset($_POST['login']))
{
	//$uid=$_POST["uid"];
	//$upass=$_POST["upass"];
	
	$admin=$conn->prepare("SELECT staff_no, staff_pass, staff_name FROM admin where staff_no =:uid AND staff_pass=:pass");
	$admin->bindParam(':uid',$uid,PDO::PARAM_STR);
	$admin->bindParam(':pass',$pass,PDO::PARAM_STR);
	$uid=$_POST['uid'];
	$pass=$_POST['pass'];
	$admin->execute();
	$result = $admin->fetchAll();
	//$result = $query->get_result();
	//$rowcount=mysql_num_rows($query);
	//if ($query==true) {
	if($admin->rowCount()>0){
		if($uid==$_POST['uid'] AND $pass==$_POST['pass']){

		$_SESSION["uid"] = $_POST["uid"];
		//$loginMsg="Anda Telah Berjaya Masuk Sebagai Pengguna!";
		//header("refresh:3;staff/admin/utama.php");
		//echo ("<script type =\"text/javascript\">");
		//echo ("alert('Anda Telah Berjaya Masuk Sebagai Pengguna.');");
		//echo ("window.location=\"staff/admin/utama.php\"");
		//echo ("</script>");
		header("location:staff/admin/utama.php");
	}
}
	else{

		echo ("<script type =\"text/javascript\">");
		echo ("alert('Maaf, log masuk tidak berjaya. Sila cuba sekali lagi.');");
 		echo ("window.location=\"login.php\"");
 		echo ("</script>");
 		//echo "your username and password is incorrect";
	}
	

}

if(isset($_POST['login']))
{
	//$uid=$_POST["uid"];
	//$upass=$_POST["upass"];
	
	$juruaudit=$conn->prepare("SELECT staff_no, staff_pass FROM juruaudit where staff_no =:uid AND staff_pass=:pass");
	$juruaudit->bindParam(':uid',$uid,PDO::PARAM_STR);
	$juruaudit->bindParam(':pass',$pass,PDO::PARAM_STR);
	$uid=$_POST['uid'];
	$pass=$_POST['pass'];
	$juruaudit->execute();
	$result1 = $juruaudit->fetchAll();

	if($juruaudit->rowCount()>0){
		if($uid==$_POST['uid'] AND $pass==$_POST['pass']){

		$_SESSION["uid"] = $_POST["uid"];
		
		header('location:staff/juruaudit/utama.php');
		//echo ("<script type =\"text/javascript\">");
		//echo ("alert('Anda Telah Berjaya Masuk Sebagai Pengguna.');");
		//echo ("window.location=\"staff/juruaudit/utama.php\"");
		//echo ("</script>");
	}
}
	else{

		echo ("<script type =\"text/javascript\">");
		echo ("alert('Maaf, log masuk tidak berjaya. Sila cuba sekali lagi.');");
 		echo ("window.location=\"login.php\"");
 		echo ("</script>");
		//echo "your username and password is incorrect";
	}
	

}

if(isset($_POST['login']))
{
	//$uid=$_POST["uid"];
	//$upass=$_POST["upass"];
	
	$ketua=$conn->prepare("SELECT staff_no, staff_pass FROM ketua_juruaudit where staff_no =:uid AND staff_pass=:pass");
	$ketua->bindParam(':uid',$uid,PDO::PARAM_STR);
	$ketua->bindParam(':pass',$pass,PDO::PARAM_STR);
	$uid=$_POST['uid'];
	$pass=$_POST['pass'];
	$ketua->execute();
	$result2 = $ketua->fetchAll();
	//$result = $query->get_result();
	//$rowcount=mysql_num_rows($query);
	//if ($query==true) {
	if($ketua->rowCount()>0){
		if($uid==$_POST['uid'] AND $pass==$_POST['pass']){
		//$uid=$result['uid'];
		//$upass=$result['upass'];
		//echo "abc";

		$_SESSION["uid"] = $_POST["uid"];
		//echo ("<script type =\"text/javascript\">");
		//echo "Anda Telah Berjaya Masuk Sebagai Pengguna.";
		//echo ("window.location=\"staff/ketuajuruaudit/utama.php\"");
		//echo ("</script>");
		header('location:staff/ketuajuruaudit/utama.php');
	}
}
	else{
	

		echo ("<script type =\"text/javascript\">");
		echo ("alert('Maaf, log masuk tidak berjaya. Sila cuba sekali lagi.');");
 		echo ("window.location=\"login.php\"");
 		echo ("</script>");	
	//echo "your username and password is incorrect";
	}
	

}

/*if(isset($_REQUEST["LogMasuk"]))
{
	$noId=$_REQUEST["noId"];
	$pass=$_REQUEST["pass"];
	$query=mysql_query("select * from admin where no_admin='$noId' && kata_laluanadmin='$pass'");
	$rowcount=mysql_num_rows($query);
	if ($rowcount==true) {
		$_SESSION["noId"]=$noId;
		header('location:adminHome.php');
	}
	else{
		echo "your username and password is wrong";
	}
}*/

