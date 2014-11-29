<?php
/*$url="http://www.brasandhoney.com/m/groups/view/test";
//echo strlen("http://www.brasandhoney.com");
$string = substr($url,27);
echo $string;*/

$link = mysql_connect("localhost","root","");
mysql_select_db("brasandhoney",$link);
$sql="SELECT * FROM urllist LIMIT 4200,200";
$res=mysql_query($sql) or die(mysql_error());

while($rs=mysql_fetch_object($res)){

$id=$rs->redirect_id;
$check_url_status = check_url($rs->destination_url);
if ($check_url_status != '200')
{
   $sql2="UPDATE urllist SET status='Broken' WHERE redirect_id='$id'";
   mysql_query($sql2);
   echo'Broken record id Number:'.$id.'<br/>';
   

}
else
{
$sql2="UPDATE urllist SET status='ok' WHERE redirect_id='$id'";
   mysql_query($sql2);
}

}
echo'Last Record Number:'.$id.'<br/>';
function check_url($url) {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch , CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    $headers = curl_getinfo($ch);
    curl_close($ch);

    return $headers['http_code'];
}
?>