<?php
$string="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys";
echo strlen($string);
$truncated = (strlen($string) > 80) ? substr($string, 0, 80) . '...' : $string;
echo $truncated ; 
//strip_tags("Hello <b>world!</b>");
?>