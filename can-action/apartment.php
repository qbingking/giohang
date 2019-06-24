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
                                    <li class="breadcrumb-item"><a href="#">hello</a></li>
                                    <li class="breadcrumb-item"><a href="#">hi</a></li>
                                    <li class="breadcrumb-item active">nihao</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Xin Chào</h4>
                        </div>
                    </div>
                    <!-- <div class="col-md-12"></div> put component here -->
                    <div class="col-md-12 p-0">
                    	<?php include "components/apartment-data.php" ?>
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
    // xoa phong
    $(".table tbody").on('click', '.del-room', function(){
        var idroom = $(this).attr('id');
        var idroomx = idroom.split('xx');
        var idr = idroomx[1];
        $.ajax({
            url: 'room-ajax.php',
            type: 'post',
            data: { del_room: idr },
            success:function(){

                // $("#Table2").html(response);
                console.log('Delete room Success!');
            }
        });

        console.log("ID Phòng: "+ idr);
        $(this).closest('tr').fadeOut(1000,function(){
            $(this).closest('tr').remove();
            console.log("removeee");
        });
        // $(this).closest('tr').remove();


        
    });

    $(".del-apm").on('click', function(){
        var idroom = $(this).attr('id');
        var idroomx = idroom.split('xxx');
        var idapm = idroomx[1];
        $.ajax({
            url: 'apartment-ajax.php',
            type: 'post',
            data: { del_apm: idapm },
            success:function(){

                // $("#Table2").html(response);
                console.log('Delete room Success!');
            }
        });

        console.log("ID Dự Án: "+ idapm);
        $(this).closest('.row-apm').fadeOut(1000,function(){
            $(this).closest('.row-apm').remove();
            console.log("remove this apm ! yeah ");
        });
        // $(this).closest('tr').remove();


        
    })
</script>