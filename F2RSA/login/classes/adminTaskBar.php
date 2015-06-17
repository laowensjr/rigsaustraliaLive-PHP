<?php
	if(isset($_GET['tasks'])){

		//REDIRECTS FOR VIEW USER
		if(empty($_GET['bizname']) && $_GET['tasks'] == 'viewuser'){
			header("Location: viewuser.php?cmd=getAllUsers");
			
		}//end 1st  if empty bizname, redirect to viewuser
							
		elseif(!empty($_GET['bizname']) && $_GET['tasks'] == 'viewuser'){
				$bizname = $_GET['bizname'];
				header("Location: viewuser.php?cmd=getSUsers&bizname=$bizname");
	
		}//END 2nd ELSEif, redirect to viewuser
		
		//REDIRECTS FOR REQUESTS
		elseif(empty($_GET['bizname']) && $_GET['tasks'] == 'approvalrequests'){
			header("Location: viewrequests.php?cmd=getAllRequests");
		
		}//end 3rd elseif, redirect to requests
		
		elseif(!empty($_GET['bizname']) && $_GET['tasks'] == 'approvalrequests'){
			$bizname = $_GET['bizname'];
			header("Location: viewrequests.php?cmd=getSRequests&bizname=$bizname");
			
		}//end 4th elseif, redirect to requests
		
		//REDIRECTS FOR LISTINGS
		elseif(empty($_GET['bizname']) && $_GET['tasks'] == 'viewlistings'){
			header("Location: requests.php?cmd=getAllListings");
			
		}//end 5th elseif, redirect to listings
		elseif(!empty($_GET['bizname']) && $_GET['tasks'] == 'viewlistings'){
			$bizname = $_GET['bizname'];
			header("Location: requests.php?cmd=getSListings&bizname=$bizname");
	
		}//end 6th elseif, redirect to listings
		
		//REDIRECTS FOR VIEW Front
		elseif(empty($_GET['bizname']) && $_GET['tasks'] == 'viewfront'){
			header("Location: requests.php?cmd=getAllFPListings");
			
		}//end 7th elseif, redirect to view front page listings
		elseif(!empty($_GET['bizname']) && $_GET['tasks'] == 'viewfront'){
			$bizname = $_GET['bizname'];
			header("Location: requests.php?cmd=getSFPListings&bizname=$bizname");
		
		}//end 8th elseif, redirect to view front page listings
		elseif(empty($_GET['bizname']) && $_GET['tasks'] == 'emailuser'){
			header("Location: emailusers.php?cmd=getALLUsers");
		}
		elseif(!empty($_GET['bizname']) && $_GET['tasks'] == 'emailuser'){
			$bizname = $_GET['bizname'];
			header("Location: emailusers.php?cmd=getUserInfo&bizname=$bizname");
		}
		elseif(empty($_GET['bizname']) && $_GET['tasks'] == 'emailallusers'){
			header("Location: emailusers.php?cmd=sendAllEmail");
			
		}
		else{
		echo "Nothing to Print";	
		}
		
		
		
		
		
	}//end isser goButton
	
?>