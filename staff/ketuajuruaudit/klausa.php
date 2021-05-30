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
<script type="text/javascript">
  $(document).ready(function(){
    $('.chkbx').click(function() {
      /* Act on the event */
      var ncr = $("[class='chkbx']:checked").length;
      $('#ncr').val($("[class='chkbx']:checked").length);

      var ofi = $("[class='chkbx']:checked").length;
      $('#ofi').val($("[class='chkbx']:checked").length);
    });

    $('.chkbx2').click(function() {
      /* Act on the event */
      var ncr2 = $("[class='chkbx2']:checked").length;
      $('#ncr2').val($("[class='chkbx2']:checked").length);

      var ofi2 = $("[class='chkbx2']:checked").length;
      $('#ofi2').val($("[class='chkbx2']:checked").length);
    });

    $('.chkbx3').click(function() {
      /* Act on the event */
      var ncr3 = $("[class='chkbx3']:checked").length;
      $('#ncr3').val($("[class='chkbx3']:checked").length);

      var ofi3 = $("[class='chkbx3']:checked").length;
      $('#ofi3').val($("[class='chkbx3']:checked").length);
    });

    $('.chkbx4').click(function() {
      /* Act on the event */
      var ncr4 = $("[class='chkbx4']:checked").length;
      $('#ncr4').val($("[class='chkbx4']:checked").length);

      var ofi4 = $("[class='chkbx4']:checked").length;
      $('#ofi4').val($("[class='chkbx4']:checked").length);
    });

    $('.chkbx5').click(function() {
      /* Act on the event */
      var ncr5 = $("[class='chkbx5']:checked").length;
      $('#ncr5').val($("[class='chkbx5']:checked").length);

      var ofi5 = $("[class='chkbx5']:checked").length;
      $('#ofi5').val($("[class='chkbx5']:checked").length);
    });

     $('.chkbx6').click(function() {
      /* Act on the event */
      var ncr6 = $("[class='chkbx6']:checked").length;
      $('#ncr6').val($("[class='chkbx6']:checked").length);

      var ofi6 = $("[class='chkbx6']:checked").length;
      $('#ofi6').val($("[class='chkbx6']:checked").length);
    });

    $('.chkbx7').click(function() {
      /* Act on the event */
      var ncr7 = $("[class='chkbx7']:checked").length;
      $('#ncr7').val($("[class='chkbx7']:checked").length);

      var ofi7 = $("[class='chkbx7']:checked").length;
      $('#ofi7').val($("[class='chkbx7']:checked").length);
    });

    $('.chkbx8').click(function() {
      /* Act on the event */
      var ncr8 = $("[class='chkbx8']:checked").length;
      $('#ncr8').val($("[class='chkbx8']:checked").length);

      var ofi8 = $("[class='chkbx8']:checked").length;
      $('#ofi8').val($("[class='chkbx8']:checked").length);
    });

    $('.chkbx9').click(function() {
      /* Act on the event */
      var ncr9 = $("[class='chkbx9']:checked").length;
      $('#ncr9').val($("[class='chkbx9']:checked").length);

      var ofi9 = $("[class='chkbx9']:checked").length;
      $('#ofi9').val($("[class='chkbx9']:checked").length);
    });

    $('.chkbx10').click(function() {
      /* Act on the event */
      var ncr10 = $("[class='chkbx10']:checked").length;
      $('#ncr10').val($("[class='chkbx10']:checked").length);

      var ofi10 = $("[class='chkbx10']:checked").length;
      $('#ofi10').val($("[class='chkbx10']:checked").length);
    });

    $('.chkbx11').click(function() {
      /* Act on the event */
      var ncr11 = $("[class='chkbx11']:checked").length;
      $('#ncr11').val($("[class='chkbx11']:checked").length);

      var ofi11 = $("[class='chkbx11']:checked").length;
      $('#ofi11').val($("[class='chkbx11']:checked").length);
    });

    $('.chkbx12').click(function() {
      /* Act on the event */
      var ncr12 = $("[class='chkbx12']:checked").length;
      $('#ncr12').val($("[class='chkbx12']:checked").length);

      var ofi12 = $("[class='chkbx12']:checked").length;
      $('#ofi12').val($("[class='chkbx12']:checked").length);
    });

    $('.chkbx13').click(function() {
      /* Act on the event */
      var ncr13 = $("[class='chkbx13']:checked").length;
      $('#ncr13').val($("[class='chkbx13']:checked").length);

      var ofi13 = $("[class='chkbx13']:checked").length;
      $('#ofi13').val($("[class='chkbx13']:checked").length);
    });

    $('.chkbx14').click(function() {
      /* Act on the event */
      var ncr14 = $("[class='chkbx14']:checked").length;
      $('#ncr14').val($("[class='chkbx14']:checked").length);

      var ofi14 = $("[class='chkbx14']:checked").length;
      $('#ofi14').val($("[class='chkbx14']:checked").length);
    });

    $('.chkbx15').click(function() {
      /* Act on the event */
      var ncr15 = $("[class='chkbx15']:checked").length;
      $('#ncr15').val($("[class='chkbx15']:checked").length);

      var ofi15 = $("[class='chkbx15']:checked").length;
      $('#ofi15').val($("[class='chkbx15']:checked").length);
    });

     $('.chkbx16').click(function() {
      /* Act on the event */
      var ncr16 = $("[class='chkbx16']:checked").length;
      $('#ncr16').val($("[class='chkbx16']:checked").length);

      var ofi16 = $("[class='chkbx16']:checked").length;
      $('#ofi16').val($("[class='chkbx16']:checked").length);
    });

    $('.chkbx17').click(function() {
      /* Act on the event */
      var ncr17 = $("[class='chkbx17']:checked").length;
      $('#ncr17').val($("[class='chkbx17']:checked").length);

      var ofi17 = $("[class='chkbx17']:checked").length;
      $('#ofi17').val($("[class='chkbx17']:checked").length);
    });

    $('.chkbx18').click(function() {
      /* Act on the event */
      var ncr18 = $("[class='chkbx18']:checked").length;
      $('#ncr18').val($("[class='chkbx18']:checked").length);

      var ofi18 = $("[class='chkbx18']:checked").length;
      $('#ofi18').val($("[class='chkbx18']:checked").length);
    });

    $('.chkbx19').click(function() {
      /* Act on the event */
      var ncr19 = $("[class='chkbx19']:checked").length;
      $('#ncr19').val($("[class='chkbx19']:checked").length);

      var ofi19 = $("[class='chkbx19']:checked").length;
      $('#ofi19').val($("[class='chkbx19']:checked").length);
    });

    $('.chkbx20').click(function() {
      /* Act on the event */
      var ncr20 = $("[class='chkbx20']:checked").length;
      $('#ncr20').val($("[class='chkbx20']:checked").length);

      var ofi20 = $("[class='chkbx20']:checked").length;
      $('#ofi20').val($("[class='chkbx20']:checked").length);
    });

    $('.chkbx21').click(function() {
      /* Act on the event */
      var ncr21 = $("[class='chkbx21']:checked").length;
      $('#ncr21').val($("[class='chkbx21']:checked").length);

      var ofi21 = $("[class='chkbx21']:checked").length;
      $('#ofi21').val($("[class='chkbx21']:checked").length);
    });

    $('.chkbx22').click(function() {
      /* Act on the event */
      var ncr22 = $("[class='chkbx22']:checked").length;
      $('#ncr22').val($("[class='chkbx22']:checked").length);

      var ofi22 = $("[class='chkbx22']:checked").length;
      $('#ofi22').val($("[class='chkbx22']:checked").length);
    });

    $('.chkbx23').click(function() {
      /* Act on the event */
      var ncr23 = $("[class='chkbx23']:checked").length;
      $('#ncr23').val($("[class='chkbx23']:checked").length);

      var ofi23 = $("[class='chkbx23']:checked").length;
      $('#ofi23').val($("[class='chkbx23']:checked").length);
    });

    $('.chkbx24').click(function() {
      /* Act on the event */
      var ncr24 = $("[class='chkbx24']:checked").length;
      $('#ncr24').val($("[class='chkbx24']:checked").length);

      var ofi24 = $("[class='chkbx24']:checked").length;
      $('#ofi24').val($("[class='chkbx24']:checked").length);
    });

    $('.chkbx25').click(function() {
      /* Act on the event */
      var ncr25 = $("[class='chkbx25']:checked").length;
      $('#ncr25').val($("[class='chkbx25']:checked").length);

      var ofi25 = $("[class='chkbx25']:checked").length;
      $('#ofi25').val($("[class='chkbx25']:checked").length);
    });

     $('.chkbx26').click(function() {
      /* Act on the event */
      var ncr26 = $("[class='chkbx26']:checked").length;
      $('#ncr26').val($("[class='chkbx26']:checked").length);

      var ofi26 = $("[class='chkbx26']:checked").length;
      $('#ofi26').val($("[class='chkbx26']:checked").length);
    });

    $('.chkbx27').click(function() {
      /* Act on the event */
      var ncr27 = $("[class='chkbx27']:checked").length;
      $('#ncr27').val($("[class='chkbx27']:checked").length);

      var ofi27 = $("[class='chkbx27']:checked").length;
      $('#ofi27').val($("[class='chkbx27']:checked").length);
    });

    $('.chkbx28').click(function() {
      /* Act on the event */
      var ncr28 = $("[class='chkbx28']:checked").length;
      $('#ncr28').val($("[class='chkbx28']:checked").length);

      var ofi28 = $("[class='chkbx28']:checked").length;
      $('#ofi28').val($("[class='chkbx28']:checked").length);
    });

  });
