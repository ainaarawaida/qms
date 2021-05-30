<?php
include_once '../../db.php';
include_once 'session.php';
include_once 'updateAuditor.php';
?><!DOCTYPE html>
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


<img src="../../auditHeader.png" style="width:100% ">
<div><?php include_once 'navbar.php'; ?></div>
<br>
<br>
<div class="container">
  <table  align="center">
   <tr>
    <td align="center" width="1110px" style="height: 318px">
       <ul class="tab">
            <li><a href="utama.php" align="center" class="tablinks">LAMAN UTAMA</a></li>
            <li><a href="tambahaudit.php">TAMBAH JURUAUDIT</a></li>
            <li><a href="listAuditor.php">PROFIL JURUAUDIT</a></li>
            <li><a href="jadual.php">KEMASKINI JADUAL AUDIT</a></li>
            <li><a href="data.php">PAPAR DATA ANALITIK AUDIT</a></li>
            <li><a href="laporan.php">LAPORAN AUDIT</a></li>
          </ul>
      <!--<div class="tab" class="mainbox col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
       
  <button class="tablinks" onclick="openMenu(event, 'Menu')" id="defaultOpen">LAMAN UTAMA</button>
  <button class="tablinks" onclick="openMenu(event, 'Tambah')">TAMBAH JURUAUDIT</button>
  <button class="tablinks" onclick="openMenu(event, 'Jadual')">PROFIL JURUAUDIT</button>
  <button class="tablinks" onclick="openMenu(event, 'Laporan')">KEMASKINI JADUAL AUDIT</button>
  <button class="tablinks" onclick="openMenu(event, 'Laporan')">PAPAR DATA ANALITIK AUDIT</button>
  <button class="tablinks" onclick="openMenu(event, 'Laporan')">LAPORAN AUDIT</button>
</div>-->
<div id="Menu" class="tabcontent" style="height: 600px">
  <h3>PROFIL JURUAUDIT</h3>
  <form  action="updateAuditor.php" method="POST">
    <!--<table width="428" border="0">
        <tr>
          <td width="70"><img src="icon/form.jpg" width="60" height="50" /></td>
          <td>
             <div class="form-group">
          <label for="image" class="col-sm-3 control-label">Gambar Peralatan</label>
          <div class="col-sm-9">
          <input name="image" type="text" class="form-control" id="image" placeholder="File Gambar" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_eq_image']; ?>" required>
        </div>
      </div>
          </td>
          <td width="348"><span class="style64">Sila kemaskini maklumat peribadi anda</span></td>
        </tr>
      </table>-->
  <table width="650" height="381" border="0">
    <tr>
      <td></td>
    </tr>
    <!--<tr>
      <td width="225"><span class="style50">No. Kad Pengenalan</span></td>
      <td width="7"><span class="style50">:</span></td>
      <td><input name="staff_name" type="text" id="staff_name" value="" size="30" maxlength="30" /></td>
    </tr>-->
    <tr>
      <td><span class="style50">Nama Staf</span></td>
      <td><span class="style50">:</span></td>
      <td><input type="text" name="staff_name" class="form-control" value="<?php if (isset($_GET['edit'])) echo $editrow['staff_name']; ?>"></td>
      <!--<td><span class="style56"><?php// echo $row['nama_staf'];?></span></td>-->
    </tr>
    <tr>
      <td><span class="style50">No. Staf</span></td>
      <td><span class="style50">:</span></td>
      <td><input type="text" name="staff_no" class="form-control" value="<?php if (isset($_GET['edit'])) echo $editrow['staff_no']; ?>"></td>
    </tr>
    <tr>
      <td><span class="style50">No. Telefon</span></td>
      <td><span class="style50">:</span></td>
      <td><input type="text" name="staff_noTel" class="form-control" pattern="\+60\d{2}-\d{7}" value="<?php if (isset($_GET['edit'])) echo $editrow['staff_noTel']; ?>"></td>
      <!--<td><input name="" type="text" id="no_telefon" value="<?php echo $row[''];?>" size="10" maxlength="10" /><span class="style53">( cth : 01234567891 )</span></td>-->
    </tr>
    <tr>
      <td><span class="style50">Emel</span></td>
      <td><span class="style50">:</span></td>
      <td><input type="text" name="staff_email" class="form-control" value="<?php if (isset($_GET['edit'])) echo $editrow['staff_email']; ?>"></td>
    </tr>
    <!--<tr>
      <td><span class="style50">Kata Laluan</span></td>
      <td><span class="style50">:</span></td>
      <td><input name="Staff_pass" type="password"value="" maxlength="10" /><input type="hidden" name="form_validation_rules" value="" />
      <span class="style53">( maksimum 15 karakter )</span></td>
    </tr>-->
    <!--<tr>
      <td><span class="style50">Pengesahan Kata Laluan</span></td>
      <td><span class="style50">:</span></td>
      <td><input name="pengesahan_kata_laluanstaf" type="password" id="" value=""  maxlength="10" /><span class="style53">( maksimum 15 karakter )</span></td>
      <td>
        <tr>-->
          <tr>
            <td colspan="3"><div align="right">
              <!--<input name="staff_no" type="hidden" value="" />-->
            <!--<input type="submit" class="button" onclick="confirmation()" name="tambah" value="Tambah" />-->
            <?php if (isset($_GET['edit'])) { ?>
              <input type="hidden" name="oldstaff_no" value="<?php echo $editrow['staff_no']; ?>">
            <!--<input type="submit" class="button" name="update" value="Kemaskini" />-->
          <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon" aria-hidden="true"></span> Kemaskini</button><?php } ?>
            <button class="btn btn-default" type="reset" name="reset"><span class="glyphicon glyphiconr" aria-hidden="true"></span><a href="listAuditor.php">Kembali</a></button>
            </div>
            </td>          
        </tr>
  </table>
  </form>
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
