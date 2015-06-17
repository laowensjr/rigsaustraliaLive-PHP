<?php
ob_start();
class summaryCounter{
public $productCount;
public $pictureCount;
function summaryCounter(){
$username = $_SESSION['username'];
$sql4SellerProdInfo = mysql_query("SELECT count(ptitle) as productCount,  count(l1img) as l1img, count(l2img) as l2img, count(l3img) as l3img, count(l4img) as l4img, count(l5img) as l5img, count(s1img) as s1img, count(s2img) as s2img, count(s3img) as s3img, count(s4img) as s4img, count(s5img) as s5img FROM productinfo WHERE username = '$username'")or die(mysql_error());
	$productSummaryCount = mysql_fetch_array($sql4SellerProdInfo);
	extract($productSummaryCount);
	if(isset($_POST['pInfoSubmit'])){
$this->productCount = $productCount;
return $this->productCount;
$this->pictureCount = $l1img+$l2img+$l3img+$l4img+$l5img+$s1img+$s2img+$s3img+$s4img+$s5img;
	}else{
		$this->pictureCount = $l1img+$l2img+$l3img+$l4img+$l5img+$s1img+$s2img+$s3img+$s4img+$s5img;
		$this->productCount = $productCount;
		return $this->productCount;
		
	}
}
function getSummaryPictureCount(){
	
	return $this->pictureCount;
}
function getSummaryProductCount(){
	return $this->productCount;
}
}
?> 
<?php 
ob_end_flush();
?>