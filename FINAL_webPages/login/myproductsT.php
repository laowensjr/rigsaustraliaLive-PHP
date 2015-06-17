<?php
session_start();
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
  <div style="margin-left:10px; width: 600px; float: left; " id="myTitle" align="left">My Product Information</div>
    <div style="margin-left: 650px;" align="left" id="myTitle"> <img src="../images/sCrown.jpg" width="67" height="53" border="0" align="texttop" /> My Product Summary</div>
</div>
    <div style="width: 100%; overflow: hidden;">
    <div style="margin-left:10px; width: 600px; float: left; height: 250px; width: 600px; border: 1px solid black; background-color: #FF9" align="left">
      <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" class="myNAMEDetails">
  <tr>
    <td width="34%" rowspan="2" align="center" valign="top">
    
    <br /><br />
      <img src="../images/noImage.jpg" alt="No Image" width="200 height="140" /><br />
    First Picture
    Showing:<br />
	</td>
    <td width="66%" align="left" valign="top" class="myNAMETitle">
    <form id="pInfo" name="pinfo" enctype="multipart/form-data" method="post" action="">
      <p>
        <?php 
	  //BEGIN*********************
	  if(isset($_POST['submit6'])){
		//This makes sure they did not leave any fields blank
	
	if (!$_POST['ptitle'] && !$_POST['pcategory'] && !$_POST['pldesc']){
	
		die('All fields are BLANK, at least one field is required');
	
	}
	
	$check2 = mysql_query("SELECT * FROM productinfo WHERE username = '$username'")or die(mysql_error());
	$howmany = mysql_num_rows($check2);
	$limitReached = 6;
	if($limitReached == $howmany ){
		die("You have reached your limit of $limitReached");
			}
	
	if(!get_magic_quotes_gpc()){
		
	$_POST['ptitle'] = addslashes($_POST['ptitle']);
	$_POST['pcategory'] = addslashes($_POST['pcategory']);
	$_POST['pldesc'] = addslashes($_POST['pldesc']);
	
	$pTitle = $_POST['ptitle'];
	$pCategory = $_POST['pcategory'];
	$pldesc = $_POST['pldesc'];
	
	}
	$sql = "INSERT INTO productinfo(username, ptitle, pcategory, pldesc) VALUES ('".$username."', '".$pTitle."', '".$pCategory."', '".$pldesc."')";
	
	$insert_productMain = mysql_query($sql);
	
	?>
        <div id="myDetails" align=left>
          <b> Product Successfully Updated</b><br />
	</div>
	
	<?php 
}//END IF
			}//End while
			
			}//End First if isset
	  
	  //else{
	 ?>
          
      
        Name:  
        <input name="ptitle" type="text" value="" size="25" maxlength="50" /><br />
        Category Name: 
        <input name="pcategory" type="text" value="" size="25" maxlength="50" /><br />
        Please Enter a Description below
        <textarea name="pldesc" id="pldesc" cols="45" rows="5"></textarea>
      </p>
      <p>
        <input type="submit" name="submit6" id="submit6" value="Submit" />
      </p>
    </form>
      </td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#0000FF" class="whiteMyDetails">Quickly Add Your Product(s) then your Images. <br />
     
    
    </td>
  </tr>
    </table>
 
      
    </div>
    <div style="margin-left: 630px; height: 200px; width: 400px; border: 1px solid black;"  align="left" id="myDetails" > * You have no Products Listed in Premium Listings.</div>
</div>
    <div style="width: 100%; overflow: hidden;">
      <div style=" background-color: #FF9; margin-left:10px; width: 600px; float: left;">Last Updated:</div>
      
      <div style="margin-left: 620px;">
       </div>
</div><br />
   
    <div style=" background-color: #FF9; margin-left:10px; width: 600px; float: left;">
      <div id= "myTitle" align = "left">
        You can Upload up to 5 Pictures per Product. </div>
        <div>
          <form action="" method="post" enctype="multipart/form-data" name="l1img" id="l1img">
            <br />
            <br />
            Please upload your First Picture <br />
            <br />
            <input name="l1img1" type="file" />
            <input type="submit" name="submit" id="submit" value="Submit First Picture" />
          </form>
        </div>
        <br />
        <br />
        <div>
          <form action="" method="post" enctype="multipart/form-data" name="l2img" id="l2img">
            <br />
            <br />
            Please upload your Second Picture <br />
            <br />
            <input name="l1img2" type="file" />
            <input type="submit" name="submit2" id="submit2" value="Submit Second Picture" />
          </form>
        </div>
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
      
      <div style="margin-left: 620px;">RIGHT
      </div>
    </div>
     </td>
    </tr>
</table>
    <?php 
	  }//BEGIN
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
      <div style="margin-left:20px;   id="myTitleWARNWHITE"> <br /> In order to ADD PRODUCTS You must be logged in . <br /> <br /> <a href="login.php">  Login Here</a> then click on <b>Add Products.</b> </br></div>
      
     
  </td>
    </tr>
</table>	 
 
 <?php }//END 
 ?> 
    </body>
</html>