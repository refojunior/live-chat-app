<?php 
$title = "Login";

include_once "layouts/header.php";

if(!isset($_SESSION['username'])) {
    header("location:home.php");
}

?>

<div class="login-box">
    <div class="login-logo">
        <a><b>Login</b></a>
    </div>
  <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body box-custom">
            <p class="login-box-msg">Sign in to start chats</p>
            <?= msgHandling() ?>
            <form action="proses/login.php" method="post">
                <div class="form-group has-feedback">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="row">
                    <div class="col-8">
            
                        <label>
                            <a href="register.php"> Register </a>
                        </label>
                       
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </form>
    
        </div>
        <!-- /.login-card-body -->
    </div>
    <p align="center" class="footer-login">Copyright 2019 - Refo Junior</p>
</div>

<?php include_once "layouts/footer.php" ?>