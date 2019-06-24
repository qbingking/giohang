<?php
$quan = array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5 , 6 => 6, 7 => 7 , 8 => 8, 9 => 9, 10 => 10, 11 => 11, 12 => 12,'binhtan' =>'Bình Tân', 'phunhuan' => 'Phú Nhuận', 'binhthanh' => 'Bình Thạnh', 'tanbinh' => 'Tân Bình', 'govap' => 'Gò Vấp'); 

?>

<div class="card-box">
    <h4 class="header-title m-t-0 m-b-30">Dự Án</h4>
    
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
            <a href="apartment-add.php?quan=<?= $q ?>" target="_blank"><button type="button" class="btn btn-success waves-light waves-effect">Thêm Dự Án Mới</button></a>

            <?php 
                $q = " SELECT * FROM apartment WHERE  id_district = '$q' ";
                $result = mysqli_query($link, $q);
             ?>
           
                    <div id="accordion" role="tablist" aria-multiselectable="true" class="m-b-30 ">
                         <?php while($r = mysqli_fetch_array($result)): ?>
                        <!-- loop -->
                        <div class="card mt-2 row-apm">
                            <div class="card-header " role="tab" id="headingOne">
                                <h5 class="mb-0 mt-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#apm<?=$r['id']?>" class="text-dark" aria-expanded="true" aria-controls="apm<?=$r['id']?>">
                                        <button type="button" class="btn btn-light waves-effect"> <i class="mdi mdi-arrow-expand-all"></i> </button>
                                    </a>
                                    <span class="ml-3 editApm" id="addressxx<?= $r['id'] ?>"  contenteditable="true" ><?= $r['address']?></span>
                                    <span class="float-right"><button type="button" id="idapmxxx<?= $r['id'] ?>" class="del-apm btn btn-pink btn-rounded waves-effect waves-light">X</button></span>
                                </h5>
                            </div>
                            <div id="apm<?=$r['id']?>" class="collapse " role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p>
                                        <a href="room-add.php?id_apm=<?= $r['id'] ?>" target="_blank"><button type="button" class="btn btn-success col-md-3 col-12 waves-light waves-effect">Thêm Phòng Mới</button></a>
                                    </p>
                                    <div class="card-box ribbon-box">
                                        <div class="ribbon ribbon-custom"> Ghi Chú </div>
                                        <p class="m-b-0 w-100 editApm" id="notexx<?= $r['id'] ?>"  contenteditable="true"><?= $r['note'] ?></p>
                                    </div>
                                    

                                    <div class="col-12">
                                        <p class="row">
                                            <button class="btn btn-info waves-effect waves-light col-md-2 col-12" type="button" data-toggle="collapse" data-target="#dichvu<?= $r['id'] ?>" aria-expanded="false" aria-controls="dichvu<?= $r['id'] ?>">
                                                Dịch Vụ
                                            </button>
                                            <button class="btn btn-info waves-effect waves-light col-md-2 offset-md-1 col-12" type="button" data-toggle="collapse" data-target="#room<?= $r['id'] ?>" aria-expanded="false" aria-controls="room<?= $r['id'] ?>">
                                                Phòng
                                            </button>
                                            <button class="btn btn-info waves-effect waves-light col-md-2 offset-md-1 col-12" type="button" data-toggle="collapse" data-target="#map<?= $r['id'] ?>" aria-expanded="false" aria-controls="map<?= $r['id'] ?>">
                                                GG MAP
                                            </button>
                                            <button class="btn btn-info waves-effect waves-light col-md-2 offset-md-1 col-12" type="button" data-toggle="collapse" data-target="#xxx<?= $r['id'] ?>" aria-expanded="false" aria-controls="xxx<?= $r['id'] ?>">
                                                Hình Ảnh
                                            </button>
                                        </p>
                                        <!-- Tab Dịch Vụ -->
                                        <div class="collapse col-12 p-0" id="dichvu<?= $r['id'] ?>">
                                                <div class="card-box table-responsive p-0">
                                                    <table class="table table-hover table-success">
                                                        <thead>
                                                        <tr>
                                                            <th></th>
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
                                                                <th scope="row"></th>
                                                                <td class="editApm" id="dienxx<?= $r['id'] ?>" contenteditable="true"><?= $r['dien'] ?></td>
                                                                <td class="editApm" id="nuocxx<?= $r['id'] ?>" contenteditable="true"><?= $r['nuoc'] ?></td>
                                                                <td class="editApm" id="netxx<?= $r['id'] ?>" contenteditable="true"><?= $r['net'] ?></td>
                                                                <td class="editApm" id="matgiatxx<?= $r['id'] ?>" contenteditable="true"><?= $r['maygiat'] ?></td>
                                                                <td class="editApm" id="donphongxx<?= $r['id'] ?>" contenteditable="true"><?= $r['donphong'] ?></td>
                                                                <td class="editApm" id="parkingxx<?= $r['id'] ?>" contenteditable="true"><?= $r['parking'] ?></td>
                                                                <td class="editApm" id="hoahongxx<?= $r['id'] ?>" contenteditable="true"><?= $r['hoahong'] ?></td>
                                                                <td class="editApm" id="cocxx<?= $r['id'] ?>" contenteditable="true"><?= $r['coc'] ?></td>
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
                                                                <td class="editApm" id="songuoioxx<?= $r['id'] ?>" contenteditable="true"><?= $r['songuoio'] ?></td>
                                                                <td class="editApm" id="thangmayxx<?= $r['id'] ?>" contenteditable="true"><?= $r['thangmay'] ?></td>
                                                                <td class="editApm" id="bepxx<?= $r['id'] ?>" contenteditable="true"><?= $r['bep'] ?></td>
                                                                <td class="editApm" id="petxx<?= $r['id'] ?>" contenteditable="true"><?= $r['pet'] ?></td>
                                                                <td class="editApm" id="baovexx<?= $r['id'] ?>" contenteditable="true"><?= $r['baove'] ?></td>
                                                                <td class="editApm" id="daihanxx<?= $r['id'] ?>" contenteditable="true"><?= $r['daihan'] ?></td>
                                                                <td class="editApm" id="nganhanxx<?= $r['id'] ?>" contenteditable="true"><?= $r['nganhan'] ?></td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                        </div>
    
                                        <!-- Tab Phòng -->
                                        <div class="collapse col-12 p-0" id="room<?= $r['id'] ?>" >
                                            <!-- Table Room -->
                                            <div class="card-box table-responsive">
                                            <?php $qroom = "SELECT * FROM roomkit WHERE roomkit.id_apartment = '$r[id]' ";
                                                $result_room = mysqli_query($link, $qroom);
                                                if(mysqli_num_rows($result_room)){
                                                 ?>
                                                <table id="key-table" class="table table-bordered rounded " style="border: 4px solid blue;">
                                                    <thead>
                                                    <tr>
                                                        <th >Mã Phòng</th>
                                                        <th>Loại Phòng</th>
                                                        <th>Giá</th>
                                                        <th>Diện Tích</th>
                                                        <th>TrThai</th>
                                                        <th>Sắp Trống</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody >
                                                <?php while($rr = mysqli_fetch_array($result_room) ): ?>
                                                    <tr>
                                                        <td contenteditable="true" class="editRoom" id="maphongxx<?= $rr['id'] ?>" ><?= $rr['maphong'] ?></td>
                                                        <td contenteditable="true" class="editRoom" id="id_typexx<?= $rr['id'] ?>"><?= $rr['id_type'] ?></td>
                                                        <td contenteditable="true" class="editRoom" id="pricexx<?= $rr['id'] ?>"><?= $rr['price'] ?></td>
                                                        <td contenteditable="true" class="editRoom" id="squarexx<?= $rr['id'] ?>"><?= $rr['square'] ?></td>
                                                        <td contenteditable="true" class="editRoom" id="id_statusxx<?= $rr['id'] ?>"><?= $rr['id_status'] ?>
                                                            
                                                        </td>
                                                        <td contenteditable="true" class="editRoom" id="saptrongxx<?= $rr['id'] ?>"><?= $rr['saptrong'] ?></td>
                                                        <td class="text-center" ><button type="button" class="btn btn-pink btn-rounded waves-effect waves-light del-room" id="idroomxx<?= $rr['id'] ?>">X</button></td>
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
