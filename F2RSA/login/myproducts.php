<?php
ob_start();
session_start();
include('classes/pSelectasVars.php');
include('classes/productSummary.php');
//$_SESSION['fname'] = 'Lawrence';
//$_SESSION['lname'] = 'Owens';
//@$email = 'laowensjr@gmail.com';
//@$phone = '407-502-5555';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Products</title>
<style type="text/css">
<!--
body {
	background-color: #39F;
}.textLinks {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-style: normal;
	font-weight: bold;
	color: #00F;
}
.textLinks2Lines {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-style: normal;
	font-weight: bold;
	color: #00F;
}
.subTextLinks {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-style: normal;
	font-weight: bold;
	color: #000;
}
a:link {
	text-decoration: none;
	color: #999;
}
a:visited {
	text-decoration: none;
	color: #06F;
}
a:hover {
	text-decoration: none;
	color: #000;
}
a:active {
	text-decoration: none;
	color: #00F;
}
.whiteMyDetails {
	color: #FFF;
}
#gallery { float: left; width: 65%; min-height: 12em; }
  .gallery.custom-state-active { background: #eee; }
  .gallery li { float: left; width: 96px; padding: 0.4em; margin: 0 0.4em 0.4em 0; text-align: center; }
  .gallery li h5 { margin: 0 0 0.4em; cursor: move; }
  .gallery li a { float: right; }
  .gallery li a.ui-icon-zoomin { float: left; }
  .gallery li img { width: 100%; cursor: move; }
 
  #trash { float: right; margin-right:120px; width: 32%; min-height: 18em; padding: 1%; }
  #trash h4 { line-height: 16px; margin: 0 0 0.4em; }
  #trash h4 .ui-icon { float: left; }
  #trash .gallery h5 { display: none; }
-->
</style>
<link href="../css/rigSaleAustraliaCSS.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  
   
  <script>
  $(function() {
    // there's the gallery and the trash
    var $gallery = $( "#gallery" ),
      $trash = $( "#trash" );
 
    // let the gallery items be draggable
    $( "li", $gallery ).draggable({
      cancel: "a.ui-icon", // clicking an icon won't initiate dragging
      revert: "invalid", // when not dropped, the item will revert back to its initial position
      containment: "document",
      helper: "clone",
      cursor: "move"
    });
 
    // let the trash be droppable, accepting the gallery items
    $trash.droppable({
      accept: "#gallery > li",
      activeClass: "ui-state-highlight",
      drop: function( event, ui ) {
        deleteImage( ui.draggable );
      }
    });
 
    // let the gallery be droppable as well, accepting items from the trash
    $gallery.droppable({
      accept: "#trash li",
      activeClass: "custom-state-active",
      drop: function( event, ui ) {
        recycleImage( ui.draggable );
      }
    });
 
    // image deletion function
    var recycle_icon = "<a href='link/to/recycle/script/when/we/have/js/off' title='Recycle this image' class='ui-icon ui-icon-refresh'>Recycle image</a>";
    function deleteImage( $item ) {
      $item.fadeOut(function() {
        var $list = $( "ul", $trash ).length ?
          $( "ul", $trash ) :
          $( "<ul class='gallery ui-helper-reset'/>" ).appendTo( $trash );
 
        $item.find( "a.ui-icon-trash" ).remove();
        $item.append( recycle_icon ).appendTo( $list ).fadeIn(function() {
          $item
            .animate({ width: "48px" })
            .find( "img" )
              .animate({ height: "36px" });
        });
      });
    }
 
    // image recycle function
    var trash_icon = "<a href='link/to/trash/script/when/we/have/js/off' title='Delete this image' class='ui-icon ui-icon-trash'>Delete image</a>";
    function recycleImage( $item ) {
      $item.fadeOut(function() {
        $item
          .find( "a.ui-icon-refresh" )
            .remove()
          .end()
          .css( "width", "96px")
          .append( trash_icon )
          .find( "img" )
            .css( "height", "72px" )
          .end()
          .appendTo( $gallery )
          .fadeIn();
      });
    }
 
    // image preview function, demonstrating the ui.dialog used as a modal window
    function viewLargerImage( $link ) {
      var src = $link.attr( "href" ),
        title = $link.siblings( "img" ).attr( "alt" ),
        $modal = $( "img[src$='" + src + "']" );
 
      if ( $modal.length ) {
        $modal.dialog( "open" );
      } else {
        var img = $( "<img alt='" + title + "' width='384' height='288' style='display: none; padding: 8px;' />" )
          .attr( "src", src ).appendTo( "body" );
        setTimeout(function() {
          img.dialog({
            title: title,
            width: 400,
            modal: true
          });
        }, 1 );
      }
    }
 
    // resolve the icons behavior with event delegation
    $( "ul.gallery > li" ).click(function( event ) {
      var $item = $( this ),
        $target = $( event.target );
 
      if ( $target.is( "a.ui-icon-trash" ) ) {
        deleteImage( $item );
      } else if ( $target.is( "a.ui-icon-zoomin" ) ) {
        viewLargerImage( $target );
      } else if ( $target.is( "a.ui-icon-refresh" ) ) {
        recycleImage( $item );
      }
 
      return false;
    });
  });
  </script>
  
  
 <script type="text/javascript">
function openRequestedPopup()
{
window.open('pictures.php', 'My Picture',
'width=500,height=300,resizable=yes,scrollbars=yes,status=yes');
}
function openRequestedPopup2()
{
window.open('pictures2.php', 'My Picture',
'width=500,height=300,resizable=yes,scrollbars=yes,status=yes');
}
function openRequestedMyPhotos()
{
window.open('photos.php', 'My Product Pictures',
'width=500,height=300,resizable=yes,scrollbars=yes,status=yes');
}
function showMyProductPictures()
{
window.open('pictures.php', 'My Address',
'width=500,height=300,resizable=yes,scrollbars=yes,status=yes');
}
</script>
</head>
<body>
<br/><br/>
<?php
//Connects to your Database 
//Make this more OO SEE Folder name FINAL_webPages
mysql_connect("localhost", "owenspcc_laowens", "lo19315761") or die(mysql_error()); 
 mysql_select_db("owenspcc_rigsalesaustralia") or die(mysql_error());
 //checks cookies to make sure they are logged in 
 if(isset($_COOKIE['logincookie'])) 
 { 
 	$username = $_COOKIE['logincookie']; 
 	$pass = $_COOKIE['passcookie']; 
 	 	$check = mysql_query("SELECT * FROM sellers WHERE username = '$username'")or die(mysql_error()); 
 	while($info = mysql_fetch_array( $check )) 	 
 		{ 
 extract($info);
 //if the cookie has the wrong password, they are taken to the login page 
 		if ($pass != $info['password']) 
 			{ 	
			header("Location: mylogin.php"); 
 			} 
 
 //otherwise they are shown the admin area	 
 	else 
 			{ 
			?>
 <table width="80%" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    
    <td width="1224" height="1600" align="left" valign="top" background="../images/background.jpg"  class="bg">
<div id= 'logo_hidden_overflow' style="width: 100%; overflow: hidden;">
    <div id='logo' style="width: 600px; float: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="sLOGO4c.jpg" alt="Rig Sales Australia" width="297" height="75" border="0" align="texttop" /></div>
    <div id = 'next2logo' style="margin-left: 620px;"></div>
</div>
<br/>
<div id='linksandnavigation' style="azimuth:right" align="right"><a href="../buy.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image47','','../images/buyOVER.jpg',1)"><img src="../images/buy.jpg" name="Image47" width="38" height="31" border="0" id="Image47" /></a>&nbsp;&nbsp;&nbsp;<a href="../registration.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image46','','../images/sellOVER.jpg',1)"><img src="../images/sell.jpg" name="Image46" width="49" height="31" border="0" id="Image46" /></a>&nbsp;&nbsp;&nbsp;<a href="../auction/index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image48','','../images/auctionOVER.jpg',1)"><img src="../images/auction.jpg" name="Image48" width="84" height="31" border="0" id="Image48" /></a></div>
<br/>
<?php
include('titleBar/titleBarF.php');
?>
<br />
<div>
      
      <div style="margin-left: 10px; background-color:#FFF">
        <table width="100%" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td colspan="2" align="left" valign="top"><img src="../images/backendHeaders/BACKENDimageHEADERS.jpg" width="1223" height="117" /></td>
          </tr>
  </table>
      
      </div>
</div>
<br />
<div style="width: 100%; overflow: hidden;">
  <div style="margin-left:10px; width: 600px; float: left; color: #000;" id="myTitleNOUnderline" align="left"><br />My Rig/Equipment Details<br /></div>
    <div style="margin-left: 650px; font-family: Arial, Helvetica, sans-serif;" align="left" id="myTitle"><img src="sLOGO4MYPRODUCTSUMMARY.jpg" width="280" height="53" alt="My Product Summary" /></div><br />
</div>
    <div style="width: 100%; overflow: hidden;">
    <div style="margin-left:10px; width: 600px; float: left; width: 600px; border: 1px solid black; background-color: #FF9" align="left">
      <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" class="myNAMEDetails">
  <tr>
    <td width="4%" rowspan="2" align="center" valign="top">
    
  
   	 
	 </td>
      
   
    <td width="96%" align="left" valign="top">
    
      <?php 
	  $runProdDivs = new pSelectasVars();
	$runProdDivs->getProductDivs();
	//SEE RESOURCE: http://jqueryui.com/droppable/#photo-manager
		?>
    <br/>   <br/>
    </td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#0000FF" class="whiteMyDetails">Your Rigs/Equipment<br />
     
    
    </td>
  </tr>
    </table>
 
      
    </div>
    <div style="margin-left: 630px; height: 200px; width: 400px; border: 1px solid black;"  align="left" id="myDetails" ><?php
$p= new productSummary();
	if(isset($_POST['pInfoSubmit'])){
$pictureCount = $p->getPictureCount();
	}else{
		$pictureCount = $p->getPictureCount();
	if(isset($_POST['o1imgSubmit'])){
					$pictureCount = $p->getPictureCount();
					//header("Location: addI.php");
					}
}
?> * You have " <b> <?php echo $p->getProductCount();?> </b>" Product(s) and " <b><?php echo $p->getPictureCount();?></b> " Image(s) Listed in Premium Listings.
    
</div>
</div>
    <div style="width: 100%; overflow: hidden;">
      <div style=" background-color: #FF9; margin-left:10px; width: 600px; float: left;"></div>
      
      <div style="margin-left: 620px;">
       </div>
</div><br />
   
    <div style=" background-color: #FF9; margin-left:10px; width: 600px; float: left;">
      <div id= "myTitle" align = "left"></div>
    </div>
    </div>
      
      <div style="margin-left: 620px;">&nbsp;
      </div>
    </div>
    </td>
    </tr>
</table>
    <?php 
			}}
	  }//BEGIN
	  else 
 
 //if the cookie does not exist, they are taken to the login screen 
 {//BEGINNING	?>
 
 	<table width="80%" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    
    <td width="1224" height="1600" align="left" valign="top" background="../images/background.jpg"  class="bg">
<div style="width: 100%; overflow: hidden;">
    <div style="width: 600px; float: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="sLOGO4c.jpg" alt="Rig Sales Australia" width="297" height="75" border="0" align="texttop" /></div>
    <div style="margin-left: 620px;">&nbsp;</div>
</div><br/><br/>
<?php
include('titleBar/titleBarF.php');
?>
<br/>
      <div style="margin-left:20px;   id="myTitleWARNWHITE"> <br /> 
      In order to MY PRODUCTS You must be logged in . <br /> <br /> 
      <a href="mylogin.php">  Login Here</a> then click on <b>My Products.</b> </br></div>
      
     
  </td>
    </tr>
</table>	 
 
 <?php }//END 
 ?> 
    </body>
</html>
<?php
ob_end_flush();
?>