 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
        Masukkan ID dan Kata Laluan Anda </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link rel="icon" type="image/png" href="https://smp.ukm.my/simplesaml/module.php/themeSMU2/assets/img/fav/favicon.ico">

        <!-- Standard Favicon -->
        <link rel="icon" type="image/x-icon" href="https://smp.ukm.my/simplesaml/module.php/themeSMU2/assets/img/fav/favicon.ico" />

        <!-- For iPhone 4 Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://smp.ukm.my/simplesaml/module.php/themeSMU2/assets/img/fav/apple-touch-icon-114x114-precomposed.png">

        <!-- For iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://smp.ukm.my/simplesaml/module.php/themeSMU2/assets/img/fav/apple-touch-icon-72x72-precomposed.png">

        <!-- For iPhone: -->
        <link rel="apple-touch-icon-precomposed" href="https://smp.ukm.my/simplesaml/module.php/themeSMU2/assets/img/fav/apple-touch-icon-57x57-precomposed.png">



        <link rel="stylesheet" href="https://smp.ukm.my/simplesaml/module.php/themeSMU2/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://smp.ukm.my/simplesaml/module.php/themeSMU2/assets/css/justified-nav.css">


        <style>

        .body-bg{
            background-image : url('https://smp.ukm.my/simplesaml/module.php/themeSMU2/assets/img/login.jpg');
            /*max-width: 100%;
            height: auto;*/
            
            /* Background image is centered vertically and horizontally at all times */
            background-position: center center;

            /* Background image doesn't tile */
            background-repeat: no-repeat;

            /* Background image is fixed in the viewport so that it doesn't move when 
            the content's height is greater than the image's height */
            background-attachment: fixed;

            /* This is what makes the background image rescale based
            on the container's size */
            background-size: cover;

            /* Set a background color that will be displayed
            while the background image is loading */
            background-color: #ff1a1a;
        }

    
        .btn, .input-group{
            margin-top: 10px;
        }

        /*modal untuk error*/
        .modal {
          text-align: center;
        }
        @media screen and (min-device-width: 768px) {
          .modal:before {
            display: inline-block;
            vertical-align: middle;
            content: " ";
            height: 100%;
          }
        }

        .modal-dialog {
          display: inline-block;
          text-align: left;
          vertical-align: middle;
        }

        </style>

        <link rel="stylesheet" href="https://smp.ukm.my/simplesaml/module.php/themeSMU2/assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://smp.ukm.my/simplesaml/module.php/themeSMU2/assets/css/main.css">
        <link rel="stylesheet" href="https://smp.ukm.my/simplesaml/module.php/themeSMU2/assets/css/sticky-footer-navbar.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">

        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="https://smp.ukm.my/simplesaml/module.php/themeSMU2/assets/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="https://smp.ukm.my/simplesaml/module.php/themeSMU2/assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>    
        <script src="https://smp.ukm.my/simplesaml/module.php/themeSMU2/assets/js/vendor/bootstrap.min.js"></script>
    </head>
   
    <body class="body-bg">
        
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><strong><em>SignOn@SMU</em></strong></a>
            </div>
            


            
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right">        
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Bahasa <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu"><li  class="disabled"><a href="#">Melayu</a></li><li><a href="https://smp.ukm.my/simplesaml/module.php/core/loginuserpass.php?AuthState=_0bfc3c9a583ac69263d2621ab5ffd51f2b41542143%3Ahttps%3A%2F%2Fsmp.ukm.my%2Fsimplesaml%2Fsaml2%2Fidp%2FSSOService.php%3Fspentityid%3Dhttps%253A%252F%252Fukmfolio.ukm.my%252Fauth%252Fsaml2%252Fsp%252Fmetadata.php%26cookieTime%3D1606190888%26RelayState%3Dhttps%253A%252F%252Fukmfolio.ukm.my%252Flogin%252Findex.php&amp;language=en">English</a></li></ul>
                    </li>
                </ul>       
            </div><!--/.navbar-collapse -->
          </div>
        </nav>          </div>
        </nav>
        <div class="container container-main">



<div class="row" >
	<!-- large -->
	<div class="visible-md-block visible-lg-block">
		<div class="col-md-12 col-lg-12">
			<img class="img-responsive center-block logoUKM" style=""
					src="https://smp.ukm.my/simplesaml/module.php/themeSMU2/assets/img/ukmshield-inverted.png"
			/>
		</div>
	</div>
	<!-- small -->
	<div class="visible-xs-block visible-sm-block">
		<div class="col-xs-12 col-sm-12">
			<img class="img-responsive center-block logoUKM" style=""
					src="https://smp.ukm.my/simplesaml/module.php/themeSMU2/assets/img/ukmshield-grand-inverted.png"
			/>
		</div>
	</div>
</div><!-- /row1 -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 text-white">

					<h4>https://qms.ukm.my/login <small>meminta anda untuk membuat pengesahan diri. Sila masukkan Nombor Matrik / UKMPer / Pengenalan dan kata laluan anda pada borang di bawah.</small></h4>
		</div>
	</div><!-- /row -->

	<div class="row"><!-- /row2 -->
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">		
		<div class="center-block login-form-block">
			
			<form id="login" action="login_check.php" method="post">
				<label for="inputUsername" class="sr-only">UKMper / No.Matrik</label>
				<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
					<input type="text" name="uid" id="focus" class="form-control input-sm" placeholder="UKMper / No.Matrik" 
					value="" required autofocus>
				</div>

				<label for="inputPassword" class="sr-only">Kata Laluan</label>
				<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
					<input type="password" value="" name="pass" id="inputPassword" class="form-control input-sm" placeholder="Kata Laluan" required>
				</div>

				<input class="btn btn-md btn-primary btn-block btn-sm" type="submit" name="login" value="Log Masuk" />

				<input type="hidden" name="AuthState" value="_0bfc3c9a583ac69263d2621ab5ffd51f2b41542143:https://smp.ukm.my/simplesaml/saml2/idp/SSOService.php?spentityid=https%3A%2F%2Fukmfolio.ukm.my%2Fauth%2Fsaml2%2Fsp%2Fmetadata.php&amp;cookieTime=1606190888&amp;RelayState=https%3A%2F%2Fukmfolio.ukm.my%2Flogin%2Findex.php" />			</form>
		</div><!-- center-block -->

		
	</div> <!-- col --> 
</div><!-- /row2 -->  


<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="link-items center-block text-center">
			<ul class="list-unstyled text-white text-shadow" >
				<li><a href="https://smp.ukm.my/lupakatalaluan">Lupa Kata laluan</a></li>
				<!-- rizal tutup 12032020 -->
			</ul>
			<img src="https://smp.ukm.my/simplesaml/module.php/themeSMU2/assets/img/login_black_line.png"
					style="width:100%; height:20px;"
				>
		</div><!-- center-block -->
	</div>
</div>





        </div> <!-- /container --> 
        <footer>
            <div class="footer">
                <div class="container-fluid">                    
                    <p class="text-muted pull-right text-white">
                        <span class="glyphicon glyphicon-copyright-mark text-white" aria-hidden="true"></span> 
                            Universiti Kebangsaan Malaysia 2020 
                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <span style="display:inline-block">
                            <span class="glyphicon glyphicon-info-sign text-white" aria-hidden="true"></span> 
                            <a href="https://smp.ukm.my/webservices/general/disclaimer.cfm">
                            Penafian                            </a>
                        </span>
                    </p>
                </div>
            </div>        
        </footer>
                <script src="https://smp.ukm.my/simplesaml/module.php/themeSMU2/assets/js/main.js"></script>
    </body>
</html>


