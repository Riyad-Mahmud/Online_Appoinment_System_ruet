<?php
$delete_id=$_GET['id'];
require_once 'doctor_class.php';
$obj= new Doctor_class();
$result=$obj->delete_time_shift($delete_id);
if($result){
    
    header("Location: visiting_schedule.php");
}


?>