</script>

<script>
  $(document).ready(function(){
    $('.prc').blur(function() {
      var sumdata = 0;
      $('.prc').each(function(){
        if($(this).val()!="")
        {
          sumdata += parseFloat($(this).val());
        }
      });
      $("#sum").html(sumdata);
  });
    });
</script>

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
            <li><a href="penemuan.php">SEMAK MAKLUMAT PENEMUAN</a></li>
            <li><a href="tindakan.php">SEMAK MAKLUMAT TINDAKAN</a></li>
            <li><a href="jadual.php">JADUAL AUDIT</a></li>
            <li><a href="data.php">DATA ANALITIK AUDIT</a></li>
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
<div id="Menu" class="tabcontent" style="height: 100%; width: 80%">
  <h3>Klausa</h3>
  <br><br>
  <div>
    <form>
  <table width="9px"class="table table-bordered">
    <tr>
      <td rowspan="1"></td>
      <td rowspan="1">MS ISO 9001:2015
</td>
      <td rowspan="2">Requirement Audited</td>
      <td rowspan="1" colspan="17">MENGIKUT PROSES KERJA UTAMA SPK PPPS 
ATAU JABATAN DALAM PTJ</td>
      <td rowspan="1" colspan="2">OUTCOMES</td>
    </tr>
    <tr>
      <td rowspan="1"></td>
      <td rowspan="1"></td>
      <td rowspan="1"></td>
      <td rowspan="1"></td>
      <td rowspan="1"></td>
      <td rowspan="1"></td>
      <td rowspan="1"></td>
      <td rowspan="1"></td>
      <td rowspan="1"></td>
      <td rowspan="1"></td>
      <td rowspan="1"></td>
      <td rowspan="1"></td>
      <td rowspan="1"></td>
      <td rowspan="1"></td>
      <td rowspan="1"></td>
      <td rowspan="1"></td>
      <td rowspan="1"></td>
      <td rowspan="1"></td>
      <td rowspan="1"></td>
      <td rowspan="1">NCR</td>
      <td rowspan="1">OFI</td>
    </tr>
    <tr>
    <td colspan="22"><h8>4. Context of the organization</h8></td>
    </tr>
    <tr>
      <td>4.1</td>
      <td>Understanding the organization and its context</td>
      <td><input type="checkbox" class="chkbx" name="" value=""></td>
      <td><input type="checkbox" class="chkbx" name="" value=""></td>
      <td><input type="checkbox" class="chkbx" name="" value=""></td>
      <td><input type="checkbox" class="chkbx" name="" value=""></td>
      <td><input type="checkbox" class="chkbx" name="" value=""></td>
      <td><input type="checkbox" class="chkbx" name="" value=""></td>
      <td><input type="checkbox" class="chkbx" name="" value=""></td>
      <td><input type="checkbox" class="chkbx" name="" value=""></td>
      <td><input type="checkbox" class="chkbx" name="" value=""></td>
      <td><input type="checkbox" class="chkbx" name="" value=""></td>
      <td><input type="checkbox" class="chkbx" name="" value=""></td>
      <td><input type="checkbox" class="chkbx" name="" value=""></td>
      <td><input type="checkbox" class="chkbx" name="" value=""></td>
      <td><input type="checkbox" class="chkbx" name="" value=""></td>
      <td><input type="checkbox" class="chkbx" name="" value=""></td>
      <td><input type="checkbox" class="chkbx" name="" value=""></td>
      <td><input type="checkbox" class="chkbx" name="" value=""></td>
      <td><input type="checkbox" class="chkbx" name="" value=""></td>
      <td><input type="text" size="2" id="ncr" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>4.2</td>
      <td>Understanding the needs and expectations of interested parties</td>
     <td><input type="checkbox" class="chkbx2" name="" value=""></td>
      <td><input type="checkbox" class="chkbx2" name="" value=""></td>
      <td><input type="checkbox" class="chkbx2" name="" value=""></td>
      <td><input type="checkbox" class="chkbx2" name="" value=""></td>
      <td><input type="checkbox" class="chkbx2" name="" value=""></td>
      <td><input type="checkbox" class="chkbx2" name="" value=""></td>
      <td><input type="checkbox" class="chkbx2" name="" value=""></td>
      <td><input type="checkbox" class="chkbx2" name="" value=""></td>
      <td><input type="checkbox" class="chkbx2" name="" value=""></td>
      <td><input type="checkbox" class="chkbx2" name="" value=""></td>
      <td><input type="checkbox" class="chkbx2" name="" value=""></td>
      <td><input type="checkbox" class="chkbx2" name="" value=""></td>
      <td><input type="checkbox" class="chkbx2" name="" value=""></td>
      <td><input type="checkbox" class="chkbx2" name="" value=""></td>
      <td><input type="checkbox" class="chkbx2" name="" value=""></td>
      <td><input type="checkbox" class="chkbx2" name="" value=""></td>
      <td><input type="checkbox" class="chkbx2" name="" value=""></td>
      <td><input type="checkbox" class="chkbx2" name="" value=""></td>
      <td><input type="text" size="2" id="ncr2" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi2" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>4.3</td>
      <td>Determining the scope of the QMS</td>
      <td><input type="checkbox" class="chkbx3" name="" value=""></td>
      <td><input type="checkbox" class="chkbx3" name="" value=""></td>
      <td><input type="checkbox" class="chkbx3" name="" value=""></td>
      <td><input type="checkbox" class="chkbx3" name="" value=""></td>
      <td><input type="checkbox" class="chkbx3" name="" value=""></td>
      <td><input type="checkbox" class="chkbx3" name="" value=""></td>
      <td><input type="checkbox" class="chkbx3" name="" value=""></td>
      <td><input type="checkbox" class="chkbx3" name="" value=""></td>
      <td><input type="checkbox" class="chkbx3" name="" value=""></td>
      <td><input type="checkbox" class="chkbx3" name="" value=""></td>
      <td><input type="checkbox" class="chkbx3" name="" value=""></td>
      <td><input type="checkbox" class="chkbx3" name="" value=""></td>
      <td><input type="checkbox" class="chkbx3" name="" value=""></td>
      <td><input type="checkbox" class="chkbx3" name="" value=""></td>
      <td><input type="checkbox" class="chkbx3" name="" value=""></td>
      <td><input type="checkbox" class="chkbx3" name="" value=""></td>
      <td><input type="checkbox" class="chkbx3" name="" value=""></td>
      <td><input type="checkbox" class="chkbx3" name="" value=""></td>
      <td><input type="text" size="2" id="ncr3" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi3" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>4.4</td>
      <td>QMS and Its Process</td>
      <td><input type="checkbox" class="chkbx4" name="" value=""></td>
      <td><input type="checkbox" class="chkbx4" name="" value=""></td>
      <td><input type="checkbox" class="chkbx4" name="" value=""></td>
      <td><input type="checkbox" class="chkbx4" name="" value=""></td>
      <td><input type="checkbox" class="chkbx4" name="" value=""></td>
      <td><input type="checkbox" class="chkbx4" name="" value=""></td>
      <td><input type="checkbox" class="chkbx4" name="" value=""></td>
      <td><input type="checkbox" class="chkbx4" name="" value=""></td>
      <td><input type="checkbox" class="chkbx4" name="" value=""></td>
      <td><input type="checkbox" class="chkbx4" name="" value=""></td>
      <td><input type="checkbox" class="chkbx4" name="" value=""></td>
      <td><input type="checkbox" class="chkbx4" name="" value=""></td>
      <td><input type="checkbox" class="chkbx4" name="" value=""></td>
      <td><input type="checkbox" class="chkbx4" name="" value=""></td>
      <td><input type="checkbox" class="chkbx4" name="" value=""></td>
      <td><input type="checkbox" class="chkbx4" name="" value=""></td>
      <td><input type="checkbox" class="chkbx4" name="" value=""></td>
      <td><input type="checkbox" class="chkbx4" name="" value=""></td>
      <td><input type="text" size="2" id="ncr4" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi4" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
    <td colspan="22"><h8>5. Leadership</h8></td>
    </tr>
    <tr>
      <td>5.1</td>
      <td>Leadership and comitment</td>
      <td><input type="checkbox" class="chkbx5" name="" value=""></td>
      <td><input type="checkbox" class="chkbx5" name="" value=""></td>
      <td><input type="checkbox" class="chkbx5" name="" value=""></td>
      <td><input type="checkbox" class="chkbx5" name="" value=""></td>
      <td><input type="checkbox" class="chkbx5" name="" value=""></td>
      <td><input type="checkbox" class="chkbx5" name="" value=""></td>
      <td><input type="checkbox" class="chkbx5" name="" value=""></td>
      <td><input type="checkbox" class="chkbx5" name="" value=""></td>
      <td><input type="checkbox" class="chkbx5" name="" value=""></td>
      <td><input type="checkbox" class="chkbx5" name="" value=""></td>
      <td><input type="checkbox" class="chkbx5" name="" value=""></td>
      <td><input type="checkbox" class="chkbx5" name="" value=""></td>
      <td><input type="checkbox" class="chkbx5" name="" value=""></td>
      <td><input type="checkbox" class="chkbx5" name="" value=""></td>
      <td><input type="checkbox" class="chkbx5" name="" value=""></td>
      <td><input type="checkbox" class="chkbx5" name="" value=""></td>
      <td><input type="checkbox" class="chkbx5" name="" value=""></td>
      <td><input type="checkbox" class="chkbx5" name="" value=""></td>
      <td><input type="text" size="2" id="ncr5" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi5" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>5.2</td>
      <td>Policy</td>
      <td><input type="checkbox" class="chkbx6" name="" value=""></td>
      <td><input type="checkbox" class="chkbx6" name="" value=""></td>
      <td><input type="checkbox" class="chkbx6" name="" value=""></td>
      <td><input type="checkbox" class="chkbx6" name="" value=""></td>
      <td><input type="checkbox" class="chkbx6" name="" value=""></td>
      <td><input type="checkbox" class="chkbx6" name="" value=""></td>
      <td><input type="checkbox" class="chkbx6" name="" value=""></td>
      <td><input type="checkbox" class="chkbx6" name="" value=""></td>
      <td><input type="checkbox" class="chkbx6" name="" value=""></td>
      <td><input type="checkbox" class="chkbx6" name="" value=""></td>
      <td><input type="checkbox" class="chkbx6" name="" value=""></td>
      <td><input type="checkbox" class="chkbx6" name="" value=""></td>
      <td><input type="checkbox" class="chkbx6" name="" value=""></td>
      <td><input type="checkbox" class="chkbx6" name="" value=""></td>
      <td><input type="checkbox" class="chkbx6" name="" value=""></td>
      <td><input type="checkbox" class="chkbx6" name="" value=""></td>
      <td><input type="checkbox" class="chkbx6" name="" value=""></td>
      <td><input type="checkbox" class="chkbx6" name="" value=""></td>
      <td><input type="text" size="2" id="ncr6" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi6" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>5.3</td>
      <td>Organizational Roles, responsibilities and authorities</td>
      <td><input type="checkbox" class="chkbx7" name="" value=""></td>
      <td><input type="checkbox" class="chkbx7" name="" value=""></td>
      <td><input type="checkbox" class="chkbx7" name="" value=""></td>
      <td><input type="checkbox" class="chkbx7" name="" value=""></td>
      <td><input type="checkbox" class="chkbx7" name="" value=""></td>
      <td><input type="checkbox" class="chkbx7" name="" value=""></td>
      <td><input type="checkbox" class="chkbx7" name="" value=""></td>
      <td><input type="checkbox" class="chkbx7" name="" value=""></td>
      <td><input type="checkbox" class="chkbx7" name="" value=""></td>
      <td><input type="checkbox" class="chkbx7" name="" value=""></td>
      <td><input type="checkbox" class="chkbx7" name="" value=""></td>
      <td><input type="checkbox" class="chkbx7" name="" value=""></td>
      <td><input type="checkbox" class="chkbx7" name="" value=""></td>
      <td><input type="checkbox" class="chkbx7" name="" value=""></td>
      <td><input type="checkbox" class="chkbx7" name="" value=""></td>
      <td><input type="checkbox" class="chkbx7" name="" value=""></td>
      <td><input type="checkbox" class="chkbx7" name="" value=""></td>
      <td><input type="checkbox" class="chkbx7" name="" value=""></td>
      <td><input type="text" size="2" id="ncr7" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi7" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
    <td colspan="22"><h8>6. Planning</h8></td>
    </tr>
    <tr>
      <td>6.1</td>
      <td>Leadership and comitment</td>
      <td><input type="checkbox" class="chkbx8" name="" value=""></td>
      <td><input type="checkbox" class="chkbx8" name="" value=""></td>
      <td><input type="checkbox" class="chkbx8" name="" value=""></td>
      <td><input type="checkbox" class="chkbx8" name="" value=""></td>
      <td><input type="checkbox" class="chkbx8" name="" value=""></td>
      <td><input type="checkbox" class="chkbx8" name="" value=""></td>
      <td><input type="checkbox" class="chkbx8" name="" value=""></td>
      <td><input type="checkbox" class="chkbx8" name="" value=""></td>
      <td><input type="checkbox" class="chkbx8" name="" value=""></td>
      <td><input type="checkbox" class="chkbx8" name="" value=""></td>
      <td><input type="checkbox" class="chkbx8" name="" value=""></td>
      <td><input type="checkbox" class="chkbx8" name="" value=""></td>
      <td><input type="checkbox" class="chkbx8" name="" value=""></td>
      <td><input type="checkbox" class="chkbx8" name="" value=""></td>
      <td><input type="checkbox" class="chkbx8" name="" value=""></td>
      <td><input type="checkbox" class="chkbx8" name="" value=""></td>
      <td><input type="checkbox" class="chkbx8" name="" value=""></td>
      <td><input type="checkbox" class="chkbx8" name="" value=""></td>
      <td><input type="text" size="2" id="ncr8" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi8" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>6.2</td>
      <td>Quality Objectives and planning to achieve them</td>
      <td><input type="checkbox" class="chkbx9" name="" value=""></td>
      <td><input type="checkbox" class="chkbx9" name="" value=""></td>
      <td><input type="checkbox" class="chkbx9" name="" value=""></td>
      <td><input type="checkbox" class="chkbx9" name="" value=""></td>
      <td><input type="checkbox" class="chkbx9" name="" value=""></td>
      <td><input type="checkbox" class="chkbx9" name="" value=""></td>
      <td><input type="checkbox" class="chkbx9" name="" value=""></td>
      <td><input type="checkbox" class="chkbx9" name="" value=""></td>
      <td><input type="checkbox" class="chkbx9" name="" value=""></td>
      <td><input type="checkbox" class="chkbx9" name="" value=""></td>
      <td><input type="checkbox" class="chkbx9" name="" value=""></td>
      <td><input type="checkbox" class="chkbx9" name="" value=""></td>
      <td><input type="checkbox" class="chkbx9" name="" value=""></td>
      <td><input type="checkbox" class="chkbx9" name="" value=""></td>
      <td><input type="checkbox" class="chkbx9" name="" value=""></td>
      <td><input type="checkbox" class="chkbx9" name="" value=""></td>
      <td><input type="checkbox" class="chkbx9" name="" value=""></td>
      <td><input type="checkbox" class="chkbx9" name="" value=""></td>
      <td><input type="text" size="2" id="ncr9" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi9" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>6.3</td>
      <td>Planning of changes</td>
      <td><input type="checkbox" class="chkbx10" name="" value=""></td>
      <td><input type="checkbox" class="chkbx10" name="" value=""></td>
      <td><input type="checkbox" class="chkbx10" name="" value=""></td>
      <td><input type="checkbox" class="chkbx10" name="" value=""></td>
      <td><input type="checkbox" class="chkbx10" name="" value=""></td>
      <td><input type="checkbox" class="chkbx10" name="" value=""></td>
      <td><input type="checkbox" class="chkbx10" name="" value=""></td>
      <td><input type="checkbox" class="chkbx10" name="" value=""></td>
      <td><input type="checkbox" class="chkbx10" name="" value=""></td>
      <td><input type="checkbox" class="chkbx10" name="" value=""></td>
      <td><input type="checkbox" class="chkbx10" name="" value=""></td>
      <td><input type="checkbox" class="chkbx10" name="" value=""></td>
      <td><input type="checkbox" class="chkbx10" name="" value=""></td>
      <td><input type="checkbox" class="chkbx10" name="" value=""></td>
      <td><input type="checkbox" class="chkbx10" name="" value=""></td>
      <td><input type="checkbox" class="chkbx10" name="" value=""></td>
      <td><input type="checkbox" class="chkbx10" name="" value=""></td>
      <td><input type="checkbox" class="chkbx10" name="" value=""></td>
      <td><input type="text" size="2" id="ncr10" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi10" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
    <td colspan="22"><h8>7. Support</h8></td>
    </tr>
    <tr>
      <td>7.1</td>
      <td>Resources</td>
      <td><input type="checkbox" class="chkbx11" name="" value=""></td>
      <td><input type="checkbox" class="chkbx11" name="" value=""></td>
      <td><input type="checkbox" class="chkbx11" name="" value=""></td>
      <td><input type="checkbox" class="chkbx11" name="" value=""></td>
      <td><input type="checkbox" class="chkbx11" name="" value=""></td>
      <td><input type="checkbox" class="chkbx11" name="" value=""></td>
      <td><input type="checkbox" class="chkbx11" name="" value=""></td>
      <td><input type="checkbox" class="chkbx11" name="" value=""></td>
      <td><input type="checkbox" class="chkbx11" name="" value=""></td>
      <td><input type="checkbox" class="chkbx11" name="" value=""></td>
      <td><input type="checkbox" class="chkbx11" name="" value=""></td>
      <td><input type="checkbox" class="chkbx11" name="" value=""></td>
      <td><input type="checkbox" class="chkbx11" name="" value=""></td>
      <td><input type="checkbox" class="chkbx11" name="" value=""></td>
      <td><input type="checkbox" class="chkbx11" name="" value=""></td>
      <td><input type="checkbox" class="chkbx11" name="" value=""></td>
      <td><input type="checkbox" class="chkbx11" name="" value=""></td>
      <td><input type="checkbox" class="chkbx11" name="" value=""></td>
      <td><input type="text" size="2" id="ncr11" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi11" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>7.2</td>
      <td>Competences</td>
      <td><input type="checkbox" class="chkbx12" name="" value=""></td>
      <td><input type="checkbox" class="chkbx12" name="" value=""></td>
      <td><input type="checkbox" class="chkbx12" name="" value=""></td>
      <td><input type="checkbox" class="chkbx12" name="" value=""></td>
      <td><input type="checkbox" class="chkbx12" name="" value=""></td>
      <td><input type="checkbox" class="chkbx12" name="" value=""></td>
      <td><input type="checkbox" class="chkbx12" name="" value=""></td>
      <td><input type="checkbox" class="chkbx12" name="" value=""></td>
      <td><input type="checkbox" class="chkbx12" name="" value=""></td>
      <td><input type="checkbox" class="chkbx12" name="" value=""></td>
      <td><input type="checkbox" class="chkbx12" name="" value=""></td>
      <td><input type="checkbox" class="chkbx12" name="" value=""></td>
      <td><input type="checkbox" class="chkbx12" name="" value=""></td>
      <td><input type="checkbox" class="chkbx12" name="" value=""></td>
      <td><input type="checkbox" class="chkbx12" name="" value=""></td>
      <td><input type="checkbox" class="chkbx12" name="" value=""></td>
      <td><input type="checkbox" class="chkbx12" name="" value=""></td>
      <td><input type="checkbox" class="chkbx12" name="" value=""></td>
      <td><input type="text" size="2" id="ncr12" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi12" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>7.3</td>
      <td>Awareness</td>
      <td><input type="checkbox" class="chkbx13" name="" value=""></td>
      <td><input type="checkbox" class="chkbx13" name="" value=""></td>
      <td><input type="checkbox" class="chkbx13" name="" value=""></td>
      <td><input type="checkbox" class="chkbx13" name="" value=""></td>
      <td><input type="checkbox" class="chkbx13" name="" value=""></td>
      <td><input type="checkbox" class="chkbx13" name="" value=""></td>
      <td><input type="checkbox" class="chkbx13" name="" value=""></td>
      <td><input type="checkbox" class="chkbx13" name="" value=""></td>
      <td><input type="checkbox" class="chkbx13" name="" value=""></td>
      <td><input type="checkbox" class="chkbx13" name="" value=""></td>
      <td><input type="checkbox" class="chkbx13" name="" value=""></td>
      <td><input type="checkbox" class="chkbx13" name="" value=""></td>
      <td><input type="checkbox" class="chkbx13" name="" value=""></td>
      <td><input type="checkbox" class="chkbx13" name="" value=""></td>
      <td><input type="checkbox" class="chkbx13" name="" value=""></td>
      <td><input type="checkbox" class="chkbx13" name="" value=""></td>
      <td><input type="checkbox" class="chkbx13" name="" value=""></td>
      <td><input type="checkbox" class="chkbx13" name="" value=""></td>
      <td><input type="text" size="2" id="ncr13" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi13" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>7.4</td>
      <td>Communiacation</td>
      <td><input type="checkbox" class="chkbx14" name="" value=""></td>
      <td><input type="checkbox" class="chkbx14" name="" value=""></td>
      <td><input type="checkbox" class="chkbx14" name="" value=""></td>
      <td><input type="checkbox" class="chkbx14" name="" value=""></td>
      <td><input type="checkbox" class="chkbx14" name="" value=""></td>
      <td><input type="checkbox" class="chkbx14" name="" value=""></td>
      <td><input type="checkbox" class="chkbx14" name="" value=""></td>
      <td><input type="checkbox" class="chkbx14" name="" value=""></td>
      <td><input type="checkbox" class="chkbx14" name="" value=""></td>
      <td><input type="checkbox" class="chkbx14" name="" value=""></td>
      <td><input type="checkbox" class="chkbx14" name="" value=""></td>
      <td><input type="checkbox" class="chkbx14" name="" value=""></td>
      <td><input type="checkbox" class="chkbx14" name="" value=""></td>
      <td><input type="checkbox" class="chkbx14" name="" value=""></td>
      <td><input type="checkbox" class="chkbx14" name="" value=""></td>
      <td><input type="checkbox" class="chkbx14" name="" value=""></td>
      <td><input type="checkbox" class="chkbx14" name="" value=""></td>
      <td><input type="checkbox" class="chkbx14" name="" value=""></td>
      <td><input type="text" size="2" id="ncr14" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi14" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>7.5</td>
      <td>Documented Information</td>
      <td><input type="checkbox" class="chkbx15" name="" value=""></td>
      <td><input type="checkbox" class="chkbx15" name="" value=""></td>
      <td><input type="checkbox" class="chkbx15" name="" value=""></td>
      <td><input type="checkbox" class="chkbx15" name="" value=""></td>
      <td><input type="checkbox" class="chkbx15" name="" value=""></td>
      <td><input type="checkbox" class="chkbx15" name="" value=""></td>
      <td><input type="checkbox" class="chkbx15" name="" value=""></td>
      <td><input type="checkbox" class="chkbx15" name="" value=""></td>
      <td><input type="checkbox" class="chkbx15" name="" value=""></td>
      <td><input type="checkbox" class="chkbx15" name="" value=""></td>
      <td><input type="checkbox" class="chkbx15" name="" value=""></td>
      <td><input type="checkbox" class="chkbx15" name="" value=""></td>
      <td><input type="checkbox" class="chkbx15" name="" value=""></td>
      <td><input type="checkbox" class="chkbx15" name="" value=""></td>
      <td><input type="checkbox" class="chkbx15" name="" value=""></td>
      <td><input type="checkbox" class="chkbx15" name="" value=""></td>
      <td><input type="checkbox" class="chkbx15" name="" value=""></td>
      <td><input type="checkbox" class="chkbx15" name="" value=""></td>
      <td><input type="text" size="2" id="ncr15" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi15" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
    <td colspan="22"><h8>8. Operation</h8></td>
    </tr>
    <tr>
      <td>8.1</td>
      <td>Operational planning and control</td>
      <td><input type="checkbox" class="chkbx16" name="" value=""></td>
      <td><input type="checkbox" class="chkbx16" name="" value=""></td>
      <td><input type="checkbox" class="chkbx16" name="" value=""></td>
      <td><input type="checkbox" class="chkbx16" name="" value=""></td>
      <td><input type="checkbox" class="chkbx16" name="" value=""></td>
      <td><input type="checkbox" class="chkbx16" name="" value=""></td>
      <td><input type="checkbox" class="chkbx16" name="" value=""></td>
      <td><input type="checkbox" class="chkbx16" name="" value=""></td>
      <td><input type="checkbox" class="chkbx16" name="" value=""></td>
      <td><input type="checkbox" class="chkbx16" name="" value=""></td>
      <td><input type="checkbox" class="chkbx16" name="" value=""></td>
      <td><input type="checkbox" class="chkbx16" name="" value=""></td>
      <td><input type="checkbox" class="chkbx16" name="" value=""></td>
      <td><input type="checkbox" class="chkbx16" name="" value=""></td>
      <td><input type="checkbox" class="chkbx16" name="" value=""></td>
      <td><input type="checkbox" class="chkbx16" name="" value=""></td>
      <td><input type="checkbox" class="chkbx16" name="" value=""></td>
      <td><input type="checkbox" class="chkbx16" name="" value=""></td>
      <td><input type="text" size="2" id="ncr16" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi16" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>8.2</td>
      <td>Requirements for products and services</td>
      <td><input type="checkbox" class="chkbx17" name="" value=""></td>
      <td><input type="checkbox" class="chkbx17" name="" value=""></td>
      <td><input type="checkbox" class="chkbx17" name="" value=""></td>
      <td><input type="checkbox" class="chkbx17" name="" value=""></td>
      <td><input type="checkbox" class="chkbx17" name="" value=""></td>
      <td><input type="checkbox" class="chkbx17" name="" value=""></td>
      <td><input type="checkbox" class="chkbx17" name="" value=""></td>
      <td><input type="checkbox" class="chkbx17" name="" value=""></td>
      <td><input type="checkbox" class="chkbx17" name="" value=""></td>
      <td><input type="checkbox" class="chkbx17" name="" value=""></td>
      <td><input type="checkbox" class="chkbx17" name="" value=""></td>
      <td><input type="checkbox" class="chkbx17" name="" value=""></td>
      <td><input type="checkbox" class="chkbx17" name="" value=""></td>
      <td><input type="checkbox" class="chkbx17" name="" value=""></td>
      <td><input type="checkbox" class="chkbx17" name="" value=""></td>
      <td><input type="checkbox" class="chkbx17" name="" value=""></td>
      <td><input type="checkbox" class="chkbx17" name="" value=""></td>
      <td><input type="checkbox" class="chkbx17" name="" value=""></td>
      <td><input type="text" size="2" id="ncr17" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi17" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>8.3</td>
      <td>Design and development of products and services</td>
      <td><input type="checkbox" class="chkbx18" name="" value=""></td>
      <td><input type="checkbox" class="chkbx18" name="" value=""></td>
      <td><input type="checkbox" class="chkbx18" name="" value=""></td>
      <td><input type="checkbox" class="chkbx18" name="" value=""></td>
      <td><input type="checkbox" class="chkbx18" name="" value=""></td>
      <td><input type="checkbox" class="chkbx18" name="" value=""></td>
      <td><input type="checkbox" class="chkbx18" name="" value=""></td>
      <td><input type="checkbox" class="chkbx18" name="" value=""></td>
      <td><input type="checkbox" class="chkbx18" name="" value=""></td>
      <td><input type="checkbox" class="chkbx18" name="" value=""></td>
      <td><input type="checkbox" class="chkbx18" name="" value=""></td>
      <td><input type="checkbox" class="chkbx18" name="" value=""></td>
      <td><input type="checkbox" class="chkbx18" name="" value=""></td>
      <td><input type="checkbox" class="chkbx18" name="" value=""></td>
      <td><input type="checkbox" class="chkbx18" name="" value=""></td>
      <td><input type="checkbox" class="chkbx18" name="" value=""></td>
      <td><input type="checkbox" class="chkbx18" name="" value=""></td>
      <td><input type="checkbox" class="chkbx18" name="" value=""></td>
      <td><input type="text" size="2" id="ncr18" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi18" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>8.4</td>
      <td>Design and development of products and servces</td>
      <td><input type="checkbox" class="chkbx19" name="" value=""></td>
      <td><input type="checkbox" class="chkbx19" name="" value=""></td>
      <td><input type="checkbox" class="chkbx19" name="" value=""></td>
      <td><input type="checkbox" class="chkbx19" name="" value=""></td>
      <td><input type="checkbox" class="chkbx19" name="" value=""></td>
      <td><input type="checkbox" class="chkbx19" name="" value=""></td>
      <td><input type="checkbox" class="chkbx19" name="" value=""></td>
      <td><input type="checkbox" class="chkbx19" name="" value=""></td>
      <td><input type="checkbox" class="chkbx19" name="" value=""></td>
      <td><input type="checkbox" class="chkbx19" name="" value=""></td>
      <td><input type="checkbox" class="chkbx19" name="" value=""></td>
      <td><input type="checkbox" class="chkbx19" name="" value=""></td>
      <td><input type="checkbox" class="chkbx19" name="" value=""></td>
      <td><input type="checkbox" class="chkbx19" name="" value=""></td>
      <td><input type="checkbox" class="chkbx19" name="" value=""></td>
      <td><input type="checkbox" class="chkbx19" name="" value=""></td>
      <td><input type="checkbox" class="chkbx19" name="" value=""></td>
      <td><input type="checkbox" class="chkbx19" name="" value=""></td>
      <td><input type="text" size="2" id="ncr19" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi19" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>8.5</td>
      <td>Production and service provision</td>
      <td><input type="checkbox" class="chkbx20" name="" value=""></td>
      <td><input type="checkbox" class="chkbx20" name="" value=""></td>
      <td><input type="checkbox" class="chkbx20" name="" value=""></td>
      <td><input type="checkbox" class="chkbx20" name="" value=""></td>
      <td><input type="checkbox" class="chkbx20" name="" value=""></td>
      <td><input type="checkbox" class="chkbx20" name="" value=""></td>
      <td><input type="checkbox" class="chkbx20" name="" value=""></td>
      <td><input type="checkbox" class="chkbx20" name="" value=""></td>
      <td><input type="checkbox" class="chkbx20" name="" value=""></td>
      <td><input type="checkbox" class="chkbx20" name="" value=""></td>
      <td><input type="checkbox" class="chkbx20" name="" value=""></td>
      <td><input type="checkbox" class="chkbx20" name="" value=""></td>
      <td><input type="checkbox" class="chkbx20" name="" value=""></td>
      <td><input type="checkbox" class="chkbx20" name="" value=""></td>
      <td><input type="checkbox" class="chkbx20" name="" value=""></td>
      <td><input type="checkbox" class="chkbx20" name="" value=""></td>
      <td><input type="checkbox" class="chkbx20" name="" value=""></td>
      <td><input type="checkbox" class="chkbx20" name="" value=""></td>
      <td><input type="text" size="2" id="ncr20" name="" value=""></td>
      <td><input type="text" size="2" id="ofi20" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>8.6</td>
      <td>Release products and services</td>
      <td><input type="checkbox" class="chkbx21" name="" value=""></td>
      <td><input type="checkbox" class="chkbx21" name="" value=""></td>
      <td><input type="checkbox" class="chkbx21" name="" value=""></td>
      <td><input type="checkbox" class="chkbx21" name="" value=""></td>
      <td><input type="checkbox" class="chkbx21" name="" value=""></td>
      <td><input type="checkbox" class="chkbx21" name="" value=""></td>
      <td><input type="checkbox" class="chkbx21" name="" value=""></td>
      <td><input type="checkbox" class="chkbx21" name="" value=""></td>
      <td><input type="checkbox" class="chkbx21" name="" value=""></td>
      <td><input type="checkbox" class="chkbx21" name="" value=""></td>
      <td><input type="checkbox" class="chkbx21" name="" value=""></td>
      <td><input type="checkbox" class="chkbx21" name="" value=""></td>
      <td><input type="checkbox" class="chkbx21" name="" value=""></td>
      <td><input type="checkbox" class="chkbx21" name="" value=""></td>
      <td><input type="checkbox" class="chkbx21" name="" value=""></td>
      <td><input type="checkbox" class="chkbx21" name="" value=""></td>
      <td><input type="checkbox" class="chkbx21" name="" value=""></td>
      <td><input type="checkbox" class="chkbx21" name="" value=""></td>
      <td><input type="text" size="2" id="ncr21" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi21" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>8.7</td>
      <td>Control of nonconforming outputs</td>
      <td><input type="checkbox" class="chkbx22" name="" value=""></td>
      <td><input type="checkbox" class="chkbx22" name="" value=""></td>
      <td><input type="checkbox" class="chkbx22" name="" value=""></td>
      <td><input type="checkbox" class="chkbx22" name="" value=""></td>
      <td><input type="checkbox" class="chkbx22" name="" value=""></td>
      <td><input type="checkbox" class="chkbx22" name="" value=""></td>
      <td><input type="checkbox" class="chkbx22" name="" value=""></td>
      <td><input type="checkbox" class="chkbx22" name="" value=""></td>
      <td><input type="checkbox" class="chkbx22" name="" value=""></td>
      <td><input type="checkbox" class="chkbx22" name="" value=""></td>
      <td><input type="checkbox" class="chkbx22" name="" value=""></td>
      <td><input type="checkbox" class="chkbx22" name="" value=""></td>
      <td><input type="checkbox" class="chkbx22" name="" value=""></td>
      <td><input type="checkbox" class="chkbx22" name="" value=""></td>
      <td><input type="checkbox" class="chkbx22" name="" value=""></td>
      <td><input type="checkbox" class="chkbx22" name="" value=""></td>
      <td><input type="checkbox" class="chkbx22" name="" value=""></td>
      <td><input type="checkbox" class="chkbx22" name="" value=""></td>
      <td><input type="text" size="2" id="ncr22" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi22" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
    <td colspan="22"><h8>9. Performance Evaluation</h8></td>
    </tr>
    <tr>
      <td>9.1</td>
      <td>Monitoring, measruement, analysis and evaluation</td>
      <td><input type="checkbox" class="chkbx23" name="" value=""></td>
      <td><input type="checkbox" class="chkbx23" name="" value=""></td>
      <td><input type="checkbox" class="chkbx23" name="" value=""></td>
      <td><input type="checkbox" class="chkbx23" name="" value=""></td>
      <td><input type="checkbox" class="chkbx23" name="" value=""></td>
      <td><input type="checkbox" class="chkbx23" name="" value=""></td>
      <td><input type="checkbox" class="chkbx23" name="" value=""></td>
      <td><input type="checkbox" class="chkbx23" name="" value=""></td>
      <td><input type="checkbox" class="chkbx23" name="" value=""></td>
      <td><input type="checkbox" class="chkbx23" name="" value=""></td>
      <td><input type="checkbox" class="chkbx23" name="" value=""></td>
      <td><input type="checkbox" class="chkbx23" name="" value=""></td>
      <td><input type="checkbox" class="chkbx23" name="" value=""></td>
      <td><input type="checkbox" class="chkbx23" name="" value=""></td>
      <td><input type="checkbox" class="chkbx23" name="" value=""></td>
      <td><input type="checkbox" class="chkbx23" name="" value=""></td>
      <td><input type="checkbox" class="chkbx23" name="" value=""></td>
      <td><input type="checkbox" class="chkbx23" name="" value=""></td>
      <td><input type="text" size="2" id="ncr23" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi23" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>9.2</td>
      <td>Internal Audit</td>
      <td><input type="checkbox" class="chkbx24" name="" value=""></td>
      <td><input type="checkbox" class="chkbx24" name="" value=""></td>
      <td><input type="checkbox" class="chkbx24" name="" value=""></td>
      <td><input type="checkbox" class="chkbx24" name="" value=""></td>
      <td><input type="checkbox" class="chkbx24" name="" value=""></td>
      <td><input type="checkbox" class="chkbx24" name="" value=""></td>
      <td><input type="checkbox" class="chkbx24" name="" value=""></td>
      <td><input type="checkbox" class="chkbx24" name="" value=""></td>
      <td><input type="checkbox" class="chkbx24" name="" value=""></td>
      <td><input type="checkbox" class="chkbx24" name="" value=""></td>
      <td><input type="checkbox" class="chkbx24" name="" value=""></td>
      <td><input type="checkbox" class="chkbx24" name="" value=""></td>
      <td><input type="checkbox" class="chkbx24" name="" value=""></td>
      <td><input type="checkbox" class="chkbx24" name="" value=""></td>
      <td><input type="checkbox" class="chkbx24" name="" value=""></td>
      <td><input type="checkbox" class="chkbx24" name="" value=""></td>
      <td><input type="checkbox" class="chkbx24" name="" value=""></td>
      <td><input type="checkbox" class="chkbx24" name="" value=""></td>
      <td><input type="text" size="2" id="ncr24" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi24" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>9.3</td>
      <td>Management, measurement, analysis and evaluation</td>
      <td><input type="checkbox" class="chkbx25" name="" value=""></td>
      <td><input type="checkbox" class="chkbx25" name="" value=""></td>
      <td><input type="checkbox" class="chkbx25" name="" value=""></td>
      <td><input type="checkbox" class="chkbx25" name="" value=""></td>
      <td><input type="checkbox" class="chkbx25" name="" value=""></td>
      <td><input type="checkbox" class="chkbx25" name="" value=""></td>
      <td><input type="checkbox" class="chkbx25" name="" value=""></td>
      <td><input type="checkbox" class="chkbx25" name="" value=""></td>
      <td><input type="checkbox" class="chkbx25" name="" value=""></td>
      <td><input type="checkbox" class="chkbx25" name="" value=""></td>
      <td><input type="checkbox" class="chkbx25" name="" value=""></td>
      <td><input type="checkbox" class="chkbx25" name="" value=""></td>
      <td><input type="checkbox" class="chkbx25" name="" value=""></td>
      <td><input type="checkbox" class="chkbx25" name="" value=""></td>
      <td><input type="checkbox" class="chkbx25" name="" value=""></td>
      <td><input type="checkbox" class="chkbx25" name="" value=""></td>
      <td><input type="checkbox" class="chkbx25" name="" value=""></td>
      <td><input type="checkbox" class="chkbx25" name="" value=""></td>
      <td><input type="text" size="2" id="ncr25" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi25" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
    <td colspan="22"><h8>10. Improvement</h8></td>
    </tr>
    <tr>
      <td>10.1</td>
      <td>General</td>
      <td><input type="checkbox" class="chkbx26" name="" value=""></td>
      <td><input type="checkbox" class="chkbx26" name="" value=""></td>
      <td><input type="checkbox" class="chkbx26" name="" value=""></td>
      <td><input type="checkbox" class="chkbx26" name="" value=""></td>
      <td><input type="checkbox" class="chkbx26" name="" value=""></td>
      <td><input type="checkbox" class="chkbx26" name="" value=""></td>
      <td><input type="checkbox" class="chkbx26" name="" value=""></td>
      <td><input type="checkbox" class="chkbx26" name="" value=""></td>
      <td><input type="checkbox" class="chkbx26" name="" value=""></td>
      <td><input type="checkbox" class="chkbx26" name="" value=""></td>
      <td><input type="checkbox" class="chkbx26" name="" value=""></td>
      <td><input type="checkbox" class="chkbx26" name="" value=""></td>
      <td><input type="checkbox" class="chkbx26" name="" value=""></td>
      <td><input type="checkbox" class="chkbx26" name="" value=""></td>
      <td><input type="checkbox" class="chkbx26" name="" value=""></td>
      <td><input type="checkbox" class="chkbx26" name="" value=""></td>
      <td><input type="checkbox" class="chkbx26" name="" value=""></td>
      <td><input type="checkbox" class="chkbx26" name="" value=""></td>
      <td><input type="text" size="2" id="ncr26" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi26" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>10.2</td>
      <td>Nonconformity and corrective action
