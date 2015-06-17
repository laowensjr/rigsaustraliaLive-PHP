<?php
session_start();
$username = $_SESSION['username'];
@$_POST['ptitle'] = addslashes($_POST['ptitle']);
$ptitle = $_POST['ptitle'];
include('classes/l1imgSubmitC.php');
include('classes/l2imgSubmitC.php');
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
<title>My Products</title>
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
//Connects to Database 
mysql_connect("localhost", "laowensjr", "lo19315761") or die(mysql_error()); 
 mysql_select_db("rigsalesaustralia") or die(mysql_error());
 
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
    <div style="margin-left: 620px;">Administrative Toolbar Box</div>
</div><br/><br/>
<?php
include('titleBar/titleBarF.php');
?>
<br/>
<div style="width: 100%; overflow: hidden;">
  <div style="margin-left:10px; width: 600px; float: left; " id="myTitle" align="left">My Products: Add Product</div>
    <div style="margin-left: 650px;" align="left" id="myTitle"> <img src="../images/sCrown.jpg" width="67" height="53" border="0" align="texttop" /> My Product Summary</div>
</div>
    <div style="width: 100%; overflow: hidden;">
    <div style="margin-left:10px; width: 600px; float: left; height: 150px; width: 600px; border: 1px solid black; background-color: #FF9" align="left">
      <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" class="myNAMEDetails">
        <tr>
          
          
          
          <td width="100%" align="left" valign="top" class="myNAMETitle">Easy Enough, You're Almost Done!
            <form id="pInfo" name="pinfo" enctype="multipart/form-data" method="post" action="">
      <p>
        <?php $pInfoSubmitMSG = new pInfoSubmit(); ?>
      </p>
    </form>
      </td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#0000FF" class="whiteMyDetails">Now Add your Pictures for your product named<br />
      <?php echo stripslashes($ptitle) ;?></td>
  </tr>
    </table>
 
      
    </div>
    <div style="margin-left: 630px; height: 200px; width: 400px; border: 1px solid black;"  align="left" id="myDetails" ><?php
$sql4SellerProdInfo = mysql_query("SELECT count(ptitle) as productCount,  count(l1img) as l1img, count(l2img) as l2img, count(l3img) as l3img, count(l4img) as l4img, count(l5img) as l5img, count(s1img) as s1img, count(s2img) as s2img, count(s3img) as s3img, count(s4img) as s4img, count(s5img) as s5img FROM productinfo WHERE username = '$username'")or die(mysql_error());
	$productSummaryCount = mysql_fetch_array($sql4SellerProdInfo);
	extract($productSummaryCount);
	if(isset($_POST['pInfoSubmit'])){
//$productCount = $productCount;
$pictureCount = $l1img+$l2img+$l3img+$l4img+$l5img+$s1img+$s2img+$s3img+$s4img+$s5img;
	}else{
		$pictureCount = $l1img+$l2img+$l3img+$l4img+$l5img+$s1img+$s2img+$s3img+$s4img+$s5img;
	}
?> * You have " <b> <?php echo $productCount?> </b>" Product(s) and " <b><?php echo $pictureCount?></b> " Image(s) Listed in Premium Listings.
    
</div>
</div>
    <div style="width: 100%; overflow: hidden;">
      <div style=" background-color: #FF9; margin-left:10px; width: 600px; float: left;"></div>
      
      <div style="margin-left: 620px;">
       </div>
</div><br />
<div style=" background-color: #FF9; margin-left:10px; width: 600px; float: left;">
  <div id= "myTitle2" align = "left"> You can Upload up to 5 Pictures per Product. </div>
  <div>
    <form action="" method="post" enctype="multipart/form-data" name="l1img" id="l1img">
      <br />
      <br />
      Please upload your First Picture <br />
      <br />
      <input name="l1img" type="file" />
      <input type="submit" name="l1imgSubmit" id="l1imgSubmit" value="Submit First Picture" />
    </form>
  </div>
  <?php
		 
		$l1img = new l1imgSubmitC();
		
?>
  <br />
  <br />
  <div>
    <form action="" method="post" enctype="multipart/form-data" name="l2img" id="l2img">
      <br />
      <br />
      Please upload your Second Picture <br />
      <br />
      <input name="l2img" type="file" />
      <input type="submit" name="l2imgSubmit" id="l2imgSubmit" value="Submit Second Picture" />
    </form>
  </div>
  <?php
		$l2img = new l2imgSubmitC();
		
?>
  <br />
  <br />
  <div>
    <form action="" method="post" enctype="multipart/form-data" name="l2img" id="l2img">
      <br />
      <br />
      Please upload your Third Picture <br />
      <br />
      <input name="l1img3" type="file" />
      <input type="submit" name="submit3" id="submit3" value="Submit Third Picture" />
    </form>
  </div>
  <br />
  <br />
  <div>
    <form action="" method="post" enctype="multipart/form-data" name="l2img" id="l2img">
      <br />
      <br />
      Please upload your Fourth Picture <br />
      <br />
      <input name="l1img4" type="file" id="l1img4" />
      <input type="submit" name="submit4" id="submit4" value="Submit Fourth Picture" />
    </form>
  </div>
  <br />
  <br />
  <div>
    <form action="" method="post" enctype="multipart/form-data" name="l2img" id="l2img">
      <br />
      <br />
      Please upload your Fifth Picture <br />
      <br />
      <input name="l1img5" type="file" id="l1img5" />
      <input type="submit" name="submit5" id="submit5" value="Submit Fifth Picture" />
    </form>
  </div>
  <br/>
</div>
</div>
      
      <div style="margin-left: 620px;">Right
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
    <div style="margin-left: 620px;">Administrative Toolbar Box</div>
</div><br/><br/>
<?php
include('titleBar/titleBarF.php');
?>
<br/>
      <div style="margin-left:20px;   id="myTitleWARNWHITE"> <br /> In order to ADD PRODUCTS You must be logged in . <br /> <br /> <a href="login.php">  Login Here</a> then click on <b>Add Products.</b> </br></div>
      
     
  </td>
    </tr>
</table>	 
 
 <?php }//END 
 ?> 
</body>
</html>