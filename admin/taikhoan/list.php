<!-- content -->
<div class="admin__ctn" style="overflow:auto;">
                    <div class="gird__row-admin ctn__content">
                        <h1 class="ctn__heading">Danh sách tài khoản</h1>

                        <!-- table list -->
                        <table class="table__list">
                            <thead class="table__list-header">
                                <tr>
                                    <th></th>
                                    <th>Mã</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Mật khẩu</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>
                                    <th>Quyền hạn</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <?php foreach($listAcc as $acc) : ?>
                                <tbody class="table__list-body">
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><?=$acc['id']?></td>
                                        <td><?=$acc['name']?></td>
                                        <td><?=$acc['email']?></td>
                                        <td><?=$acc['pass']?></td>
                                        <td><?=$acc['address']?></td>
                                        <td><?=$acc['tele']?></td>
                                        <td><?=$acc['roll']?></td>
                                        <td class="btn-up-de">
                                            <a 
                                                href="index.php?act=update_acc&id=<?= $acc['id']?>">
                                                <button class="btn-delete btn" style="padding: 10px 20px;">sửa</button>
                                            </a>
                                            <a 
                                                onclick="return confirm('Ban co chac muon xoa khong ?')" 
                                                href="index.php?act=delete_acc&id=<?= $acc['id']?>">
                                                <button class="btn-delete btn" style="padding: 10px 20px;">xoá</button>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach ?>
                        </table>
                        <!-- btn -->
                        <div class="ctn__form-btn" style="margin-bottom: 16px;">
                            <input type="button" class="btn" value="Chọn tất cả">
                            <input type="button" class="btn" value="Bỏ chọn tất cả">
                            <input type="button" class="btn" value="Xoá các mục đã chọn">
                            <a href="index.php?act=add_acc"><input class="btn" type="button" name="submit" value="Thêm mới"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>