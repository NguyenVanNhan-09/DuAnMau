<!-- content -->
<div class="gird mt-80 mb-80">  
    <div class="admin__ctn" style="overflow:auto;">
                        <div class="gird__row-admin ctn__content">
                            <h1 class="ctn__heading">Đơn hàng của bạn</h1>

                            <!-- table list -->
                            <table class="table__list">
                                <thead class="table__list-header">
                                    <tr>
                                        <th>Mã Loại</th>
                                        <th>Ngày đặt hàng</th>
                                        <th>Số lượng</th>
                                        <th>Tổng đơn hàng</th>
                                        <th>Tình trạng đơn hàng</th>
                                    </tr>
                                </thead>
                                
                                <tbody class="table__list-body">
                                <?php
                                foreach ($listBill as $key => $bill) {
                                    $ttdh = get_ttdh($bill['status']);
                                    $countSp = loadall_bill_count($bill['id']);
                                ?>
                                    <tr>
                                        <td>DA1-<?php echo $bill['id'] ?></td>
                                        <td><?php echo date("d/m/Y", strtotime($bill['orderDate'])) ?></td>
                                        <td><?php echo $countSp ?></td>
                                        <td><?php echo number_format($bill['sum_total'], 0, ",", ".") ?> VND</td>
                                        <td><?php echo $ttdh ?></td>
                                    </tr>
                                <?php }?>
                                </tbody>

                                
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>