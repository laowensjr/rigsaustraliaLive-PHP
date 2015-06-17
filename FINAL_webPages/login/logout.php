<?php 
ob_start();
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
<link href="css/rigSaleAustraliaCSS.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    
    <td align="center" valign="top">
    
<?php
 $past = time() - 100; 
 //this makes the time in the past to destroy the cookie 
 setcookie(logincookie, gone, $past); 
 setcookie(passcookie, gone, $past); 
 // remove all session variables
session_unset(); 
// destroy the session 
session_destroy(); 
 header("Location: ../index.php"); 
 ?> 
    
    </td>
    
  </tr>
</table>
</body>
</html>
<?php 
ob_end_flush();
?>