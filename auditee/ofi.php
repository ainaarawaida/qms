<?php
include_once '../db.php';
include_once 'session.php';
?>
<!DOCTYPE html>
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
<title>Laman Utama</title>
<body style="background-color: #d8d8d9; ">

<img src="../auditHeader.png" style="width:100% ">
<div><?php include_once 'navbar.php'; ?></div>
<div class="container">
  <table  align="center">
  <tr>
    <td align="center" width="1110px" style="height: 318px">
       <ul class="tab">
            <li><a href="utama.php" align="center">LAMAN UTAMA</a></li>
            <li><a href="tindakan.php">KEMASKINI TINDAKAN SUSULAN</a></li>
          </ul>
      <!--<div class="tab" class="mainbox col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
       
  <button class="tablinks" onclick="openMenu(event, 'Menu')" id="defaultOpen">LAMAN UTAMA</button>
  <button class="tablinks" onclick="openMenu(event, 'Tambah')">TAMBAH JURUAUDIT</button>
  <button class="tablinks" onclick="openMenu(event, 'Jadual')">PROFIL JURUAUDIT</button>
  <button class="tablinks" onclick="openMenu(event, 'Laporan')">KEMASKINI JADUAL AUDIT</button>
  <button class="tablinks" onclick="openMenu(event, 'Laporan')">PAPAR DATA ANALITIK AUDIT</button>
  <button class="tablinks" onclick="openMenu(event, 'Laporan')">LAPORAN AUDIT</button>
</div>-->
<div id="Menu" class="tabcontent" style="height: 600px;">
  <h3>LAMAN UTAMA</h3>
  <div align="justify">
   
   
  <form method="POST">
        <table>
        <tr><td><input class="form-control" name="staff_no" id="staff_no" type="hidden" value="<?php echo $readrow['staff_no']; ?>" readonly/><input type="hidden" id="no_id"/></td></tr>
      </table>
        <br>
        <table  width="100%" class=" table-striped ">
    <tr>
      <th>Bil.</th>
      <th>Klausa</th>
      <th>Perincian</th>
      <th>Tindakan Susulan</th>
      <th>Tarikh Tindakan</th>
      
    </tr>
    <?php 
    if(isset($_GET['ofi_id'])){ 
      include_once '../conn.php';
      $sql = "SELECT * FROM `ofi` WHERE no_id ='".$_GET['ofi_id']."'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc() ;
      $rowdata = unserialize($row['data']);
     
      if ($result->num_rows > 0) {
      foreach($rowdata['bil'] AS $key) {
        
    ?>
      <input type="hidden" name="no_id" value ="<?php echo $_GET['ofi_id'] ; ?>" >

      <tr class="datatable" >
        <td><input type="hidden" value="<?php echo $key ; ?>" name="bil[<?php echo $key ; ?>]"><?php echo $key ; ?></td>
        <td><input type="text" value="<?php echo isset($rowdata['klausa'][$key]) ? $rowdata['klausa'][$key] : '' ; ?>" name="klausa[<?php echo $key ; ?>]"></td>
        <td><input type="text" value="<?php echo isset($rowdata['perincian'][$key]) ? $rowdata['perincian'][$key] : '' ; ?>" name="perincian[<?php echo $key ; ?>]"></td>
        <td><input type="text"  value="<?php echo isset($rowdata['susulan'][$key]) ? $rowdata['susulan'][$key] : '' ; ?>" name="susulan[<?php echo $key ; ?>]"></td>
        <td><input type="date"  value="<?php echo isset($rowdata['tarikh_tindakan'][$key]) ? $rowdata['tarikh_tindakan'][$key] : '' ; ?>" name="tarikh_tindakan[<?php echo $key ; ?>]"></td>
      </tr>
    <?php 
      }}
      }else{ 
        
    ?>
    <tr class="datatable" >
      <td><input type="hidden" value="1" name="bil[1]">1</td>
      <td><input type="text" value="" name="klausa[1]"></td>
      <td><input type="text" value="" name="perincian[1]"></td>
      <td><input type="text"  value="" name="susulan[1]"></td>
      <td><input type="date"  value="" name="tarikh_tindakan[1]"></td>
    </tr>
    <?php } ?>
    <tr  id="datatable">
      <th colspan=5>&nbsp;</th>
    </tr>
    

  </table>
  

      Nama Auditee: <?php echo $name ?>
  <div id="result"></div>
  <!--<div align="right"><input type="submit" class="button" name="tambah" value="Hantar" /></div>
  <div align="right"><input type="submit" class="button" name="simpan" value="Simpan" /></div>-->
  <input type="submit" name="Simpan" class="btn btn-primary" value="Simpan" >
  <input type="submit" name="Hantar" class="btn btn-primary" value="Hantar">
  
  
      </form>






  </div>
</div>

<!--<div id="Tambah" class="tabcontent">
  <h3>Tambah Juruaudit</h3>
  <p>dsdkjadknsa</p>
</div>

<div id="Jadual" class="tabcontent">
  <h3>Jadual Audit</h3>
  <p></p> 
</div>

<div id="Laporan" class="tabcontent">
  <h3>Laporan Audit</h3>
  <p></p>
</div>-->
    </td>
  </tr>
</table>
</div>

<script>
function openMenu(evt, menu) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(menu).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html>


<?php

if($_POST){
  //print_r("<pre>"); print_r($_POST);exit();
  $_POST['user_type'] = 'auditee' ; 
  include_once '../conn.php';
  $datax = serialize($_POST) ; 
  if(isset($_POST['no_id'])){
    if(isset($_POST['Simpan'])){
      $sql = "UPDATE `ofi` SET status ='draf', data='".$datax."', hantar_ke ='".$_POST['hantar_ke']."' WHERE no_id='".$_POST['no_id']."'";
      $conn->query($sql);
    }else{
      $sql = "UPDATE `ofi` SET status ='post', data='".$datax."', hantar_ke ='".$_POST['hantar_ke']."' WHERE no_id='".$_POST['no_id']."'";
      $conn->query($sql);
    }
  }else{
    $_POST['hantar_ke'] = $readrow['staff_no']; 

    if(isset($_POST['Simpan'])){
      $conn->query("INSERT INTO `ofi` VALUE('', '', '','','','','draf','".$_POST['staff_no']."', '".$datax."','".$_POST['user_type']."','".$_POST['hantar_ke']."')");
    }else{
      $conn->query("INSERT INTO `ofi` VALUE('', '', '','','','','post','".$_POST['staff_no']."', '".$datax."','".$_POST['user_type']."','".$_POST['hantar_ke']."')");
    
    }
  }
  
  //$baseurl = $_SERVER['SERVER_NAME']."/staff/ketuajuruaudit/listOfi.php"  ; 
  //print_r($baseurl);exit();
  echo "<script>window.location = 'listOfi.php'</script>";
}

?>
