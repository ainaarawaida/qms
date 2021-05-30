<?php
include_once '../../db.php';
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
   <link href="css/bootstrap.min.css" rel="stylesheet">

   <link rel="stylesheet" href="jquery.timepicker-1.2.2.min.css" type="text/css" />
<script type="text/javascript" src="datetimepicker_css.js"></script>
<script type="text/javascript" src="jquery.timepicker-1.2.2.min.js"></script>
	<title></title>
</head>
<body>
	<div class="panel-body">
    <div class="table-responsive">
    	<form action="insertNcr.php" method="POST">
    		<table>
    		<tr><td><input class="form-control" name="staff_no" type="hidden" value="<?php echo $readrow['staff_no']; ?>" readonly/></td></tr>
    	</table>
    		<br>
    		<table  width="9px"class="table table-striped table-bordered">
		<tr>
			<th>No. Audit : <input type="text" class="auto-save" id="no_audit" name="no_audit"></th>
			<th>Tarikh Audit: <input type="text" class="auto-save" id="tarikh_audit" name="tarikh_audit" size="10" maxlength="10" value="" />
          
          <img src="cal.gif" onclick="javascript:NewCssCal('tarikh_pinjam','yyyyMMdd','arrow',false,'24','','future')" style="cursor:pointer"/>
        </th>
			<th>No. NCR: <input type="text" class="auto-save" id="no_ncr" name="no_ncr"></th>
			
		</tr>
		<tr>
			<td>MS ISO 9001: <input type="text" class="auto-save" id="iso" name="iso"></td>
			<td>Pusat Pengajian /Jabatan / Unit yang diaudit: <input type="text" class="auto-save" id="jabatan_unit" name="jabatan_unit"></td>
			<td>Dokumen yang diaudit yang menimbulkan ketakakuran: <input type="text" class="auto-save" id="dokumen" name="dokumen"></td>
		</tr>
		<tr>
			<th colspan="4">Ketakakuran yang ditemui</th></tr>
		<tr>
			<td>Keperluan:</td>
			<td colspan="3"><textarea id="keperluan" name="keperluan"  cols="50" rows="5" placeholder="" class="auto-save" required></textarea></td>
		</tr>
		<tr>
			<td>Penemuan:</td>
			<td colspan="3"><textarea id="penemuan" name="penemuan" cols="50" rows="5" placeholder="" class="auto-save" required></textarea></td>
		</tr>
		<tr>
			<td>Bukti Objektif:</td>
			<td colspan="3"><textarea id="bukti_objektif" name="bukti_objektif" cols="50" rows="5" placeholder="" class="auto-save" required></textarea></td>
		</tr>
		

	</table>
	<div align="right"><input type="submit" class="button" name="tambah" value="Hantar" /></div>
	<div align="right"><input type="submit" class="button" name="simpan" value="Simpan" /></div>

	
    	</form>
</div>
</div>

</body>
</html>
<script type="text/javascript" src="../../jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../savy.min.js"></script>
<script type="text/javascript">

//$('.auto-save').savy('load') --> can be used without callback
$('.auto-save').savy('load',function(){
  console.log("All data from savy are loaded");
});
</script>