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
            <li><a href="tambahaudit.php">TAMBAH JURUAUDIT</a></li>
            <li><a href="listAuditor.php">PROFIL JURUAUDIT</a></li>
            <li><a href="jadual.php">KEMASKINI JADUAL AUDIT</a></li>
            <li><a href="data.php">PAPAR DATA ANALITIK AUDIT</a></li>
            <li><a href="laporan.php">LAPORAN AUDIT</a></li>
          </ul>

<div id="Menu" class="tabcontent" style="height: 600px">
  <h3>JADUAL AUDIT</h3>
 <br>
<br>
  <div>
      <form method="POST" action="upload.php" enctype="multipart/form-data">
    <table>
      <tr>
        <td><input type="file" name="file"></td>
        <td><input type="submit" value="Muat Naik"></td>
      </tr>
    </table>
        
</form>
<br>
<table width="15px" class="table table-striped table-bordered">
  <tr>
        <td width="11px">Jadual</td>
        <td width="2px">Tindakan</td>
        <td width="2px">Tarikh Muat Naik</td>
      </tr>
  <tr>
<?php
 
 $per_page = 5;
      if (isset($_GET["page"]))
        $page = $_GET["page"];
      else
        $page = 1;
      $start_from = ($page-1) * $per_page;
// This will return all files in that folder
$files = scandir("uploads");
 

for ($a = 2; $a < count($files); $a++)
{
    ?>
          <td>
            <?php echo $files[$a]; ?>
          </td>
          <td>
            <a href="uploads/<?php echo $files[$a]; ?>" class="btn btn-success btn-xs" role="button" download="<?php echo $files[$a]; ?>">
            Muat Turun
        </a>            <a href="delete.php?name=uploads/<?php echo $files[$a]; ?>" onclick="return confirm('Anda pasti untuk padam?');" class="btn btn-danger btn-xs" role="button">Padam</a>          
          </td>
          <td>
            <?php date_default_timezone_set("Asia/Kuala_Lumpur"); echo date("d-m-Y"); ?>
          </td>
       </tr>
    <?php
}
?>
     
      </table>
      <!--<nav>
          <ul class="pagination">
          <?php
          $total_records = count($files[$a]);
          $total_pages = ceil($total_records / $per_page);
          ?>
          <?php if ($page==1) { ?>
            <li class="disabled"><span aria-hidden="true">«</span></li>
          <?php } else { ?>
            <li><a href="jadual.php?page=<?php echo $page-1 ?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
          <?php
          }
          for ($i=1; $i<=$total_pages; $i++)
            if ($i == $page)
              echo "<li class=\"active\"><a href=\"jadual.php?page=$i\">$i</a></li>";
            else
              echo "<li><a href=\"jadual.php?page=$i\">$i</a></li>";
          ?>
          <?php if ($page==$total_pages) { ?>
            <li class="disabled"><span aria-hidden="true">»</span></li>
          <?php } else { ?>
            <li><a href="jadual.php?page=<?php echo $page+1 ?>" aria-label="Previous"><span aria-hidden="true">»</span></a></li>
          <?php } ?>
        </ul>
      </nav>-->
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
