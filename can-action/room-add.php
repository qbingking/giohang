<?php 
session_start();
include '../'.$_SESSION['path'].'/header.php';
$key_apm = $_GET['id_apm'];

if(isset($_POST['add']))
{
    $num_room = $_POST['num_room'];
    for($i = 0; $i < $num_room; $i += 1)
    {
        $q = "INSERT INTO roomkit(id_apartment) VALUES('$key_apm')";
        mysqli_query($link, $q);
    }
    ?><script type="text/javascript">
        alert("Tiếp Tục");
    </script><?php
}

$qq = "SELECT * FROM roomkit WHERE id_apartment = '$key_apm'";
$result = mysqli_query($link, $qq);

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
                    <div class="col-md-8 col-12 offset-0 offset-md-2">
                    	
                        <div class="card-box">
                            <h4 class="m-t-0 header-title text-center">Xin Chào</h4>

                            <div class="row">
                                <div class="col-12">
                                    <div class="p-20">
                                        <form method="post" action='' class="form-horizontal" role="form">
                                            <div class="form-group row">
                                                <label class="col-md-2 col-12 col-form-label">Số Lượng Phòng Muốn Thêm</label>
                                                <div class="col-md-10 col-12">
                                                    <input type="number" class="form-control mt-1" placeholder="Số Lượng Phòng" name="num_room">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-12 col-form-label">Ngày Update Dự Án Này</label>
                                                <div class="col-md-10 col-12">
                                                    <input type="text" class="form-control mt-1" value="<?= date('d/m/Y')?>" name='dateup'>
                                                </div>

                                            </div>
                                            <button type="submit" name="add" class=" col-12 mt-3 btn btn-block btn-primary waves-effect waves-light">Thêm mới</button>


                                        </form>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <?php
                                    if(mysqli_num_rows($result)){
                                    ?>
                                    <div class="card-box table-responsive">
                                        <table id="key-table" class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th >Mã Phòng</th>
                                                <th>Loại Phòng</th>
                                                <th>Giá</th>
                                                <th>Diện Tích</th>
                                                <th>TrThai</th>
                                                <th>Sắp Trống</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php while($r = mysqli_fetch_array($result)): ?>
                                            <tr>
                                                <!-- <td contentEditable='true' class="editBuilding" id="dien_<?php echo $r['id']; ?>"><?php echo $r['dien']; ?></td> -->
                                                <td contenteditable="true" class="editRoom" id="maphongxx<?= $r['id'] ?>" ><?= $r['maphong'] ?></td>
                                                <td contenteditable="true" class="editRoom" id="id_typexx<?= $r['id'] ?>"><?= $r['id_type'] ?></td>
                                                <td contenteditable="true" class="editRoom" id="pricexx<?= $r['id'] ?>"><?= $r['price'] ?></td>
                                                <td contenteditable="true" class="editRoom" id="squarexx<?= $r['id'] ?>"><?= $r['square'] ?></td>
                                                <td contenteditable="true" class="editRoom" id="id_statusxx<?= $r['id'] ?>"><?= $r['id_status'] ?></td>
                                                <td contenteditable="true" class="editRoom" id="saptrongxx<?= $r['id'] ?>"><?= $r['id_status'] ?></td>
                                            </tr>
                                            <?php endwhile; ?>                              
                                            </tbody>
                                        </table>
                                    </div>
                                <?php } ?>
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
<script type="text/javascript">
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