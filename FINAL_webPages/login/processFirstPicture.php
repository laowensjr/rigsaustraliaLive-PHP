<?php
$username = $_SESSION['username'];
$uploaddir = 'images/'.$username .'/';
																   
//if($uploadfile != 'images/'.$username.'/'){
if(!file_exists(@mkdir('images/'. $username, 0777, true))){// or die(mysql_error());
$madeDir = 'images/'.$username.'/';
$uploadfile = $madeDir . basename($_FILES['l1img']['name']);
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
move_uploaded_file($_FILES['l1img']['tmp_name'], $uploadfile);
echo "First Picture uploaded Successfully";
}
?>
