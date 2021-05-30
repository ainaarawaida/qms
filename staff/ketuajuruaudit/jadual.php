<?php
include_once '../../db.php';
include_once 'session.php';

if(isset($_REQUEST['btn_insert']))
{
  try
  {
      
    $image_file = $_FILES["txt_file"]["name"];
    $type   = $_FILES["txt_file"]["type"];  //nama failtxt_file"  
    $size   = $_FILES["txt_file"]["size"];
    $temp   = $_FILES["txt_file"]["tmp_name"];
    
    $path="uploads/".$image_file;
    
    if(empty($name)){
      $errorMsg="Sila masukkan nama fail";
    }
    else if(empty($image_file)){
      $errorMsg="Sila pilih fail";
    }
    else if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='application/pdf')
    { 
      if(!file_exists($path)) //semak jika fail belum wujud
      {
        if($size < 5000000) //semak saiz fail
        {
          move_uploaded_file($temp, "uploads/" .$image_file); //move upload file temperory directory to your upload folder
        }
        else
        {
          $errorMsg="Fail terlalu besar. Sila muat naik 5MB Size."; //error message jika saiz fail > 5mb
        }
      }
      else
      { 
        $errorMsg="Fail sudah wujud"; //error message file jika fail sudah wujud
      }
    }
    else
    {
      $errorMsg="Sila muat naik format JPG, JPEG, PNG & PDF"; 
    }
    
    if(!isset($errorMsg))
    {
      $insert_stmt=$conn->prepare('INSERT INTO tbl_file(image) VALUES(:fimage)');
      $insert_stmt->bindParam(':fimage',$image_file);  
    
      if($insert_stmt->execute())
      {
        $insertMsg="Fail berjaya dimuat naik"; //execute query success message
        header("refresh:3;jadual.php"); //refresh 3 saat dan redirect ke jadual.php page
      }
    }
  }
  catch(PDOException $e)
  {
    echo $e->getMessage();
  }
}

if(isset($_REQUEST['update_id']))
{
  try
  {
    $id = $_REQUEST['update_id']; //get "update_id" from index.php page through anchor tag operation and store in "$id" variable
    $select_stmt = $conn->prepare('SELECT * FROM tbl_file WHERE id =:id'); //sql select query
    $select_stmt->bindParam(':id',$id);
    $select_stmt->execute(); 
    $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
    extract($row);
  }
  catch(PDOException $e)
  {
    $e->getMessage();
  }
  
}

if(isset($_REQUEST['btn_update']))
{
  try
  {
    $name =$_REQUEST['txt_name']; //textbox name "txt_name"
    
    $image_file = $_FILES["txt_file"]["name"];
    $type   = $_FILES["txt_file"]["type"];  //file name "txt_file"
    $size   = $_FILES["txt_file"]["size"];
    $temp   = $_FILES["txt_file"]["tmp_name"];
      
    $path="uploads/".$image_file; //set upload folder path
    
    $directory="uploads/"; //set upload folder path for update time previous file remove and new file upload for next use
    
    if($image_file)
    {
      if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') //check file extension
      { 
        if(!file_exists($path)) //check file not exist in your upload folder path
        {
          if($size < 5000000) //check file size 5MB
          {
            unlink($directory.$row['image']); //unlink function remove previous file
            move_uploaded_file($temp, "uploads/" .$image_file);  //move upload file temperory directory to your upload folder  
          }
          else
          {
            $errorMsg="Fail terlalu besar. Sila muat naik 5MB Size."; //error message file size not large than 5MB
          }
        }
        else
        { 
          $errorMsg="Fail sudah wujud"; //error message file not exists your upload folder path
        }
      }
      else
      {
        $errorMsg="Sila muat naik format JPG, JPEG, PNG & PDF"; //error message file extension
      }
    }
    else
    {
      $image_file=$row['image']; //if you not select new image than previous image sam it is it.
    }
  
    if(!isset($errorMsg))
    {
      $update_stmt=$conn->prepare('UPDATE tbl_file SET name=:name_up, image=:file_up WHERE id=:id'); //sql update query
      $update_stmt->bindParam(':name_up',$name);
      $update_stmt->bindParam(':file_up',$image_file);  //bind all parameter
      $update_stmt->bindParam(':id',$id);
       
      if($update_stmt->execute())
      {
        $updateMsg="Fail berjaya dikemaskini"; //file update success message
        header("refresh:3;jadual.php");  //refresh 3 second and redirect to index.php page
      }
    }
  }
  catch(PDOException $e)
  {
    echo $e->getMessage();
  }
  
}

