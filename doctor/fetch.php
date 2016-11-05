

<?php
require_once 'doctor_class.php';
$search_text=$_POST['search'];

$patient_obj = new Doctor_class();
$patient_history = $patient_obj->get_patient_history_by_ajax($search_text);
$output="";
if(mysql_num_rows($patient_history)>0){
$output.='<h4 align="center">Search Result</h4>';
$output.='<table class="table table-bordered">
    <tr>
        
                <th>Patient Name</th>
                <th>Doctor Name</th>
                <th>Diseases Department</th>
                <th>Diseases Name</th>
                <th>Diseases Description</th>
                <th>Treatment Type</th>
                <th>Next Visitation</th>
                <th>Update History</th>
                
             
    </tr>';
    
     while ($row = mysql_fetch_array($patient_history)) {
         $output.='
             <tr>
    <td>'. $row['name'].'</td>
    <td>'. $row['doc_name'].'</td>
    <td>'. $row['department'].'</td>
    <td>'. $row['diseases_name'].'</td>
    <td>'. $row['diseases_description'].'</td>
    <td>'. $row['treatment_type'].'</td>
    <td>'. $row['next_date'].'</td>
        <td><a href="add_treatment.php?id='.$row['patient_id'].'"> Update<a></td>
    
    
    </tr>
                 ';
     }
     echo $output;




}
 else {
    echo "Data Not Found";
}

?>

