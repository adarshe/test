<?php
class Employee {
    public $name = '';
    public $age  = '';
    public $role = '';
}

    $obj = new Employee();
    $obj->name = 'Alex';
    $obj->age  = 24;
    $obj->role = 'PHP Developer';
    
   $en=json_encode($obj);
   $tr=json_decode($en);
   
   echo nl2br($tr->name.'<br/>');
   echo nl2br($tr->age.'<br/>');
   echo nl2br($tr->role.'<br/>');
?>
