<?php
  require 'last.inc.php';
	$redirect_page = 'http://'.$_SERVER['HTTP_HOST'].'/comics/'.$last.'/';
	//echo $redirect_page;
	header('Location: '.$redirect_page);
	
?>
