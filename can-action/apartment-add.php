<?php 
session_start();
include '../'.$_SESSION['path'].'/header.php';
$key_quan = $_GET['quan'];

 ?>

<?php 
$quan = array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5 , 6 => 6, 7 => 7 , 8 => 8, 9 => 9, 10 => 10, 11 => 11, 12 => 12,'binhtan' =>'Bình Tân', 'phunhuan' => 'Phú Nhuận', 'binhthanh' => 'Bình Thạnh', 'tanbinh' => 'Tân Bình', 'govap' => 'Gò Vấp'); 
$tagApartment = array('');

if(isset($_POST['add']))
{ // 15 col
    $address = $_POST['address'];
    $district = $key_quan;
    $shortname = $_POST['shortname'];

    $note = $_POST['note'];
    $ggmap = $_POST['ggmap'];

    $dien = $_POST['dien'];
    $nuoc = $_POST['nuoc'];
    $net = $_POST['net'];

    $thangmay = $_POST['thangmay'];
    $maygiat = $_POST['maygiat'];
    $donphong = $_POST['donphong'];

    $parking = $_POST['parking'];
    $hoahong = $_POST['hoahong'];
    $coc = $_POST['coc'];

    $datein = $_POST['datein'];

    $q = "INSERT INTO apartment(address, id_district, shortname,
                                note, ggmap,
                                dien, nuoc, net,
                                thangmay, maygiat, donphong,
                                parking, hoahong,coc,
                                datein
                                ) VALUES('$address', '$district', '$shortname',
                                         '$note', '$ggmap',
                                         '$dien','$nuoc','$net',
                                         '$thangmay','$maygiat', '$donphong',
                                         '$parking', '$hoahong', '$coc',
                                         '$datein'
                                )";
    mysqli_query($link, $q);
    ?><script type="text/javascript">
        alert("Thêm Thành Công");
    </script><?php
}

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
                        </div>
                    </div>
                    <!-- <div class="col-md-12"></div> put component here -->
                    <div class="col-md-12">
                    	
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">Dự Án Mới Quận <?= $quan[$key_quan]?></h4>

                            <div class="row">
                                <div class="col-12">
                                    <div class="p-20">
                                        <form method="post" action='' class="form-horizontal" role="form">
                                            <div class="form-group row">
                                                <div class="col-8">
                                                    <input type="text" class="form-control mt-1" placeholder="Địa Chỉ" name="address">
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" class="form-control mt-1" placeholder="Tên Gợi Nhớ" name="shortname">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Ngày Thêm</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control mt-1" value="<?= date('d/m/Y')?>" name='datein'>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Ghi Chú</label>
                                                <div class="col-10">
                                                    <textarea class="form-control mt-1" rows="5" name="note"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">GG MAP</label>
                                                <div class="col-10">
                                                    <textarea class="form-control mt-1" rows="5" name="ggmap"></textarea>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Quận</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control mt-1" readonly="" value="<?= $quan[$key_quan]?>" name='quan'>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-4">
                                                    <input type="text" class="form-control mt-1" placeholder="điện" name="dien">
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" class="form-control mt-1" placeholder="nước" name="nuoc">
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" class="form-control mt-1" placeholder="Internet" name="net">
                                                </div>

                                                <div class="col-4">
                                                    <input type="text" class="form-control mt-1" placeholder="Thang Máy" name="thangmay">
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" class="form-control mt-1" placeholder="Máy Giặt" name="maygiat">
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" class="form-control mt-1" placeholder="Dọn Phòng" name="donphong">
                                                </div>

                                                <div class="col-4">
                                                    <input type="text" class="form-control mt-1" placeholder="Giữ Xe" name="parking">
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" class="form-control mt-1" placeholder="Hoa Hồng" name="hoahong">
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" class="form-control mt-1" placeholder="Cọc" name="coc">
                                                </div>
                                                <button type="submit" name="add" class=" mt-3 btn btn-block btn-primary waves-effect waves-light">Thêm mới</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                        </div> <!-- end card-box -->
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->



<?php 
include '../'.$_SESSION['path'].'/footer.php';
 ?>