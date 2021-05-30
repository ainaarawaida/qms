<?php  
 require_once 'db.php';
 session_start();
 
 if(isset($_POST['login']))
{
  //$uid=$_POST["uid"];
  //$upass=$_POST["upass"];
  
  $auditee=$conn->prepare("SELECT auditee_no, auditee_pass FROM auditee where auditee_no =:uid AND auditee_pass=:upass");
  $auditee->bindParam(':uid',$uid,PDO::PARAM_STR);
  $auditee->bindParam(':upass',$upass,PDO::PARAM_STR);
  $uid=$_POST['uid'];
  $upass=$_POST['upass'];
  $auditee->execute();
  $result = $auditee->fetchAll();
  //$result = $query->get_result();
  //$rowcount=mysql_num_rows($query);
  //if ($query==true) {
  if($auditee->rowCount()>0){
    if($uid==$_POST['uid'] AND $upass==$_POST['upass']){
    //$uid=$result['uid'];
    //$upass=$result['upass'];
    //echo "abc";
    $_SESSION["uid"] = $_POST["uid"];
    //echo ("<script type =\"text/javascript\">");
    //echo ("alert('Anda Telah Berjaya Masuk Sebagai Auditee.');");
    //echo ("window.location=\"utama.php\"");
    //echo ("</script>");
    header('location:utama.php');
  }
}
  else{

    echo ("<script type =\"text/javascript\">");
    echo ("alert('Maaf, log masuk tidak berjaya. Sila cuba sekali lagi.');");
    echo ("window.location=\"main.php\"");
    echo ("</script>");
    //echo "your username and password is incorrect";
  }
  

}


 ?> 