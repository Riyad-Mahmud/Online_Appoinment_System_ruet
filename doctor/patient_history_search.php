<?php
require_once 'doctor_header.php';
require_once 'doctor_class.php';
$doctor_id=$_SESSION['doc_id'];
$patient_obj=new doctor_class();
$visitation=$patient_obj->get_doctor_schedule($doctor_id);



?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3>Patient History Check</h3>
        
        <br>
        
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"> Search</span>
                <input type="text" name="search_text" id="search_text" placeholder="Search by Patient Name" class="form-control">
            </div>
        </div>
        <div id="result"></div>
                    </section>
</section>
<?php require_once 'doctor_footer.php'; ?>

