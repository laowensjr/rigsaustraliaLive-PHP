<?php
ob_start();
session_start();
@$username = $_SESSION['username'];
@$_POST['ptitle'] = addslashes($_POST['ptitle']);
$ptitle = $_POST['ptitle'];
include('classes/setLimitC.php');
include('classes/pInfoSubmit.php');
//$_SESSION['fname'] = 'Lawrence';
//$_SESSION['lname'] = 'Owens';
//@$email = 'laowensjr@gmail.com';
//@$phone = '407-502-5555';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Review My Documents</title>
<style type="text/css">
<!--
body {
	background-color: #39F;
}.textLinks {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-style: normal;
	font-weight: bold;
	color: #00F;
}
.textLinks2Lines {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-style: normal;
	font-weight: bold;
	color: #00F;
}
.subTextLinks {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-style: normal;
	font-weight: bold;
	color: #000;
}
a:link {
	text-decoration: none;
	color: #999;
}
a:visited {
	text-decoration: none;
	color: #06F;
}
a:hover {
	text-decoration: none;
	color: #000;
}
a:active {
	text-decoration: none;
	color: #00F;
	background-color: yellow;
}
.whiteMyDetails {
	color: #FFF;
}
-->
</style>
<link href="../css/rigSaleAustraliaCSS.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript">
function openRequestedPopup()
{
window.open('pictures.php', 'My Picture',
'width=500,height=300,resizable=yes,scrollbars=yes,status=yes');
}
function openRequestedPopup2()
{
window.open('pictures2.php', 'My Picture',
'width=500,height=300,resizable=yes,scrollbars=yes,status=yes');
}
</script>
</head>
<body>
<br/><br/>
<?php
//Connects to your Database 
//Make this more OO SEE Folder name FINAL_webPages
mysql_connect("localhost", "owenspcc_laowens", "lo19315761") or die(mysql_error()); 
 mysql_select_db("owenspcc_rigsalesaustralia") or die(mysql_error());
 //checks cookies to make sure they are logged in 
 if(isset($_COOKIE['logincookie'])) 
 { 
 	$username = $_COOKIE['logincookie']; 
 	$pass = $_COOKIE['passcookie']; 
 	 	$check = mysql_query("SELECT * FROM sellers WHERE username = '$username'")or die(mysql_error()); 
 	while($info = mysql_fetch_array( $check )) 	 
 		{ 
 extract($info);
 //if the cookie has the wrong password, they are taken to the login page 
 		if ($pass != $info['password']) 
 			{ 	
			header("Location: login.php"); 
 			} 
 
 //otherwise they are shown the admin area	 
 	else 
 			{ 
			?>
 <table width="80%" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    
    <td width="1224" height="1600" align="left" valign="top" background="../images/background.jpg"  class="bg">
<div style="width: 100%; overflow: hidden;">
    <div style="width: 600px; float: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="sLOGO4c.jpg" alt="Rig Sales Australia" width="297" height="75" border="0" align="texttop" /></div>
    <div style="margin-left: 620px;"></div>
</div>
<br/>
<div style="azimuth:right" align="right"><a href="../buy.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image47','','../images/buyOVER.jpg',1)"><img src="../images/buy.jpg" name="Image47" width="38" height="31" border="0" id="Image47" /></a>&nbsp;&nbsp;&nbsp;<a href="../registration.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image46','','../images/sellOVER.jpg',1)"><img src="../images/sell.jpg" name="Image46" width="49" height="31" border="0" id="Image46" /></a>&nbsp;&nbsp;&nbsp;<a href="../auction/index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image48','','../images/auctionOVER.jpg',1)"><img src="../images/auction.jpg" name="Image48" width="84" height="31" border="0" id="Image48" /></a></div>
<br/>
<?php
include('titleBar/titleBarF.php');
?>
<br/>
<div>
  <div style="background-color:#FFF">
        <table width="100%" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td colspan="2" align="left" valign="top"><img src="../images/backendHeaders/reviewDocBACKENDimageHEADERS.jpg" width="1223" height="117" /></td>
          </tr>
  </table>
      
      </div>
</div>
<div style="width: 100%; overflow: hidden;">
  <div style="margin-left:10px; width: 600px; float: left; " id="myTitleNOUnderline" align="left"><h3>Review Documents</h3></div>
    <div style="margin-left: 650px;" align="left" id="myTitle"><img src="sLOGO4MYdocsSUMMARY.jpg" width="280" height="53" alt="My Document Summary" /></div>
</div>
    <div style="width: 100%; overflow: hidden;">
    <div style="margin-left:10px; width: 600px; float: left; height: 150px; width: 600px; border: 1px solid black; background-color: #FF9" align="left">
      <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" class="myNAMEDetails">
        <tr>
          
          
          
          <td width="100%" align="left" valign="top" class="myNAMETitle">Pending Your Review:
            <form id="pInfo" name="pinfo" enctype="multipart/form-data" method="post" action="">
     <div id='myDetails'><br/><input name="agreement" type="button" value="YES" />
       &nbsp;Terms and Conditions Agreement: Auctions and Classifieds 
		<br/><input name="agreement" type="button" value="YES" />
        &nbsp;Website Disclaimer 
		<br/><input name="agreement" type="button" value="YES" />
        &nbsp;Terms and Conditions Agreement: Website 
		<br/><br/>
      </div>
    </form>
      </td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#0000FF" class="whiteMyDetails">By Clicking Yes you Agree that you have reviewed and Agree with the above Documents<br />
      <?php echo stripslashes($ptitle) ;?></td>
  </tr>
    </table>
 
      
    </div>
    <div style="margin-left: 630px; height: 200px; width: 400px; border: 1px solid black;"  align="left" id="myDetails" >The following docs have been reviewed by you:</div>
</div>
    <div style="width: 100%; overflow: hidden;">
      <div style=" background-color: #FF9; margin-left:10px; width: 600px; float: left;"></div>
      
      <div style="margin-left: 620px;">
       </div>
</div><br />
<div style=" background-color: #FF9; margin-left:10px; width: 600px; float: left;">
  <div id= "myTitle2" align = "left"></div>
  <div></div>
</div>
</div>
      
      <div style="margin-left: 620px;">&nbsp;
      </div>
    </div>
     </td>
    </tr>
</table>
    <?php 
	  }//BEGIN
			}}else 
 
 //if the cookie does not exist, they are taken to the login screen 
 {//BEGINNING	?>
 
 	<table width="80%" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    
    <td width="1224" height="1600" align="left" valign="top" background="../images/background.jpg"  class="bg">
<div style="width: 100%; overflow: hidden;">
    <div style="width: 600px; float: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="sLOGO4c.jpg" alt="Rig Sales Australia" width="297" height="75" border="0" align="texttop" /></div>
    <div style="margin-left: 620px;">&nbsp;</div>
</div><br/><br/>
<?php
include('titleBar/titleBarF.php');
?>
<br/>
      <div style="margin-left:20px;   id="myTitleWARNWHITE"> <br /> 
      In order to Review Documents You must be logged in . <br /> <br /> 
      <a href="mylogin.php">  Login Here</a> then click on <b>Review Docs.</b> </br></div>
      
     
  </td>
    </tr>
</table>	 
 
 <?php }//END 
 ?> 
</body>
</html>
<?php
ob_end_flush();
?>