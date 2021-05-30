<?php 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kemaskini Profil</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
<script>            
			// scroll-to-top button show and hide
jQuery(document).ready(function(){
    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.scrollup').fadeIn();
        } else {
            jQuery('.scrollup').fadeOut();
    }
});
// scroll-to-top animate
jQuery('.scrollup').click(function(){
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});
	</script>

<style type="text/css"> 
<!-- 
body  {
	font: 100% Verdana, Arial, Helvetica, sans-serif;
	margin: 0; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
	padding: 0;
	text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
	color: #000000;
	background-color: #FFFFFF;
}
.twoColFixLtHdr #container {
	width: 960px;  /* using 20px less than a full 800px width allows for browser chrome and avoids a horizontal scroll bar */
	background: #FFFFFF; /* the auto margins (in conjunction with a width) center the page */
	border: 1px solid #800042;
	text-align: left; /* this overrides the text-align: center on the body element. */
	margin-top: 0;
	margin-right: auto;
	margin-bottom: 0;
	margin-left: auto;
} 
.twoColFixLtHdr #header { 
	background: #DDDDDD; 
	padding: 0 10px 0 20px;  /* this padding matches the left alignment of the elements in the divs that appear beneath it. If an image is used in the #header instead of text, you may want to remove the padding. */
} 
.twoColFixLtHdr #header h1 {
	margin: 0; /* zeroing the margin of the last element in the #header div will avoid margin collapse - an unexplainable space between divs. If the div has a border around it, this is not necessary as that also avoids the margin collapse */
	padding: 10px 0; /* using padding instead of margin will allow you to keep the element away from the edges of the div */
}
.twoColFixLtHdr #sidebar1 {
	float: left; /* since this element is floated, a width must be given */
	width: 160px;
	padding-right: 10px;
	padding-bottom: 15px;
	padding-left: 0px;
	background-color: #FFFFFF;
	padding-top: 35px;
}
.twoColFixLtHdr #mainContent {
	margin-top: 40px;
	margin-right: 30px;
	margin-bottom: 0;
	margin-left: 190px;
	padding-top: 0px;
	padding-right: 10px;
	padding-bottom: 0;
	padding-left: 10px;
} 
.twoColFixLtHdr #footer {
	padding: 0 10px 0 20px; /* this padding matches the left alignment of the elements in the divs that appear above it. */
	background:#81CE9A;
} 
.twoColFixLtHdr #footer p {
	margin: 0; /* zeroing the margins of the first element in the footer will avoid the possibility of margin collapse - a space between divs */
	padding: 10px 0; /* padding on this element will create space, just as the the margin would have, without the margin collapse issue */
}
.fltrt { /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class should be placed on a div or break element and should be the final element before the close of a container that should fully contain a float */
	clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}
.button {
  transition: 0.3s;
  text-decoration: none;
  cursor: pointer;
}

.button:hover {
  border: 2px solid #D3A9F9;
}
.style12 {font-size: 24px; }
.style15 {font-size: 12px}
.style26 {
	font-size: 12px;
	font-weight: bold;
	padding-top: 3px;
}
.style41 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
}
.style68 {font-size: 12px;
	padding-top: 3px;
}
--> 
</style>
<script type="text/javascript" src="Scripts/AC_RunActiveContent.js"></script>
<style type="text/css">
<!--
.style28 {
	font-size: 12px
}
.style30 {font-size: 12px; font-weight: bold; }
-->
</style>

