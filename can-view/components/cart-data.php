<div class="card-box">
    <a href="apartment.php"><button type="button" class="mb-2 col-md-3 offset-md-4 offset-0 col btn btn-outline-secondary waves-light waves-effect">Tất Cả Dự Án</button></a>
    <?php 
        $q = "SELECT * FROM cart, apartment WHERE cart.id_apartment = apartment.id AND account = '$_SESSION[account]' ";
        $result = mysqli_query($link, $q);
        
     ?>

    <div id="accordion" role="tablist" aria-multiselectable="true" class="m-b-30">
                         <?php while($r = mysqli_fetch_array($result)): ?>
                        <!-- loop -->
                        <div class="card mt-2">
                            <div class="card-header " role="tab" id="headingOne">
                                <h5 class="mb-0 mt-0 d-inline">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#apm<?=$r['id']?>" class="text-dark" aria-expanded="true" aria-controls="apm<?=$r['id']?>">
                                        <button type="button" class="btn btn-success waves-effect mb-1 mr-2"> <i class="mdi mdi-arrow-expand-all"></i> </button>
                                    </a>
                                    <span id="addressxx<?= $r['id'] ?>">
                                        <?= $r['address']?>
                                        <span class="ml-2">
                                            <!-- Tổng Số Phòng Trống Theo Apartment -->
                                            <?php 
                                                $qqq = "SELECT COUNT(id) AS x FROM roomkit WHERE id_apartment = '$r[id]' ";
                                                $resultt = mysqli_query($link, $qqq);
                                                $x = mysqli_fetch_array($resultt);
                                            ?>
                                            <button type="button" class="btn btn-icon waves-effect btn-light font-weight-bold text-muted"> <?= $x['x'] ?> </button>

                                            <?php 
                                                $qqq = "SELECT COUNT(id) AS x FROM roomkit WHERE id_apartment = '$r[id]' AND id_status = 'trống' ";
                                                $resultt = mysqli_query($link, $qqq);
                                                $x = mysqli_fetch_array($resultt);
                                            ?>
                                            <button type="button" class="btn btn-icon waves-effect btn-light font-weight-bold text-primary"> <?= $x['x'] ?> </button>

                                            <?php 
                                                $qqq = "SELECT COUNT(id) AS x FROM roomkit WHERE id_apartment = '$r[id]' AND saptrong <> '' ";
                                                $resultt = mysqli_query($link, $qqq);
                                                $x = mysqli_fetch_array($resultt);
                                            ?>
                                            <button type="button" class="btn btn-icon waves-effect btn-light font-weight-bold text-primary"> <?= $x['x'] ?> </button>
                                        </span>
                                    </span>

                                    <span class="text-success float-right" style="font-size: 12px">
                                        <?= $r['dateup']." "?>
                                        <i class="fi-clock"></i>
                                        <span class="switchery-demo ml-1">
                                            <input type="checkbox" class="pick-apm" id="<?= $_SESSION['account'] ?>xx<?= $r['id'] ?>" data-plugin="switchery" data-color="#64b0f2" data-size="small" <?= $r['id_apartment'] != NULL ? "checked":"" ?> />
                                        </span>
                                    </span>
                                    
                                </h5>
                            </div>
                            <div id="apm<?=$r['id']?>" class="collapse " role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-body">
                                    
                                    <!-- Ghi Chú -->
                                    <div class="card-box ribbon-box p-0 mt-2">
                                        <div class="ribbon ribbon-custom"> Ghi Chú </div>
                                        <p class="p-0"><?= $r['note'] ?></p>
                                    </div>
                                    
                                    <div class="col-12">
                                        <p class="row button-list mb-2">
                                            <button class="btn btn-secondary waves-effect waves-light " type="button" data-toggle="collapse" data-target="#dichvu<?= $r['id'] ?>" aria-expanded="false" aria-controls="dichvu<?= $r['id'] ?>">
                                                Dịch Vụ
                                            </button>
                                            <button class="btn btn-secondary waves-effect waves-light" type="button" data-toggle="collapse" data-target="#room<?= $r['id'] ?>" aria-expanded="false" aria-controls="room<?= $r['id'] ?>">
                                                Phòng
                                            </button>
                                            <button class="btn btn-secondary waves-effect waves-light " type="button" data-toggle="collapse" data-target="#map<?= $r['id'] ?>" aria-expanded="false" aria-controls="map<?= $r['id'] ?>">
                                                GG MAP
                                            </button>
                                            <button class="btn btn-secondary waves-effect waves-light " type="button" data-toggle="collapse" data-target="#xxx<?= $r['id'] ?>" aria-expanded="false" aria-controls="xxx<?= $r['id'] ?>">
                                                Hình Ảnh
                                            </button>
                                        </p>
                                        <!-- Tab Dịch Vụ -->
                                        <div class="collapse col-12 p-0" id="dichvu<?= $r['id'] ?>">
                                                <div class="card-box table-responsive p-0">
                                                    <table class="table table-hover table-success">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Điện</th>
                                                            <th>Nước</th>
                                                            <th>Internet</th>
                                                            <th>Máy Giặt</th>
                                                            <th>Dọn Phòng</th>
                                                            <th>Xe</th>
                                                            <th>Hoa Hồng</th>
                                                            <th>Cọc</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">#</th>
                                                                <td  id="dienxx<?= $r['id'] ?>" ><?= $r['dien'] ?></td>
                                                                <td  id="nuocxx<?= $r['id'] ?>" ><?= $r['nuoc'] ?></td>
                                                                <td  id="netxx<?= $r['id'] ?>" ><?= $r['net'] ?></td>
                                                                <td  id="matgiatxx<?= $r['id'] ?>" ><?= $r['maygiat'] ?></td>
                                                                <td  id="donphongxx<?= $r['id'] ?>" ><?= $r['donphong'] ?></td>
                                                                <td  id="parkingxx<?= $r['id'] ?>" ><?= $r['parking'] ?></td>
                                                                <td  id="hoahongxx<?= $r['id'] ?>" ><?= $r['hoahong'] ?></td>
                                                                <td  id="cocxx<?= $r['id'] ?>" ><?= $r['coc'] ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <table class="table table-hover table-danger">
                                                        <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Số Người Ở Tối Đa</th>
                                                            <th>Thang Máy</th>
                                                            <th>Bếp</th>
                                                            <th>Pet</th>
                                                            <th>Bảo Vệ</th>
                                                            <th>Dài Hạn</th>
                                                            <th>Ngắn Hạn</th>
                                                            
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td  ><?= $r['songuoio'] ?></td>
                                                                <td  ><?= $r['thangmay'] ?></td>
                                                                <td  ><?= $r['bep'] ?></td>
                                                                <td  ><?= $r['pet'] ?></td>
                                                                <td  ><?= $r['baove'] ?></td>
                                                                <td  ><?= $r['daihan'] ?></td>
                                                                <td  ><?= $r['nganhan'] ?></td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    
                                                </div>
                                        </div>
    
                                        <!-- Tab Phòng -->
                                        <div class="collapse col-12 p-0" id="room<?= $r['id'] ?>" >
                                            <!-- Table Room -->
                                            <div class="card-box table-responsive">
                                            <?php $qroom = "SELECT * FROM roomkit WHERE roomkit.id_apartment = '$r[id]' ORDER BY id_status DESC,saptrong DESC";
                                                $result_room = mysqli_query($link, $qroom);
                                                if(mysqli_num_rows($result_room)){
                                                 ?>
                                                <table class=" tbapm table table-bordered rounded " >
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
                                                <?php while($rr = mysqli_fetch_array($result_room) ): ?>
                                                    <tr>
                                                        <td  id="maphongxx<?= $rr['id'] ?>" ><?= $rr['maphong'] ?></td>
                                                        <td  id="id_typexx<?= $rr['id'] ?>"><?= $rr['id_type'] ?></td>
                                                        <td  id="pricexx<?= $rr['id'] ?>"><?= $rr['price'] ?></td>
                                                        <td  id="squarexx<?= $rr['id'] ?>"><?= $rr['square'] ?></td>
                                                        <td  id="id_statusxx<?= $rr['id'] ?>"><?= $rr['id_status'] ?></td>
                                                        <td  id="saptrongxx<?= $rr['id'] ?>"><?= $rr['saptrong'] ?></td>
                                                    </tr>
                                                <?php endwhile;
                                                    }
                                                    else
                                                    {
                                                        echo " >>>>>> Chưa Có Phòng <<<<<<";
                                                    }
                                                 ?>                                
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Tab Map -->
                                        <div class="collapse col-12 p-0" id="map<?= $r['id'] ?>" >
                                            <div class="col-md-8 offset-md-2 col-12 offset-0 p-0" style="height: 500px">
                                                <div class="card-box h-100 p-0">
                                                    <div  class="gmaps h-100">
                                                        <a href="https://drive.google.com/embeddedfolderview?id=1F191U4yq282AhRWwKrsC5_prLBch-I2p#grid">
                                                         <iframe src="<?= $r['ggmap']?>" width="100%" height="100%" frameborder="0" style="border:3px solid yellow" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Co lại -->
                                    <a data-toggle="collapse" data-parent="#accordion" href="#apm<?=$r['id']?>" class="text-dark" aria-expanded="true" aria-controls="apm<?=$r['id']?>">
                                        <button type="button" class="btn btn-warning waves-effect mt-1"> <i class="mdi mdi-arrow-expand-all"></i> </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
</div>