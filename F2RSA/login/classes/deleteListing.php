<?php
class deleteListing{
	public $id;
	
	function __construct() {
		$id = $_GET['id'];
		$this->$id = $id;
		mysql_connect("localhost", "owenspcc_laowens", "lo19315761") or die(mysql_error());
			mysql_select_db("owenspcc_rigsalesaustralia") or die(mysql_error());
		$updateQuery = ("DELETE from productinfo WHERE id ='".$this->$id."'");
		$sql_updateStatus = mysql_query($updateQuery);
		header("Location: ../myproducts.php");
	
	}
}
$s = new deleteListing();
?>