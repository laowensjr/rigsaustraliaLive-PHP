<?php
session_start();
?>
<link href="../css/rigSaleAustraliaCSS.css" rel="stylesheet" type="text/css">
<?php
//Connects to your Database 
mysql_connect("localhost", "laowensjr", "lo19315761") or die(mysql_error()); 
 mysql_select_db("rigsalesaustralia") or die(mysql_error());
 $result = mysql_query("SELECT * FROM sellers WHERE username = '$_SESSION[username]'")or die(mysql_error()); 
 $allInfo = mysql_fetch_array($result);
 extract($allInfo);
 
echo '<div id="myTitle" align="left">';
echo '<br />';
echo $fname." ".$lname;
echo '</div>';
echo '<div id="myNameDetails align="left">';
echo '<br />';
echo '<b>Address: </b>';
echo '<br />';
echo $address;
echo '<br />';
echo $town.", ".$state." ".$postcode;
echo '</div>';
echo '<br />';
echo '<br />';
echo '<a href="javascript:self.close()">close window</a>';
?>