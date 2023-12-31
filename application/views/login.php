<!DOCTYPE html>
<html>

<head>
    <title>Login - Fast Rent Car</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js'; ?>"></script>
</head>
<style type="text/css">
    .login {
        background-image: url(<?php echo base_url("assets/img/login4.jpg"); ?>);
        background-size: cover;     
    }
</style>

<body class="login">
    <div class="col-md-4 col-md-offset-4" style="margin-top: 50px">
        <center>
            <h2 id="h23-color">FAST RENT CAR</h2>
            <h3 id="h23-color">LOGIN</h3>
        </center>
        <br />
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<div class='alert alert-danger'>Login gagal! Username dan password salah.</div>";
            } else if ($_GET['pesan'] == "logout") {
                echo "<div class='alert alert-danger'>Anda telah logout.</div>";
            } else if ($_GET['pesan'] == "belumlogin") {
                echo "<div class='alert alert-success'>Silahkan login dulu.</div>";
            }
        }
        ?>
        <br />
        <div class="panel panel-default">
            <div class="panel-body">
                <br />
                <br />
                <form method="post" action="<?php echo base_url() . 'welcome/login' ?>">
                    <div class="form-group">
                        <input type="text" name="username" placeholder="username" class="form-control">
                        <?php echo form_error('username'); ?>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="password" class="form-control">
                        <?php echo form_error('password'); ?>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn btn-primary">
                    </div>
                </form>
                <br />
                <br />
            </div>
        </div>
    </div>
</body>

</html>