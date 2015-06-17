<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
 
<link href="../css/rigSaleAustraliaCSS.css" rel="stylesheet" type="text/css" />
</head>
<body>
<script type="text/javascript">
function showMyProductPictures()
{
window.open('pictures.php', 'My Address',
'width=500,height=300,resizable=yes,scrollbars=yes,status=yes');
}
</script>
<?php
    class pSelectasVars{
    public $ptitle = NULL,
	$pcategory = NULL,
	$pldesc = NULL;	
    	
    function pSelectasVars(){
    
    //BEGIN*********************
	  //$username = $_SESSION['username'];
	  $username = taracalhoun;
	}
	
	function getProductDivs{
	$sql4selectingProducts = mysql_query("SELECT * FROM productinfo WHERE username = '$username'")or die(mysql_error());
	
	while($myProductArray = mysql_fetch_array($sql4selectingProducts)){
	$this->status = $myProductArray['status'];
	$this->ptitle = $myProductArray['ptitle'];
	$this->pcategory = $myProductArray['pcategory'];
	$this->pldesc = $myProductArray['pldesc'];
	$this->pprice = $myProductArray['pprice'];
	$this->o1img = $myProductArray['o1img'];
    	}?>
		
	<div style="width: 550px; overflow: hidden;">
		<div style="margin-left:3px; width: 110px; float: left;"><b><?php echo getstatus(); ?></b><br /><img src='<?php echo "../login/$this->o1img"; ?>' width="100" height="100" 	alt="Original Image 1" border="1px" /></div>
		
		<div style="margin-left: 130px;"> 
			<h2>Name:&nbsp;<?php echo getptitle(); ?><br />
		   Price:&nbsp;$<?php echo getpprice(); ?></h2>
	  <a  href="javascript:;"onclick="showMyProductPictures()">Show All Pictures</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a  href="javascript:;"onclick="showMyProductPictures()">Show More Details</a></div>
	</div>
		
		
			<?php }
			
					
   function getstatus(){
    	if($this->status != approved){
			echo 'Under Review';	
			}else{
				echo 'Approved';
					}
        }
   function getptitle(){
    	
    	return $this->ptitle;	
    
    }
	
    function getpcategory(){
    	
    	return $this->pcategory;
    
    }
    function getpldesc(){
    	
    	return $this->pldesc;
    
    }
	function getpprice(){
    	
    	return $this->pprice;
    
    }
	
	
    
	
	 
    }//end class
?>
     
</body>
<?php 
/*<img src='<?php echo "../login/$o1img"; ?>' width="100" height="89" alt="Original Image 1" border="1px" >
//<a  href="javascript:;"onclick="showMyProductPictures()">Show Pictures</a>
*/
?>
</html>
	