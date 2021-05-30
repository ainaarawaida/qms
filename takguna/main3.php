 <?php
include_once 'db.php';
include_once 'session.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Bagstopia</title>
<meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Bagstopia</title>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet"><style type="text/css">
      @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";

  
body{
  font-family: sans-serif;
  width:100%;
  height:100%;
  background-image:url(bg1.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}

    </style></head>



    
    
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Bootstrap -->
    
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

<body topmargin="0">

<table align="center" cellpadding="0" cellspacing="2" width="990">
<tbody><tr><td>
<table align="center" cellpadding="0" cellspacing="2">
<tbody><tr align="center">
<td><img src="bg.jpg" width="1150" height="175"></td>
</tr>

<tr align="center" bgcolor="#CC6666" class="font12putih" height="25">
<td><b><marquee class="font10" scrollamount="4">Welcome to Bagstopia!</marquee></b></td>
</tr>
</tbody></table>

<table align="center" width="98%" bgcolor="#FFFFFF" cellpadding="0" cellspacing="5">
<tbody><tr bgcolor="#f4f4f4" class="font12bold" height="35">
<td></td><td></td><td align="left" bgcolor="#e2e8ef">&nbsp; Bagstopia </td>
</tr>
</tbody></table>
<table align="right">
<tbody><tr class="font12">
<td>

			
</td>        
<td>
<font class="font12bold">
</font><p align="center"><font class="font12bold">
<script language="JavaScript">  
	var mydate=new Date()
	var year=mydate.getYear()
	if (year < 1000)
	year+=1900
	var day=mydate.getDay()
	var month=mydate.getMonth()
	var daym=mydate.getDate()
	if (daym<10)
	daym="0"+daym
	var dayarray=new Array("Ahad","Isnin","Selasa","Rabu","Khamis","Jumaat","Sabtu")
	var montharray=new Array("Januari","Februari","Mac","April","Mei","Jun","Julai","Ogos","September","Oktober","November","Disember")
	document.write(dayarray[day]+", "+daym+" "+montharray[month]+" "+year)     
</script></font>
&nbsp;&nbsp;&nbsp;<span class="font12bold" id="clock">11:30:10 pm</span>
<br><br>
</p><div class="container">    

    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
        <div class="panel panel-default">
            <div class="panel-heading">
               <div class="panel-title text-center"> Login</div>
            </div>     

            <div class="panel-body">

                <form class="form-horizontal" id="login-form" action="login.php" method="POST"> 
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input class="form-control" placeholder="Staff ID" name="id" type="text" autocomplete="off" required=""> 
                </div>
                <div class="bg-danger" style="display:none"></div><br>
                
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input class="form-control" placeholder="Password" name="pass" type="password" required=""></div><br>
                    
                    <div class="input-group">
                    
                    <select name="role" required="">
            <option value="" selected="selected"> Select role </option>
            <option value="admin">Admin</option>
            <option value="supervisor">Supervisor</option>
            <option value="staff">Staff</option>
          </select></div><br>                                                                  
                <div class="bg-danger" style="display:none"></div>                
                <div class="form-group">
                    <!-- Button -->
                    <div class="col-sm-12 controls">                      
                        <button class="btn btn-info pull-right" style="margin-top: 10px;" type="submit" name="btn_login">Login <i class="glyphicon glyphicon-log-in"></i></button>                        
                    </div>
                </div>
                </form>  

            </div>                     
        </div>  
    </div>
</div>



    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>




</td></tr></tbody></table></td></tr></tbody></table></body></html>