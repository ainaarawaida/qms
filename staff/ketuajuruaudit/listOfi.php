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

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<div id="Menu" class="tabcontent" style="height: 600px">
  <h3>SENARAI Ofi</h3>

  <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Status</th>
                <th>Staff Id</th>
                <th>Staff Level</th>
                <th>Hantar Ke </th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
        <?php 

          include_once '../../conn.php';
          $sql = "SELECT * FROM `ofi` ";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            if($row['status'] == 'draf' && $row['user_type'] != 'ketuajuruaudit'){
              continue ; 
            }
           
        ?>

            <tr>
                <th><?php echo $row['no_id'] ; ?></th>
                <th><?php echo $row['status'] ; ?></th>
                <th><?php echo $row['staff_no'] ; ?></th>
                <th><?php echo $row['user_type'] ; ?></th>
                <th><?php echo $row['hantar_ke'] ; ?></th>
                <th><a href="ofi.php?ofi_id=<?php echo $row['no_id'] ; ?>" name="Hantar" class="btn btn-primary">View</a></th>
            </tr>

                <?php
            }
          }
        ?>
           
        </tbody>
        <tfoot>
            <tr>
            <th>Id</th>
                <th>Status</th>
                <th>Staff</th>
                <th>Staff Level</th>
                <th>Hantar Ke </th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
  
</div>
</body>
</html> 
