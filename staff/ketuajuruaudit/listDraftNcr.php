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
<div id="Menu" class="tabcontent" style="height: 600px">
  <h3>SENARAI NCR</h3>

  <table width="9px" class="table table-striped table-bordered">
    <tr>
        <td>Jabatan/Unit</td>
        <td>No NCR</td>
        <td>Status</td>
        <td></td>
      </tr>
      <?php
      // Read
      $per_page = 5;
      if (isset($_GET["page"]))
        $page = $_GET["page"];
      else
        $page = 1;
      $start_from = ($page-1) * $per_page;
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT * FROM ncr WHERE staff_no = '$uid' LIMIT $start_from, $per_page");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $readrow) {
      ?>
      <tr>
        <td><?php echo $readrow['jabatan_unit']; ?></td>
        <td><?php echo $readrow['no_ncr']; ?></td>
        <td><?php echo $readrow['status']?></td>
        <!--<td align="center" class="style35" style="text-transform:uppercase"><?php 

                    if($readrow['status']==""|| $readrow['status']==null){
                       echo "Draf"; 
                    }else{
                      echo $readrow['status'];
                    }
                ?></td>-->
        <td>
          <!--<a href="kemaskiniAuditor.php?edit=<?php //echo $readrow['staff_name']; ?>" class="btn btn-success btn-xs" role="button">Kemaskini</a>-->
          <a href="updateNcr.php?no_id=<?php echo $readrow['no_id']; ?>" class="btn btn-success btn-xs" role="button">Lihat</a>
          <!--<a href="updateAuditor.php?delete=<?php echo $readrow['staff_no']; ?>" onclick="return confirm('Anda pasti untuk padam?');" class="btn btn-danger btn-xs" role="button">Padam</a>-->
        </td>
      </tr>
      <?php
      }
      $conn = null;
      ?>
    </table>

    <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <nav>
          <ul class="pagination">
          <?php
          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM ncr  WHERE status = 'draft'");
            $stmt->execute();
            $result = $stmt->fetchAll();
            $total_records = count($result);
          }
          catch(PDOException $e){
                echo "Error: " . $e->getMessage();
          }
          $total_pages = ceil($total_records / $per_page);
          ?>
          <?php if ($page==1) { ?>
            <li class="disabled"><span aria-hidden="true">«</span></li>
          <?php } else { ?>
            <li><a href="listDraftNcr.php?page=<?php echo $page-1 ?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
          <?php
          }
          for ($i=1; $i<=$total_pages; $i++)
            if ($i == $page)
              echo "<li class=\"active\"><a href=\"listDraftNcr.php?page=$i\">$i</a></li>";
            else
              echo "<li><a href=\"listDraftNcr.php?page=$i\">$i</a></li>";
          ?>
          <?php if ($page==$total_pages) { ?>
            <li class="disabled"><span aria-hidden="true">»</span></li>
          <?php } else { ?>
            <li><a href="listDraftNcr.php?page=<?php echo $page+1 ?>" aria-label="Previous"><span aria-hidden="true">»</span></a></li>
          <?php } ?>
        </ul>
      </nav>
    </div>
    <!--<p align="right" class="style48">Jumlah Senarai Draf NCR : <?php echo $total_records; ?></p>-->
    </div>
  
</div>
    </td>
  </tr>
</table>
</div>
</body>
</html> 
