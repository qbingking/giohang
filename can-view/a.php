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
                    <div class="col-md-6">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-20">Switchery</h4>

                            <p class="mb-1 mt-4 font-weight-bold text-muted">Basic</p>
                            <p class="text-muted font-14">
                                Add an attribute <code>
                                data-plugin="switchery" data-color="@colors"</code>
                                to your input element and it will be converted into switch.
                            </p>

                            <div class="switchery-demo">
                                <input type="checkbox" checked data-plugin="switchery" data-color="#039cfd"/>
                                <input type="checkbox" checked data-plugin="switchery" data-color="#f1b53d"/>
                                <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a"/>
                                <input type="checkbox" checked data-plugin="switchery" data-color="#ff5d48"/>
                                <input type="checkbox" checked data-plugin="switchery" data-color="#3db9dc"/>
                                <input type="checkbox" checked data-plugin="switchery" data-color="#2b3d51"/>
                                <input type="checkbox" checked data-plugin="switchery" data-color="#9261c6"/>
                                <input type="checkbox" checked data-plugin="switchery" data-color="#ff7aa3"/>
                                <input type="checkbox" checked data-plugin="switchery" data-color="#98a6ad"/>
                            </div>


                            <p class="mb-1 mt-4 font-weight-bold text-muted">Sizes & Secondary color</p>
                            <p class="text-muted font-14">
                                Add an attribute <code>
                                data-size="small",data-size="large"</code>
                                to your input element and it will be converted into switch.
                                Add an attribute <code>
                                data-color="@color" data-secondary-color="@color"</code>
                                to your input element and it will be converted into switch.
                            </p>

                            <div class="switchery-demo">
                                <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small"/>
                                <input type="checkbox" checked data-plugin="switchery" data-color="#ff7aa3"/>
                                <input type="checkbox" checked data-plugin="switchery" data-color="#2b3d51" data-size="large"/>
                                <input type="checkbox" data-plugin="switchery" data-color="#1bb99a" data-secondary-color="#ff5d48" />
                                <input type="checkbox" data-plugin="switchery" data-color="#9261c6"  data-secondary-color="#ff7aa3" checked />
                            </div>
                        </div> <!-- end card-box -->
                    </div> <!-- end col -->
                    <div class="demo-box">
                                        <form>
                                            <div class="form-group">
                                                <p class="mb-2 mt-4 font-weight-bold">Disable file style</p>
                                                <input type="file" class="filestyle" data-disabled="true" data-btnClass="btn-light">
                                            </div>
                                            <div class="form-group">
                                                <p class="mb-2 mt-4 font-weight-bold">File style before button</p>
                                                <input type="file" class="filestyle" data-buttonbefore="true" data-btnClass="btn-light">
                                            </div>

                                            <div class="form-group m-b-0">
                                                <p class="mb-2 mt-4 font-weight-bold">File style placeholder</p>
                                                <input type="file" class="filestyle" data-placeholder="No file" data-btnClass="btn-light">
                                            </div>
                                        </form>
                                    </div>
                    
                </div>
                <!-- end page title end breadcrumb -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

<?php 
include '../'.$_SESSION['path'].'/footer.php';
?>