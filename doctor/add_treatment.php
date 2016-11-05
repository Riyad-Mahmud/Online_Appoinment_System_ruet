<?php
$patient_id=$_GET['id'];
require_once 'doctor_header.php';
require_once 'doctor_class.php';
$patient_obj = new Doctor_class();
$patient_history = $patient_obj->get_patient_history($patient_id);
$data="";

if (isset($_POST['submit'])) {
    $data = $patient_obj->add_treatment($_POST);
    
    
}
?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3>Add Treatment </h3>
        <div class="row mt">
            <div class="col-lg-12">
                
             
            </div>
        </div>
        <br>
          <?php
               if($data){
        echo "successful";
    }
               ?>
        
        <form class="form-horizontal style-form" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Patient ID</label>
                                <div class="col-sm-8">
                                    <input type="text" name="id" class="form-control"
                                    value="<?php echo $patient_id;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Patient Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control"
                                    value="<?php echo $patient_history['name'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Doctor Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="doctor_name" class="form-control"
                                           value="<?php echo $patient_history['doc_name'];?>">
                                </div>
                            </div>
                            
            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Current Status</label>
                                <div class="col-sm-8">
                                    <input type="text" name="status" class="form-control"
                                           value="">
                                </div>
                            </div>
            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Diseases Description & Suggestion</label>
                                <div class="col-sm-8">
                                    <input type="text" name="description" class="form-control"
                                           value="">
                                </div>
                            </div>
            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Treatment</label>
                                <div class="col-sm-8">
                                    <input type="text" name="treatment" class="form-control"
                                           value="">
                                </div>
                            </div>
           
            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Next Visitation Date</label>
                                <div class="col-sm-8">
                                    <input type="text" name="next_visit" class="form-control"
                                           value="">
                                </div>
                            </div>
                            
                            
                            
            <input type="submit" class="btn btn-success" name="submit" value="Add">
                        </form>
         </section>
</section>

<?php require_once 'doctor_footer.php'; ?>