</td>
      <td><input type="checkbox" class="chkbx27" name="" value=""></td>
      <td><input type="checkbox" class="chkbx27" name="" value=""></td>
      <td><input type="checkbox" class="chkbx27" name="" value=""></td>
      <td><input type="checkbox" class="chkbx27" name="" value=""></td>
      <td><input type="checkbox" class="chkbx27" name="" value=""></td>
      <td><input type="checkbox" class="chkbx27" name="" value=""></td>
      <td><input type="checkbox" class="chkbx27" name="" value=""></td>
      <td><input type="checkbox" class="chkbx27" name="" value=""></td>
      <td><input type="checkbox" class="chkbx27" name="" value=""></td>
      <td><input type="checkbox" class="chkbx27" name="" value=""></td>
      <td><input type="checkbox" class="chkbx27" name="" value=""></td>
      <td><input type="checkbox" class="chkbx27" name="" value=""></td>
      <td><input type="checkbox" class="chkbx27" name="" value=""></td>
      <td><input type="checkbox" class="chkbx27" name="" value=""></td>
      <td><input type="checkbox" class="chkbx27" name="" value=""></td>
      <td><input type="checkbox" class="chkbx27" name="" value=""></td>
      <td><input type="checkbox" class="chkbx27" name="" value=""></td>
      <td><input type="checkbox" class="chkbx27" name="" value=""></td>
      <td><input type="text" size="2" id="ncr27" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi27" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td>10.3</td>
      <td>Continual Improvement
