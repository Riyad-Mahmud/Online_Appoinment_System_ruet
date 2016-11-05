<?php
$time_id=$_GET['id'];
require_once 'doctor_header.php';
require_once 'doctor_class.php';
$patient_obj = new Doctor_class();
$time_history = $patient_obj->get_doctor_schedule2($time_id);
$data="";

if (isset($_POST['submit'])) {
    $result=$patient_obj->update_schedule($_POST,$time_id);
    
       if($result){
        header("Location: visiting_schedule.php");
        exit();
        
    } 
    
}

?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3>Update Visitation Schedule </h3>
        <div class="row mt">
            <div class="col-lg-12">
                
             
            </div>
        </div>
        <br>
       
        
        <form class="form-horizontal style-form" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Visitation Shift</label>
                                <div class="col-sm-10">
                                    <input type="text" name="shift" class="form-control"
                                    value="<?php echo $time_history['shift'];?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Start Time</label>
                                <div class="col-sm-10">
                                    <input type="text" name="start_time" class="form-control"
                                           value="<?php echo $time_history['start_time'];?>">
                                </div>
                            </div>
                            
            
            
           
            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label"> End Time</label>
                                <div class="col-sm-10">
                                    <input type="text" name="end_time" class="form-control"
                                           value="<?php echo $time_history['end_time'];?>">
                                </div>
                            </div>
                            
                            
                            
            <input type="submit" class="btn btn-success" name="submit" value="Update">
                        </form>
         </section>
</section>

<?php require_once 'doctor_footer.php'; ?>



