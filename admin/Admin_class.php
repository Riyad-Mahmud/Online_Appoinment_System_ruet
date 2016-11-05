<?php

class Admin_class {

    public function __construct() {
        include '../db_connection.php';
    }

    public function add_medical($posted_data) {
        $center_name = $posted_data['medical_center_name'];
        $center_address = $posted_data['medical_center_address'];
        $sql = "insert into medical_center (medical_center_name,medical_center_address)values('$center_name','$center_address')";
        $res = mysql_query($sql);

        if ($res) {
            $msg = "Successfully Inserted";
            return $msg;
        }
    }

    public function add_department($posted_data) {
        $dept = $posted_data['department'];
        $sql = "insert into department (department)values('$dept')";
        $res = mysql_query($sql);

        if ($res) {
            $msg = "Successfully Inserted";
            return $msg;
        }
    }

    public function get_doctor_table_data() {
        $sql = "select doctors.*,medical_center.medical_center_name,department.department from doctors join medical_center on medical_center.id = doctors.chamber_id join department on department.id=doctors.dept_id ";
        $res = mysql_query($sql);
        return $res;
    }

    public function add_doctor($posted_data) {
        $name = $posted_data['doc_name'];
        $degree = $posted_data['degree'];
        $chamber = $posted_data['chamber'];
        $department = $posted_data['department'];
        $email = $posted_data['email'];
        $password = md5($posted_data['password']);
        $sql = "insert into doctors (doc_name,degree,chamber_id,dept_id,email,password)"
                . "values('$name','$degree','$chamber','$department','$email','$password')";
        $res = mysql_query($sql);

        if ($res) {
            $msg = "Successfully Inserted";
            return $msg;
        }
    }

    public function get_all_medical_center() {
        $sql = "select * from medical_center";
        $res = mysql_query($sql);
        return $res;
    }


    public function get_dept_list() {
        $sql = "select * from department";
        $res = mysql_query($sql);
        return $res;
    }

}
