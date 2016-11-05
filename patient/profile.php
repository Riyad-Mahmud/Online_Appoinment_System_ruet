<?php
session_start();
if(!$_SESSION['is_user_login']){
    header('location:login.php');
}
?>
<?php require_once 'header.php'; ?>

<div class="profile-menu">
    <a href="appointment.php">Profile</a>
    <a href="appointment.php">Get Appoinment</a>
    <a href="appointment_history">See All Appoinment History</a>
    <a href="appointment_history">Cancel Appointment</a>
    <a href="appointment_history">Search Doctor</a>
</div>
<?php require_once 'footer.php'; ?>