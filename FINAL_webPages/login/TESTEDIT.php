<!DOCTYPE html>  
 <head>  
 <title>jQuery enable/disable button</title>  
 <script type='text/javascript' src='http://code.jquery.com/jquery.min.js'></script>  
 <script type="text/javascript">
function chgVals(obj, name) {
var url = "exechgs.php"; // name of php file to execute changes
var params = "field=" + name + "&value=" + obj.getElementsByTagName(0).value + '"&id=' + obj.id;
http.open("POST", url + "?" + params, true);
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
http.setRequestHeader("Content-length", params.length);
http.setRequestHeader("Connection", "close");
http.send(params);
obj.innerHTML = obj.value;
}
function chgType(obj, name) {
var originalHTML = obj.innerHTML;
obj.innerHTML = '<input type="text" name="' + name + '" value="' + originalHTML + '">';
}
</script>
 <style type='text/css'>  
 </style>  
 </head>  
 <body>  
<?php
$q = mysql_query("SELECT * FROM user_db") or die(mysql_error());
while($r = mysql_fetch_array( $q )) {
echo <<<EOF
<table>
  <tr>
    <td>Name:</td>
    <td><span id="field$r[id]" onmouseover="chgType(this, 'fullName')" onblur="chgVals(this, 'fullName')">$r[name]</span></td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><span id="field$r[id]" onmouseover="chgType(this, 'email')" onblur="chgVals(this, 'email')">$r[email]</span></td>
  </tr>
</table>
EOF;
}
?>
 </body>  
 </html>  