<?php 
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
                                    <li class="breadcrumb-item"><a href="#">home</a></li>
                                    <li class="breadcrumb-item"><a href="#">nihao</a></li>
                                    <li class="breadcrumb-item active">quanlydanhmuc</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-12"></div> put component here -->
                    <div class="col-12 col-md-3">
                        <div class="card-box table-responsive">

                            <h4 class="m-t-0 header-title">Danh Mục Dự Án</h4>
                        <?php $qroom = "SELECT * FROM apartment_tag";
                            $result_room = mysqli_query($link, $qroom);
                            if(mysqli_num_rows($result_room))
                            {
                             ?>
                            <?php include "components/apartment_tag-add.php"; ?>
                            <table class="table table-bordered rounded ">
                                <tbody>
                            <?php while($rr = mysqli_fetch_array($result_room) ): ?>
                                <tr>
                                    <td contenteditable="true" class="editApmTag" id="tag_namexx<?= $rr['id'] ?>"><?= $rr['tag_name'] ?></td>
                                    
                                </tr>
                            <?php endwhile;
                            }
                            else
                            {
                                echo " >>>>>> Chưa Có Danh Mục Dự Án <<<<<<";
                                include "components/apartment_tag-add.php";
                            }
                             ?>                                
                                </tbody>
                            </table>
                        </div>
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
    $('.editApmTag').click(function(){
        $(this).addClass('editMode');
        console.log('>> Edit Mode')
    
    });
    // Save data
    $(".editApmTag").focusout(function(){
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
            data: { field:field_name, value:value, idApm:edit_id },
            success:function(){

                // $("#Table2").html(response);
                console.log('Update Success!');
            }
        });
        $("body").unbind('click');

});
</script>