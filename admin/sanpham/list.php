<!-- content -->
<div class="admin__ctn" style="overflow:auto;">
                    <div class="gird__row-admin ctn__content">
                        <h1 class="ctn__heading">Danh sách sản phẩm</h1>
                        <!-- form tiềm kiếm -->
                        <form action="index.php?act=list_sp" method="post" class="form-search">
                            <div class="form-search__content">
                                <input type="text" name="keyword" class="form-search__input" placeholder="nhập từ khoá để tìm sản phẩm">
                                <div class="form-search__submit">
                                    <select name="iddm" id="" class="form-search__select">
                                        <option class="form-search__option" value="0" selected>tất cả</option>
                                        <?php foreach($listDanhMuc as $danhMuc) : ?>
                                            <option class="form-search__option" value="<?= $danhMuc['id']?>"><?= $danhMuc['name']?></option>
                                        <?php endforeach?>
                                    </select>
                                    <input class="form-search__btn" type="submit" name="listok" value="search">
                                </div>  
                            </div>
                        </form>
                        <!-- table list -->
                        <table class="table__list">
                            <thead class="table__list-header">
                                <tr>
                                    <th></th>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh sản phẩm</th>
                                    <th>Giá tiền</th>
                                    <th>Mô tả sản phẩm</th>
                                    <th>Lượt xem</th>
                                    <th>chức năng</th>
                                </tr>
                            </thead>
                            <?php foreach($listSanPham as $sanPham) : ?>
                                <?php
                                    $updateSp = "index.php?act=update_sp&id=".$sanPham['id'];
                                    $deleteSp = "index.php?act=delete_sp&id=".$sanPham['id'];
                                    $hinhPath = "../upload/".$sanPham['img'];
                                    $hinh = (is_file($hinhPath)) ? "<img src='".$hinhPath."' height='100'>" : "kh có ảnh";
                                    // <?php
                                    //     $hinhPath = "../upload/".$sanPham['img'];
                                    //     echo (is_file($hinhPath)) ? "<img src='".$hinhPath."' height='100'>" : "no image"; 
                                    // ? >
                                ?>
                                <tbody class="table__list-body">
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><?php echo $sanPham['id']; ?></td>
                                        <td><?php echo $sanPham['name']; ?></td>
                                        <td><?php echo $hinh;?></td>
                                        <td><?php echo $sanPham['price']; ?></td>
                                        <td><?php echo $sanPham['detail']; ?></td>
                                        <td><?php echo $sanPham['view']; ?></td>
                                        <td class="btn-up-de">
                                            <a 
                                                href="<?=$updateSp?>">
                                                <button class="btn-delete btn" style="padding: 10px 20px;">sửa</button>
                                            </a>
                                            <a 
                                                onclick="return confirm('Ban co chac muon xoa khong ?')"
                                                href="<?=$deleteSp?>">
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
                            <a href="index.php?act=add_sp"><input class="btn" type="button" name="submit" value="Thêm mới"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
