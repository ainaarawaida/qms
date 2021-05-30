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
            <li><a href="penemuan.php">SEMAK MAKLUMAT PENEMUAN</a></li>
            <li><a href="tindakan.php">SEMAK MAKLUMAT TINDAKAN</a></li>
            <li><a href="jadual.php">JADUAL AUDIT</a></li>
            <li><a href="data.php">DATA ANALITIK AUDIT</a></li>
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
        <table  width="9px"class="table table-striped table-bordered">
    <tr>
      <th>No. Audit : <input type="text" class="form-control" id="no_audit"></th>
      <th>Tarikh Audit: <input type="text" class="form-control" id="tarikh_audit" size="10" maxlength="10" value="" />
          
          <img src="cal.gif" onclick="javascript:NewCssCal('tarikh_audit','yyyyMMdd','arrow',false,'24','','future')" style="cursor:pointer"/>
        </th>
      <th>No. NCR: <input type="text" class="form-control" id="no_ncr" ></th>
      
    </tr>
    <tr>
      <td>MS ISO 9001: <input type="text" class="form-control" id="iso" ></td>
      <td>Pusat Pengajian /Jabatan / Unit yang diaudit: <input type="text" class="form-control" id="jabatan_unit" ></td>
      <td>Dokumen yang diaudit yang menimbulkan ketakakuran: <input type="text" class="form-control" id="dokumen"></td>
    </tr>
    <tr>
      <th colspan="4">Ketakakuran yang ditemui</th></tr>
    <tr>
      <td>Keperluan:</td>
      <td colspan="3"><textarea id="keperluan" style="resize:none;" cols="50" rows="5" placeholder="" class="form-control" required></textarea></td>
    </tr>
    <tr>
      <td>Penemuan:</td>
      <td colspan="3"><textarea id="penemuan" style="resize:none;" cols="50" rows="5" placeholder="" class="form-control" required></textarea></td>
    </tr>
    <tr>
      <td>Bukti Objektif:</td>
      <td colspan="3"><textarea id="bukti_objektif" style="resize:none;" cols="50" rows="5" placeholder="" class="form-control" required></textarea></td>
    </tr>
    

  </table>
  <div id="result"></div>
  <!--<div align="right"><input type="submit" class="button" name="tambah" value="Hantar" /></div>
  <div align="right"><input type="submit" class="button" name="simpan" value="Simpan" /></div>-->
  
  <a type="button"class="btn btn-primary" href="listDraftNcr.php" role="button">Simpan</a>
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
<script src="js/script.js"></script>
<!--<script type="text/javascript" src="../../jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../savy.min.js"></script>
<script type="text/javascript">

$('.auto-save').savy('load',function(){
  console.log("All data from savy are loaded");
});
</script>-->