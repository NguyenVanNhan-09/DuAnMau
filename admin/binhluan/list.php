<!-- content -->
<div class="admin__ctn" style="overflow:auto;">
                    <div class="gird__row-admin ctn__content">
                        <h1 class="ctn__heading">Danh sách loại hàng</h1>

                        <!-- table list -->
                        <table class="table__list">
                            <thead class="table__list-header">
                                <tr>
                                    <th></th>
                                    <th>Mã</th>
                                    <th>Tên</th>
                                    <th>Sản phẩm</th>
                                    <th>nội dung</th>
                                    <th>chức năng</th>
                                </tr>
                            </thead>
                            <?php foreach($listComment as $cm) : ?>
                                <tbody class="table__list-body">
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><?=$cm['id']?></td>
                                        <td><?=$cm['id_user']?></td>
                                        <td><?=$cm['id_pro']?></td>
                                        <td><?=$cm['noidung']?></td>
                                        <td class="btn-up-de">
                                            <a 
                                                onclick="return confirm('Ban co chac muon xoa khong ?')" 
                                                href="index.php?act=delete_comment&id=<?= $cm['id']?>">
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
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>