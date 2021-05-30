<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <title>Masukkan ID dan Kata Laluan Anda</title>
  <style>

</style>
</head>
<body style="background-color: #d8d8d9; ">
  <img src="../auditHeader.png" style="width:100% ">
<br>
<br>
<br>
    <table align="center" cellpadding="0" cellspacing="0" width="1167px" style="background-color:white; z-index: 5000;">
      <tr>
        <td>
         <!-- <img src="../ukm.png" style="width:100% ">-->
        </td>
      </tr>
      <tr>
        <td style="width:1117px">
          <table width="1117px" style="height: 318px">
            
            <tr>
              <td width="100px" height="150px" align="center">
                <h1>Selamat Datang ke Sistem Pengurusan Audit UKM</h1>
              </td>
            </tr>
            <tr>
              <td align="center" width="917px" height="250px">

<div class="container">    

    <div class="mainbox col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4"> 
        <div class="panel panel-default">
            <div class="panel-heading">
               <div class="panel-title text-center">Log Masuk</div>
            </div>     

            <div class="panel-body">
<div class="login-box">
    <form id="login" action="login.php" method="POST">
        <label for="inputUsername" class="sr-only">ID Auditee</label>
        <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
          <input type="text" name="uid" id="focus" class="form-control input-sm" placeholder="ID Auditee" 
          value="" required autofocus>
        </div>
        <br>
        <label for="inputPassword" class="sr-only">Kata Laluan</label>
        <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
          <input type="password" value="" name="upass" id="inputPassword" class="form-control input-sm" placeholder="Kata Laluan" required>
        </div>
<br>
        <input class="btn btn-md btn-primary btn-block btn-sm" type="submit" name="login" value="Log Masuk" />
     </form>
    </div>

            </div>                     
        </div>  
    </div>
</div>
              </td>
              <td width="100px" height="250px"></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>


</body>
</html>
