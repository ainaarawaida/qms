<?php
require_once 'db.php';
session_start();

if(isset($_POST['login']))
{
	//$uid=$_POST["uid"];
	//$upass=$_POST["upass"];
	
	$admin=$conn->prepare("SELECT staff_no, staff_pass FROM admin where staff_no =:uid AND staff_pass=:upass");
	$admin->bindParam(':uid',$uid,PDO::PARAM_STR);
	$admin->bindParam(':upass',$upass,PDO::PARAM_STR);
	$uid=$_POST['uid'];
	$upass=$_POST['upass'];
	$admin->execute();
	$result = $admin->fetchAll();
	//$result = $query->get_result();
	//$rowcount=mysql_num_rows($query);
	//if ($query==true) {
	if($admin->rowCount()>0){
		if($uid==$_POST['uid'] AND $upass==$_POST['upass']){
		//$uid=$result['uid'];
		//$upass=$result['upass'];
		//echo "abc";

		echo ("<script type =\"text/javascript\">");
		echo ("alert('Anda Telah Berjaya Masuk Sebagai Pentadbir.');");
		echo ("window.location=\"staff/admin/home.php\"");
		echo ("</script>");
		//header('location:staff/admin/adminHome.php');
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
	
	$juruaudit=$conn->prepare("SELECT staff_no, staff_pass FROM juruaudit where staff_no =:uid AND staff_pass=:upass");
	$juruaudit->bindParam(':uid',$uid,PDO::PARAM_STR);
	$juruaudit->bindParam(':upass',$upass,PDO::PARAM_STR);
	$uid=$_POST['uid'];
	$upass=$_POST['upass'];
	$juruaudit->execute();
	$result1 = $juruaudit->fetchAll();
	//$result = $query->get_result();
	//$rowcount=mysql_num_rows($query);
	//if ($query==true) {
	if($juruaudit->rowCount()>0){
		if($uid==$_POST['uid'] AND $upass==$_POST['upass']){
		//$uid=$result['uid'];
		//$upass=$result['upass'];
		//echo "abc";

		echo ("<script type =\"text/javascript\">");
		echo ("alert('Anda Telah Berjaya Masuk Sebagai Juruaudit.');");
		echo ("window.location=\"staff/juruaudit/home.php\"");
		echo ("</script>");
		//header('location:staff/juruaudit/juruauditHome.php');
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
	
	$ketua=$conn->prepare("SELECT staff_no, staff_pass FROM ketua_juruaudit where staff_no =:uid AND staff_pass=:upass");
	$ketua->bindParam(':uid',$uid,PDO::PARAM_STR);
	$ketua->bindParam(':upass',$upass,PDO::PARAM_STR);
	$uid=$_POST['uid'];
	$upass=$_POST['upass'];
	$ketua->execute();
	$result2 = $ketua->fetchAll();
	//$result = $query->get_result();
	//$rowcount=mysql_num_rows($query);
	//if ($query==true) {
	if($ketua->rowCount()>0){
		if($uid==$_POST['uid'] AND $upass==$_POST['upass']){
		//$uid=$result['uid'];
		//$upass=$result['upass'];
		//echo "abc";

		echo ("<script type =\"text/javascript\">");
		echo ("alert('Anda Telah Berjaya Masuk Sebagai Ketua Juruaudit.');");
		echo ("window.location=\"staff/ketuajuruaudit/home.php\"");
		echo ("</script>");
		//header('location:staff/ketuajuruaudit/home.php');
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

