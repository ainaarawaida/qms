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
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {

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
.inputfield {
  height: 80px
}
</style>
</head>
<title>Laporam</title>
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
<div id="Menu" class="tabcontent">
  <h3>LAPORAN BERSEPADU</h3>
  <br><br>
  <div>
    <form action="insert_laporan.php" method="POST">
    <table width="9px"class="table table-striped table-bordered">
    <tr>
      <td colspan="2">
        Fail Rujukan: <input type="text" class="form-control" name="fail_rujukan" id="" value="">
      </td>
    </tr>
    <tr>
      <td colspan="2">KLIEN(PTJ): <input  class="form-control" type="" name="klien">
      </td>
    </tr>
    <tr>
      <td colspan="1">ALAMAT TETAP AUDIT: </td>
      <td colspan="1"><textarea name="alamat_audit" cols="50" rows="3" class="form-control" placeholder="" readonly="">PUSAT JAMINAN KUALITI UNIVERSITI KEBANGSAAN MALAYSIA 43600 UKM BANGI SELANGOR DARUL EHSAN</textarea></td>
    </tr>
    <tr>
      <td colspan="1">
        TARIKH MENGAUDIT: <input type="text" class="form-control" name="tarikh_audit" id="" value="<?php date_default_timezone_set("Asia/Kuala_Lumpur"); echo date("d-m-Y"); ?>" readonly/>
      </td>
      <td colspan="1">TEMPOH: <input type="text" class="form-control" name="tempoh" id="" value=""></td>
    </tr>
    <tr>
      <td colspan="2">PIAWAIAN SISTEM KUALITI: <input type="text" class="form-control" name="standard" id="" value="MS ISO 9001: 2015" readonly></td>
    </tr>
    <tr>
      <td colspan="2">RUJUKAN DOKUMEN KUALITI: <input type="text" class="form-control" name="rujukan" id="" value="Dokumen Kualiti, Pensijilan ISO Prasiswazah dan Siswazah, Isu 04, Semakan 01 (www.ukm.my/spdukm)" readonly></td>
    </tr>
    <tr>
      <td colspan="1">SKOP PENDAFTARAN:</td>
      <td colspan="1"><textarea name="skop" cols="50" rows="5" class="form-control"  readonly="">1. Reka Bentuk dan Pembangunan Program Pengajian Prasiswazah dan Siswazah
2. Penyampaian Perkhidmatan Pengajaran dan 
Pembelajaran Peringkat Prasiswazah dan 
Siswazah </textarea></td>

    </tr>
  </table>
  <table width="9px"class="table table-striped table-bordered">
    <tr>
      <th colspan="2">
        Lampiran berikut merupakan sebahagian daripada laporan:
      </th>
    </tr>
    <tr>
      <td colspan="1">Laporan ketakakuran (NCR):<?php $stmt = $conn->prepare("SELECT * FROM ncr");
            $stmt->execute();
            $result = $stmt->fetchAll();
            $total_records = count($result); ?><input type="hidden" class="form-control" name="bil_ncr" id="" value="<?php echo $total_records; ?>" readonly/><?php echo $total_records; ?> </td>
      <td colspan="1">Senarai kehadiran: </td>
    </tr>
    <tr>
      <td colspan="1">Peluang penambahbaikan (OFI):<?php $stmt = $conn->prepare("SELECT * FROM ofi");
            $stmt->execute();
            $result = $stmt->fetchAll();
            $total_records = count($result); ?><input type="hidden" class="form-control" name="bil_ofi" id="" value="<?php echo $total_records; ?>" readonly/><?php echo $total_records; ?> </td>
      <td colspan="1">Pelan Audit: <?php $stmt = $conn->prepare("SELECT * FROM tbl_file");
            $stmt->execute();
            $result = $stmt->fetchAll();
            $total_records = count($result); ?><input type="hidden" class="form-control" name="bil_jadual" id="" value="<?php echo $total_records; ?>" readonly/><?php echo $total_records; ?></td>
    </tr>
  </table>
  <table width="9px"class="table table-bordered">
    <tr>
      <th>LAPORAN AUDIT DALAMAN</th>
      <tr>
        <td>
          <h5>1. PENGENALAN</h5>
          <div>
          <table>
            <tr>
              <td>
              1.1 Perihal Aktiviti Klien (PTJ)
              </td>
            </tr>
            <tr>
              <td><br>
                <textarea name="aktiviti_klien" rows="8" cols="100"></textarea>
              </td>
            </tr>
          </table>
          
          </div>
          
      </tr>
      <tr>
        <td>
          <h5>2. RINGKASAN RUMUSAN AUDIT</h5>
          <div>
          <table>
            <tr>
              <td>
              2.1 Juruaudit Dalaman
              </td>
              <td>
              Peranan
              </td>
            </tr>
            <!--<tr>
              <td><input type="" name="">
              </td>
            </tr>-->
            <tr>
              <td>
              2.2 Perubahan Signifikan Kepada Pelan Audit (jika berkenaan)
              </td>
            </tr>
            <tr>
              <td><br>
                <textarea name="perubahan" rows="8" cols="100"></textarea>
              </td>
            </tr>
          </table>
          
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <h5>3. LAPORAN PENEMUAN</h5>
          <div>
          <table>
            <tr>
              <td>
              3.1 Amalan Terbaik yang ditemui
              </td>
            </tr>
            <tr>
              <td><br>
                <textarea name="amalan_terbaik" rows="8" cols="100"></textarea>
              </td>
            </tr>
            <tr>
              <td><br>
              3.2. Penilaian Dokumen, Kecukupan dan Keberkesanan Pelaksanaan Dokumen Kualiti Utama
              </td>
            </tr>
            <tr>
              <td><br>
                <textarea name="penilaian" rows="8" cols="100"></textarea>
              </td><br>
            </tr>
            <tr>
              <td><br>
              3.3. Laporan Ketakakuran (NCR)
              <br>
              Bilangan NCR (Juruaudit yang mengeluarkan NCR)
              <br>
              Jumlah NCR: <?php $stmt = $conn->prepare("SELECT * FROM ncr");
            $stmt->execute();
            $result = $stmt->fetchAll();
            $total_records = count($result); ?><input type="hidden" class="form-control" name="bil_ncr" id="" value="<?php echo $total_records; ?>" readonly/><?php echo $total_records; ?>
              </td>
            </tr>
          </table>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <h5>4. RUMUSAN AUDIT</h5>
          <div>
          <table>
            <tr>
              <td><br>
                <textarea name="rumusan" rows="8" cols="100"></textarea>
              </td>
            </tr>
          </table>
          
          </div>
      </tr>
      <tr>
        <td>
          <h5>5. CADANGAN</h5>
          <div>
          <table>
            <tr>
              <td>
              Tiada NCR direkod
              </td>
            </tr>
            <tr>
              <td><br>

              NCR minor direkodkan. Pembetulan dan Tindakan Pembetulan serta bukti pelaksanaan Tindakan Pembetulan mesti diserahkan kepada PJK dalam tempoh dua minggu dari tarikh Audit Dalaman dilaksanakan di PTJ.
              </td><br>

            </tr>
            <tr>
              <td><br>
              Audit susulan dicadangkan pada <input maxlength="1px" type="text" class="form-control" name="cadangan" id="" value="">(dalam tempoh satu (1) bulan selepas tarikh Audit Dalaman di PTJ dilaksanakan).
              </td><br>

            </tr>
            <tr>
              <td><br>

              Kegagalan keseluruhan sistem kualiti. Audit semula keseluruhan sistem dicadangkan.
              </td><br>

            </tr>
          </table>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <h5><a href="klausa.php">
          6. KLAUSA YANG DIAUDIT</h5>
        </td>
      </tr>
    </tr>
  </table>
  <div align="right"><input type="submit" class="button" name="tambah" value="Hantar" /></div>
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
