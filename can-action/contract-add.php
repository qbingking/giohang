<?php 
session_start();
include '../'.$_SESSION['path'].'/header.php';

if(isset($_POST['add']))
{ // 15 col
    $diachi = $_POST['diachi'];
    $mxh = $_POST['mxh'];
    $gender = $_POST['gender'];
    $maphong = $_POST['maphong'];
    $price = $_POST['giathue'];
    $sothango = $_POST['sothango'];
    $ghichu = $_POST['ghichu'];
    $tenkhachhang = $_POST['tenkhachhang'];
    $ngaysinh = $_POST['ngaysinh'];
    $cmnd = $_POST['cmnd'];
    $ngayky = $_POST['ngayky'];
    $sodienthoai = $_POST['sodienthoai'];
    $idaccount = $_POST['idaccount'];
    $hoahong = $_POST['hoahong'];

    $q = "INSERT INTO contract(id_user, address, maphong, gender, hoahong,
                               price, date_in, month,
                               note, customer, birth,
                               phone, mxh, cmnd) 
                               VALUES('$idaccount', '$diachi', '$maphong', '$gender', '$hoahong',
                               '$price', '$ngayky', '$sothango',
                               '$ghichu', '$tenkhachhang', '$ngaysinh', 
                               '$sodienthoai', '$mxh', '$cmnd')";

    mysqli_query($link, $q);
    ?><script type="text/javascript">
        alert("Thêm Thành Công gg");
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
                            <h4 class="m-t-0 header-title"><b>Nhập Thông Tin Hợp Đồng Mới</b></h4>

                            <form id="wizard-vertical" method="post" action="">
                                <h3>Khách Hàng</h3>
                                <section>
                                    <div class="form-group clearfix p-0">
                                        <label class="control-label p-0 " for="userName1">Tên Khách Hàng</label>
                                        <div class="">
                                            <input class="form-control " placeholder="Nguyễn Y Vân" id="userName1" name="tenkhachhang" type="text">
                                        </div>

                                        <label class="control-label p-0 " for="userName1">Giới Tính</label>
                                        <div class="">
                                            <input class="form-control " placeholder="nam - nu" id="userName1" name="gender" type="text">
                                        </div>

                                        <label class="control-label " for="userName1">Ngày Sinh</label>
                                        <div class="">
                                            <input class="form-control " placeholder="<?= date('d/m')."/1900"?>" id="userName1" name="ngaysinh" type="text">
                                        </div>

                                        <label class="control-label " for="userName1">Số Điện Thoại</label>
                                        <div class="">
                                            <input class="form-control " id="userName1" name="sodienthoai" type="text">
                                        </div>

                                        <label class="control-label " for="userName1">Kênh MXH</label>
                                        <div class="">
                                            <input class="form-control " placeholder="fb zalo ... " id="userName1" name="mxh" type="text">
                                        </div>

                                        <label class="control-label " for="userName1">CMND</label>
                                        <div class="">
                                            <input class="form-control " id="userName1" name="cmnd" type="text">
                                        </div>

                                        
                                    </div>
                                </section>
                                <h3>Phòng</h3>
                                <section>
                                    <div class="form-group clearfix p-0">

                                        <label class="control-label" for="name1"> Địa Chỉ</label>
                                        <div class="">
                                            <input id="name1" name="diachi" type="text" class=" form-control">
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="control-label " for="surname1"> Mã Phòng</label>
                                        <div class="">
                                            <input id="surname1" name="maphong" type="text" class=" form-control">

                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <label class="control-label " for="surname1"> Giá Thuê</label>
                                        <div class="">
                                            <input id="surname1" name="giathue" type="number" class=" form-control">

                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <label class="control-label " for="surname1">Số Tháng Ở</label>
                                        <div class="">
                                            <input id="surname1" name="sothango" type="text" class=" form-control">

                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <label class="control-label " for="surname1">Hoa Hồng</label>
                                        <div class="">
                                            <input id="surname1" placeholder="69 ( % cho 12T nhé )" name="hoahong" type="text" class=" form-control">

                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <label class="control-label " for="surname1">Ngày Ký</label>
                                        <div class="">
                                            <input id="surname1" name="ngayky" placeholder="<?= date('d/m/Y')?>" type="text" class=" form-control">

                                        </div>
                                    </div>

                                    <label class="control-label " for="userName1">Ghi Chú</label>
                                        <div class="">
                                            <input class="form-control " id="userName1" name="ghichu" type="text">
                                        </div>

                                </section>
                                <h3>Xác Nhận</h3>
                                <section>
                                    <div class="form-group clearfix p-0">
                                        <div class="col-lg-12">
                                            <label class="control-label " for="userName1">ID Của Bạn</label>
                                        <div class="">
                                            <input class="form-control " id="userName1" name="idaccount" type="text">
                                            <button type="submit" name="add" class=" mt-3 btn btn-block btn-primary waves-effect waves-light">Thêm mới</button>
                                        </div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                            <!-- End #wizard-vertical -->
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