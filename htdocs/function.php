<?php
require_once('include/define.php');

if($page_key=='index'){
	$path = '';
}
else{
	$path	= '../';
}
define('PATH', $path);
?>