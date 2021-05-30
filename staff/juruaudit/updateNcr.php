<?php
include_once '../../db.php';
include_once 'session.php';
//include_once 'insertNcr.php';
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
            <li><a href="profil.php">PROFIL DIRI</a></li>
            <li><a href="penemuan.php">SEMAK MAKLUMAT PENEMUAN</a></li>
            <li><a href="jadual.php">JADUAL AUDIT</a></li>
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
  <h3>DRAF BORANG NCR</h3>
  <div class="panel-body">
    <div class="table-responsive">
      <form method="POST">
        <table>
          <?php
          try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM ncr WHERE no_id = :no_id");
      $stmt->bindParam(':no_id', $no_id, PDO::PARAM_INT);
      $no_id = $_GET['no_id'];
      $stmt->execute();
      $readrow = $stmt->fetch(PDO::FETCH_ASSOC);
      }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
          ?>
        <tr><td><input class="form-control" name="staff_no" type="hidden" value="<?php echo $readrow['staff_no']; ?>" readonly/><input type="hidden" id="no_id" value="<?php echo $readrow['no_id']; ?>"/></td></tr>
      </table>
        <br>
        <table  width="9px"class="table table-striped table-bordered">
    <tr>
      <th>No. Audit : <input type="text" class="form-control" id="no_audit" name="no_audit" value="<?php echo $readrow['no_audit']; ?>" ></th>
      <th>Tarikh Audit: <input type="text" class="form-control" id="tarikh_audit" name="tarikh_audit" size="10" maxlength="10" value="<?php echo $readrow['tarikh_audit']; ?>" />
          
          <img src="cal.gif" onclick="javascript:NewCssCal('tarikh_pinjam','yyyyMMdd','arrow',false,'24','','future')" style="cursor:pointer"/>
        </th>
      <th>No. NCR: <input type="text" class="form-control" id="no_ncr" name="no_ncr" value="<?php echo $readrow['no_ncr']; ?>"></th>
      
    </tr>
    <tr>
      <td>MS ISO 9001: <input type="text" class="form-control" id="iso" name="iso" value="<?php echo $readrow['iso']; ?>"></td>
      <td>Pusat Pengajian /Jabatan / Unit yang diaudit: <input type="text" class="form-control" id="jabatan_unit" name="jabatan_unit" value="<?php echo $readrow['jabatan_unit']; ?>"></td>
      <td>Dokumen yang diaudit yang menimbulkan ketakakuran: <input type="text" class="form-control" id="dokumen" name="dokumen" value="<?php echo $readrow['dokumen']; ?>"></td>
    </tr>
    <tr>
      <th colspan="4">Ketakakuran yang ditemui</th></tr>
    <tr>
      <td>Keperluan:</td>
      <td colspan="3"><textarea id="keperluan" name="keperluan"  cols="50" rows="5" placeholder="" class="form-control" value="<?php echo $readrow['keperluan']; ?>" required><?php echo $readrow['keperluan']; ?></textarea></td>
    </tr>
    <tr>
      <td>Penemuan:</td>
      <td colspan="3"><textarea id="penemuan" name="penemuan" cols="50" rows="5" placeholder="" class="form-control" value="<?php echo $readrow['penemuan']; ?>" required><?php echo $readrow['penemuan']; ?></textarea></td>
    </tr>
    <tr>
      <td>Bukti Objektif:</td>
      <td colspan="3"><textarea id="bukti_objektif" name="bukti_objektif" cols="50" rows="5" placeholder="" class="form-control" value="<?php echo $readrow['bukti_objektif']; ?>" required><?php echo $readrow['bukti_objektif']; ?></textarea></td>
    </tr>
    

  </table>
  <!--div align="right"><input type="submit" class="button" name="tambah" value="Hantar" /></div>-->
  <div id="result"></div>
  <button type="button" id="save" class="btn btn-primary"></span>Hantar</button>
  <!--<?php if (isset($_GET['edit'])) { ?>
              <input type="hidden" name="oldno_ncr" value="<?php echo $editrow['no_ncr']; ?>">
          <div align="right"><input type="submit" class="button" name="update" value="Simpan" /></div>
 <?php } ?>-->
  
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
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/script.js"></script>
<!--<script type="text/javascript" src="../../jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../savy.min.js"></script>
<script type="text/javascript">

$('.auto-save').savy('load',function(){
  console.log("All data from savy are loaded");
});
</script>-->