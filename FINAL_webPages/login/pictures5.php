<?php
session_start();
$username = $_SESSION['username'];
//Connects to your Database 
mysql_connect("localhost", "laowensjr", "lo19315761") or die(mysql_error()); 
 mysql_select_db("rigsalesaustralia") or die(mysql_error());
//BEGINNING OF FIRST PICTURE SUBMIT
$sql4images =mysql_query("SELECT * FROM productinfo where username = '$username'") or die(mysql_error());
$productImages = mysql_fetch_array($sql4images);
extract($productImages);
?>
<div style="width:500px; height:300px">
<img src='<?php echo "$o5img" ?>' width="200" height="120" alt="Original Image 5" border="1px"><br/>
<?php
//echo getcwd();
echo '<br/>';
echo "Filename: ".basename($o5img);
echo '<br/>';
echo '<a href="javascript:self.close()">close window</a>';
?>
</div>
