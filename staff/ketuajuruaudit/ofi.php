<?php
include_once '../../db.php';
include_once 'session.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <script type="text/javascript" src="datetimepicker_css.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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
<title>Borang OFI</title>
<body style="background-color: #d8d8d9; ">


<img src="../../auditHeader.png" style="width:100% ">
<div><?php include_once 'navbar.php'; ?></div>
<br>
<br>
<div class="container">
  <table  align="center">
   <tr>
    <td align="center" width="1110px" style="height: 318px">
       <ul class="tab">
            <li><a href="utama.php" align="center">LAMAN UTAMA</a></li>
            <li><a href="penemuan.php">SEMAK MAKLUMAT PENEMUAN</a></li>
            <li><a href="tindakan.php">SEMAK MAKLUMAT TINDAKAN</a></li>
            <li><a href="jadual.php">JADUAL AUDIT</a></li>
            <li><a href="data.php">DATA ANALITIK AUDIT</a></li>
            <li><a href="laporan.php">LAPORAN AUDIT</a></li>
          </ul>
<div id="Menu" class="tabcontent" style="height: 800px">
  <h3>Borang OFI</h3>
  <div class="panel-body">
    <div class="table-responsive">
      <form method="POST">
        <table>
        <tr><td><input class="form-control" name="staff_no" id="staff_no" type="hidden" value="<?php echo $readrow['staff_no']; ?>" readonly/><input type="hidden" id="no_id"/></td></tr>
      </table>
        <br>
        <table  width="9px"class="table table-striped table-bordered">
    <tr>
      <th>Bil.</th>
      <th>Klausa</th>
      <th>Perincian</th>
      <th>Tindakan Susulan</th>
      <th>Tarikh Tindakan</th>
      
    </tr>
    <?php 
    if(isset($_GET['ofi_id'])){ 
      include_once '../../conn.php';
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
        <td><input type="text" readonly value="<?php echo isset($rowdata['susulan'][$key]) ? $rowdata['susulan'][$key] : '' ; ?>" name="susulan[<?php echo $key ; ?>]"></td>
        <td><input type="date" readonly value="<?php echo isset($rowdata['tarikh_tindakan'][$key]) ? $rowdata['tarikh_tindakan'][$key] : '' ; ?>" name="tarikh_tindakan[<?php echo $key ; ?>]"></td>
      </tr>
    <?php 
      }}
      }else{ 
        
    ?>
    <tr class="datatable" >
      <td><input type="hidden" value="1" name="bil[1]">1</td>
      <td><input type="text" value="" name="klausa[1]"></td>
      <td><input type="text" value="" name="perincian[1]"></td>
      <td><input type="text" readonly value="" name="susulan[1]"></td>
      <td><input type="date" readonly value="" name="tarikh_tindakan[1]"></td>
    </tr>
    <?php } ?>
    <tr  id="datatable">
      <th colspan=5><a id="target" type="button"class="btn btn-primary">Tambah</a></th>
    </tr>
    

  </table>
  

      Nama Juruaudit: <?php echo $name ?>
  <div id="result"></div>
  <!--<div align="right"><input type="submit" class="button" name="tambah" value="Hantar" /></div>
  <div align="right"><input type="submit" class="button" name="simpan" value="Simpan" /></div>-->
  <input type="submit" name="Simpan" class="btn btn-primary" value="Simpan" >
  <input type="submit" name="Hantar" class="btn btn-primary" value="Hantar">
  <?php
   include_once '../../conn.php';
   $sql = "SELECT * FROM `auditee` ";
   $result = $conn->query($sql);
  
  ?>
  <select class="js-example-basic-single" name="hantar_ke" style="width:20%;">
  <?php while($row = $result->fetch_assoc()) { ?>
    <option value="<?php echo $row['auditee_no'] ; ?>"><?php echo $row['auditee_name'] ."-" .$row['jabatan_unit'] ; ?></option>
  <?php } ?>
   
  </select>
  
      </form>
</div>
</div>
  
</div>
    </td>
  </tr>
</table>
</div>   
</body>
</html>

<!--<script type="text/javascript" src="../../jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../savy.min.js"></script>
<script type="text/javascript">

$('.auto-save').savy('load',function(){
  console.log("All data from savy are loaded");
});
</script>-->

<script type="text/javascript">

$( document ).ready(function() {

  $( "#target" ).click(function() {
    var numItems = $('.datatable').length
    var rownum = numItems + 1 
    $('#datatable').before('<tr class="datatable">' 
      + '<td><input type="hidden" value="'+rownum+'" name="bil['+rownum+']">'+rownum+'</td>'
      + '<td><input type="text" value="" name="klausa['+rownum+']"></td>'
      + '<td><input type="text" value="" name="perincian['+rownum+']"></td>'
      + '<td><input readonly type="text" value="" name="tindakan_susulan['+rownum+']"></td>'
      + '<td><input readonly type="date" value="" name="tarikh_tindakan['+rownum+']"></td>'
    + '</tr>');
});
  
});


$(document).ready(function() {
 
    $('.js-example-basic-single').select2();
});

</script>


<?php

if($_POST){
  //print_r("<pre>"); print_r($_POST);exit();
  $_POST['user_type'] = 'ketuajuruaudit' ; 
  include_once '../../conn.php';
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




