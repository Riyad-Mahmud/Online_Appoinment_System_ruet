<?php
require_once 'doctor_header.php';
require_once 'doctor_class.php';
$patient_id=$_GET['pid'];
$patient_obj=new doctor_class();
$patient_history=$patient_obj->get_patient_history($patient_id);



?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3>Patient History</h3>
        
        <br>
        

<table class="table table-bordered">
    <tr>
        <th>Patient Name</th>
        <td><?php echo $patient_history['name'];?></td>
    </tr>
    <tr>
        <th>Doctor Name </th>
        <td><?php echo $patient_history['doc_name'];?></td>
    </tr>
    <tr>
        <th>Diseases Department</th>
        <td><?php echo $patient_history['department'];?></td>
    </tr>
    <tr>
        <th>Diseases Name</th>
        <td><?php echo $patient_history['diseases_name'];?></td>
    </tr>
    <tr>
        <th>Diseases Description</th>
        <td><?php echo $patient_history['diseases_description'];?></td>
    </tr>
    <tr>
        <th>Treatment Type</th>
        <td><?php echo $patient_history['treatment_type'];?></td>
    </tr>
    <tr>
        <th>Next Visitation </th>
        <td><?php echo $patient_history['next_date'];?></td>
    </tr>
    
</table>
        <br>
        <a href="add_treatment.php?id=<?php echo $patient_history['patient_id'];?>" type="button" class="btn btn-primary">Add Treatment</a>
        </section>
</section>
<?php require_once 'doctor_footer.php'; ?>