<?php
require_once 'doctor_header.php';
require_once 'doctor_class.php';
$doctor_id=$_SESSION['doc_id'];
$patient_obj=new doctor_class();
$visitation=$patient_obj->get_doctor_schedule($doctor_id);



?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3>Patient Visitation Schedule</h3>
        
        <br>
        
            <table class="table table-bordered">
            <tr>
                <th>Visiting Shift</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Update Visitation Schedule</th>
                
                
            </tr>
            <?php  while ($row= mysql_fetch_assoc($visitation)) {?>
            <tr>
                <td><?php echo $row['shift'] ;?></td>
                <td><?php echo $row['start_time'] ;?></td>
                <td><?php echo $row['end_time'] ;?></td>
                <td><a href="update_schedule.php?id=<?php echo $row['id'];?> " class="btn btn-primary"><i class="fa fa-edit"></i></a>
                <a href="delete_schedule.php?id=<?php echo $row['id'];?> " class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                </td>
              
            </tr>
            <?php }?>
            
            
            
        </table>
        
        
            </section>
</section>
<?php require_once 'doctor_footer.php'; ?>

