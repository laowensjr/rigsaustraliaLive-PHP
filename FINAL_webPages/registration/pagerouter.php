<?php
class pagerouter {
	
	
	function pagerouter(){
		$page = @$_GET['page'];
		switch($page){
			case 'buy':
				header('Location: buy/index.php');
				break;
			case 'sell':
				$newpage = header("Location: /mockup4/webPage/FINAL_webPages/registration/index.php");
				return $newpage;
				break;
			case 'auction':
				header('Location: auction/index.php');
				break;
			case 'advertise':
				header('Location: advertise/index.php');
				break;
			case 'makearequest':
				header('Location: requests/index.php');
				break;
					
		}
		
	}
}
?>
<?php $runPageRouter = new pagerouter(); ?>