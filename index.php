<?php 
require('./topup.php');

$code = $_POST['code'];
  
topup($code);

?>
