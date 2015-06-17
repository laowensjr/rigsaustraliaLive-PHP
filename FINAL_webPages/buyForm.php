<div style="width:500px;">
<table width="65%"  cellspacing="1" cellpadding="1"  bgcolor="#FFFFFF"align="center" style="border:#00F; border:thick">
  <tr>
    <td align="center" valign="middle"><br />
      <a href="buy.php"><img src="registration/images/sLogo.jpg" width="296" height="64" border="0"></a><br /></td>
  </tr>
  <tr>
    <td align="center" valign="top" ><h1>Search or Browse</h1></td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#FFFF00" style="border:solid"><form name="search" method="get" action="inventory/inventory.php">
      <p><h3>Enter A Keyword(optional)</h3><br />
        <input name="keyword" type="text" id="textfield" size="35">
        <br /><br />
        <b>Search By Sections</b><br />
        <select name="page" id="select">
          <option value="all" selected>Search ALL</option>
          <option value="surfacedrills">Surface Drills</option>
          <option value="blastholedrills">Blasthole Drills</option>
          <option value="surplus">Surplus</option>
        </select>
        <br /><br />
        
        <input name="Find It" type="submit" value="search">
      </p>
          </form><br /></td>
  </tr>
</table>
</div>
<?php
?>