<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #70ADE6;
}
-->
</style>
<link href="css/rigSaleAustraliaCSSL.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    
    <td align="center" valign="top">
    <?php
//Connects to your Database 
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
 
 //if the cookie has the wrong password, they are taken to the login page 
 		if ($pass != $info['password']) 
 			{ 			header("Location: login.php"); 
 			} 
 
 //otherwise they are shown the admin area	 
 	else 
 			{ 
 			 echo "Admin Area<p>"; 
 echo "Your Content<p>";
 echo "<br/>";
 echo "<br/>";
 //print_r($_SESSION);
 echo "Your username is:" .$_SESSION['username']. ", OK! " .$_SESSION['username'].".";
echo "<br/>";
 echo "<br/>";
 echo "<a href=logout.php>Logout</a>"; 
 			} 
 		} 
 		} 
 else 
 
 //if the cookie does not exist, they are taken to the login screen 
 {			 
 header("Location: login.php"); 
 } 
 ?> 
    
    </td>
    
  </tr>
</table>
</body>
</html>
