<?php
header('Content-type: text/html; charset=utf-8');
session_start();
include '../'.$_SESSION['path'].'/header.php';
 ?>
<!-- ============================================================== -->
<div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">hello</a></li>
                                    <li class="breadcrumb-item"><a href="#">hi</a></li>
                                    <li class="breadcrumb-item active">nihao</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Sinvahome</h4>
                        </div>
                    </div>
                    
                    <?php $qqq = "SELECT COUNT(id) AS x FROM apartment";
                           $result = mysqli_query($link, $qqq);
                           $x = mysqli_fetch_array($result);
                     ?>
                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-layers float-right text-muted"></i>
                            <h6 class="text-dark text-uppercase mt-0">Tổng Dự Án</h6>
                            <h2 data-plugin="counterup"><?= $x['x'] ?></h2>
                        </div>
                    </div>

                    <?php $qqq = "SELECT COUNT(id) AS x FROM roomkit";
                           $result = mysqli_query($link, $qqq);
                           $x = mysqli_fetch_array($result);
                     ?>
                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-layers float-right text-muted"></i>
                            <h6 class="text-dark text-uppercase mt-0">Tổng Phòng</h6>
                            <h2 data-plugin="counterup"><?= $x['x'] ?></h2>
                        </div>
                    </div>

                    <?php $qqq = "SELECT COUNT(id) AS x FROM roomkit WHERE id_status = 'trống' ";
                           $result = mysqli_query($link, $qqq);
                           $x = mysqli_fetch_array($result);
                     ?>
                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-layers float-right text-muted"></i>
                            <h6 class="text-dark text-uppercase mt-0">Tổng Phòng Trống</h6>
                            <h2 data-plugin="counterup"><?= $x['x'] ?></h2>
                        </div>
                    </div>

                    <?php $qqq = "SELECT COUNT(id) AS x FROM roomkit WHERE saptrong <> '' ";
                           $result = mysqli_query($link, $qqq);
                           $x = mysqli_fetch_array($result);
                     ?>
                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-layers float-right text-muted"></i>
                            <h6 class="text-dark text-uppercase mt-0">Tổng Sắp Trống</h6>
                            <h2 data-plugin="counterup"><?= $x['x'] ?></h2>
                        </div>
                    </div>

                    

                    <!-- <div class="col-md-12"></div> put component here -->
                    <div class="col-md-12">
                    	<?php include "components/cart-data.php" ?>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->



<?php 
include '../'.$_SESSION['path'].'/footer.php';

?>

<script type="text/javascript">
     $('.tbapm').DataTable();

     $(".pick-apm").change(function(){

        var id = $(this).attr('id');
        var idapm = id.split('xx');

          if ($(this).is(':checked'))
          {
                console.log("picked this apm " + idapm[0] +" - " + idapm[1]);
                $.ajax({
                    url: 'cart-ajax.php',
                    type: 'post',
                    data: { idapm: idapm[1], account:idapm[0] },
                    success:function(){
                        console.log('Add apm To cart succ');
                    }
                });
          }
          else
          {
            console.log("picked this apm to del " + idapm[0] +" - " + idapm[1]);
            $.ajax({
                    url: 'cart-ajax.php',
                    type: 'post',
                    data: { delincart: idapm[1], delaccount:idapm[0] },
                    success:function(){
                        console.log('Del apm To cart succ');
                    }
                });
          }
          
        });
</script>
