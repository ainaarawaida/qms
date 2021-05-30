<nav class="navbar navbar-default"style=
  "background-color: #000000; 
  /*overflow: hidden;*/
  /*position: sticky;
  bottom: 0;
  width: 100%;*/

  position: relative; 
  z-index: 100;

">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="utama.php">Sistem Pengurusan Audit</a>
    </div>
 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
         <li><a href="#" disabled="disabled"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  <?php echo $name; ?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="changepass.php" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>   Tukar Katalaluan </a></li>
            <li><a href="logout.php" ><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>   Log Keluar </a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>