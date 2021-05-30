<!--<?php
/*  require_once '../db.php';
  include_once 'session.php';
if (isset($_GET['fld_applicant_id'])) {
 
  include_once "../db.php";
 
  try { 

      $stmt = $conn->prepare("SELECT * FROM tbl_peminjaman_peralatan WHERE fld_applicant_id = :fld_applicant_id");
      $stmt->bindParam(':fld_applicant_id', $id, PDO::PARAM_STR);
      $id = $_GET['fld_applicant_id'];
 
      $stmt->execute();

       $result = $stmt->fetch(PDO::FETCH_ASSOC);

      }

    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
 
    //$conn = null;
 }
else {
  echo "Error: You have execute a wrong PHP. Please contact the web administrator.";
  die();
}*/
?>-->

<html>
<head>
<link rel =stylesheet type="text/css" href="print.css" media="print">
  <meta http-equiv=Content-Type content="text/html; charset=UTF-8">
<style type="text/css">
span.cls_004{font-family:Arial,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_004{font-family:Arial,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_003{font-family:Arial,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_003{font-family:Arial,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_006{font-family:Arial,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: underline}
div.cls_006{font-family:Arial,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_005{font-family:Arial,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:italic;text-decoration: none}
div.cls_005{font-family:Arial,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:italic;text-decoration: none}

</style>
<script type="text/javascript" src="background/background1.png/wz_jsgraphics.js"></script>
</head>
<body>

<div style="position:absolute;left:50%;margin-left:-306px;top:0px;width:612px;height:792px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="background/background1.png" width=612 height=792>
</div>
<div style="position:absolute;left:72.02px;top:140.18px" class="cls_004"><span class="cls_004">Pelajar/Staff</span></div>
<div style="position:absolute;left:72.02px;top:153.98px" class="cls_003"><span class="cls_003">Universiti Kebangsaan Malaysia,</span></div>
<div style="position:absolute;left:72.02px;top:166.58px" class="cls_003"><span class="cls_003">43600 Bangi,</span></div>
<div style="position:absolute;left:72.02px;top:179.30px" class="cls_003"><span class="cls_003">Selangor.</span></div>
<div style="position:absolute;left:459.86px;top:179.30px" class="cls_003"><span class="cls_003" value="<?php date_default_timezone_set("Asia/Kuala_Lumpur"); echo  date('j M Y'); ?>"><?php date_default_timezone_set("Asia/Kuala_Lumpur"); echo  date('j M Y');?></span></div>
<div style="position:absolute;left:72.02px;top:213.38px" class="cls_006"><span class="cls_006">Pengesahan Borang Tempahan</span></div>
<div style="position:absolute;left:72.02px;top:236.09px" class="cls_003"><span class="cls_003">Berhubung perkara diatas, adalah dimaklumkan bahawa pengesahan ini adalah dari pihak</span></div>
<div style="position:absolute;left:72.02px;top:250.61px" class="cls_003"><span class="cls_003">Pusat Sukan Universiti Kebangsaan Malaysia.</span></div>
<div style="position:absolute;left:72.02px;top:273.17px" class="cls_003"><span class="cls_003">2.</span></div>
<div style="position:absolute;left:108.02px;top:273.17px" class="cls_003"><span class="cls_003">Tujuan borang ini adalah untuk memaklumkan pengesahan borang tempahan. Sila</span></div>
<div style="position:absolute;left:72.02px;top:287.69px" class="cls_003"><span class="cls_003">lampirkan bersama borang ini ketika membuat pengambilan di kaunter Pusat Sukan UKM.</span></div>
<div style="position:absolute;left:72.02px;top:332.69px" class="cls_003"><span class="cls_003">3.</span></div>
<div style="position:absolute;left:108.02px;top:332.69px" class="cls_003"><span class="cls_003">Maklumat tempahan Tuan/Puan adalah seperti berikut:</span></div>
<div style="position:absolute;left:108.02px;top:355.13px" class="cls_004"><span class="cls_004">No Pinjaman:</span></div>
<!--<input  readonly value="<?php echo $result['id_pinjaman']; ?>" style="position:absolute;left:228.02px;top:355.13px" class="cls_004"><span class="cls_004"></span> -->
<div style="position:absolute;left:228.02px;top:355.13px" class="cls_004" type="hidden" id="id_pinjaman" name="id_pinjaman" value="<?php echo $result['id_pinjaman']; ?>"><?php echo $result['id_pinjaman']; ?></div>

<div style="position:absolute;left:108.02px;top:377.69px" class="cls_004"><span class="cls_004">Nama Pemohon:</span></div>
<!--<input value="<?php echo $result['fld_applicant_name']; ?>" style="position:absolute;left:228.02px;top:377.69px" class="cls_004"><span class="cls_004"  readonly></span> -->
<div style="position:absolute;left:228.02px;top:377.69px" class="cls_004" type="hidden" id="fld_applicant_name" name="fld_applicant_name" value="<?php echo $result['fld_applicant_name']; ?>"><?php echo $result['fld_applicant_name']; ?></div>

<div style="position:absolute;left:108.02px;top:400.25px" class="cls_004"><span class="cls_004">ID Pemohon:</span></div>
<!--<input value="<?php echo $result['fld_applicant_id']; ?>" style="position:absolute;left:228.02px;top:400.25px" class="cls_004"><span class="cls_004"  readonly></span>< -->
<div style="position:absolute;left:228.02px;top:400.25px" class="cls_004" type="hidden" id="fld_applicant_id" name="fld_applicant_id" value="<?php echo $result['fld_applicant_id']; ?>"><?php echo $result['fld_applicant_id']; ?></div>

<div style="position:absolute;left:108.02px;top:422.83px" class="cls_004"><span class="cls_004">Nama Alatan:</span></div>
<!--<input readonly value="<?php echo $result['fld_eq_name']; ?>" style="position:absolute;left:228.02px;top:422.83px" class="cls_004"><span class="cls_004" size="50" readonly></span> -->
<div style="position:absolute;left:228.02px;top:422.83px" class="cls_004" type="hidden" id="fld_eq_name" name="fld_eq_name" value="<?php echo $result['fld_eq_name']; ?>"><?php echo $result['fld_eq_name']; ?></div>

<div style="position:absolute;left:108.02px;top:445.39px" class="cls_004"><span class="cls_004">Kuantiti Alatan:</span></div>
<!--<input readonly value="<?php echo $result['kuantiti']; ?>" style="position:absolute;left:228.02px;top:445.39px" class="cls_004"><span class="cls_004"  readonly></span> -->
<div style="position:absolute;left:228.02px;top:445.39px" class="cls_004" type="hidden" id="kuantiti" name="kuantiti" value="<?php echo $result['kuantiti']; ?>"><?php echo $result['kuantiti']; ?></div>


<div style="position:absolute;left:108.02px;top:467.95px" class="cls_004"><span class="cls_004">Tarikh mula pinjam:</span></div>
<!--<input readonly value="<?php echo $result['tarikh_pinjam']; ?>" style="position:absolute;left:228.02px;top:467.95px" class="cls_004"><span class="cls_004" readonly></span> -->
<div style="position:absolute;left:228.02px;top:467.95px" class="cls_004" type="hidden" id="tarikh_pinjam" name="tarikh_pinjam" value="<?php echo $result['tarikh_pinjam']; ?>"><?php echo $result['tarikh_pinjam']; ?></div>

<div style="position:absolute;left:108.02px;top:490.51px" class="cls_004"><span class="cls_004">Tarikh tamat pinjam:</span></div>
<!--<input readonly value="<?php echo $result['tarikh_pulang']; ?>" style="position:absolute;left:228.02px;top:490.51px" class="cls_004"><span class="cls_004" readonly></span>-->
<div style="position:absolute;left:228.02px;top:490.51px" class="cls_004" type="hidden" id="tarikh_pulang" name="tarikh_pulang" value="<?php echo $result['tarikh_pulang']; ?>"><?php echo $result['tarikh_pulang']; ?></div>

<div style="position:absolute;left:108.02px;top:513.07px" class="cls_004"><span class="cls_004">Status Permohonan:</span></div>
<!--<input readonly value="<?php echo $result['status']; ?>" style="position:absolute;left:228.02px;top:513.07px" class="cls_004"><span class="cls_004"  readonly></span>-->
<div style="position:absolute;left:228.02px;top:513.07px" class="cls_004" type="hidden" id="status" name="status" value="<?php echo $result['status']; ?>"><?php echo $result['status']; ?></div>

<div style="position:absolute;left:72.02px;top:558.31px" class="cls_003"><span class="cls_003">4.</span></div>
<div style="position:absolute;left:108.02px;top:558.31px" class="cls_003"><span class="cls_003">Sekiranya terdapat sebarang kemusykilan, sila hubungi En. Airul Hafis Zulkifli, Ketua</span></div>
<div style="position:absolute;left:72.02px;top:572.86px" class="cls_003"><span class="cls_003">Bahagian Infrastruktur & Kampus Cawangan di talian 03-7953 1000.</span></div>
<div style="position:absolute;left:72.02px;top:617.14px" class="cls_003"><span class="cls_003">Sekian,Terima Kasih.</span></div>
<div></div>
<div style="position:absolute;left:152.02px;top:667.51px" class="cls_005"><span class="cls_005">Surat ini adalah janaan komputer, tiada tanda tangan diperlukan.</span></div>

</div>
<button style="position:absolute;right:750.02px;top:715.86px" onclick="window.print()" class="btn btn-primary" id="print-button">Cetak</button>
</body>

