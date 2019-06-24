<!DOCTYPE html>
<html>
<?php 
include "../config.php";
include "../db-con.php";
?>
     <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>Chuyên Viên Sale</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= BASE_TEMPLATE ?>assets/images/favicon.ico">

        <link rel="stylesheet" type="text/css" href="<?= BASE_PLUGIN ?>plugins/jquery.steps/css/jquery.steps.css" />


        <link href="<?= BASE_PLUGIN ?>plugins/switchery/switchery.min.css" rel="stylesheet">
        <link href="<?= BASE_PLUGIN ?>plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="<?= BASE_PLUGIN ?>plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="<?= BASE_PLUGIN ?>plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        
        <!-- App css -->
        <link href="<?= BASE_TEMPLATE ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= BASE_TEMPLATE ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?= BASE_TEMPLATE ?>assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="<?= BASE_TEMPLATE ?>assets/js/modernizr.min.js"></script>

        <!-- DataTables -->
        <link href="<?= BASE_PLUGIN ?>plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= BASE_PLUGIN ?>plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?= BASE_PLUGIN ?>plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Multi Item Selection examples -->
        <link href="<?= BASE_PLUGIN ?>plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />




    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!-- <a href="index.html" class="logo">
                            <span class="logo-small"><i class="mdi mdi-radar"></i></span>
                            <span class="logo-large"><i class="mdi mdi-radar"></i> Highdmin</span>
                        </a> -->
                        <!-- Image Logo -->
                        <a href="index.html" class="logo">
                            <img src="<?= BASE_TEMPLATE ?>assets/images/logo_sm.png" alt="" height="26" class="logo-small">
                            <img src="<?= BASE_TEMPLATE ?>assets/images/logo.png" alt="" height="22" class="logo-large">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-bell noti-icon"></i>
                                    <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h6>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                            <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                                            <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="<?= BASE_TEMPLATE ?>assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1 pro-user-name"><?= $_SESSION['username']?> <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Chào buổi sáng</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="../can-action/profile.php" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>Profile</span>
                                    </a>

                                    <!-- item-->
                                    <a href="../login.php" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->
<?php 
// UPDATE apartment,building_info
// SET apartment.dien = building_info.dien, 
//     apartment.nuoc = building_info.nuoc,
//     apartment.net = building_info.internet,
//     apartment.hoahong = building_info.hoahong,
//     apartment.coc = building_info.coc,
//     apartment.parking = building_info.parking,
//     apartment.thangmay = building_info.thangmay,
//     apartment.maygiat = building_info.maygiat,
//     apartment.donphong = building_info.donphong,
//     apartment.note = building_info.note

//     WHERE apartment.id = building_info.id_building

// INSERT INTO roomkit (id_apartment, id_status, id_type, maphong, saptrong, price, square)
// SELECT id_building, stt, loaiphong, maphong, saptrong, tienthue, dientich
// FROM room;

 ?>
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="../can-view/apartment.php"><i class="icon-speedometer"></i>Thông Tin Dự Án</a>
                                <ul class="submenu">
                                    <li><a href="../can-view/apartment.php">Dự Án</a></li>
                                    
                                </ul>
                            </li>

                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->
