<?php 
session_start();
include '../'.$_SESSION['path'].'/header.php';
$q = "SELECT * FROM user WHERE account = '$_SESSION[account]' ";
$res = mysqli_query($link, $q);
$r = mysqli_fetch_array($res);

if(isset($_POST['add']))
{
    $datein = date('d-m-Y');
    $queque = "INSERT INTO customer_coll(datein, id_user) VALUES('$datein', '$_SESSION[account]')";
    mysqli_query($link,$queque);
}

$qincome = "SELECT * FROM contract WHERE id_user = '$_SESSION[account]' ";
$rrs = mysqli_query($link, $qincome);


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
                                    <li class="breadcrumb-item"><a href="#">giohang</a></li>
                                    <li class="breadcrumb-item"><a href="#">page page profile</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Trang Cá Nhân</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-sm-12">
                        <!-- meta -->
                        <div class="profile-user-box card-box bg-custom">
                            <div class="row">
                                <div class="col-sm-6">
                                    <span class="pull-left mr-3"><img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-lg rounded-circle"></span>
                                    <div class="media-body text-white">
                                        <h4 class="mt-1 mb-1 font-18"><?= $r['fullname'] ?></h4>
                                        <p class="font-13 text-light"> Chuyên Viên</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-right">
                                        <button type="button" class="btn btn-light waves-effect">
                                            <i class="mdi mdi-account-settings-variant mr-1"></i> Edit Profile
                                        </button>
                                        <?= $_SESSION['account'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ meta -->
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-md-3">
                        <!-- Personal-Information -->
                        <div class="card-box">
                            <h4 class="header-title mt-0 m-b-20">Câu nói mà bạn thích ?</h4>
                            <div class="panel-body">
                                <p class="text-muted font-13">
                                   "Không có gì quý hơn hột vịt thịt kho". - Ông bê lắp - <br>
                                   Mấy cái này chưa có làm xong.
                                </p>

                                <hr/>

                                <div class="text-left">
                                    <p class="text-muted font-13"><strong>@name :</strong> <span class="m-l-15"><?= $r['username'] ?></span></p>

                                    <p class="text-muted font-13"><strong>Phone :</strong><span class="m-l-15">(+12) 123 1234 567</span></p>

                                    <p class="text-muted font-13"><strong>Mail :</strong> <span class="m-l-15">banhtrangtron@gmail.com</span></p>

                                    <p class="text-muted font-13"><strong>Nơi Ở Hiện Tại :</strong> <span class="m-l-15">USA</span></p>

                                </div>

                                <ul class="social-links list-inline m-t-20 m-b-0">
                                    <li class="list-inline-item">
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>


                    <div class="col-md-9">

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card-box tilebox-one">
                                    <i class="icon-layers float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Số HD tháng <?= date('m') ?></h6>
                                    <h2 class="m-b-20" data-plugin="counterup">1234</h2>
                                    (chưa có làm xong)
                                </div>
                            </div><!-- end col -->

                            <div class="col-sm-4">
                                <div class="card-box tilebox-one">
                                    <i class="icon-paypal float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Doanh Số Tháng <?= date('m') ?></h6>
                                    <h2 class="m-b-20">$<span data-plugin="counterup">1234</span></h2>
                                    (chưa có làm xong)
                                </div>
                            </div><!-- end col -->

                            <div class="col-sm-4">
                                <div class="card-box tilebox-one">
                                    <i class="icon-rocket float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Tổng Doanh Số</h6>
                                    <h2 class="m-b-20" data-plugin="counterup">1234</h2>
                                    (chưa có làm xong)
                                </div>
                            </div><!-- end col -->

                        </div>

                         <div class="card-box">
                            <?php include "components/contract-data.php"; ?>
                        </div>
                        <!-- end row -->
<!-- Em muốn anh làm thêm một mục khách hàng. Trong đó có phần thông tin khách hàng bao gồm họ và tên, ngày sinh, số điện thoại đặc biệt là địa chỉ mail, có thể mail bây giờ ko quan trọng nhưng sau này mình chuyển sang đất nền thì mail rất quan trọng. Em muốn có một mục ghi chú nơi các bạn sales có thể note thông tin khách hàng ví dụ như viết về tính cách nhu cầu của khách pla pla. Cái này sẽ được quản lí chung bởi quản trị viên và ko phải thành viên nào cũng có thể xem đc danh sách này ngoại trừ khách hàng mà các bạn nhập lên. -->
<!-- ho & tên, birth, phone, mail, note -->

                        <div class="card-box">
                            <?php $qq = "SELECT * FROM customer_coll WHERE id_user = '$_SESSION[account]' ORDER BY datein DESC ";
                                $res = mysqli_query($link, $qq);

                             ?>
                            <h4 class="header-title mb-3">Khách Hàng</h4>
                            <div class="table-responsive">
                                <table class="table m-b-0 tbctm">
                                    <thead>
                                    <tr>
                                        <th>Tên</th>
                                        <th>Giới Tính</th>
                                        <th>NgSinh</th>
                                        <th>Phone</th>
                                        <th>Mail</th>
                                        <th>Note</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($r = mysqli_fetch_array($res)): ?>
                                    <tr>
                                        <td class="editctm" id="namexx<?= $r['id'] ?>" contenteditable="true"><?= $r['name'] ?></td>
                                        <td class="editctm" id="genderxx<?= $r['id'] ?>" contenteditable="true"><?= $r['gender'] ?></td>
                                        <td class="editctm" id="birthxx<?= $r['id'] ?>" contenteditable="true"><?= $r['birth'] ?></td>
                                        <td class="editctm" id="phonexx<?= $r['id'] ?>" contenteditable="true"><?= $r['phone'] ?></td>
                                        <td class="editctm" id="mailxx<?= $r['id'] ?>" contenteditable="true"><?= $r['mail'] ?></td>
                                        <td class="editctm" id="notexx<?= $r['id'] ?>" contenteditable="true"><?= $r['note'] ?></td>
                                    </tr>
                                <?php endwhile; ?>
                                    </tbody>
                                </table>
                                <form action="" method="post">
                                    <button class="btn btn-icon btn-sm waves-effect waves-light btn-success " type="submit" name="add"> Thêm KH </button>
                                </form>
                            </div>
                        </div>

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
    $('.editctm').click(function(){
        $(this).addClass('editMode');
        console.log('>>> E D I T M O D E')
    
    });
    // Save data
    $(".editctm").focusout(function(){
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
            url: 'customer-coll-ajax.php',
            type: 'post',
            data: { field:field_name, value:value, idBuilding:edit_id },
            success:function(){

                // $("#Table2").html(response);
                console.log('Save successfully');
            }
        });

    });
</script>


