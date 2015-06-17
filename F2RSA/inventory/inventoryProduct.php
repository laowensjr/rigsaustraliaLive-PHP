<?php
class inventoryProduct {
	//The idea is to have the ability to add a product listing manually. Maybe necesssary if the user is unable to add the product listing. So it can add to DB and has functions to pull data out DB.
	//public $page;
	
	function inventoryProduct(){
	
	//Connects to your Database 
//Make this more OO SEE Folder name FINAL_webPages
mysql_connect("localhost", "owenspcc_laowens", "lo19315761") or die(mysql_error()); 
 mysql_select_db("owenspcc_rigsalesaustralia") or die(mysql_error());
	
	}
	
	function getPageInventory($page){	
		 if (isset($_GET["pageNum"]) ) { $pageNum  = $_GET["pageNum"]; } else { $pageNum=1; }; 
$start_from = ($pageNum-1) * 20;
if(isset($_GET['page'])){ $page = $_GET['page']; } else{$page = 'surfacedrills'; };

/*/
//Begin Pager
		echo '<div style="background-color:#FFF">';
		
		echo '<br/>';
echo '<br/>';
$sql = "SELECT COUNT(ptitle) FROM productinfo WHERE page = '".$page."' AND status = 'approved'"; 
$rs_result = mysql_query($sql); 
$row = mysql_fetch_row($rs_result); 
$total_records = $row[0]; 
$total_pages = ceil($total_records / 20); 
  echo "<b>PAGES:</b>";
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='inventory.php?page=$page&pageNum=".$i."'>".$i."&nbsp;&nbsp;&nbsp;</a>"; 
}; 

echo '<br/>';

		echo '</div>';
		echo '<br/>';
echo '<br/>';
		//End Pager


/*/
	$sql4pages = "SELECT * FROM productinfo WHERE page = '".$page."' AND status = 'approved' LIMIT $start_from, 20";
	$approvedProductsSQL = mysql_query($sql4pages);
	while($approvedProducts = mysql_fetch_array($approvedProductsSQL)){
		extract($approvedProducts);
		//Extract variables then Output table for Product Listing		
		?>
<link href="../css/rigSaleAustraliaCSS.css" rel="stylesheet" type="text/css">
   <style type="text/css">
<!--
a:link {
	color: #FFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
-->
</style>
<div style=" width:618px; height:303px; background-color:#FF0;"> 
<div style="border:solid; width:608px; height:193px;">     

		
<table style="width:608px; height:193px;" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01"  >
	<tr>
		<td colspan="5" align="left" valign="middle" bordercolor="#FFFF00" bgcolor="#1401F9" class="myTitleWARNWHITE">&nbsp;<?php /*<a href="moredetails.php?id=<?php echo $id; ?>"><?php echo @$ptitle; ?></a> */?><a href="../pDetails1MockupLightB.php"><?php echo @$ptitle; ?></a></td>
	</tr>
	<tr>
		<td width="203" height="196" align="center" valign="middle" bgcolor="#ECECEC">
        <?php /*<a href="moredetails.php?id=<?php echo $id; ?>"><img src='<?php echo "../login/$o1img"; ?>' width="100" height="89" alt="Original Image 1" border="1px" ></a>*/?>        <a href="../pDetails1MockupLightB.php"><img src='<?php echo "../login/$o1img"; ?>' width="200" height="150" alt="Original Image 1" border="1px" /></a></td>
		
		<?php $logo = '../images/sCrown.jpg'; 
		//echo "$page";
		/*switch($page){
		case 'surfacedrills':
		echo 'Surface Drills';
		break;
		
		case 'blastholedrills':
		echo 'Blasthole Drills';
		break;
		
		case 'surplus':
		echo 'Surplus';
		break;
		
		case 'newprodsnservices':
		echo 'New Product';
		break;
			
		}*/
		
		?>
        
		<td width="98" height="196" align="center" valign="middle" bgcolor="#ECECEC"><?php if(empty($o2img)){echo '';}else {?><a href="moredetails.php?id=<?php echo $id; ?>"><?php echo '<img src="';echo "../login/$o2img"; echo '" width="200" height="150" alt="Original Image 2" border="1px"></a>';} ?></td>
        
		<td width="98" height="196" align="center" valign="middle" bgcolor="#ECECEC"><?php if(empty($o3img)){echo '';}else {echo '<img src="';echo "../login/$o3img"; echo '" width="100" height="89" alt="Original Image 2" border="1px">';} ?></td>
        
		<td width="45" height="191" align="center" valign="middle" bgcolor="#ECECEC"></td>
		<td width="164" height="191" align="right" valign="top" bgcolor="#ECECEC"><div class="textLinks"><?php echo "$"."$pprice"." + GST"; ?></div><div class="redAlertText"><?php echo "$palert"; ?></div>
		  <div><?php echo @$pspecialnote; ?></div>
		  <div>Call: 041 3907649</div></td>
	</tr>
	<tr>
    <?php
	//echo substr('abcdef', 0, 4);
	$customShortDescr = substr($pldesc, 0, 200);
	
	?>
		<td height="66" colspan="4" align="left" valign="top" bgcolor="#ECECEC" class="myNAMEDetails"><?php echo @$customShortDescr; ?><a style="color:#000" href="moredetails.php?id=<?php echo $id; ?>">...More Details</a></td>
		<td width="164" height="66" align="center" valign="middle" bgcolor="#ECECEC">
		<form name="itempagelist" method="post" action="pdetails.php">
        <input name="productID" type="hidden" value="<?php echo "$id"; ?>">
        <input name="productTitle" type="hidden" value="<?php echo "@$ptitle"; ?>">
	      <input type="submit" name="submit" id="submit" value="Enquire">
        </form>
		
		
		
		</td>
	</tr>
	<tr>
		<td height="8" colspan="5" align="left" valign="top" bgcolor="#FFFFFF"><?php echo @$pitemfooter; ?><a href="test.php"></td>
        
	</tr>
</table>
</div>
</div>
		<?php 
		//echo two breaks for space
		echo '<br />';
		}//end while
		echo '<br />';
		echo '<br/>';
//Begin Pager
		echo '<div style="background-color:#FFF">';
		
		echo '<br/>';
echo '<br/>';
$sql = "SELECT COUNT(ptitle) FROM productinfo WHERE page = '".$page."' AND status = 'approved'"; 
$rs_result = mysql_query($sql); 
$row = mysql_fetch_row($rs_result); 
$total_records = $row[0]; 
$total_pages = ceil($total_records / 20); 
  echo "<b>PAGES:</b>";
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='inventory.php?page=$page&pageNum=".$i."'>".$i."&nbsp;&nbsp;&nbsp;</a>"; 
}; 

echo '<br/>';
echo '<br/>';
echo '<br/>';
		echo '</div>';
		//End Pager
		}//end function
			
			
			
			
					
}//end class
?>
<?php
//runPageInventory = new inventoryProduct();
//runPageInventory->getPageInventory('surfacedrills');
?>