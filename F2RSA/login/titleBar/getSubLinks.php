<?php
class getSubLinks{
public $subL1 = '';
public $subL2 = '';
public $subL3 = '';
public function getNewSubLinks($subLink){
$subLink = $_GET['subLink'];
switch($subLink){
case 'overview':
$subL1 = 'Update Profile';
$subL2 = 'Add Products';
$subL3 = 'Review Docs';
break;
case 'myproducts':
$subL1 = "Update Profile";
$subL2 = "Add Products";
$subL3 = "Review Docs";
break;
case "docctr":
$subL1 = "Update Profile";
$subL2 = "Add Products";
$subL3 = "Review Docs";
break;
}
}//end function
function getSubLinks1(){
$subL1 = $this->subL1;
return $subL1;
}
function getSubLinks2(){
$subL2 = $this->subL2;
return $subL2;
}
function getSubLinks3(){
$subL3 = $this->subL3;
return $subL3;
}
}//end Class
?>