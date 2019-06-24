<?php
$quan = array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5 , 6 => 6, 7 => 7 , 8 => 8, 9 => 9, 10 => 10, 11 => 11, 12 => 12,'binhtan' =>'Bình Tân', 'phunhuan' => 'Phú Nhuận', 'binhthanh' => 'Bình Thạnh', 'tanbinh' => 'Tân Bình', 'govap' => 'Gò Vấp'); 

?>

<div class="card-box">
    
    
    <ul class="nav nav-pills navtab-bg nav-justified pull-in ">
        <!-- loop -->
        <?php foreach ($quan as $q => $qq): ?>
        <li class="nav-item">
            <a href="#<?=$q?>" data-toggle="tab" aria-expanded="false" class="nav-link">
                <?= $qq ?>
            </a>
        </li>
       <?php endforeach; ?>
        
    </ul>
    <div class="tab-content">
        <!-- loop -->
        <?php foreach ($quan as $q => $qq): ?>
        <div class="tab-pane" id="<?= $q?>">
            >>> Thông tin quận <?= $quan[$q] ?> <<< <br>

            <?php 
                $q = " SELECT * FROM apartment WHERE  id_district = '$q' ";
                $result = mysqli_query($link, $q);
             ?>
           
                    <div id="accordion" role="tablist" aria-multiselectable="true" class="m-b-30">
                         <?php while($r = mysqli_fetch_array($result)): ?>
                        <!-- loop -->
                        <div class="card mt-2">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0 mt-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#apm<?=$r['id']?>" class="text-dark" aria-expanded="true" aria-controls="apm<?=$r['id']?>">
                                        <button type="button" class="btn btn-light waves-effect"> <i class="mdi mdi-arrow-expand-all"></i> </button>
                                    </a>
                                    <span class="ml-3" id="addressxx<?= $r['id'] ?>"><?= $r['address'].$r['id']?></span>
                                </h5>
                            </div>
                            <div id="apm<?=$r['id']?>" class="collapse " role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <!-- Tổng Số Phòng Theo Apartment -->
                                        <?php 
                                            $qqq = "SELECT COUNT(id) AS x FROM roomkit WHERE id_apartment = '$r[id]' ";
                                            $result = mysqli_query($link, $qqq);
                                            $x = mysqli_fetch_array($result);
                                        ?>
                                        <div class="col-sm-6 col-lg-6 col-xl-3 text-center">
                                            <div class=" widget-flat border-success bg-success text-white">
                                                <i class="fi-tag"></i>
                                                <h4><?= $x['x'] ?></h4>
                                                <p class="text-uppercase  font-13 font-600">Tổng Phòng</p>
                                            </div>
                                        </div>

                                        <!-- Tổng Số Phòng Trống Theo Apartment -->
                                        <?php 
                                            $qqq = "SELECT COUNT(id) AS x FROM roomkit WHERE id_apartment = '$r[id]' AND id_status = 'trống' ";
                                            $result = mysqli_query($link, $qqq);
                                            $x = mysqli_fetch_array($result);
                                        ?>
                                        <div class="col-sm-6 col-lg-6 col-xl-3 text-center">
                                            <div class=" widget-flat border-success bg-success text-white">
                                                <i class="fi-tag"></i>
                                                <h4><?= $x['x'] ?></h4>
                                                <p class="text-uppercase  font-13 font-600">Phòng Trống</p>
                                            </div>
                                        </div>

                                         <!-- Tổng Số Phòng Sắp Trống Theo Apartment -->
                                        <?php 
                                            $qqq = "SELECT COUNT(id) AS x FROM roomkit WHERE id_apartment = '$r[id]' AND saptrong <> '' ";
                                            $result = mysqli_query($link, $qqq);
                                            $x = mysqli_fetch_array($result);
                                        ?>
                                        <div class="col-sm-6 col-lg-6 col-xl-3 text-center">
                                            <div class=" widget-flat border-success bg-success text-white">
                                                <i class="fi-tag"></i>
                                                <h4><?= $x['x'] ?></h4>
                                                <p class="text-uppercase  font-13 font-600">Sắp Trống</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Ghi Chú -->
                                    <div class="card-box ribbon-box p-0 mt-2">
                                        <div class="ribbon ribbon-custom"> Ghi Chú </div>
                                        <p class="p-0"><?= $r['note'] ?></p>
                                    </div>
                                    
                                    <div class="col-12">
                                        <p class="row button-list">
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
                                                            <th>Thang Máy</th>
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
                                                                <td  id="thangmayxx<?= $r['id'] ?>" ><?= $r['thangmay'] ?></td>
                                                                <td  id="parkingxx<?= $r['id'] ?>" ><?= $r['parking'] ?></td>
                                                                <td  id="hoahongxx<?= $r['id'] ?>" ><?= $r['hoahong'] ?></td>
                                                                <td  id="cocxx<?= $r['id'] ?>" ><?= $r['coc'] ?></td>
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
        <?php endforeach; ?>
    </div>
</div>
