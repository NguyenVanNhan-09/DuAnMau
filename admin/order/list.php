<!-- content -->
<div class="admin__ctn" style="overflow:auto;">
                    <div class="gird__row-admin ctn__content">
                        <h1 class="ctn__heading">Danh sách sản phẩm</h1>
                        <!-- form tiềm kiếm -->
                        <form action="index.php?act=list_dh" method="post" class="form-search">
                            <div class="form-search__content">
                                <input type="text" name="keyword" class="form-search__input" placeholder="nhập mã để tìm đơn hàng">
                                <div class="form-search__submit">
                                    <input class="form-search__btn" type="submit" name="listok" value="search">
                                </div>  
                            </div>
                        </form>
                        <!-- table list -->
                        <table class="table__list">
                            <thead class="table__list-header">
                                <tr>
                                    <th></th>
                                    <th>Mã Đơn hàng</th>
                                    <th>Khách hàng</th>
                                    <th>Số lượng hàng</th>
                                    <th>Giá trị đơn hàng</th>
                                    <th>Tình trạng đơn hàng</th>
                                    <th>chức năng</th>
                                </tr>
                            </thead>
                            <?php foreach($listBill as $bill) : ?>
                                <?php
                                    $ttdh = get_ttdh($bill['status']);
                                    $countSp = loadall_bill_count($bill['id']);
                                    $updateBill = "index.php?act=update_bill&id=".$bill['id'];
                                    $deleteBill = "index.php?act=delete_bill&id=".$bill['id'];
                                ?>
                                <tbody class="table__list-body">
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>DA1-<?php echo $bill['id']; ?></td>
                                        <td><?php echo $bill['name']; ?></td>
                                        <td><?=$countSp?></td>
                                        <td><?php echo $bill['sum_total']; ?></td>
                                        <td><?= $ttdh?></td>
                                        <td class="btn-up-de">
                                            <a 
                                                href="<?=$updateBill?>">
                                                <button class="btn-delete btn" style="padding: 10px 20px;">sửa</button>
                                            </a>
                                            <a 
                                                onclick="return confirm('Ban co chac muon xoa khong ?')"
                                                href="<?=$deleteBill?>">
                                                <button class="btn-delete btn" style="padding: 10px 20px;">xoá</button>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                        <?php endforeach; ?>

                        </table>
                        <!-- btn -->
                        <div class="ctn__form-btn" style="margin-bottom: 16px;">
                            <input type="button" class="btn" value="Chọn tất cả">
                            <input type="button" class="btn" value="Bỏ chọn tất cả">
                            <input type="button" class="btn" value="Xoá các mục đã chọn">
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
