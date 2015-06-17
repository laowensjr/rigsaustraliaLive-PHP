<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
  # URL that generated this code:
  # http://txt2re.com/index-php.php3?s=EDMOND%20%20MASHAMESH%20Home:%20(847)%20420-9481%20Cell:%20%3Cnone%3E%20Email:%20emashamesh@bellsouth.ne&1&10

  $txt='EDMOND  MASHAMESH Home: (847) 420-9481 Cell: <none> Email: emashamesh@bellsouth.ne';

  $re1='((?:[a-z][a-z]+))';	# Word 1
  $re2='.*?';	# Non-greedy match on filler
  $re3='([\\w-+]+(?:\\.[\\w-+]+)*@(?:[\\w-]+\\.)+[a-zA-Z]{2,7})';	# Email Address 1

  if ($c=preg_match_all ("/".$re1.$re2.$re3."/is", $txt, $matches))
  {
      $first=$matches[1][0];
      $email1=$matches[2][0];
      print "($first) ($email1) \n";
  }

  #-----
  # Paste the code into a new php file. Then in Unix:
  # $ php x.php 
  #-----
?>
</body>
</html>