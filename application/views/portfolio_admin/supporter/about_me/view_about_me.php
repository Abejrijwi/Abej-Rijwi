<div class="page-container">
    <div class="page-header clearfix">
        <div class="pull-left">
            <ol class="breadcrumb mb-0">
                <li><a href="<?= site_url('Dashboard') ?>">Dashboard</a></li>
                <li><a href="<?= site_url('About_Me/manage_abouts_me') ?>">Manage About Me</a></li>
                <li class="active">View About Me</li>
            </ol>
        </div>
    </div>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="widget-heading" style="border-bottom: none; margin-bottom: 30px; border: 1px solid #e6e6e6; border-radius: 25px;">
                    <h3 class="widget-title">About Me View Form</h3>
                </div>

                <div class="widget">
                    <div class="widget-body">

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="form-control-label">First Name</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $about_me_view->first_name ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-control-label">Last Name</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $about_me_view->last_name ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="form-control-label">Father's Name</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $about_me_view->father_name ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-control-label">Mobile Number</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $about_me_view->mobile ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="form-control-label">Email Id</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $about_me_view->email ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-control-label">Date Of Birth</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $about_me_view->dob ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="form-control-label">Address</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $about_me_view->address ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-control-label">City</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $about_me_view->city ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="form-control-label">State</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $about_me_view->state ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-control-label">Zip Code</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $about_me_view->zipcode ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="form-control-label">Designation</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $about_me_view->employee_designation ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-control-label">Gender</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $about_me_view->gender ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="form-control-label">Image</label>
                                <img class="img-responsive" src="<?php echo base_url('./public/admin/about_me_picture/') . '/' . $about_me_view->image ?>" style="height: 100px; width: 700px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-control-label">Signature</label>
                                <img class="img-responsive" src="<?php echo base_url('./public/admin/about_me_picture/') . '/' . $about_me_view->signature ?>" style="height: 100px; width: 700px;">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea cols="6" rows="5" disabled="" class="form-control boxed"><?php echo $about_me_view->description_about_your_self ?></textarea>
                            </div>
                        </div>
                        
                        <div class="clearfix"></div>
                        <br>
                        <div class="form-group" style="text-align: end;">
                            <a href="<?php echo site_url('About_Me/manage_abouts_me') ?>" class="btn btn-raised btn-default">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>