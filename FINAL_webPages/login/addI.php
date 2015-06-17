<?php
session_start();
$username = $_SESSION['username'];
@$_POST['ptitle'] = addslashes($_POST['ptitle']);
$ptitle = stripslashes($_POST['ptitle']);
include('classes/o1imgSubmitC.php');
include('classes/o2imgSubmitC.php');
include('classes/o3imgSubmitC.php');
include('classes/o4imgSubmitC.php');
include('classes/o5imgSubmitC.php');
include('classes/setLimitC.php');
include('classes/pInfoSubmit.php');
include('classes/productSummary.php');
//$_SESSION['fname'] = 'Lawrence';
//$_SESSION['lname'] = 'Owens';
//@$email = 'laowensjr@gmail.com';
//@$phone = '407-502-5555';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add  Pictures &amp; Images</title>
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
window.open('pictures.php, 'My Picture',
'width=500,height=300,resizable=yes,scrollbars=yes,status=yes');
}
function openRequestedPopup2()
{
window.open('pictures2.php', 'My Picture',
'width=500,height=300,resizable=yes,scrollbars=yes,status=yes');
}
function openRequestedPopup3()
{
window.open('pictures3.php', 'My Picture',
'width=500,height=300,resizable=yes,scrollbars=yes,status=yes');
}
function openRequestedPopup4()
{
window.open('pictures4.php', 'My Picture',
'width=500,height=300,resizable=yes,scrollbars=yes,status=yes');
}
function openRequestedPopup5()
{
window.open('pictures5.php', 'My Picture',
'width=500,height=300,resizable=yes,scrollbars=yes,status=yes');
}
</script>
</head>
<body>
<br/><br/>
<?php
//Connects to Database 
include('classes/errorChecking/sConfigs.php'); 
 //checks cookies to make sure they are logged in 
 if(isset($_COOKIE['logincookie'])) 
 { 
 	$username = $_COOKIE['logincookie']; 
 	$pass = $_COOKIE['passcookie']; 
 	 	$check = $mysql->query("SELECT * FROM sellers WHERE username = '$username'")or die(mysql_error()); 
 	while($info = $check->fetch_array(MYSQLI_ASSOC)) 	 
 		{ 
 extract($info);
 //if the cookie has the wrong password, they are taken to the login page 
 		if ($pass != $info['password']) 
 			{ 	
			header("Location: mylogin.php"); 
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
</div><br/><br/>
<?php
include('titleBar/titleBarF.php');
?>
<br/>
<div style="width: 100%; overflow: hidden;">
  <div style="margin-left:10px; width: 600px; float: left; " id="myTitleNOUnderline" align="left">Add Rigs/Equipment: Pictures &amp; Images    </div>
  <div style="margin-left: 650px;" align="left" id="myTitle"><img src="sLOGO4MYPRODUCTSUMMARY.jpg" alt="My Product Summary" width="280" height="53" align="top" /></div>
</div>
    <div style="width: 100%; overflow: hidden;">
    <div style="margin-left:10px; width: 600px; float: left; height: 150px; width: 600px; border: 1px solid black; background-color: #FF9" align="left">
      <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" class="myNAMEDetails">
        <tr>
          
          
          
          <td width="100%" align="left" valign="top" class="myNAMETitle">Great, You're Almost Done!
            <form id="pInfo" name="pinfo" enctype="multipart/form-data" method="post" action="">
      <p>
        <?php $pInfoSubmitMSG = new pInfoSubmit(); ?>
      </p>
    </form>
      </td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#0000FF" class="whiteMyDetails">Now Add your Pictures for your product named<br />
      <?php	
	  $p = @$_GET['ptitle'];
	  stripslashes($p);
	  echo $p;
	  ?></td>
  </tr>
    </table>
 
      
    </div>
    <div style="margin-left: 630px; height: 200px; width: 400px; border: 1px solid black;"  align="left" id="myDetails" ><?php
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
      <div style=" background-color: #FF9; margin-left:10px; width: 600px; float: left;"></div>
      
      <div style="margin-left: 620px;">
       </div>
</div><br />
<div style=" background-color: #FF9; margin-left:10px; width: 600px; float: left;">
  <div id= "myTitle2" align = "left"> You can Upload up to 5 Pictures per Product. </div>
  <div>
    <form action="" method="post" enctype="multipart/form-data" name="o1img" id="o1img">
      <br />
      <br />
      Please upload your First Picture <br />
      <br />
      <input name="o1img" type="file" />
      <input name="ptitle" type="hidden" value="<?php echo @$_GET['ptitle'] ;?>" />
      <input type="submit" name="o1imgSubmit" id="o1imgSubmit" value="Submit First Picture" />
    </form>
  </div>
  <?php
		 
		$o1img = new o1imgSubmitC();
		
?>
  <br />
  <br />
  <div>
    <form action="" method="post" enctype="multipart/form-data" name="o2img" id="o2img">
      <br />
      <br />
      Please upload your Second Picture <br />
      <br />
      <input name="o2img" type="file" />
      <input type="submit" name="o2imgSubmit" id="o2imgSubmit" value="Submit Second Picture" />
    </form>
  </div>
  <?php
		$o2img = new o2imgSubmitC();
		
?>
  <br />
  <br />
  <div>
    <form action="" method="post" enctype="multipart/form-data" name="o3img" id="o3img">
      <br />
      <br />
      Please upload your Third Picture <br />
      <br />
      <input name="o3img" type="file" />
      <input type="submit" name="o3imgSubmit" id="o3imgSubmit" value="Submit Third Picture" />
    </form>
  </div>
  <?php
		$o3img = new o3imgSubmitC();
		
?>
  <br />
  <br />
  <div>
    <form action="" method="post" enctype="multipart/form-data" name="o4img" id="o4img">
      <br />
      <br />
      Please upload your Fourth Picture <br />
      <br />
      <input name="o4img" type="file" id="o4img" />
      <input type="submit" name="o4imgSubmit" id="o4imgSubmit" value="Submit Fourth Picture" />
    </form>
  </div>
<?php
		$o4img = new o4imgSubmitC();
		
?>
  <br />
  <br />
  <div>
    <form action="" method="post" enctype="multipart/form-data" name="o5img" id="o5img">
      <br />
      <br />
      Please upload your Fifth Picture <br />
      <br />
      <input name="o5img" type="file" id="o5img" />
      <input type="submit" name="o5imgSubmit" id="o5imgSubmit" value="Submit Fifth Picture" />
    </form>
  </div>
  <?php
		$o5img = new o5imgSubmitC();
		
?>
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
      <div style="margin-left:20px;   id="myTitleWARNWHITE"> <br /> In order to ADD PRODUCTS You must be logged in . <br /> <br /> <a href="mylogin.php">  Login Here</a> then click on <b>Add Products.</b> </br></div>
      
     
  </td>
    </tr>
</table>	 
 
 <?php }//END 
 ?> 
</body>
</html>