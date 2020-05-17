<div class="page-container">
    <div class="page-header clearfix">
        <div class="pull-left">
            <ol class="breadcrumb mb-0">
                <li><a href="<?= site_url('Dashboard') ?>">Dashboard</a></li>
                <li><a href="<?= site_url('Users/manage_users') ?>">Manage Users</a></li>
                <li class="active">View User</li>
            </ol>
        </div>
    </div>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-lg-12">
               
                <div class="widget-heading" style="border-bottom: none; margin-bottom: 30px; border: 1px solid #e6e6e6; border-radius: 25px;">
                    <h3 class="widget-title">User View Form</h3>
                </div>

                <div class="widget">
                    <div class="widget-body">

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="form-control-label">First Name</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $user_view->first_name ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-control-label">Last Name</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $user_view->last_name ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="form-control-label">Email Id</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $user_view->email ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-control-label">User Name</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $user_view->username ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="form-control-label">Date Of Birth</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $user_view->dob ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-control-label">Mobile Number</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $user_view->mobile ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="form-control-label">Address</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $user_view->address ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-control-label">City</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $user_view->city ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="form-control-label">State</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $user_view->state ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-control-label">Zip Code</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $user_view->zipcode ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="form-control-label">Gender</label>
                                <input type="text" disabled="" class="form-control boxed" value="<?php echo $user_view->gender ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-control-label">Designation</label>
                                <input type="text" style="text-transform: capitalize;" disabled="" class="form-control boxed" value="<?php echo $user_view->employee_designation ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="form-control-label">Picture</label>
                                <img class="img-responsive" src="<?php echo base_url('./public/admin/user_picture/') . '/' . $user_view->image ?>" style="height: 100px; width: 700px;">
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <br>
                        <div class="form-group" style="text-align: end;">
                            <a href="<?php echo site_url('Users/manage_users') ?>" class="btn btn-raised btn-default">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>