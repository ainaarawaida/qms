<?php
include_once '../../db.php';
include_once 'session.php';

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
            $errorMsg="Your File To large Please Upload 5MB Size"; //error message file size not large than 5MB
          }
        }
        else
        { 
          $errorMsg="File Already Exists...Check Upload Folder"; //error message file not exists your upload folder path
        }
      }
      else
      {
        $errorMsg="Upload JPG, JPEG, PNG & GIF File Formate.....CHECK FILE EXTENSION"; //error message file extension
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
        $updateMsg="File Update Successfully......."; //file update success message
        header("refresh:3;index.php");  //refresh 3 second and redirect to index.php page
      }
    }
  }
  catch(PDOException $e)
  {
    echo $e->getMessage();
  }
  
}
?>
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
<?php
    if(isset($errorMsg))
    {
      ?>
            <div class="alert alert-danger">
              <strong>WRONG ! <?php echo $errorMsg; ?></strong>
            </div>
            <?php
    }
    if(isset($updateMsg)){
    ?>
      <div class="alert alert-success">
        <strong>UPDATE ! <?php echo $updateMsg; ?></strong>
      </div>
        <?php
    }
    ?>   
    
      <form method="post" class="form-horizontal" enctype="multipart/form-data">
          
        <div class="form-group">
        <label class="col-sm-3 control-label">Name</label>
        <div class="col-sm-6">
        <input type="text" name="txt_name" class="form-control" value="<?php echo $name; ?>" required/>
        </div>
        </div>
          
          
        <div class="form-group">
        <label class="col-sm-3 control-label">File</label>
        <div class="col-sm-6">
        <input type="file" name="txt_file" class="form-control" value="<?php echo $image; ?>"/>
        <p><img src="uploads/<?php echo $image; ?>" height="100" width="100" /></p>
        </div>
        </div>
          
          
        <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9 m-t-15">
        <input type="submit"  name="btn_update" class="btn btn-primary" value="Update">
        <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
        </div>
          
      </form>
    
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
