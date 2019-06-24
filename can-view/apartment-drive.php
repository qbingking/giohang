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
                            <h4 class="page-title">Google Drive Sinvahome</h4>
                        </div>
                    </div>
                    <div class="col-md-12" style="height: 600px">
                        <div class="card-box h-100">
                            <div  class="gmaps h-100">
                                <a href="https://drive.google.com/embeddedfolderview?id=1F191U4yq282AhRWwKrsC5_prLBch-I2p#grid">
                                 <iframe src="https://drive.google.com/embeddedfolderview?id=10bIEalaBQCGT-IA3F_kXDyOynBXmIfS1#grid" style="width:100%; height:100%; border:3px solid violet; border-radius: 2px;"></iframe>
                                </a>

                            
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-12"></div> put component here -->
                    <div class="col-md-12 mt-2" style="height: 600px">
                        <div class="card-box h-100">
                            <div  class="gmaps h-100">
                                <iframe width="100%" height="100%" src="https://docs.google.com/spreadsheets/d/1x39nUW-jwdFzVx77cwMI-epkNC34z87trzDbKIoRdU8/edit?fbclid=IwAR1WbNfUEjGJzitBEYSe0Xo8UGMjItvXYSfGrR84s7w-e11ptXBQdbTy5os#gid=2058118353" frameborder="0"></iframe>
            <!-- <div id="calendar"></div> -->
                            </div>
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