<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="livevalidation_standalone.js"></script>
<style type="text/css">
<!--
.style4 {font-size: 24px; }
.style17 {color: #FF0000}
.style61 {font-size: 14px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.style69 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-style: italic;
	color: #FF0000;
}
.style45 {	font-size: 13px;
	color: #FF0000;
}
.style71 {
	font-size: 14px;
	color: #FF0000;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
//-->
</script>
<script language="javascript" type="text/javascript">
window.onload = init;

function init() {
	var x = document.getElementsByName('button2');
	var xlength = x.length;
	
	
	for (i=0; i<xlength; i++) {
		x[i].onclick = init2;
	}
	
	function init2() {
		var id = this.id.substr(8);
		var link = "borangcetak.php?id_peminjaman="+id;
		window.open(link) ;
	}
}
</script>
<link href="../SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body class="twoColFixLtHdr">
<link rel="stylesheet" type="text/css" media="all"href="kalender/calendar-win2k-1.css" />
<script type="text/javascript" src="kalender/calendar.js"></script>
<script type="text/javascript" src="kalender/calendar-en.js"></script>
<script type="text/javascript" src="kalender/calendar-setup.js"></script>
<script type="text/javascript" src="kalender/ew.js"></script>
<script type="text/javascript" src="Scripts/swfobject_modified.js"></script>
<div id="container">
 <table width="950" border="0" cellpadding="0" cellspacing="0" align="center">
    <!--DWLayoutTable-->
    <tr>
      <td height="200" colspan="3" valign="top"><img src="bannerSistem.jpg" alt="" width="960" height="200" /></td>
    </tr>
    <tr>
      <td><strong>
          <div align="right" class="style26">Selamat Datang <strong><?php echo $_SESSION['nama_login'];?></strong> (<a href="logout.php"><img src="icon/log_keluar.png" alt="3" width="71" height="9" border="0"/></a>)</div></td>
    </tr>
    <tr>
      <td></td>
    </tr>
  </table>
   <div id="sidebar1">
 <ul id="MenuBar1" class="MenuBarVertical">
  <li><a href="userHome.php">Laman Utama</a></li>
  <li><a href="tempahan.php">Tempahan</a></li>
  <li><a href="userSemakStatus.php">Status Tempahan</a></li>
  <li><a href="userProfil.php">Profil Staf</a>
</ul>
 </div>
    
<div id="mainContent">
  <h1 class="style12">PROFIL PEMOHON</h1>
    <table width="650" height="381" border="0">
      <tr>
        <td>
  <form id="form1" name="form1" method="post" action="KemaskiniProfilStaf_controller.php">
      <?PHP
$sql ="SELECT * FROM staf where no_staf='".$_SESSION['noId']."'";
$result1=mysql_query($sql);
while($row=mysql_fetch_assoc($result1))
{
?>
      <br  />
      <table width="428" border="0">
        <tr>
          <td width="70"><img src="icon/form.jpg" width="60" height="50" /></td>
          <td width="348"><span class="style64">Sila kemaskini maklumat peribadi anda</span></td>
        </tr>
      </table>
      <table width="680" border="0" align="center" cellpadding="4" cellspacing="4">
        <tr>
          <td colspan="3"></td>
        </tr><br>
        <tr>
          <td width="225"><span class="style50">No. Kad Pengenalan</span></td>
          <td width="7"><span class="style50">:</span></td>
          <td width="408"><span class="style56"><?php echo $row['no_kpstaf'];?></span></td>
        </tr>
        <tr>
          <td><span class="style50">Nama Staf</span></td>
          <td><span class="style50">:</span></td>
          <td><span class="style56"><?php echo $row['nama_staf'];?></span></td>
        </tr>
        <tr>
          <td><span class="style50">No. Staf</span></td>
          <td><span class="style50">:</span></td>
          <td><span class="style56"><?php echo $row['no_staf'];?></span></td>
        </tr>
        <tr>
          <td><span class="style50">Jabatan/Unit</span></td>
          <td><span class="style50">:</span></td>
          <td><span class="style22">
           <select name="jabatan_unit" id="jabatan_unit">
           			<option> <?php echo $row["jabatan_unit"]; ?></option>
                    <option value="">---- PILIH JABATAN/UNIT ----</option>
                    <option>JABATAN MEDIA INTERAKTIF</option>
                    <option>JABATAN KEJURUTERAAN PERISIAN</option>
                    <option>JABATAN SISTEM KOMPUTER DAN KOMUNIKASI</option>
                    <option>JABATAN PENGKOMPUTERAN PINTAR DAN ANALITIS</option>
                  </select>
          </span></td>
        </tr>
        <tr>
          <td><span class="style50">Jawatan</span></td>
          <td><span class="style50">:</span></td>
          <td><span class="style22">
            <input name="jawatan" type="text" id="jawatan" style="text-transform:uppercase" value="<?php echo $row["jawatan"];?>" size="30" maxlength="30" />
          </span></td>
        </tr>
        <tr>
          <td><span class="style50">No. Telefon</span></td>
          <td><span class="style50">:</span></td>
          <td><input name="no_telefon" type="text" id="no_telefon" value="<?php echo $row['no_telefon'];?>" size="10" maxlength="10" />
              <span class="style53">( cth : 01234567891 )</span></td>
        </tr>
        <tr>
          <td><span class="style50">Emel</span></td>
          <td><span class="style50">:</span></td>
          <td><input name="emel" type="text" id="emel" value="<?php echo $row["emel"];?>" size="30" maxlength="30" />
              <span class="style53">( cth : emel@utem.edu.my )</span></td>
        </tr>
        <tr>
          <td><span class="style50">Kata Laluan</span></td>
          <td><span class="style50">:</span></td>
          <td><input name="kata_laluanstaf" type="password" id="kata_laluanstaf" value="<?php echo $row["kata_laluanstaf"];?>" maxlength="10" />
              
              <input type="hidden" name="form_validation_rules" value="
jabatan_unit jawatan no_telefon emel kata_laluanstaf pengesahan_kata_laluanstaf : empty;
jabatan_unit : ;
jawatan : ;
no_telefon : ;
emel : ;
kata_laluanstaf :;
pengesahan_kata_laluanstaf : ;
" />
                <span class="style53">( maksimum 15 karakter )</span></td>
        </tr>
        <tr>
          <td><span class="style50">Pengesahan Kata Laluan</span></td>
          <td><span class="style50">:</span></td>
          <td>
            <input name="pengesahan_kata_laluanstaf" type="password" id="pengesahan_kata_laluanstaf" value="<?php echo $row["pengesahan_kata_laluanstaf"];?>"  maxlength="10" />
          <span class="style53">( maksimum 15 karakter )</span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <script src="form-validation.js"></script>
        <tr>
          <td colspan="3"><div align="right">
            <input name="no_staf" type="hidden" value="<?PHP echo $row['no_staf'];?>" />
            <input type="submit" class="button" onclick="confirmation()" name="Submit" value="Kemaskini" />
            <input type="reset" class="button" id="reset" name="reset" value="Batal" />              
            </p>        
          </div></td>
          </tr>
      </table>
     
          <?PHP }?>
          
            <script type="text/javascript" language="JavaScript">
            var kata_laluanstaf = new LiveValidation('kata_laluanstaf');
            kata_laluanstaf.add(Validate.Presence);
            kata_laluanstaf.add( Validate.Length, { maximum: 10 } );

            var pengesahan_kata_laluanstaf = new LiveValidation('pengesahan_kata_laluanstaf');
            pengesahan_kata_laluanstaf.add(Validate.Presence);
            pengesahan_kata_laluanstaf.add( Validate.Confirmation, { match: 'kata_laluanstaf' } );

            var no_telefon = new LiveValidation('no_telefon');
            no_telefon.add(Validate.Presence);
			no_telefon.add( Validate.Length, { maximum: 11 } );
			no_telefon.add(Validate.Numericality, { onlyInteger: true });

			var jawatan = new LiveValidation('jawatan');
            jawatan.add(Validate.Presence);
			jawatan.add( Validate.Length, { maximum: 20 } );
			
            var emel = new LiveValidation('emel');
            emel.add(Validate.Email);
            
        </script>
        <br>
    </form>
    </td>
      </tr>
    </table>
    <p>
      <!-- end #mainContent -->
    </p>
</div>

		
		<?php include('footer.php');?>
		
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
<?php

?>