<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?> </title>
        <!-- PACE-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/PACE/themes/blue/pace-theme-flash.css">
        <script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/PACE/pace.min.js"></script>
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/bootstrap/dist/css/bootstrap.min.css">
        <!-- Fonts-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/themify-icons/themify-icons.css">
        <!-- Malihu Scrollbar-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css">
        <!-- Animo.js-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/animo.js/animate-animo.min.css">
        <!-- Bootstrap Progressbar-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
        <!-- Toastr-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/toastr/toastr.min.css">
        <!--Favicons-->
        <link rel="shortcut icon" href="<?php echo base_url('public/img/favicon.jpg'); ?>" type="image/x-icon">
        <!-- DataTables-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-buttons-bs/css/buttons.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-colreorder-bs/css/colReorder.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-keytable-bs/css/keyTable.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-select-bs/css/select.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-responsive-bs/css/responsive.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-fixedcolumns-bs/css/fixedColumns.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css">
        <!-- Primary Style-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>build/css/second-layout.css">

        <!-- Bootstrap Date-Picker Plugin -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">

    </head>

    <body data-sidebar-color="sidebar-light" class="sidebar-light">
        <!-- Header start-->
        <header>
            <a href="<?= site_url('Dashboard') ?>" class="brand pull-left"><h2 style="letter-spacing: 0.05em;">DASHBOARD</h2></a>
            <a href="javascript:;" role="button" class="hamburger-menu pull-left visible-xs"><span></span></a>
            <ul class="notification-bar list-inline pull-right">
                <li class="visible-xs"><a href="javascript:;" role="button" class="header-icon search-bar-toggle"><i class="ti-search"></i></a></li>
                <li class="visible-lg"><a href="javascript:;" role="button" class="header-icon fullscreen-toggle"><i class="ti-fullscreen"></i></a></li>
                <li class="dropdown"><a id="dropdownMenu1" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle bubble header-icon"><i class="ti-world"></i><span class="badge bg-danger"></span></a>
                    <div aria-labelledby="dropdownMenu1" class="dropdown-menu dropdown-menu-right dm-medium fs-12 animated fadeInDown">
                        <h5 class="dropdown-header">You have 6 notifications</h5>
                        <ul data-mcs-theme="minimal-dark" class="media-list mCustomScrollbar">
                            <li class="media"><a href="javascript:;">
                                    <div class="media-left avatar"><img src="<?php echo base_url("public/admin/assets/images/users/17.jpg"); ?>" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">William Carlson</h6>
                                        <p class="text-muted mb-0">Commented on your post</p>
                                    </div>
                                    <div class="media-right text-nowrap">
                                        <time datetime="2015-12-10T20:27:48+07:00" class="fs-11">5 mins</time>
                                    </div></a></li>
                            <li class="media"><a href="javascript:;">
                                    <div class="media-left avatar"><img src="<?php echo base_url("public/admin/assets/images/users/19.jpg"); ?>" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Barbara Ortega</h6>
                                        <p class="text-muted mb-0">Sent you a new email</p>
                                    </div>
                                    <div class="media-right text-nowrap">
                                        <time datetime="2015-12-10T20:42:40+07:00" class="fs-11">8 mins</time>
                                    </div></a></li>
                            <li class="media"><a href="javascript:;">
                                    <div class="media-left avatar"><img src="<?php echo base_url("public/admin/assets/images/users/02.jpg"); ?>" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Mark Barnett</h6>
                                        <p class="text-muted mb-0">Sent you a new message</p>
                                    </div>
                                    <div class="media-right text-nowrap">
                                        <time datetime="2015-12-10T20:50:48+07:00" class="fs-11">9 mins</time>
                                    </div></a></li>
                            <li class="media"><a href="javascript:;">
                                    <div class="media-left avatar"><img src="<?php echo base_url("public/admin/assets/images/users/11.jpg"); ?>" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Alexander Gilbert</h6>
                                        <p class="text-muted mb-0">Sent you a new email</p>
                                    </div>
                                    <div class="media-right text-nowrap">
                                        <time datetime="2015-12-10T20:42:40+07:00" class="fs-11">15 mins</time>
                                    </div></a></li>
                            <li class="media"><a href="javascript:;">
                                    <div class="media-left avatar"><img src="<?php echo base_url("public/admin/assets/images/users/12.jpg"); ?>" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Amanda Collins</h6>
                                        <p class="text-muted mb-0">You have 8 unread messages</p>
                                    </div>
                                    <div class="media-right text-nowrap">
                                        <time datetime="2015-12-10T20:35:35+07:00" class="fs-11">22 mins</time>
                                    </div></a></li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left avatar"><img src="<?php echo base_url("public/admin/assets/images/users/13.jpg"); ?>" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Christian Lane</h6>
                                        <p class="text-muted mb-0">Commented on your post</p>
                                    </div>
                                    <div class="media-right text-nowrap">
                                        <time datetime="2015-12-10T20:27:48+07:00" class="fs-11">30 mins</time>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown-footer text-center p-10"><a href="javascript:;" class="fw-500 text-muted">See all notifications</a></div>
                    </div>
                </li>
                <li><a href="<?php echo site_url('login/logout'); ?>" role="button" class="header-icon"><i class="ti-power-off"></i></a></li>
            </ul>
        </header>
        <!-- Header end-->
        <div class="main-container">
            <!-- Main Sidebar start-->
            <aside data-mcs-theme="minimal-dark" class="main-sidebar mCustomScrollbar">
                <div class="user">
                    <div id="esp-user-profile" data-percent="65" style="height: 104px; width: 104px; line-height: 80px; padding: 12px;" class="easy-pie-chart"><img src="<?php echo base_url('./public/admin/user_picture/') . '/' . $_SESSION['logged_in']['picture'] ?>" alt="" class="avatar img-circle"><span class="status bg-success"></span></div>
                    <h4 class="fs-14 text-muted mt-15 mb-5 fw-300"></h4>
                    <p class="fs-13 mb-0 text-muted" style="text-transform: capitalize;"><?php echo $query->employee_designation ?></p>
                </div>
                <ul class="list-unstyled navigation mb-0">
                    <li class="sidebar-header pt-0">Main</li>
                    <li><a href="<?= site_url('Dashboard') ?>" class="active bubble"><i class="ti-home"></i> Dashboard<span class="badge bg-danger"></span></a></li>
                    <li><a href="<?= site_url('Website/home') ?>"><i class="ti-world"></i> Website<span class="badge bg-danger"></span></a></li>
                    <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#users" aria-expanded="false" aria-controls="collapse2" class="collapsed"><i class="ti-user"></i>Users</a>
                        <ul id="users" class="list-unstyled collapse">
                            <li><a href="<?php echo site_url('Users/manage_users'); ?>">Manage</a></li>
                            <li><a href="<?php echo site_url('Users/add_user'); ?>">Add</a></li>
                        </ul>
                    </li>
                    <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#accounts" aria-expanded="false" aria-controls="collapse2" class="collapsed"><i class="ti-basketball"></i>Accounts</a>
                        <ul id="accounts" class="list-unstyled collapse">
                            <li><a href="<?php echo site_url('Account/manage_account'); ?>">Manage</a></li>
                            <li><a href="<?php echo site_url('Account/forget_password'); ?>">Forget</a></li>
                        </ul>
                    </li>
                    <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#about_mes" aria-expanded="false" aria-controls="collapse2" class="collapsed"><i class="ti-info-alt"></i>About Me</a>
                        <ul id="about_mes" class="list-unstyled collapse">
                            <li><a href="<?php echo site_url('About_Me/manage_abouts_me'); ?>">Manage</a></li>
                            <li><a href="<?php echo site_url('About_Me/add_abouts_me'); ?>">Add</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url("Dashboard/manage_contacts"); ?>" class="bubble"><i class="ti-mobile"></i>Contacts<span class="badge bg-danger"></span></a></li>
                    <li><a href="<?php echo site_url("Dashboard/settings"); ?>" class="bubble"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
                </ul>
            </aside>
