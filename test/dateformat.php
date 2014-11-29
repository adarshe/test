<?php
$tempDate = '2013-06-09';
$day = date('l', strtotime( $tempDate));// will gives you the week day name 
$month = date('jS F Y',strtotime($tempDate));// will format like date 9th June 2013
echo $day;
echo $month;
?>