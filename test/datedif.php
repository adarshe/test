<?php
$date1 = new DateTime("1989-07-27");
$date2 = new DateTime("2014-07-27");
$diff = $date1->diff($date2);

//echo "difference " . $diff->y . " years, " . $diff->m." months, ".$diff->d." days "
echo  $diff->y.'.'.$diff->m."Years";
//SELECT * FROM `projects` ORDER BY id  DESC LIMIT 0,8
?>