<?php
class adminTaskBar {
	
	 
	
	function adminTaskBar() {
	if(isset($_POST['goButton'])){
		//REDIRECTS FOR VIEW USER
		if(empty($_POST['bizname'])){
			if($_POST['tasks'] = 'viewuser'){
				header("Location: viewuser.php?cmd=getAllUsers");
							
			}// end if tasks
		}//end 1st  if empty bizname, redirect to viewuser
							
		elseif(!empty($_POST['bizname'])){
			if($_POST['tasks'] = 'viewuser'){
				$bizname = $_POST['bizname'];
				header("Location: viewuser.php?cmd=getSUsers&bizname=$bizname");
			
			}
		}//END 2nd ELSEif, redirect to viewuser
		
		//REDIRECTS FOR REQUESTS
		elseif(empty($_POST['bizname'])){
			if($_POST['tasks'] = 'approvalrequests'){
				header("Location: requests.php?cmd=getAllRequests");
			}
		}//end 3rd elseif, redirect to requests
		elseif(!empty($_POST['bizname'])){
			if($_POST['tasks'] = 'approvalrequests'){
				$bizname = $_POST['bizname'];
				header("Location: requests.php?cmd=getSRequests&bizname=$bizname");
			}
		}//end 4th elseif, redirect to requests
		
		//REDIRECTS FOR LISTINGS
		elseif(empty($_POST['bizname'])){
			if($_POST['tasks'] = 'viewlistings'){
				header("Location: requests.php?cmd=getAllListings");
			}
		}//end 5th elseif, redirect to listings
		elseif(!empty($_POST['bizname'])){
			if($_POST['tasks'] = 'viewlistings'){
				$bizname = $_POST['bizname'];
				header("Location: requests.php?cmd=getSListings&bizname=$bizname");
			}
		}//end 6th elseif, redirect to listings
		
		//REDIRECTS FOR VIEW Front
		elseif(empty($_POST['bizname'])){
			if($_POST['tasks'] = 'viewfront'){
				header("Location: requests.php?cmd=getAllFPListings");
			}
		}//end 7th elseif, redirect to view front page listings
		elseif(!empty($_POST['bizname'])){
			if($_POST['tasks'] = 'viewfront'){
				$bizname = $_POST['bizname'];
				header("Location: requests.php?cmd=getSFPListings&bizname=$bizname");
			}
		}//end 8th elseif, redirect to view front page listings
		
		
		
		
		
	}//end isser goButton
	
	}//end function
	
	
}//end class
?>
<?php adminTaskBar();?>