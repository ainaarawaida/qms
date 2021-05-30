<?php
include_once '../../db.php';
include_once 'session.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <script type="text/javascript" src="datetimepicker_css.js"></script>
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
<title>Borang NCR</title>
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
<div id="Menu" class="tabcontent" style="height: 800px">
  <h3>Borang NCR</h3>
  <div class="panel-body">
    <div class="table-responsive">
      <form method="POST">
        <table>
        <tr><td><input class="form-control" id="staff_no" type="hidden" value="<?php echo $readrow['staff_no']; ?>" readonly/><input type="hidden" id="no_id"/></td></tr>
      </table>
        <br>
       <div id="Menu" class="tabcontent" style="height: 800px">
  <h3>Borang NCR</h3>
  <div align="justify">
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

        <tr><td><input class="form-control" id="staff_no" type="hidden" value="<?php echo $readrow['staff_no']; ?>" readonly/></td></tr>
      </table>
      <br>
        <table  width="9px"class="table table-striped table-bordered">
    <tr>
      <th>No. Audit : <?php echo $readrow['no_audit']; ?><input type="hidden" class="form-control" id="no_audit" value="<?php echo $readrow['no_audit']; ?>" readonly></th>
      <th>Tarikh Audit: <?php echo $readrow['tarikh_audit']; ?><input type="hidden" class="form-control" id="tarikh_audit" size="10" maxlength="10"value="<?php echo $readrow['tarikh_audit']; ?>" required/>
        </th>
      <th>No. NCR: <?php echo $readrow['no_ncr']; ?><input type="hidden" class="form-control" id="no_ncr" value="<?php echo $readrow['no_ncr']; ?>" required></th>
    </tr>
    <tr>
      <td>MS ISO 9001: <?php echo $readrow['iso']; ?><input type="hidden" class="form-control" id="iso" value="<?php echo $readrow['iso']; ?>" required></td>
      <td>Pusat Pengajian /Jabatan / Unit yang diaudit:<?php echo $readrow['jabatan_unit']; ?><input type="hidden" class="form-control" id="jabatan_unit" value="<?php echo $readrow['jabatan_unit']; ?>" required><input type="hidden" id="no_id" value="<?php echo $readrow['no_id']; ?>"/></td>
      <td>Dokumen yang diaudit yang menimbulkan ketakakuran:<?php echo $readrow['dokumen']; ?><input type="hidden" class="form-control" id="dokumen" value="<?php echo $readrow['dokumen']; ?>" required></td>
    </tr>
    <tr>
      <td colspan="4">Ketakakuran yang ditemui</td></tr>
    <tr>
      <td>Keperluan:</td>
      <td colspan="3"><?php echo $readrow['keperluan']; ?><input id="keperluan" type="hidden" style="resize:none;" cols="50" rows="5" placeholder="" class="form-control" value="<?php echo $readrow['keperluan']; ?>" required></td>
    </tr>
    <tr>
      <td>Penemuan:</td>
      <td colspan="3"><?php echo $readrow['penemuan']; ?><input id="penemuan"  type="hidden" style="resize:none;" cols="50" rows="5" placeholder="" class="form-control" value="<?php echo $readrow['penemuan']; ?>" required></td>
    </tr>
    <tr>
      <td>Bukti Objektif:</td>
      <td colspan="3"><?php echo $readrow['bukti_objektif']; ?><input id="bukti_objektif"  type="hidden" style="resize:none;" cols="50" rows="5" placeholder="" class="form-control" value="<?php echo $readrow['bukti_objektif']; ?>" required></td>
    </tr>
    

  </table>

  <table width="9px"class="table table-striped table-bordered">
    <tr>
      <th  colspan="3">Sebab-sebab ketakakuran</th>
    </tr>
    <tr>
      <td>Ketakakuran:</td>
      <td colspan="3"><?php echo $readrow['ketakakuran']; ?><input id="ketakakuran"  type="hidden" style="resize:none;" cols="50" rows="5" placeholder="" class="form-control" value="<?php echo $readrow['ketakakuran']; ?>" required></td>
    </tr>
    <tr>
      <td>Pembetulan Segera:</td>
      <td colspan="3"><?php echo $readrow['pembetulan']; ?><input id="pembetulan"  type="hidden" style="resize:none;" cols="50" rows="5" placeholder="" class="form-control" value="<?php echo $readrow['pembetulan']; ?>" required></td>
    </tr>
    <tr>
      <td>Tindakan Pembetulan</td>
      <td colspan="3"><?php echo $readrow['tindakan']; ?><input id="tindakan"  type="hidden" style="resize:none;" cols="50" rows="5" placeholder="" class="form-control" value="<?php echo $readrow['tindakan']; ?>" required></td>
    </tr>
  </table>
  <table  width="9px"class="table table-striped table-bordered">
    <tr>
      <td><input type="checkbox" id="tindakankesan" name="tindakankesan" <?php if(!empty($readrow["tindakankesan"]))echo 'checked'; ?> value="tindakankesan"> Tindakan Pembetulan Berkesan<br></td>
      <td><input type="checkbox" id="tindakantakkesan" name="tindakantakkesan" <?php if(!empty($readrow["tindakantakkesan"]))echo 'checked'; ?> value="tindakantakkesan"> Tindakan Pembetulan Tidak Berkesan<br></td>
    </tr>
    <tr><td><input type="checkbox" id="selesai" name="selesai" <?php if(!empty($readrow["selesai"]))echo 'checked'; ?> value="selesai"> Selesai<br></td>
      <td><input type="checkbox" id="belumselesai" name="belumselesai" <?php if(!empty($readrow["belumselesai"]))echo 'checked'; ?> value="belumselesai"> Belum<br></td>
    </tr>
  </table>
  <div id="result"></div>
  <!--<div align="right"><input type="submit" class="button" name="tambah" value="Hantar" /></div>
  <div align="right"><input type="submit" class="button" name="simpan" value="Simpan" /></div>-->
  
  <a type="button"class="btn btn-primary" href="ncr_susulan.php" role="button">Simpan</a>
  <button type="button" id="save" class="btn btn-primary">Hantar</button>

  
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
<script src="js/script2.js"></script>
<!--<script type="text/javascript" src="../../jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../savy.min.js"></script>
<script type="text/javascript">

$('.auto-save').savy('load',function(){
  console.log("All data from savy are loaded");
});
</script>-->