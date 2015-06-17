<?php
$sql = mysql_query("SELECT * FROM promotedrigs");
while($results = mysql_fetch_array( $sql )) 	 

 		{ 

 extract($results);
 
?>
<div class="fadein">
<img src="<?php echo 'login/classes/'.@$o1img; ?>">
<img src="<?php echo 'login/classes/'.@$o2img; ?>">
<img src="<?php echo 'login/classes/'.@$o3img; ?>">
<img src="<?php echo 'login/classes/'.@$o4img; ?>">
<img src="<?php echo 'login/classes/'.@$o5img; ?>">
</div>
<?php
//See Resource: http://www.sourcecodester.com/tutorials/php/4917/image-slideshow-using-php-and-simple-jquery.html
		}
?>