</td>
      <td><input type="checkbox" class="chkbx28" name="" value=""></td>
      <td><input type="checkbox" class="chkbx28" name="" value=""></td>
      <td><input type="checkbox" class="chkbx28" name="" value=""></td>
      <td><input type="checkbox" class="chkbx28" name="" value=""></td>
      <td><input type="checkbox" class="chkbx28" name="" value=""></td>
      <td><input type="checkbox" class="chkbx28" name="" value=""></td>
      <td><input type="checkbox" class="chkbx28" name="" value=""></td>
      <td><input type="checkbox" class="chkbx28" name="" value=""></td>
      <td><input type="checkbox" class="chkbx28" name="" value=""></td>
      <td><input type="checkbox" class="chkbx28" name="" value=""></td>
      <td><input type="checkbox" class="chkbx28" name="" value=""></td>
      <td><input type="checkbox" class="chkbx28" name="" value=""></td>
      <td><input type="checkbox" class="chkbx28" name="" value=""></td>
      <td><input type="checkbox" class="chkbx28" name="" value=""></td>
      <td><input type="checkbox" class="chkbx28" name="" value=""></td>
      <td><input type="checkbox" class="chkbx28" name="" value=""></td>
      <td><input type="checkbox" class="chkbx28" name="" value=""></td>
      <td><input type="checkbox" class="chkbx28" name="" value=""></td>
      <td><input type="text" size="2" id="ncr28" name="" value="" readonly></td>
      <td><input type="text" size="2" id="ofi28" class="prc" name="" value="" readonly></td>
    </tr>
    <tr>
      <td colspan="2">Total NCR/OFI</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><output id="sum"></output></td>
      <td><output id="sum"></output></td>
    </tr>

  </table>
  <table>
    <tr>
      <td>
      a) Tandakan (√) pada kotak berkaitan keperluan yang diaudit.
      </td>
    </tr>
    <tr>
      <td>
      b) Jika pada kes yang diaudit terdapat ketakakuran, gantikan tanda (√) dengan bilangan ketakakuran. 
      </td>
    </tr>
    <tr>
      <td>
      c) Isikan dalam ruang Klien dengan nama Klien yang diaudit.
      </td>
    </tr>
  </table>
</form>
  </div>
</div>
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
