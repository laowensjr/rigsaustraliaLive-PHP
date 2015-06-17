<?php 
 Class productSummary{
 	public $productCount, $pictureCount;
 	
 	function productSummary(){
		$username = @$_SESSION['username'];
		include('classes/errorChecking/serverCredentials.php');
	  //mysqli($host,$usr,$pw,$db);
	 $mysqli = new mysqli($servername,$username,$password,$database);
 		
 		$sql4ProductSummary = $mysqli->query("SELECT count(ptitle) as productCount,  count(o1img) as o1img, count(o2img) as o2img, count(o3img) as o3img, count(o4img) as o4img, count(o5img) as o5img FROM productinfo WHERE username = '$username'")or die(mysql_error());
 		$productSummaryCount = $sql4ProductSummary->fetch_array(MYSQLI_ASSOC);
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