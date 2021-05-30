<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Stationery Land</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
html{
  width:100%;
  height:100%;
  background-image:url(bakgroundwebsite.png);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
body{
  font-family: sans-serif;
  
}
.login-box{
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: black;
  /*background: #191919;*/
}
.login-box h1{
  float: left;
  font-size: 40px;
  border-bottom: 6px solid #074758;
  margin-bottom: 50px;
  padding: 13px 0;
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #074758;
}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: white;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
}
.btn{
  width: 100%;
  background: #5DA4B7;
  border: 2px solid #074758;
  color: black;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
}

    </style>
</head>
<body>
    <!--<?php //include_once 'nav_bar.php'; ?>--->
<div class="login-box">
    <form action="login.php" method="POST">
        <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
            <input type="text" name="id" placeholder="No. Staff" required>
    </div>

    <div class="textbox">
        <i class="fas fa-lock" ></i>
            <input type="password" name="pass" placeholder="Password" required>
    </div>

    <div class="textbox">
        <div class="col-sm-6">
          <select name="role" required>
            <option value="" selected="selected"> - Select Role - </option>
            <option value="admin">Admin</option>
            <option value="supervisor">Supervisor</option>
            <option value="staff">Staff</option>
          </select>
      </div>
    </div>
          <input type="submit" name="btn_login" class="btn"  value="Login">
    </div>
</form>
</div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>