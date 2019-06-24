<?php 
session_start();
include '../'.$_SESSION['path'].'/header.php';

if(isset($_POST['add']))
{
    // $note = $_POST['thongbao'];
    // $notee = explode("@@", $note);
    //print_r($notee);
    $title = ($_POST['title'] == "") ? "[Không đề]" : $_POST['title'] ;
    $content = $_POST['thongbao'];
    // $content = substr($content,0,-3);
    // if(count($notee) >=2 )
    // {
    //     $title = $notee[0];
    //     $title = substr($title,3);
    // }
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateup = date('H:i d.m');
    $q = "INSERT INTO notification(title, content, dateup) VALUES('$title','$content', '$dateup')";
    mysqli_query($link, $q);
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
                                    <li class="breadcrumb-item"><a href="#">home</a></li>
                                    <li class="breadcrumb-item"><a href="#">nihao</a></li>
                                    <li class="breadcrumb-item active">thongbaoduan</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-12"></div> put component here -->
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="m-b-30 m-t-0 header-title">Đăng Thông Báo</h4>
                            
                            <form method="post" action="">
                                <input type="text" class="form-control" name="title" placeholder="Tiêu đề">
                                <textarea id="editor" name="thongbao"></textarea>
                                <button class="btn btn-success col mt-1" type="submit" name="add">Đăng</button>
                            </form>
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

<!--Wysiwig js-->
        
<script type="text/javascript">
    $(document).ready(function () {
        if($("#editor").length > 0){
            tinymce.init({
                selector: "textarea#editor",
                theme: "modern",
                height:300,
                menubar: false,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | preview fullpage | forecolor backcolor emoticons",
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ]
            });
        }
    });
</script>