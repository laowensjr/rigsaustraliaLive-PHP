<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Administration Taskbar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- Save for Web Styles (Untitled-1) -->
<style type="text/css">
<!--

#Table_01 {
	position:absolute;
	left:0px;
	top:0px;
	width:419px;
	height:49px;
}

#id01_ {
	position:absolute;
	left:0px;
	top:0px;
	width:21px;
	height:49px;
}

#id02_ {
	position:absolute;
	left:21px;
	top:0px;
	width:223px;
	height:49px;
}

#id03_ {
	position:absolute;
	left:244px;
	top:0px;
	width:126px;
	height:49px;
}

#id04_ {
	position:absolute;
	left:370px;
	top:0px;
	width:49px;
	height:49px;
}
inputText{
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	font-weight:lighter;
}

-->
</style>
<!-- End Save for Web Styles -->
<link href="../../css/rigSaleAustraliaCSS.css" rel="stylesheet" type="text/css" />
</head>
<body style="background-color:#FFFFFF;">
<!-- Save for Web Slices (Untitled-1) -->
<div id="Table_01">
<form action="irouter.php" method="post" enctype="multipart/form-data" name="adminTasks">
	<div id="id01_" style="background-image:url(images/01.jpg); background-repeat:no-repeat" >
		
</div>
<div id="id02_" style="background-image:url(images/02.jpg); background-repeat:no-repeat; padding-top:12px;" align="center">
		Search&nbsp;
		<input name="fullname" type="text" class="inputText"  id="fullname" />&nbsp; 
		or&nbsp;
  </div>
	<div id="id03_" style="background-image:url(images/03.jpg); background-repeat:no-repeat;  padding-top:12px;">
    <select name="tasks" id="tasks" size="1" style="width:120px">
      <option value="default" selected="selected" class="inputText">Select A Task</option>
      <option value="viewuser">View Users</option>
      <option value="approvalrequests">View Approval Requests</option>
      <option value="viewlistings">View Listings</option>
      <option value="viewfront">View FrontPageAds</option>
    </select>
    
    </div>
	<div id="id04_" style="background-image:url(images/04.jpg); background-repeat:no-repeat; padding-top:6px;" align="center">
	  <input name="goButton" type="image" id="goButton" src="images/goButton.jpg" align="middle" />
    </div>
  </form>
</div>


<!-- End Save for Web Slices -->
</body>
</html>