<div class="page-container">
    <div class="page-header clearfix">
        <div class="pull-left">
            <ol class="breadcrumb mb-0">
                <li><a href="<?= site_url('Dashboard') ?>">Dashboard</a></li>
                <li><a href="<?= site_url('Users/manage_users') ?>">Manage Users</a></li>
                <li class="active">Add Users</li>
            </ol>
        </div>

    </div>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="widget-heading" style="border-bottom: none; margin-bottom: 30px; border: 1px solid #e6e6e6; border-radius: 25px;">
                    <h3 class="widget-title">User Add Form</h3>
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
                        <form id="adduser" action="<?php echo site_url('Users/add_user_process'); ?>" method="post" enctype="multipart/form-data">

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-control-label">First Name</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control boxed" placeholder="Enter First Name" value="<?php echo set_value('first_name'); ?>">
                                    <div style="color: coral;"><?php echo form_error('first_name'); ?></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Last Name</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control boxed" placeholder="Enter Last Name" value="<?php echo set_value('last_name'); ?>">
                                    <div style="color: coral;"><?php echo form_error('last_name'); ?></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-control-label">Email Id</label>
                                    <input type="text" name="email" id="email" class="form-control boxed" placeholder="Enter Email-Id" value="<?php echo set_value('email'); ?>">
                                    <div style="color: coral;"><?php echo form_error('email'); ?></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">User Name</label>
                                    <input type="text" name="username" id="username" class="form-control boxed" placeholder="Enter User Name"value="<?php echo set_value('username'); ?>">
                                    <div style="color: coral;"> <?php echo form_error('username'); ?></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-control-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control boxed" placeholder="Enter Password"value="<?php echo set_value('password'); ?>">
                                    <div style="color: coral;"> <?php echo form_error('password'); ?></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Conform Password</label>
                                    <input type="password" name="confirm_password" id="confirm_password" class="form-control boxed" placeholder="Enter Conform Password"value="<?php echo set_value('confirm_password'); ?>">
                                    <div style="color: coral;"> <?php echo form_error('confirm_password'); ?></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-control-label">Date Of Birth</label>
                                    <input type="text" name="dob" id="dob" class="form-control boxed input-group date" placeholder="Enter Date Of Birth"value="<?php echo set_value('dob'); ?>">
                                    <div style="color: coral;"><?php echo form_error('dob'); ?></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Mobile Number</label>
                                    <input type="text" name="mobile" id="mobile" class="form-control boxed" placeholder="Enter Mobile Number"value="<?php echo set_value('mobile'); ?>">
                                    <div style="color: coral;"> <?php echo form_error('mobile'); ?></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-control-label">Picture</label>
                                    <input type="file" name="picture" id="picture" class="form-control boxed">
                                    <div style="color: coral;"><?php echo form_error('picture'); ?></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Designation</label>
                                    <select name="employee_designation_id" id="employee_designation_id" class="form-control" style="text-transform: capitalize;">
                                        <option selected value="" disabled="">Select Designation</option>
                                        <?php foreach ($designation as $val) {
                                            ?>
                                            <option <?php if (set_value('employee_designation_id') == $val->id) echo 'selected=""'; ?> value="<?php echo $val->id; ?>" style="text-transform: capitalize;"><?php echo $val->employee_designation; ?></option>
                                        <?php } ?>
                                    </select>
                                    <div style="color: coral;"><?php echo form_error('employee_designation_id'); ?></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-control-label">Address</label>
                                    <input type="text" name="address" id="address" class="form-control boxed" placeholder="Enter Your Address"value="<?php echo set_value('address'); ?>">
                                    <div style="color: coral;"><?php echo form_error('address'); ?></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">City</label>
                                    <input type="text" name="city" id="city" class="form-control boxed" placeholder="Enter Your City"value="<?php echo set_value('city'); ?>">
                                    <div style="color: coral;"><?php echo form_error('city'); ?></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-control-label">State</label>
                                    <input type="text" name="state" id="state" class="form-control boxed" placeholder="Enter Your State"value="<?php echo set_value('state'); ?>">
                                    <div style="color: coral;"> <?php echo form_error('state'); ?></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Zip Code</label>
                                    <input type="text" name="zipcode" id="zipcode" class="form-control boxed" placeholder="Enter Your Zip Code"value="<?php echo set_value('zipcode'); ?>">
                                    <div style="color: coral;"><?php echo form_error('zipcode'); ?></div>
                                </div>
                            </div>

                            <div class="form-group row col-md-6">
                                <label class="form-control-label" >Gender</label>
                                <div class="form-control boxed" style="display: inline-flex;">
                                    <input class="radio" name="gender" id="gender" type="radio" value="Male" checked="" <?php echo set_value('gender') == "Male" ? 'checked=""' : ""; ?>>
                                    <span style=" padding-right: 30px;">&nbsp;Male</span>
                                    <input class="radio" name="gender" id="gender" type="radio" value="Female" <?php echo set_value('gender') == "Female" ? 'checked=""' : ""; ?>>
                                    <span style=" padding-right: 30px;">&nbsp;Female</span>
                                    <input class="radio" name="gender" id="gender" type="radio" value="Other" <?php echo set_value('gender') == "Other" ? 'checked=""' : ""; ?>>
                                    <span>&nbsp;Other</span>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <br><br>
                            <div class="form-group row" style="text-align: end;">
                                <input type="submit" name="submit" id="submit" class="btn btn-raised btn-primary d-flex justify-content-center" value="Submit"> 
                                <a href="<?php echo site_url('Users/manage_users') ?>" class="btn btn-raised btn-default">Back</a>
                            </div>
                            <div class="clearfix"></div>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

