<link rel="stylesheet" href="../../assets/style/admin.css">
<!-- content -->
<div class="admin__ctn" style="overflow:auto;">
                    <div class="gird__row-admin ctn__content">
                        <h1 class="ctn__heading">Danh sách loại hàng</h1>

                        <!-- table list -->
                        <table class="table__list">
                            <thead class="table__list-header">
                                <tr>
                                    <th></th>
                                    <th>Mã Loại</th>
                                    <th>Tên loại</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <?php 
                                foreach ($listDanhMuc as $danhmuc) {
                                    extract($danhmuc);
                                    $updateDm="index.php?act=update_dm&id=".$id;
                                    $deleteDm="index.php?act=delete_dm&id=".$id;
                                    echo '
                                    <tbody class="table__list-body">
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td class="btn-up-de">
                                                <a href="'.$updateDm.'"><button class="btn-delete btn" style="padding: 10px 20px;">sửa</button></a>
                                                <a href="'.$deleteDm.'"><button class="btn-delete btn" style="padding: 10px 20px;">xoá</button></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    ';
                                }   
                            ?>
                        </table>
                        <!-- btn -->
                        <div class="ctn__form-btn" style="margin-bottom: 16px;">
                            <input type="button" class="btn" value="Chọn tất cả">
                            <input type="button" class="btn" value="Bỏ chọn tất cả">
                            <input type="button" class="btn" value="Xoá các mục đã chọn">
                            <a href="index.php?act=add_dm"><input class="btn" type="button" name="submit" value="Thêm mới"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>