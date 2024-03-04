<!-- content -->
<div class="admin__ctn" style="overflow:auto;">
                    <div class="gird__row-admin ctn__content">
                        <h1 class="ctn__heading">Danh sách sách</h1>
                        <!-- table list -->
                        <table class="table__list">
                            <thead class="table__list-header">
                                <tr>
                                    <th></th>
                                    <th>Mã sách</th>
                                    <th>Tên sách</th>
                                    <th>Ảnh</th>
                                    <th>Giá tiền</th>
                                    <th>Mô tả </th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <?php foreach($listSach as $sach) : ?>
                                <?php
                                    $updateSach = "index.php?act=update_sach&id=".$sach['id'];
                                    $deleteSach = "index.php?act=delete_sach&id=".$sach['id'];
                                    $hinhPath = "../upload/".$sach['hinhanh'];
                                    $hinh = (is_file($hinhPath)) ? "<img src='".$hinhPath."' height='100' width='100'>" : "<span style='color: red;'>không có ảnh</span>";
                                ?>
                                <tbody class="table__list-body">
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><?php echo $sach['id']; ?></td>
                                        <td><?php echo $sach['tensach']; ?></td>
                                        <td style="height: 100px; width: 100px; background-size: cover; background-position: center;"><?php echo $hinh?></td>
                                        <td><?php echo $sach['gia']; ?></td>
                                        <td><?php echo $sach['mota']; ?></td>
                                        <td class="btn-up-de">
                                            <a 
                                                href="<?=$updateSach?>">
                                                <button class="btn-delete btn" style="padding: 10px 20px;">sửa</button>
                                            </a>
                                            <a 
                                                onclick="return confirm('Ban co chac muon xoa khong ?')"
                                                href="<?=$deleteSach?>">
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
                            <a href="index.php?act=add_sach"><input class="btn" type="button" name="submit" value="Thêm mới"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
