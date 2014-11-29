<?php
$link = mysql_connect("localhost","root","");
mysql_select_db("brasandhoney",$link);
$sql="SELECT * FROM urllist";
$res=mysql_query($sql) or die(mysql_error());

while($rs=mysql_fetch_object($res)){

$id=$rs->redirect_id;
$string=str_replace('test', 'www',$rs->destination_url);
$sql="UPDATE urllist set destination_url='$string' WHERE redirect_id='$id'";
mysql_query($sql);

}
echo "completed";
?>