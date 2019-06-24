<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php 
include "config.php";
include "db-con.php";

if(isset($_POST['login']))
{
    $u = $_POST['username'];
    $p = $_POST['password'];
    $q = "SELECT * FROM user WHERE (username = '$u' AND password = '$p') OR (account = '$u' AND password = '$p') ";

    $result = mysqli_query($link, $q);
    if(mysqli_num_rows( $result ))
    {
        $r = mysqli_fetch_array($result);
        $_SESSION['account'] = $r['account'];
        $_SESSION['username'] = $r['username'];
        $_SESSION['role'] = $r['status'];
        $_SESSION['fullname'] = $r['fullname'];
        $_SESSION['ava_user'] = $r['ava'];

        $_SESSION['path'] = $ROLE_SETUP[ $r['status'] ];

        setcookie("username", $r['username'], time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie("role", $r['status'], time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie("fullname", $r['fullname'], time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie("path", $ROLE_SETUP[ $r['status'] ], time() + (86400 * 30), "/"); // 86400 = 1 day

        ?>
        <script type="text/javascript">
            window.location = '<?= $_SESSION["path"] ?>';
        </script><?php
    }

}


 ?>
    <head>
        <meta charset="utf-8" />
        <title>giohang - Đăng Nhập</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= BASE_TEMPLATE ?>assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?= BASE_TEMPLATE ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= BASE_TEMPLATE ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <!-- <link href="<?= BASE_TEMPLATE ?>assets/css/metismenu.min.css" rel="stylesheet" type="text/css" /> -->
        <link href="<?= BASE_TEMPLATE ?>assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="<?= BASE_TEMPLATE ?>assets/js/modernizr.min.js"></script>

    </head>


    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('<?= BASE_TEMPLATE ?>assets/images/bg-1.jpg');background-size: cover;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.html" class="text-success">
                                    <span><img src="<?= BASE_TEMPLATE ?>assets/images/logo.png" alt="" height="26"></span>
                                </a>
                            </h2>

                            <form method="post" action="#">

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">Username</label>
                                        <input class="form-control" type="text" name="username">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <a href="#" class="text-muted pull-right"><small>Forgot your password?</small></a>
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" name="password">
                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" name="login">Log In</button>
                                    </div>
                                </div>

                            </form>
                        
                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">2018 © Highdmin. - Coderthemes.com</p>
            </div>

        </div>



        <!-- jQuery  -->
        <script src="<?= BASE_TEMPLATE ?>assets/js/jquery.min.js"></script>
        <script src="<?= BASE_TEMPLATE ?>assets/js/popper.min.js"></script>
        <script src="<?= BASE_TEMPLATE ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= BASE_TEMPLATE ?>assets/js/waves.js"></script>
        <script src="<?= BASE_TEMPLATE ?>assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="<?= BASE_TEMPLATE ?>assets/js/jquery.core.js"></script>
        <script src="<?= BASE_TEMPLATE ?>assets/js/jquery.app.js"></script>

    </body>
</html>