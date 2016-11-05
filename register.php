<?php
require_once './header.php';
require_once './Login_class.php';
$return_msg = '';
if (isset($_POST['register'])) {
    $login_obj = new Login_class();
    $return_msg = $login_obj->register($_POST);
}
?>

<div class="col-md-offset-4 col-sm-offset-4 col-md-4 col-sm-4">
    <div class= "appointment">
        <div class="header text-center">
            <h2>Registered Here</h2>
            <span class="or">OR</span>
        </div>

        <!-- form of appointment -->
        <div class="row">
            <?php echo $return_msg ? $return_msg : '' ?>
            <form method="post" action="register.php">
                <div class= "form">
                    <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <input class="form-control" name="user_name" type="text" placeholder="Name" required>
                    </div>
                    <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <select name="gender" class="form-control">
                            <option value="">Select Gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>

                    <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <input class="form-control" name="age" type="text" placeholder="Age" required>
                    </div>
                    <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <input class="form-control" name="email" type="text" placeholder="Email Address" required>
                    </div>
                    <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <input class="form-control" name="password" type="password" placeholder="Password" required>
                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">                    
                    <input class="btn btn-primary send" type="submit" name="register" value="Register">
                </div>
            </form>
        </div>
        <!-- end of form -->
    </div><!-- end of appointment-->
</div>

<?php require_once './footer.php'; ?>
