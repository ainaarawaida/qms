<?php
require_once("../../db.php");
include_once 'session.php';

 if (count($_POST) > 0) {
    if ($_POST["currentPassword"] === $pass ) {
         $stmt= $conn->prepare ( "UPDATE admin set staff_pass= :confirmPassword WHERE staff_no = '$uid'");
        
        
         $stmt->bindParam(':confirmPassword', $confirmPassword, PDO::PARAM_STR);
         
         
         $confirmPassword = $_POST['confirmPassword'];
         
         $stmt->execute();
        echo '<script type="text/javascript">'; 
    echo 'alert("Kemaskini katalaluan berjaya!");'; 
    echo 'window.location.href = "utama.php";';
    echo '</script>';

    } else
          echo '<script type="text/javascript">'; 
      echo 'alert("Katalaluan tidak sah!");';
      echo 'window.location.href = "changepass.php";'; 
      echo '</script>';
}
?>

<html>
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
 /* float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: ;*/

  float: left; /* since this element is floated, a width must be given */
  width: 20%;
  /*width: 16px;*/
  padding-right: 0px;
  /*padding-bottom: 15px;*/
  padding-left: 0px;
  background-color: #f1f1f1;

  /*padding-top: 35px;*/
}

/* Style the buttons inside the tab */
.tab li {
  display: block;
  background-color: inherit;
  color: #000000;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab li:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab li.active {
background-color: white;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  background-color: white;
  /*border: 1px solid #ccc;*/
  width: 70%;
  border-left: none;
  
}
</style>
</head>
<title>Tukar Katalaluan</title>
<body>
<img src="../../auditHeader.png" style="width:100% ">
<div><?php include_once 'navbar.php'; ?></div>
<div class="container" style="width:500px;">  

<?php if(isset($message)) {  
  echo '<label class="text-danger">'.$message.'</label>'; 
} ?>

  <h3 align=""><span class="glyphicon glyphicon-pencil"></span>  Tukar Katalaluan</h3><br />  
  
<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">

<label>Katalaluan Lama</label>
<input type="password" name="currentPassword" class="form-control"/><span id="currentPassword"  class="required"></span>
<br />
<label>Katalaluan Baru</label>
<input type="password" name="newPassword" class="form-control"/><span id="newPassword" class="required"></span>
<br /><br>
<label>Pengesahan Katalaluan</label></td>
<input type="password" name="confirmPassword" class="form-control"/><span id="confirmPassword" class="required"></span>
<br />
<input type="submit" name="submit" value="Tukar" class="btn btn-primary">

</form>
</div>
</body>
</html>

<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "wajib";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "wajib";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "wajib";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "tidak sama!";
output = false;
}   
return output;
}
</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet"> 
             <script src="js/bootstrap.min.js"></script>  