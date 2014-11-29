<?php
/*function toAscii($str) {
	$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $str);
	$clean = strtolower(trim($clean, '-'));
	$clean = preg_replace("/[\/_|+ -]+/", '-', $clean);

	return $clean;
}
echo toascii('url by@pss');
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $actual_link;*/
$str="markbuilders.co/test/projects/completed/flat-at-beach.html";
echo end(explode('/',$str));
?>