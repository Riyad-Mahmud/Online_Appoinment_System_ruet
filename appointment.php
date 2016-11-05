<?php
session_start();
if(!$_SESSION['is_user_login']){
    header('location:login.php');
}
?>
<?php

require_once './admin/Admin_class.php';
$user_obj=new Admin_class();
$dept_list=$user_obj->get_dept_list();
require_once './header.php';

?>




    <section id="main-content" style="padding: 70px 0 50px;">
        <section class="wrapper site-min-height">
            <div class="row mt container">
                <div class="col-lg-12 col-md-12">
                    <div class="form-panel">

                        <form class="form-horizontal style-form" method="post" action="" >


                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Select Department</label>
                                <div class="col-sm-10">

                                    <select name="department" class="form-control" id="dept" required>
                                        <option
                                            value="" >Select Department</option>
                                        <?php while($value=mysql_fetch_assoc($dept_list)){?>
                                            <option value="<?php echo $value['id'];?>"><?php echo $value['department'];?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Select Doctor</label>
                                <div class="col-sm-10">

                                    <select name="doc_name" class="form-control" id="doc_name" required>


                                    </select>
                                </div>
                            </div>

                            <input type="submit" name="submit" value="submit">
                        </form>
                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->

        </section>
    </section>

<?php require_once './footer.php'; ?>