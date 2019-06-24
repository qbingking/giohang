<?php 
session_start();
include '../'.$_SESSION['path'].'/header.php';

$thismonth = date('m');
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
                                    <li class="breadcrumb-item"><a href="#">mot</a></li>
                                    <li class="breadcrumb-item"><a href="#">haii</a></li>
                                    <li class="breadcrumb-item active">baaa</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Hợp Đồng</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-md-3">
                        <!-- Personal-Information -->
                        <div class="card-box">
                            <h4 class="header-title mt-0 m-b-20">Tùy Chọn</h4>
                            <div class="panel-body">
                                <a href="contract-add.php" target="_blank"><button type="button" class="btn btn-success waves-light waves-effect">Thêm HD Mới</button></a>
                                <p class="text-muted font-13">
                                    pla pla pla ...
                                </p>

                                <hr/>
                            </div>
                        </div>
                        <!-- Personal-Information -->

                    </div>


                    <div class="col-md-9">

                        <div class="row">

                            <div class="col-sm-4">
                                <?php $qwe = "SELECT COUNT(id) as x FROM contract WHERE MONTH(STR_TO_DATE(date_in, '%d-%m-%Y')) = '$thismonth' OR MONTH(STR_TO_DATE(date_in, '%d/%m/%Y')) ";
                                      $re  = mysqli_query($link, $qwe);
                                      $x   = mysqli_fetch_array($re) ; ?>
                                
                                <div class="card-box tilebox-one">
                                    <i class="icon-layers float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Tháng <?= date('m')?></h6>
                                    <h2 class="m-b-20" data-plugin="counterup"><?= $x['x'] ?></h2>
                                </div>
                            </div><!-- end col -->

                            <div class="col-sm-4">
                                <?php $qwe = "SELECT SUM(price) as x FROM contract WHERE MONTH(STR_TO_DATE(date_in, '%d-%m-%Y')) = '$thismonth' OR MONTH(STR_TO_DATE(date_in, '%d/%m/%Y')) ";
                                      $re  = mysqli_query($link, $qwe);
                                      $x   = mysqli_fetch_array($re) ; ?>
                                
                                <div class="card-box tilebox-one">
                                    <i class="icon-layers float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Tháng <?= date('m')?></h6>
                                    <h2 class="m-b-20" data-plugin="counterup"><?= (intval($x['x'])/1000000)." triệu" ?></h2>
                                </div>
                            </div><!-- end col -->

                            <div class="col-sm-4">
                                <?php $qwe = "SELECT SUM(price) as x FROM contract WHERE MONTH(STR_TO_DATE(date_in, '%d-%m-%Y')) = '$thismonth' OR MONTH(STR_TO_DATE(date_in, '%d/%m/%Y')) ";
                                      $re  = mysqli_query($link, $qwe);
                                      $x   = mysqli_fetch_array($re) ; ?>
                                
                                <div class="card-box tilebox-one">
                                    <i class="icon-layers float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Zzzz</h6>
                                    <h2 class="m-b-20" data-plugin="counterup">Zzzz zz</h2>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->

                        <?php include "components/contract-data.php"; ?>

                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->



<?php 
include '../'.$_SESSION['path'].'/footer.php';

?>

<script type="text/javascript">
    $('.tbctm').DataTable();
    //  Sửa Bảng Building & info building
    $('.editApm').click(function(){
        $(this).addClass('editMode');
        console.log('>>> E D I T M O D E')
    
    });
    // Save data
    $(".editApm").focusout(function(){
        $(this).removeClass("editMode");
 
        var id = this.id;

        var split_id = id.split("xx");
        var field_name = split_id[0];
        var edit_id = split_id[1];

        var value = $(this).text();
        console.log("..................");
        console.log("Tên Cột ---> "+field_name);
        console.log("ID ----> "+edit_id);
        console.log("Gtri --->"+ value);
        $.ajax({
            url: 'apartment-ajax.php',
            type: 'post',
            data: { field:field_name, value:value, idBuilding:edit_id },
            success:function(){

                // $("#Table2").html(response);
                console.log('Save successfully');
            }
        });

    });



//  Sửa Bảng Room
    $('.editRoom').click(function(){
        $(this).addClass('editMode');
        console.log('>> Edit Mode')
    
    });
    // Save data
    $(".editRoom").focusout(function(){
        $(this).removeClass("editMode");
 
        var id = this.id;

        var split_id = id.split("xx");
        var field_name = split_id[0];
        var edit_id = split_id[1];

        var value = $(this).text();
        console.log(">>>>>>>> <<<<<<<<<");
        console.log("Tên Cột: "+field_name);
        console.log("ID Phòng: "+split_id[1]);
        console.log("Giá Trị: "+value);
        
        $.ajax({
            url: 'room-ajax.php',
            type: 'post',
            data: { field:field_name, value:value, idRoom:edit_id },
            success:function(){

                // $("#Table2").html(response);
                console.log('Update Success!');
            }
        });
        $("body").unbind('click');

});
</script>