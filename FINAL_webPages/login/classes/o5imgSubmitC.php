<?php
		class o5imgSubmitC{
			
			function o5imgSubmitC(){
		if(isset($_POST['o5imgSubmit'])){
			$ptitle = $_GET['ptitle'];
$username = $_SESSION['username'];
$uploaddir = 'images/'.$username .'/';
																   
//if($uploadfile != 'images/'.$username.'/'){
if(!file_exists(@mkdir('images/'. $username, 0777, true))){// or die(mysql_error());
$madeDir = 'images/'.$username.'/';
@$uploadfile = $madeDir . basename($_FILES['o5img']['name']);
}else{
echo " File already Exists";
exit;
}
//The idea here is to check to see if the same file name exists TODO: then to go on to insert it into the database and not the duplicates
if (file_exists($uploadfile)) {
	echo "The file named " . basename($uploadfile) ." already exists, rename the file";
	echo '<br/>';
	echo "No Picture was uploaded";
	exit;
} else {
	//echo "The file " . basename($uploadfile) ."  does not exist";
	//echo getcwd();
move_uploaded_file($_FILES['o5img']['tmp_name'], $uploadfile);
$sql4ID = "SELECT id, pcategory FROM productinfo WHERE ptitle = '".$ptitle."'";
$sql4ID_ID = mysql_query($sql4ID);
$sql4ID_ID_OUT = mysql_fetch_array($sql4ID_ID);
$id = $sql4ID_ID_OUT['id'];
$sql4InsertPicture = "UPDATE productinfo SET o5img = '".$uploadfile."' WHERE username = '$username' AND id = '$id'";
	$insert_o5img = mysql_query($sql4InsertPicture) or die("Could not Insert Picture");	
echo '<b>Picture Named: '.basename($uploadfile).' was uploaded Successfully</b>';
}
}//end if isset o1imgSubmit
echo '<br />';
//echo '<a  href="javascript:;"onclick="openRequestedPopup2()">View Second Picture</a>';
			}//Function
			
			}//End class
?>