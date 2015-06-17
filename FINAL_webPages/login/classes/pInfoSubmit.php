  <?php
    class pInfoSubmit{
    	// This class creates a div to say Product Info Successfully Updated if it inserted into DB also sets limitreached variable
    	public $pTitle2;
		
    function pInfoSubmit(){
    $username = $_SESSION['username']; 
    //BEGIN*********************
	  if(isset($_POST['pInfoSubmit'])){
		//This makes sure they did not leave any fields blank
	
	if (!$_POST['ptitle'] && !$_POST['pcategory'] && !$_POST['pldesc']){
	
		die('Required Fields missing: "Listing Title, Category, or Description"');
	
	}
	
	$check2 = mysql_query("SELECT * FROM productinfo WHERE username = '@username'")or die(mysql_error());
	$howmany = mysql_num_rows($check2);
	//$limitReached = 1; ADDED FUNCTION
	$limitReached1 = new setLimitC(1);
	$limitReached = $limitReached1->getLimitC();
	if($limitReached = $howmany ){
		die('You have reached your limit of '.$limitReached.' Product(s) <br /><a href="addI.php"> Return here to Add Pictures</a>');
			}
	
	if(!get_magic_quotes_gpc()){
		//For Minor Security Add slashes to Post Variables before inserting into the DB
	$_POST['ptitle'] = addslashes($_POST['ptitle']);
	$_POST['pcategory'] = addslashes($_POST['pcategory']);
	$_POST['pldesc'] = addslashes($_POST['pldesc']);
	
	$_POST['pothercategory'] = addslashes($_POST['pothercategory']);
	$_POST['underoutsideagreement'] = addslashes($_POST['underoutsideagreement']);
	$_POST['beneficialowner'] = addslashes($_POST['beneficialowner']);
	$_POST['pmfg'] = addslashes($_POST['pmfg']);
	$_POST['pyear'] = addslashes($_POST['pyear']);
	$_POST['pvin'] = addslashes($_POST['pvin']);
	$_POST['plicensed'] = addslashes($_POST['plicensed']);
	$_POST['pregnum'] = addslashes($_POST['pregnum']);
	$_POST['penginenum'] = addslashes($_POST['penginenum']);
	$_POST['penginehrs'] = addslashes($_POST['penginehrs']);
	$_POST['penginemakenmodel'] = addslashes($_POST['penginemakenmodel']);
	$_POST['pdrifterheadhrs'] = addslashes($_POST['pdrifterheadhrs']);
	$_POST['pdriftermodel'] = addslashes($_POST['pdriftermodel']);
	$_POST['protationheadmodel'] = addslashes($_POST['protationheadmodel']);
	$_POST['pregnum'] = addslashes($_POST['pregnum']);
	$_POST['pcompressormfg'] = addslashes($_POST['pcompressormfg']);
	$_POST['pcompressorhrs'] = addslashes($_POST['pcompressorhrs']);
	
	$_POST['phighpvreg'] = addslashes($_POST['phighpvreg']);
	$_POST['pservicehistory'] = addslashes($_POST['pservicehistory']);
	$_POST['pprice'] = addslashes($_POST['pprice']);
	//Set Variables from Post Variables
	$pTitle = $_POST['ptitle'];
	$pCategory = $_POST['pcategory'];
	$pldesc = $_POST['pldesc'];
	
	$pothercategory = $_POST['pothercategory'];
	$underoutsideagreement = $_POST['underoutsideagreement'];
	$beneficialowner = $_POST['beneficialowner'];
	$pmfg = $_POST['pmfg'];
	$pyear = $_POST['pyear'] ;
	$pvin = $_POST['pvin'] ;
	$plicensed = $_POST['plicensed'];
	$pregnum = $_POST['pregnum'] ;
	$penginenum = $_POST['penginenum'] ;
	$penginehrs = $_POST['penginehrs'] ;
	$penginemakenmodel = $_POST['penginemakenmodel'];
	$pdrifterheadhrs = $_POST['pdrifterheadhrs'];
	$pdriftermodel = $_POST['pdriftermodel'] ;
	$protationheadmodel = $_POST['protationheadmodel'] ;
	
	$pcompressormfg = $_POST['pcompressormfg'] ;
	$pcompressorhrs = $_POST['pcompressorhrs'] ;
	
	$phighpvreg = $_POST['phighpvreg'] ;
	$pservicehistory = $_POST['pservicehistory'] ;
	$pprice = $_POST['pprice'] ;
	
	}
	$sql4adding= "INSERT INTO productinfo(username, ptitle, pcategory, pldesc, pothercategory, underoutsideagreement, beneficialowner, pmfg, pyear, pvin, plicensed, pregnum, penginenum, penginehrs, penginemakenmodel, pdrifterheadhrs, pdriftermodel, protationheadmodel, pcompressormfg, pcompressorhrs, phighpvreg, pservicehistory, pprice ) VALUES ('".$username."', '".$pTitle."', '".$pCategory."', '".$pldesc."', '".$pothercategory."', '".$underoutsideagreement."', '".$beneficialowner."', '".$pmfg."', '".$pyear."', '".$pvin."', '".$plicensed."', '".$pregnum."', '".$penginenum."', '".$penginehrs."', '".$penginemakenmodel."', '".$pdrifterheadhrs."','".$pdriftermodel."', '".$protationheadmodel."', '".$pcompressormfg."', '".$pcompressorhrs."', '".$phighpvreg."', '".$pservicehistory."', '".$pprice."')";
	
	//DEPRACATED NEWS if using mysql-insert-id, SEE http://php.net/manual/en/function.mysql-insert-id.php
	
	
	$insert_productMain = mysql_query($sql4adding) or die("Did not Insert.");
$this->pTitle2 = stripslashes($pTitle);
	?>
    <div id="myDetails"><b>Rig/Equipment Information was Successfully Added, Now Add Your Images</b></div>
	
	<?php header("Location: addI.php?ptitle=$this->pTitle2");
}//END IF pInfoSubmit
    }//end function
	function getpTitle(){
		$pTitle = $_GET['ptitle'];
			return $pTitle;
	}
		
    }//end class
?>