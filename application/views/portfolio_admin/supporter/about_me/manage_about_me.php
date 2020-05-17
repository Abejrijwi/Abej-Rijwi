<div class="page-container">
    <div class="page-header clearfix">
        <div class="pull-left">
            <ol class="breadcrumb mb-0">
                <li><a href="<?= site_url('Dashboard') ?>">Dashboard</a></li>
                <li><a href="<?= site_url('About_Me/add_abouts_me') ?>">Add About Me</a></li>
                <li class="active">Manage About Me</li>
            </ol>
        </div>

    </div>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="widget-heading" style="border-bottom: none; margin-bottom: 30px; border: 1px solid #e6e6e6; border-radius: 25px;">
                    <h3 class="widget-title">About Me Data List</h3>
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

                <?php
                if (empty($manageaboutmelist)) {
                    ?>
                    <div class="box-body">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-info"></i> Alert!</h4>
                            Currently There is no records.
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="widget">
                        <div class="widget-body">
                            <table id="example-2" cellspacing="0" width="100%" class="table table-striped table-bordered dt-responsive nowrap">
                                <thead>
                                    <tr>                                      
                                        <th>#</th>                                        
                                        <th>Full Name</th>
                                        <th>Email Id</th>
                                        <th>Mobile</th>
                                        <th>Image</th>
                                        <th>Designation</th>
                                        <th>Gender</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>                                       
                                        <th>#</th>                                        
                                        <th>Full Name</th>
                                        <th>Email Id</th>
                                        <th>Mobile</th>
                                        <th>Image</th>
                                        <th>Designation</th>
                                        <th>Gender</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $i = 1;

                                    foreach ($manageaboutmelist as $value) {
                                        ?>
                                        <?php
                                        $fullName = $value->first_name . " " . $value->last_name
                                        ?>
                                        <tr>
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo $fullName ?></td>
                                            <td><?php echo $value->email ?></td>
                                            <td><?php echo $value->mobile ?></td>
                                            <td><img class="img-responsive" src="<?php echo base_url('./public/admin/about_me_picture/') . '/' . $value->image ?>" style="height: 70px; border-radius: 50%;"></td>
                                            <td style="text-transform: capitalize;"><?php echo $value->employee_designation   ?></td>
                                            <td><?php echo $value->gender ?></td>
                                            <td class="text-center">
                                                <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                                                    <a href="<?php echo site_url('About_Me/about_me_view') . "/" . $value->id ?>" class="btn btn-raised btn-warning"><i class="ti-eye"></i></a>
                                                    <a href="<?php echo site_url('About_Me/about_me_edit') . "/" . $value->id ?>" class="btn btn-raised btn-primary"><i class="ti-pencil"></i></a>
                                                    <a href="<?php echo site_url('About_Me/about_me_delete') . "/" . $value->id ?>" class="btn btn-raised btn-danger"><i class="ti-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- /.modal starts -->
                                    <div class="modal fade" id="confirm-modal<?php echo $value->id; ?>">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header"> 
                                                    <div class="modal-body text-center">
                                                        <div class="text-danger">
                                                            <i class="ti-alert" style="font-size: 40px;"></i> 
                                                        </div>

                                                        <h2>Are you sure?</h2>
                                                        <p class="lead text-muted" style="display: block;">Your will not be able to recover this records!</p>
                                                    </div>
                                                    <div class="modal-footer"> 
                                                        <div class="text-center">                                                     
                                                            <a href="<?php echo site_url('welcome/delete_user') . "/" . $value->id ?>" class="confirm btn btn-lg btn-raised btn-danger">Yes, delete it!</a> 
                                                            <button type="button" class="cancel btn btn-lg btn-raised btn-default" data-dismiss="modal">Cancel</button> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                    </div>
                                    <!-- /.modal ends -->
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>


