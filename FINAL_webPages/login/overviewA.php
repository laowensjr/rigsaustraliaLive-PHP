<?php
session_start();
include('classes/summaryCounter.php');
//$_SESSION['fname'] = 'Lawrence';
//$_SESSION['lname'] = 'Owens';
//@$email = 'laowensjr@gmail.com';
//@$phone = '407-502-5555';
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
#id01_ {
	margin-left:600px;
	position: absolute;
	left:0px;
	top:0px;
	width:21px;
	height:49px;
}
#id02_ {
	position:absolute;
	left:21px;
	top:0px;
	
	width:223px;
	height:49px;
}
#id03_ {
	position:absolute;
	left:244px;
	top:0px;
	width:126px;
	height:49px;
}
#id04_ {
position:absolute;
	left:370px;
	top:0px;
	
	width:49px;
	height:49px;
}
inputText{
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	font-weight:lighter;
}
-->
</style>
<link href="../css/rigSaleAustraliaCSS.css" rel="stylesheet" type="text/css" />
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
    <div style="margin-left: 600px; width: 600px; height:49px; background-image:url(adminBarUI/images/whole.jpg); background-repeat:no-repeat; padding-top:6px;">
      <form action="" method="post" enctype="multipart/form-data" name="adminTaskBar">
        &nbsp;&nbsp;&nbsp; Search&nbsp;&nbsp;&nbsp; 
        <input name="bizname" type="text" size="10" maxlength="20"  style=" "/>
or&nbsp;&nbsp;&nbsp;          
<select name="tasks" id="tasks" size="1" style="width:120px">
      <option value="default" selected="selected" class="inputText">Select A Task</option>
      <option value="viewuser">View Users</option>
      <option value="approvalrequests">View Approval Requests</option>
      <option value="viewlistings">View Listings</option>
      <option value="viewfront">View FrontPageAds</option>
    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input name="goButton" type="image" id="goButton" src="adminBarUI/images/goButton.jpg" align="middle" />
      </form>
    
 
   
    
    </div>
</div><br/><br/>
<?php
include('titleBar/titleBarAdmin.php');
?>
<br/>
<div style="width: 100%; overflow: hidden;">
  <div style="margin-left:10px; width: 600px; float: left; " id="myTitleNOUnderline" align="left">Pending Requests</div>
    <div style="margin-left: 650px;" align="left" id="myTitle"><img src="sLOGO4MYdocsSUMMARY.jpg" width="280" height="53" alt="My Document Summary" /></div>
</div>
    <div style="width: 100%; overflow: hidden;">
    <div style="margin-left:10px; width: 600px; float: left; height: 250px; width: 600px; border: 1px solid black; background-color: #FF9" align="left">
      
    <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" class="myNAMEDetails">
  <tr>
    <td width="34%" rowspan="2" align="center" valign="top"><br />
      <br /><br /></td>
    <td width="66%" align="left" valign="top" class="myNAMETitle"><br /></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="myNAMEDetails"><br /></td>
  </tr>
    </table>
 
      
    </div>
    <div style="margin-left: 630px; height: 200px; width: 400px; border: 1px solid black;"  align="left" id="myDetails" ></div>
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
include('titleBar/titleBarAdmin.php');
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