<div class="page-container">
    <div class="page-header clearfix">
        <div class="pull-left">
            <ol class="breadcrumb mb-0">
                <li><a href="<?= site_url('Dashboard') ?>">Dashboard</a></li>
                <li><a href="<?= site_url('About_Me/manage_abouts_me') ?>">Manage About Me</a></li>
                <li class="active">Edit About Me</li>
            </ol>
        </div>
    </div>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="widget-heading" style="border-bottom: none; margin-bottom: 30px; border: 1px solid #e6e6e6; border-radius: 25px;">
                    <h3 class="widget-title">About Me Edit Form</h3>
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
                        <form id="adduser" action="<?php echo site_url('About_Me/edit_about_me_process'); ?>" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="<?php echo $about_me_edit->id; ?>">

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-control-label">First Name</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control boxed" value="<?php echo $about_me_edit->first_name ?>">
                                    <div style="color: coral;"><?php echo form_error('first_name'); ?></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Last Name</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control boxed" value="<?php echo $about_me_edit->last_name ?>">
                                    <div style="color: coral;"><?php echo form_error('last_name'); ?></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-control-label">Father's Name</label>
                                    <input type="text" name="father_name" id="father_name" class="form-control boxed" placeholder="Enter Father's Name" value="<?php echo $about_me_edit->father_name ?>">
                                    <div style="color: coral;"><?php echo form_error('father_name'); ?></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Mobile Number</label>
                                    <input type="text" name="mobile" id="mobile" class="form-control boxed" placeholder="Enter Mobile Number" value="<?php echo $about_me_edit->mobile ?>">
                                    <div style="color: coral;"> <?php echo form_error('mobile'); ?></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-control-label">Email Id</label>
                                    <input type="text" name="email" id="email" class="form-control boxed" placeholder="Enter Email-Id" value="<?php echo $about_me_edit->email ?>">
                                    <div style="color: coral;"><?php echo form_error('email'); ?></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Date Of Birth</label>
                                    <input type="text" name="dob" id="dob" class="form-control boxed input-group date" placeholder="Enter Date Of Birth" value="<?php echo $about_me_edit->dob ?>">
                                    <div style="color: coral;"><?php echo form_error('dob'); ?></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-control-label">Address</label>
                                    <input type="text" name="address" id="address" class="form-control boxed" placeholder="Enter Your Address" value="<?php echo $about_me_edit->address ?>">
                                    <div style="color: coral;"><?php echo form_error('address'); ?></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">City</label>
                                    <input type="text" name="city" id="city" class="form-control boxed" placeholder="Enter Your City" value="<?php echo $about_me_edit->city ?>">
                                    <div style="color: coral;"><?php echo form_error('city'); ?></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-control-label">State</label>
                                    <input type="text" name="state" id="state" class="form-control boxed" placeholder="Enter Your State" value="<?php echo $about_me_edit->state ?>">
                                    <div style="color: coral;"> <?php echo form_error('state'); ?></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Zip Code</label>
                                    <input type="text" name="zipcode" id="zipcode" class="form-control boxed" placeholder="Enter Your Zip Code" value="<?php echo $about_me_edit->zipcode ?>">
                                    <div style="color: coral;"> <?php echo form_error('zipcode'); ?></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-control-label">Designation</label>
                                    <select name="employee_designation_id" id="employee_designation_id" class="form-control" style="text-transform: capitalize;">
                                        <option selected value="" disabled="">Select Designation</option>
                                        <?php foreach ($designation as $val) {
                                            ?>
                                            <option 
                                            <?php
                                            if ($val->id == $about_me_edit->employee_designation_id) {
                                                echo 'selected';
                                            }
                                            ?> value="<?php echo $val->id; ?>" style="text-transform: capitalize;"><?php echo $val->employee_designation; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                    <div style="color: coral;"><?php echo form_error('employee_designation_id'); ?></div>
                                </div>
                                <label class="form-control-label" style="margin-left: 13px;">Gender</label>
                                <div class="col-md-6 form-control boxed" style="display: inline-flex; width: 48%; margin-left: 13px">
                                    <input class="radio" name="gender" id="gender" type="radio" value="Male" <?php if ($about_me_edit->gender == "Male") echo "checked"; ?>>
                                    <span style=" padding-right: 20px;">&nbsp;Male</span>
                                    <input class="radio" name="gender" id="gender" type="radio" value="Female" <?php if ($about_me_edit->gender == "Female") echo "checked"; ?>>
                                    <span style=" padding-right: 20px;">&nbsp;Female</span>
                                    <input class="radio" name="gender" id="gender" type="radio" value="Other" <?php if ($about_me_edit->gender == "Other") echo "checked"; ?>>
                                    <span>&nbsp;Other</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-control-label">Image</label>
                                    <input type="file" name="image" id="image" class="form-control boxed">
                                    <img class="img-responsive" src="<?php echo base_url('./public/admin/about_me_picture') . '/' . $about_me_edit->image ?>" style="height: 100px; width: 700px; border-radius: 4px;">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Signature</label>
                                    <input type="file" name="signature" id="signature" class="form-control boxed">
                                    <img class="img-responsive" src="<?php echo base_url('./public/admin/about_me_picture') . '/' . $about_me_edit->signature ?>" style="height: 100px; width: 700px; border-radius: 4px;">
                                </div>
                            </div>

                            <br>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea name="description_about_your_self" id="description_about_your_self" class="form-control boxed" placeholder="Description About Your Self" value="<?php echo $about_me_edit->description_about_your_self ?>" cols="6" rows="5"><?php echo $about_me_edit->description_about_your_self ?></textarea>
                                    <div style="color: coral;"><?php echo form_error('description_about_your_self'); ?></div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <br><br>
                            <div class="form-group" style="text-align: end;">
                                <input type="submit" name="submit" id="submit" class="btn btn-raised btn-primary d-flex justify-content-center" value="Submit"> 
                                <a href="<?php echo site_url('About_Me/manage_abouts_me') ?>" class="btn btn-raised btn-default">Back</a>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>