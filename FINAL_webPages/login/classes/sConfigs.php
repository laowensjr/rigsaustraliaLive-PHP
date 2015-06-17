<?php
//define("MYSQL_CONN_ERROR", "Unable to connect to database."); 

// Ensure reporting is setup correctly 
$driver = new mysqli_driver();
        $driver->report_mode = MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;
// Connect function for database access 
function connect($usr,$pw,$db,$host) { 
   try { 
      $mysqli = new mysqli($host,$usr,$pw,$db); 
      $connected = true; 
   } catch (mysqli_sql_exception $e) { 
      //throw $e; 
   	throw new Exception('No DB Connection.<br />Check DB_Auth Settings');
   } 
} 

$servername = "localhost";
$username = "owenspcc_laowens";
$password = "lo19315761";
$database = "owenspcc_rigsalesaustralia";

try { 
  connect($username,$password,$database,$servername); 
  //echo 'Connected to database'; 
} 

catch (Exception $e) { 
  echo 'Admin Message: '.$e->getMessage(); 
 // echo '<br /> See Line '. $e->getLine().' of '.basename($e->getFile());
} 
?>