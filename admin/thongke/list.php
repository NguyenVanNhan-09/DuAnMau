<!-- content -->
<div class="admin__ctn" style="overflow:auto;">
                    <div class="gird__row-admin ctn__content">
                        <h1 class="ctn__heading">Danh sách loại hàng</h1>

                        <!-- table list -->
                        <table class="table__list">
                            <thead class="table__list-header">
                                <tr>
                                    <th></th>
                                    <th>Mã danh mục</th>
                                    <th>Tên loại</th>
                                    <th>Số lương</th>
                                    <th>Giá cao nhất</th>
                                    <th>Giá thấp nhất</th>
                                    <th>Giá trung bình</th>
                                </tr>
                            </thead>
                            <?php foreach($listTk as $tk) : ?>
                                <tbody class="table__list-body">
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><?=$tk['madm']?></td>
                                        <td><?=$tk['tendm']?></td>
                                        <td><?=$tk['countsp']?></td>
                                        <td><?=$tk['maxprice']?></td>
                                        <td><?=$tk['minprice']?></td>
                                        <td><?=$tk['avgprice']?></td>
                                    </tr>
                                </tbody>
                            <?php endforeach ?>
                        </table>
                        <!-- btn -->
                        <div class="ctn__form-btn" style="margin-bottom: 16px;">
                            <input type="button" class="btn" value="Chọn tất cả">
                            <input type="button" class="btn" value="Bỏ chọn tất cả">
                            <input type="button" class="btn" value="Xoá các mục đã chọn">
                            <a href="index.php?act=list_bd"><input class="btn" type="button" name="submit" value="Xem biểu đò"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>