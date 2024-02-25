<?php
define ('host', 'localhost');
define ('user','root');
define ('pass', '');
define ('db', 'demo');

$connection = mysqli_connect(host,user,pass,db) or die('Could not connect');

?>
  