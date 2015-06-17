<?php
session_start();
include('classes/summaryCounter.php');
include('classes/productSummary.php');
$username = @$_SESSION['username'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IndexTemplate</title>
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
}
.bg div div .myNAMEDetails tr .myNAMETitle {
	color: #000;
}
-->
</style>
<link href="../css/rigSaleAustraliaCSS.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include('classes/errorChecking/serverCredentials.php');
	  //mysqli($host,$usr,$pw,$db);
	// $mysqli = new mysqli($servername,$username,$password,$database);
 
 //checks cookies to make sure they are logged in 
 if(isset($_COOKIE['logincookie'])) 
 { 
 	$username = $_COOKIE['logincookie']; 
 	$pass = $_COOKIE['passcookie']; 
 	 	$check = $mysqli->query("SELECT * FROM sellers WHERE username = '$username'")or die(mysql_error()); 
 	while($info = $check->fetch_array(MYSQLI_ASSOC)) 	 
 		{ 
 extract($info);
 //if the cookie has the wrong password, they are taken to the login page 
 		if ($pass != $info['password']) 
 			{ 			header("Location: mylogin.php"); 
 			} 
 
 //otherwise they are shown the admin area	 
 	else 
 			{ 
			?>
 <table width="80%" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    
    <td width="1224" align="left" valign="top" background="../images/background.jpg"  class="bg">
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
            <td colspan="2" align="center" valign="top"><img src="../images/backendHeaders/myDashBoardBACKENDimageHEADERS.jpg" width="1216" height="192" /></td>
          </tr>
  </table>
      
      </div>
</div>
<div style="width: 100%; overflow: hidden;">
  <div style="margin-left:10px; width: 600px; float: left; color: #000;" id="myTitleNOUnderline" align="left"><h3>Welcome:&nbsp;&nbsp;&nbsp;<?php echo @$fname ." ". @$lname;?></h3></div>
    <div style="margin-left: 650px; color: #000;" align="left" id="myTitle"><h3>
      <img src="../images/sCrown.jpg" alt="" width="67" height="53" />Product Summary<img src="../images/sCrown.jpg" alt="" width="67" height="53" /></h3>
    </div>
</div>
    <div style="width: 100%; overflow: hidden;">
    <div style="margin-left:10px; width: 600px; float: left; height: 250px; width: 600px; border: 1px solid black; background-color: #FF9" align="left">
      
    <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" class="myNAMEDetails">
  <tr>
    <td width="34%" rowspan="2" align="center" valign="top"><br /><img src="../images/noImage.jpg" alt="No Image" width="132" height="93" /><br /><br /></td>
    <td width="66%" align="left" valign="top" class="myNAMETitle"><br />
      Name: <?php echo @$fname ." ". @$lname;?><br /><br />
      Contact Details:<br /></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="myNAMEDetails"><br />
    Company: <?php echo @$fname ." ". @$lname;
	echo '<br />';
    echo "Email: ". @$email;
	echo '<br />';
	echo "Phone: ". @$phone; 
	echo '<br />';
	?>
    <br />
    <script type="text/javascript">
function openRequestedPopup()
{
window.open('address.php', 'My Address',
'width=500,height=300,resizable=yes,scrollbars=yes,status=yes');
}
</script>
<a  href="javascript:;"onclick="openRequestedPopup()">Physical Address</a>
        <?php 
		//<a  href="javascript:;"onclick="openRequestedPopup()">
		//<a href="address.php">Physical Address</a><?>
    
    
    </td>
  </tr>
    </table>
 
      
    </div>
    <div style="margin-left: 630px; height: 200px; width: 400px; border: 1px solid black;"  align="left" id="myDetails" > 
	<?php
$p= new productSummary();
	if(isset($_POST['pInfoSubmit'])){
$pictureCount = $p->getPictureCount();
	}else{
		$pictureCount = $p->getPictureCount();
	if(isset($_POST['o1imgSubmit'])){
					$pictureCount = $p->getPictureCount();
					//header("Location: addI.php");
					}
}
?> * You have " <b> <?php echo $p->getProductCount();?> </b>" Product(s) and " <b><?php echo $p->getPictureCount();?></b> " Image(s) Listed in Premium Listings.
    
</div>
</div>
    <div style="width: 100%; overflow: hidden;">
    <div style="margin-left:10px; width: 600px; float: left;"> Optional UseBox</div>
    
    <div style="margin-left: 620px;"> A message Box</div>
</div>
<br/><br/>
    </td>
    
  </tr>
</table>
<?php
 			} 
 		} 
 		} 
 else 
 //if the cookie does not exist, they are taken to the login screen 
 {//BEGINNING	?>
 
 	<table width="80%" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    
    <td width="1224" height="1600" align="left" valign="top" background="../images/background.jpg"  class="bg">
<div style="width: 100%; overflow: hidden;">
    <div style="width: 600px; float: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="sLOGO4c.jpg" alt="Rig Sales Australia" width="297" height="75" border="0" align="texttop" /></div>
    <div style="margin-left: 620px;">Administrative Toolbar Box</div>
</div><br/><br/>
<?php
include('titleBar/titleBarF.php');
?>
<br/>
      <div style="margin-left:20px;   id="myTitleWARNWHITE"> <br /> 
      In order to View Your Overview You must be logged in . <br /> <br /> 
      <a href="mylogin.php">  Login Here</a> then click on <b>Overview.</b> </br></div>
      
     
  </td>
    </tr>
</table>	 
 
 <?php }//END 
 ?> 
</body>
</html>