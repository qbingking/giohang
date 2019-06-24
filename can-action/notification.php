<?php 
session_start();
include '../'.$_SESSION['path'].'/header.php';
$q = "SELECT * FROM notification order by id DESC LIMIT 10";
$res = mysqli_query($link, $q);

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
                    <?php while($r = mysqli_fetch_array($res)): ?>
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <?php echo $r['title']; ?>
                                <div class="float-right"> <cite title="Source Title"><?= $r['dateup'] ?></cite></div>
                            </div>
                            <div class="card-body">
                                <blockquote class="card-bodyquote">
                                    <?php echo $r['content']; ?>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                    
                    
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