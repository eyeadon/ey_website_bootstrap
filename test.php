<?php 
require_once('test_include.php'); 
// echo(__FILE__); 

?>

<p><?php echo __FILE__; ?></p>
<p><?php echo (pathinfo(__FILE__, PATHINFO_DIRNAME)); ?></p>
<p><?php echo $_SERVER['REQUEST_URI']; ?></p>
<p><?php echo dirname($_SERVER['REQUEST_URI']); ?></p>

<?php

$s = dirname($_SERVER['REQUEST_URI']);
$hello = "hello";

require_once('functions.php');

// $result = checkForInteriorFolder($s);
$result = (strpos($s, "yo") !== false || strpos($s, "bootstrap") !== false || strpos($s, "oy") !== false) ? true : false;

// $result = fileNameCheck($s);

?>

<p><?php echo (int)$result; testFunction($hello); ?></p>

