<?php

require_once 'doctor_header.php';
require_once 'doctor_class.php';
$patient_obj = new Doctor_class();


$start_date="";
$to_date="";

if (isset($_POST['submit'])) {
            
            
   $start_date=$_POST['start_date'];
  $start= new DateTime($start_date);
   $st = date_format($start, 'd/m/y');
  
   $to_date=$_POST['end_date'];
   $to= new DateTime($to_date);
   $end = date_format($to, 'd/m/Y');
     
    $result = $patient_obj->get_appointment_by_date($st,$end);
    
    

?>
<section id="main-content"  >
    <section class="wrapper site-min-height">
        <h3>All Appointments</h3>
        
        <br>
        
        <form name="frmSearch" method="post" action="">
	 
            <label>From</label>
             <input type="date" placeholder="From Date" id="post_at" name="start_date"  value="" class=" datepicker" />
             <label>To</label>
	    <input type="date" placeholder="To Date" id="post_at_to_date" name="end_date" style="margin-left:10px"  value="" class="datepicker"  />			 
		<input type="submit" name="submit" value="Search" >

</form>
        <br>
        <table class="table table-bordered table-striped">
            <tr>
                <th>Patient id</th>
                <th>Patient Name</th>
                <th>Patient Address</th>
                <th>Appointment Date</th>
                <th>Appointment Shift</th>
                <th>Visiting Time</th>
                <th>Patient History</th>
                
            </tr>
            <?php  while ($row= mysql_fetch_assoc($result)) {?>
            <tr>
                <td><?php echo $row['id'] ;?></td>
                <td><?php echo $row['name'] ;?></td>
                <td><?php echo $row['address'] ;?></td>
                <td><?php echo $row['date'] ;?></td>
                <td><?php echo $row['shift'] ;?></td>
                <td><?php echo $row['start_time'] ;?></td>
                <td><a href="patient_history.php?pid=<?php echo $row['id']; ?>">See History</a></td>
            </tr>
            <?php }?>
            
            
            
        </table>
    </section>
</section>

<?php }

else{
   
$result = $patient_obj->get_appointment_data();

    
    ?>

<section id="main-content" style="">
    <section class="wrapper site-min-height">
        <h3>All Appointments </h3>
        
        <br>
        
        <form name="frmSearch" method="post" action="">
	 <p class="search_input">
             <label>From</label>
		<input type="date" placeholder="From Date" id="post_at" name="start_date"  value="" class="" />
                <label>To</label>
	    <input type="date" placeholder="To Date" id="post_at_to_date" name="end_date" style="margin-left:10px"  value="" class=""  />			 
		<input type="submit" name="submit" value="Search" >
	</p>
</form>
        <br>
        
        
        <table class="table table-bordered table-striped">
            <tr>
                <th>Patient id</th>
                <th>Patient Name</th>
                <th>Patient Address</th>
                <th>Appointment Date</th>
                <th>Appointment Shift</th>
                <th>Visiting Time</th>
                <th>Patient History</th>
                
            </tr>
            <?php  while ($row= mysql_fetch_assoc($result)) {?>
            <tr>
                <td><?php echo $row['id'] ;?></td>
                <td><?php echo $row['name'] ;?></td>
                <td><?php echo $row['address'] ;?></td>
                <td><?php echo $row['date'] ;?></td>
                <td><?php echo $row['shift'] ;?></td>
                <td><?php echo $row['start_time'] ;?></td>
                <td><a href="patient_history.php?pid=<?php echo $row['id']; ?>">See History</a></td>
            </tr>
            <?php }?>
            
            
            
        </table>
        
        
    </section>
</section>

<?php }?>

<?php require_once '../doctor/doctor_footer.php'; ?>



