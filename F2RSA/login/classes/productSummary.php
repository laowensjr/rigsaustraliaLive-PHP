<?php 
 Class productSummary{
 	public $productCount, $pictureCount;
 	
 	function productSummary(){
		$username = @$_SESSION['username'];
		//Connects to your Database 
//Make this more OO SEE Folder name FINAL_webPages
mysql_connect("localhost", "owenspcc_laowens", "lo19315761") or die(mysql_error()); 
 mysql_select_db("owenspcc_rigsalesaustralia") or die(mysql_error());
 		$sql4ProductSummary = mysql_query("SELECT count(ptitle) as productCount,  count(o1img) as o1img, count(o2img) as o2img, count(o3img) as o3img, count(o4img) as o4img, count(o5img) as o5img FROM productinfo WHERE username = '$username'")or die(mysql_error());
 		$productSummaryCount = mysql_fetch_array($sql4ProductSummary);
 		extract($productSummaryCount);
 		$this->productCount = $productCount;
 		$pictureCount = $o1img+$o2img+$o3img+$o4img+$o5img;
 		$this->pictureCount = $pictureCount;
 		
 	}
 	
 	function getProductCount(){
 		return $this->productCount;
 	}
 	function getPictureCount(){
 		return $this->pictureCount;
 	}
 	
 	
 	
 	
 }
?>