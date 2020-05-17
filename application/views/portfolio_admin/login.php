<!DOCTYPE html>
<html lang="en" style="height: 100%">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title ?></title>
        <!-- PACE-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/login/"); ?>plugins/PACE/themes/blue/pace-theme-flash.css">
        <script type="text/javascript" src="<?php echo base_url("public/login/"); ?>plugins/PACE/pace.min.js"></script>
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/login/"); ?>plugins/bootstrap/dist/css/bootstrap.min.css">
        <!-- Fonts-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/login/"); ?>plugins/themify-icons/themify-icons.css">
        <!--Favicons-->
        <link rel="shortcut icon" href="<?php echo base_url('public/img/favicon.jpg'); ?>" type="image/x-icon">
        <!-- Primary Style-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/login/"); ?>build/css/first-layout.css">
    </head>

    <body style="background-image: url(<?php echo base_url("public/login/"); ?>build/images/backgrounds/15.jpg)" class="body-bg-full">
        <div class="container page-container">
            <div class="page-content">
                <?php
                if ($this->session->flashdata('msg')) {
                    ?>
                    <div class="alert alert-primary" style="color:#337ab7;border:3px solid #337ab7;border-radius:10px;"><?php echo $this->session->flashdata('msg'); ?></div> 
                    <div class="clearfix"></div>
                <?php } ?>

                <div class="logo"><i class="ti-underline"></i></div>
                <form method="post" action="<?php echo site_url('login/auth_user'); ?>" class="form-horizontal">

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="text" name="email" placeholder="User Name / Email" class="form-control">
                            <span style="color:red;"><?php echo form_error('email'); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                            <span style="color:red;"><?php echo form_error('password'); ?></span>
                        </div>
                    </div>
                    <br><br>
                    <input type="submit" name="submit" value="Go to Dashboard" class="btn-lg btn btn-primary btn-rounded btn-block">
                </form>

            </div>
        </div>

        <!-- jQuery-->
        <script type="text/javascript" src="<?php echo base_url("public/login/"); ?>plugins/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script type="text/javascript" src="<?php echo base_url("public/login/"); ?>plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Custom JS-->
        <script type="text/javascript" src="<?php echo base_url("public/login/"); ?>build/js/first-layout/extra-demo.js"></script>
    </body>
</html>