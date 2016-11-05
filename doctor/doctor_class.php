<?php

class Doctor_class {
    
   

    public function __construct() {
        require_once '../db_connection.php';
    }
     
    

    public function get_profile_data() {
        @session_start();
        $id = $_SESSION['doc_id'];
        $sql = "select doctors.*,medical_center.medical_center_name,department.department from doctors join medical_center on medical_center.id = doctors.chamber_id join department on department.id=doctors.dept_id where doctors.id = $id ";

        $res = mysql_query($sql);
        $result = mysql_fetch_assoc($res);

        return $result;
    }
    
    
        public function get_appointment_data() {
        @session_start();
        $id = $_SESSION['doc_id'];
        
        
      
        $sql="select patient.id,patient.name,patient.address,appointment.date,time.shift,time.start_time "
                . "from patient join appointment on patient.id=appointment.patient_id "
                . "join time on appointment.time_id=time.id where appointment.doctor_id=$id" ;
        $res = mysql_query($sql);

         
        
        
        return $res;
    }
    public function get_patient_history($patient_id){
       // $sql="select patient_history.*,patient.*,department.name from patient_history join patient on patient_history.patient_id=patient.id join depatment on patient_history.diseases_dept=department.id where patient.id=$patient_id ";
    $sql="select patient_history.*,patient.name,department.department,doctors.doc_name from"
            . " patient_history "
            . "join patient on patient_history.patient_id=patient.id  "
            . "join department on patient_history.diseases_dept=department.id "
            . "join doctors on patient_history.doctor_id=doctors.id where patient.id=$patient_id ";
        
        $res = mysql_query($sql);
        $result = mysql_fetch_assoc($res);
        

        return $result;
    }
    
    public function add_treatment($posted_data){
        $id=$posted_data['id'];
        $name = $posted_data['name'];
         $doctor_name = $posted_data['doctor_name'];
            $status = $posted_data['status'];
            $description = $posted_data['description'];
            $treatment = $posted_data['treatment'];
            $next_visit = $posted_data['next_visit'];
            
            $sql="UPDATE patient_history
            SET diseases_status='$status',diseases_description='$description',treatment_type='$treatment',next_date='$next_visit'
            WHERE patient_id=$id";
            $res = mysql_query($sql);
    }
    
    public function update_profile_data($posted_data){
        if ($_FILES['image']['size']>0){
            $fileName=$_FILES["image"]["name"];
            $tmpName=$_FILES["image"]["tmp_name"];
            $image_info=pathinfo($fileName);
            $image_extension=$image_info["extension"];
            $new_file_name=time().'_'.rand(0,99999999).'.'.$image_extension;
            $upload_path='images/';
            $upload_success=move_uploaded_file($tmpName, $upload_path.$new_file_name);
            if($upload_success){
                $pro_pic=$new_file_name;
                $sql="UPDATE doctors
                SET pro_pic='$pro_pic'
                WHERE id='$_SESSION[doc_id]';";
                $res = mysql_query($sql);
                $_SESSION['doc_pro_pic']=$pro_pic;
                
            }
        }



        $name = $posted_data['doc_name'];
            $degree = $posted_data['degree'];
            $chamber = $posted_data['chamber'];
            $email = $posted_data['email'];
            $password = md5($posted_data['password']);


            $sql="UPDATE doctors
            SET doc_name='$name',degree='$degree',chamber_id='$chamber',email='$email',password='$password'
            WHERE id='$_SESSION[doc_id]';";
            $res = mysql_query($sql);

            if ($res) {
                $msg = "Successfully Updated";

                return $msg;
            }

    }
    
    public function get_doctor_schedule($doctor_id){
        $Sql="select * from time where doctor_id=$doctor_id";
        $res=  mysql_query($Sql);
        
        return $res;
    }
    public function get_doctor_schedule2($time_id){
        $Sql="select * from time where id=$time_id";
        $res=  mysql_query($Sql);
        $result = mysql_fetch_assoc($res);
        

        return $result;
        
    }
    public function update_time_schedule($time_id){
        
    }
    public function get_patient_history_by_ajax($search_text){
        $sql="select patient_history.*,patient.name,department.department,doctors.doc_name from"
            . " patient_history "
            . "join patient on patient_history.patient_id=patient.id  "
            . "join department on patient_history.diseases_dept=department.id "
            . "join doctors on patient_history.doctor_id=doctors.id where patient.name like '%".$search_text."%'";
    
   
        
         $res=  mysql_query($sql);
        
         return $res;
    }
    
    public function update_schedule($posted_data,$time_id){
        $shift=$posted_data['shift'];
        $start_time=$posted_data['start_time'];
        $end_time=$posted_data['end_time'];
        $sql="UPDATE time
           SET shift='$shift',start_time='$start_time',end_time='$end_time'
            WHERE id=$time_id";
            $res = mysql_query($sql);
            return $res;
            
        
        
    }
    public function get_appointment_by_date($st,$end){
        
         @session_start();
        $id = $_SESSION['doc_id'];
        
        
        
      
        $sql="select patient.id,patient.name,patient.address,appointment.date,time.shift,time.start_time "
                . "from patient join appointment on patient.id=appointment.patient_id "
                . "join time on appointment.time_id=time.id where appointment.doctor_id=$id and appointment.date between '$st' and '$end' order by appointment.date ";
        $res = mysql_query($sql);

         
        
        
        return $res;
    }
    public function delete_time_shift($delete_id){
        $sql="delete from time where id= $delete_id";
        $res=  mysql_query($sql);
        return $res;
    }

}
