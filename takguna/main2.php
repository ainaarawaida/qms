 <?php
include_once 'db.php';
include_once 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Sistem Pengurusan Audit</title>
  <link rel="stylesheet" type="text/css" href="style.css">

<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
<style>
body {
  background-image: url('wallpaper2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;

  -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;

    -webkit-animation: myfirst 4s ; /* Chrome, Safari, Opera */
    animation: myfirst 4s ;
  }

  /* Chrome, Safari, Opera */
  @-webkit-keyframes myfirst {
    from {opacity: 0.2;}
    to {opacity: 1;}
  }

  /* Standard syntax */
  @keyframes myfirst {
    from {opacity: 0.2;}
    to {opacity: 1;}
  }
</style>
</head>
<body>
  <div id="container">
    <table width="950" border="0" cellpadding="0" cellspacing="0" align="center">
    <!--DWLayoutTable-->
    <!-- <tr>
      <td height="200" colspan="3" valign="top"><img src="header.png" alt="" width="990" height="250" /></td>
    </tr> -->
  </table>
  </div>
<img src="ukm.png" style="width:100% ">
    <link href="css/bootstrap.min.css" rel="stylesheet">


  </head>
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
       
       <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menu <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="login.php">Log Masuk Admin</a></li>
              </ul>
            </li>
          </ul>
        </div>-->
        <!-- Collect the nav links, forms, and other content for toggling -->
        
        <!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
 
  <div class="jumbotron">
   <center> <h1>Sistem Pengurusan Audit</h1>
    <p>Sebuah sistem pengurusan pinjaman peralatan sukan, gelanggang dan pelatih UKM.</p>
    <!--<?php //include 'slides.html'; ?>-->
      <!--<a class="btn btn-lg btn-warning" href="juruaudit/login_pelajar.php" role="button">Log Masuk Pelajar</a>--> 
      <a class="btn btn-lg btn-warning" href="staff/login_staff.php" role="button">Log Masuk Staff UKM</a>
      <a class="btn btn-lg btn-warning" href="auditee/login_pelatih.php" role="button">Log Masuk Auditee</a></center>

   
  </div> <!-- /jumbotron -->
 

                    <!-- /.panel -->
</div>    <!-- Placed at the end of the document so the pages load faster -->
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap core and JavaScript -->
    <script src="http://pta.ftsm.ukm.my/spid/vendor/bootstrap/js/bootstrap.min.js"></script>

  </div> <!-- /container -->

  </body>
</html>
