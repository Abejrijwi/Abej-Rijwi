<div class="page-container">
    <div class="page-header clearfix">
        <div class="pull-left">
            <ol class="breadcrumb mb-0">
                <li><a href="<?= site_url('Dashboard') ?>">Dashboard</a></li>
                <li><a href="<?= site_url('Account/manage_account') ?>">Manage Account</a></li>
                <li class="active">Forget Password</li>
            </ol>
        </div>

    </div>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="widget-heading" style="border-bottom: none; margin-bottom: 30px; border: 1px solid #e6e6e6; border-radius: 25px;">
                    <h3 class="widget-title">Forget Password Form</h3>
                </div>

                <?php
                if ($this->session->flashdata('message')) {
                    ?>
                    <div class="alert alert-success successmsg" style="text-align: center; border-radius: 25px; font-weight: bold;">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <?php echo $this->session->flashdata('message'); ?>
                    </div>
                <?php } ?>

                <?php
                if ($this->session->flashdata('err_message')) {
                    ?>
                    <div class="alert alert-danger successmsg" style="text-align: center; border-radius: 25px; font-weight: bold;">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <?php echo $this->session->flashdata('err_message'); ?>
                    </div>
                <?php } ?>

                <div class="widget">
                    <div class="widget-body">
                        <form id="adduser" action="<?php echo site_url('Account/forget_password_process'); ?>" method="post" enctype="multipart/form-data">

                            <div class="form-group row" style="text-align: center;">
                                <div class="col-md-12">
                                    <!--<label class="form-control-label" style="text-align: center;">Email Id</label>-->
                                    <input type="text" name="email" id="email" class="form-control boxed" placeholder="Enter Email-Id" value="<?php echo set_value('email'); ?>">
                                    <div style="color: coral;"><?php echo form_error('email'); ?></div>
                                </div>
                            </div>
                             <div class="form-group row" style="text-align: center;">
                                <div class="col-md-12">
                                    <!--<label class="form-control-label" style="text-align: center;">Message</label>-->
                                    <textarea name="message" id="message" class="form-control boxed" placeholder="Enter Your Message" value="<?php echo set_value('message'); ?>" cols="6" rows="5"></textarea>
                                    <div style="color: coral;"><?php echo form_error('message'); ?></div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <br>
                            <div class="form-group row" style="text-align: center;">
                                <input type="submit" name="submit" id="submit" class="btn btn-raised btn-primary d-flex justify-content-center" value="Submit"> 
                                <a href="<?php echo site_url('Account/manage_account') ?>" class="btn btn-raised btn-default">Back</a>
                            </div>
                            <div class="clearfix"></div>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

