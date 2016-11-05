<?php

require_once 'doctor_header.php';
require_once 'doctor_class.php';
$doc_obj = new Doctor_class();
$all_data = $doc_obj->get_profile_data();

?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><?php echo $_SESSION['doc_name']; ?>'s Profile</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <a href="update_profile.php" class="add-doc-btn"><i class="fa fa-edit"></i> Update Profile</a>
                <br>
            </div>
        </div>
        <br>
        <br>
        <br>
        <table class="table table-bordered">
            <tr>
                <td>Doctor Image</td>
                <td>
                    <div class="img_container">
                        <img style="width: 178px;height: 198px;"  class="pic"
                            src="images/<?php echo $all_data['pro_pic'];?>"
                            alt="">
                    </div>
                </td>
            </tr>
            <tr>
                <td>Doctor Name</td>
                <td><?php echo $all_data['doc_name']; ?></td>
            </tr>
            <tr>
                <td>Doctor Degree</td>
                <td><?php echo $all_data['degree']; ?></td>
            </tr>
            <tr>
                <td>Chamber Name</td>
                <td><?php echo $all_data['medical_center_name']; ?></td>
            </tr>
            <tr>
                <td>Department</td>
                <td><?php echo $all_data['department']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $all_data['email']; ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>*********</td>
            </tr>
        </table>
    </section>
</section>

<?php require_once '../doctor/doctor_footer.php'; ?>

