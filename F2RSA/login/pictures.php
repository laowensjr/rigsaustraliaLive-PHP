<?php
//session_start();
$id = @$_GET['id'];
$ptitle = @$_GET['ptitle'];

//$uploaddir = 'images/'.$username .'/'.$image.'/';
//$uploaddir.'/'.$image;
//Connects to your Database 
//Make this more OO SEE Folder name FINAL_webPages
mysql_connect("localhost", "owenspcc_laowens", "lo19315761") or die(mysql_error()); 
 mysql_select_db("owenspcc_rigsalesaustralia") or die(mysql_error());
//BEGINNING OF FIRST PICTURE SUBMIT
$sql4images =mysql_query("SELECT * FROM productinfo where id = '$id' AND ptitle = '$ptitle'") or die(mysql_error());
$productImages = mysql_fetch_array($sql4images);
extract($productImages);
//$uploaddir = 'images/'.$username;
?>
<div style="width:500px; height:300px">
<div style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">Pictures of <?php echo "$ptitle"; ?></div>
<br/>
<br />
<img src='<?php echo "$o1img" ?>' width="200" height="120" alt="Original Image 1" border="1px"><br/>
<?php
//echo getcwd();
echo '<br/>';
echo "Filename: ".basename($o1img);
echo '<br/>';
echo '<br />';
?>


<?php if(empty($o2img)){echo '';}else {echo '<img src="';echo "$o2img"; echo '" width="200" height="120" alt="Original Image 2" border="1px">';
echo '<br/>';
echo "Filename: ".basename($o2img);
} 
?>
<br />
<br />
<?php if(empty($o3img)){echo '';}else {echo '<img src="';echo "$o3img"; echo '" width="200" height="120" alt="Original Image 3" border="1px">';
echo '<br/>';
echo "Filename: ".basename($o3img);
} 
?>
<br />
<br />
<?php if(empty($o4img)){echo '';}else {echo '<img src="';echo "$o4img"; echo '" width="200" height="120" alt="Original Image 4" border="1px">';
echo '<br/>';
echo "Filename: ".basename($o4img);
} 
?>
<br />
<br />
<?php if(empty($o5img)){echo '';}else {echo '<img src="';echo "$o5img"; echo '" width="200" height="120" alt="Original Image 5" border="1px">';
echo '<br/>';
echo "Filename: ".basename($o5img);
} 
?>
<br />
<br />
<?php
echo '<a href="myproducts.php">Back</a>';
?>
</div>