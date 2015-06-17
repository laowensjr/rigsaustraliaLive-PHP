<?php
    class pSelectasVars{
    public $ptitle = NULL,
	$pcategory = NULL,
	$pldesc = NULL;	
    	
    function pSelectasVars(){
    
    //BEGIN*********************
	  $username = $_SESSION['username'];
	  //$username = taracalhoun;
	}
	
  function getpstatus(){
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
	
	///NEW Function
	
	function getProductDivs(){
		$username = $_SESSION['username'];
		//Connects to your Database 
//Make this more OO SEE Folder name FINAL_webPages
mysql_connect("localhost", "owenspcc_laowens", "lo19315761") or die(mysql_error()); 
 mysql_select_db("owenspcc_rigsalesaustralia") or die(mysql_error());
	$sql4selectingProducts = mysql_query("SELECT * FROM productinfo WHERE username = '$username'")or die(mysql_error());
	
	while($myProductArray = mysql_fetch_array($sql4selectingProducts)){
	$this->id = $myProductArray['id'];
	$this->status = $myProductArray['status'];
	$this->ptitle = $myProductArray['ptitle'];
	$this->pcategory = $myProductArray['pcategory'];
	$this->pldesc = $myProductArray['pldesc'];
	$this->pprice = $myProductArray['pprice'];
	$this->o1img = $myProductArray['o1img'];
    	?>
		
	<div style="width: 550px; overflow: hidden;">
		<div style="margin-left:3px; width: 110px; float: left;"><b>&nbsp;&nbsp;<?php if($this->status != 'approved'){
			echo 'Under Review';	
			}else{
				echo 'Approved';
					} ?></b><br /><img src='<?php echo "../login/$this->o1img"; ?>' width="100" height="100" 	alt="Original Image 1" border="1px" /></div>
		
		<div style="margin-left: 130px;"> 
			<h2>Name:&nbsp;<?php echo $this->ptitle; ?><br />
		   Price:&nbsp;$<?php echo $this->pprice; ?></h2>
	  <a href="pictures.php?id=<?php echo "$this->id"?>;&ptitle=<?php echo "$this->ptitle"; ?>">Show All Pictures</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a  href="javascript:;"onclick="showMyProductPictures()">Show More Details</a> | <a href="classes/modifyListing.php?id=<?php echo "$this->id"?>">Modify</a> | <a href="classes/deleteListing.php?id=<?php echo "$this->id"?>">Delete</a></div>
      
	</div>
		<br /><br />
		
			<?php }
	
	
	}
    }//end class
?>