if(isset($_REQUEST['delete_id']))
  {
    // select image from db to delete
    $id=$_REQUEST['delete_id']; //get delete_id and store in $id variable
    
    $select_stmt= $conn->prepare('SELECT * FROM tbl_file WHERE id =:id'); //sql select query
    $select_stmt->bindParam(':id',$id);
    $select_stmt->execute();
    $row=$select_stmt->fetch(PDO::FETCH_ASSOC);
    unlink("uploads/".$row['image']); //unlink function permanently remove your file
    
    //delete an orignal record from db
    $delete_stmt = $conn->prepare('DELETE FROM tbl_file WHERE id =:id');
    $delete_stmt->bindParam(':id',$id);
    $delete_stmt->execute();
    
    header("Location:jadual.php");
  }
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

<div id="Menu" class="tabcontent" style="height: 600px">
  <h3>JADUAL AUDIT</h3>
 <br>
<br>
<?php
    if(isset($errorMsg))
    {
      ?>
            <div class="alert alert-danger">
              <strong><?php echo $errorMsg; ?></strong>
            </div>
            <?php
    }
    if(isset($insertMsg)){
    ?>
      <div class="alert alert-success">
        <strong><?php echo $insertMsg; ?></strong>
      </div>
        <?php
    }
    ?>   
    
      <form method="post" class="form-horizontal" enctype="multipart/form-data">
          
        <!--<div class="form-group">
        <label class="col-sm-3 control-label">Name</label>
        <div class="col-sm-6">
        <input type="text" name="txt_name" class="form-control" placeholder="enter name" />
        </div>
        </div>-->
          
          
        <div class="form-group">
        <label class="col-sm-3 control-label">Fail</label>
        <div class="col-sm-6">
        <input type="file" name="txt_file" class="form-control" />
        </div>
        </div>
          
          
        <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9 m-t-15">
        <input type="submit"  name="btn_insert" class="btn btn-success " value="Muat Naik">
        <a href="jadual.php" class="btn btn-danger">Batal</a>
        </div>
        </div>
          
      </form>
  
                        <!-- /.panel-heading -->
                        <div class="page-header">
                            <div class="table-responsive">
                                <table width="15px" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Jadual</th>
                                            <th>Tindakan</th>
                                            <th>Tarikh Muat Naik</th>
                                        </tr>
                                    </thead>
                                    <tbody>
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
          $stmt = $conn->prepare("SELECT * FROM tbl_file LIMIT $start_from, $per_page");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $readrow) {
      ?>
                                        <tr>
                                            <!--<td><?php echo $row['name']; ?></td>-->
                                            <td><?php echo $readrow['image']; ?></td>
                                            <td><a href="uploads/<?php echo $readrow['image']; ?>" class="btn btn-success btn-xs" role="button" download="<?php echo $readrow['image']; ?>">
            Muat Turun
        </a>
                                            <!--<td><a href="edit.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>-->
                                            <a href="?delete_id=<?php echo $readrow['id']; ?>" onclick="return confirm('Anda pasti untuk padam?');" class="btn btn-danger btn-xs" role="button">Padam</a></td>
                                            <td>
            <?php date_default_timezone_set("Asia/Kuala_Lumpur"); echo date("d-m-Y"); ?>
          </td>

                                        </tr>
                                    <?php
      }
      $conn = null;
      ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                        <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <nav>
          <ul class="pagination">
          <?php
          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM tbl_file");
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
      </nav>
    </div>
    <p align="right" class="style48">Jumlah Senarai Jadual : <?php echo $total_records; ?></p>
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
