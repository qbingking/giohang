<div class="card-box">
    <h4 class="header-title mb-3">Bảng Hợp Đồng</h4>
    <?php $qdqd = "SELECT * FROM contract, user WHERE user.account = contract.id_user ORDER BY contract.date_in DESC"; 
          $rr = mysqli_query($link, $qdqd);

     ?>

                            <div class="table-responsive">
                                <table class=" tbctm table m-b-0 ">
                                    <thead>
                                    <tr>
                                        <th>Khách Hàng</th>
                                        <th>GT</th>
                                        <th>MaP.Diachi</th>
                                        <th>Giá Thuê</th>
                                        
                                        <th class="text-success">Income</th>
                                        <th>Ngày Ký - Note</th>

   <!-- $INCOME_SETUP = array(1 => [50, 55, 60], 
                              2 => [50, 60, 60], 
                              3 => [70, 70, 70],
                              4 => [65, 65, 65] ); -->
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($r = mysqli_fetch_array($rr)): ?>
                                    <tr >
                                        <td class="p-0">
                                            <ul>
                                                <details style="font-weight: inherit;">
                                                  <summary ><?=mb_substr($r['customer'], 0, 50, $encoding='UTF-8') ?></summary>
                                                  <ul style="font-size: 12px; font-weight: bold">
                                                    <li><?= $r['birth']; ?></li>
                                                    <li><?= $r['phone'] ?></li>
                                                    <li><?= $r['mxh'] ?></li>
                                                 </ul>
                                                </details>
                                            </ul> 
                                        </td>
                                        <td class="p-0"><span class="text-warning font-weight-bold"><?= $r['gender'] ?></span><p class=""></p> </td>
                                        
                                        <td class="p-0"> 
                                            <?= $r['address'] ?> <br>
                                            <span class="badge bg-light"><?= $r['maphong']?></span>
                                            <span class="badge badge-custom"><?=intval($r['hoahong']/12*$r['month'])."%" ?></span>
                                            <span class="badge badge-success"><?= $r['month'] ?> m</span> </td>
                                        <td class="p-0">
                                            <h6><?= number_format($r['price']/1000)  ?>tr</h6>
                                        </td>

                                        <?php $income_company = ($r['price'] * ($r['hoahong']/100)/12*$r['month'] ); ?>
                                        <td class="p-0">
                                            <h6 class="text-success">
                                            <?= number_format(($r['price'] <= 6000000 ? $income_company*$INCOME_SETUP[$r['status']][0]: ($r['price'] < 10000000 ? $income_company*$INCOME_SETUP[$r['status']][1]: $income_company*$INCOME_SETUP[$r['status']][2] ))/1000) ?> tr
                                            </h6>
                                            <h6 class="text-muted"><?= $r['fullname'] ?></h6>
                                        </td>
                                        <td style="padding-bottom: 0px; padding-top: 0px;" class="p-0"
                                        ><div style="font-size: 14px">
                                            <div class="card-box ribbon-box mb-0 pb-0">
                                                <div class="ribbon ribbon-purple mb-0"><span><?= $r['date_in'] ?></span></div>
                                                    <p>
                                                        <details style="color:blue">
                                                          <summary ><?=mb_substr($r['note'], 0, 30, $encoding='UTF-8') ?></summary>
                                                          <p class="m-b-0"><?=mb_substr($r['note'], 30,800, $encoding='UTF-8') ?></p>
                                                        </details>
                                                    </p>
                                                    
                                                
                                            </div>
                                        </div></td>
                                    </tr>
                                        <?php endwhile; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>