<link rel="stylesheet" href="../../assets/style/admin.css">
<div class="admin__ctn">
                    <div class="gird__row-admin ctn__content">
                        <h1 class="ctn__heading">Thêm mới sản phẩm</h1>
                        
                        <!-- form add -->
                        <div class="ctn__form">
                            <form action="index.php?act=add_sp" method="post" enctype="multipart/form-data" class="ctn__form-add">
                                <label for="">Tên sản phẩm</label>
                                <input class="ctn__form-add-input" type="text" name="namesp" required autofocus>
                                <label for="">Giá sản phẩm</label>
                                <input class="ctn__form-add-input" type="text" name="pricesp" required>
                                <label for="">Ảnh sản phẩm</label>
                                <input class="ctn__form-add-input" type="file" name="imgsp">
                                <label for="">Mô tả chi tiết sản phẩm</label>
                                <input class="ctn__form-add-input" type="text" name="detailsp" required>
                                <label for="">Danh mục sản phẩm</label>
                                <select name="iddm" class="form__select">
                                    <option value="0" disabled>Danh mục</option>
                                    <?php foreach($listDanhMuc as $danhMuc) : ?>
                                        <option value="<?= $danhMuc['id']?>"><?= $danhMuc['name']?></option>
                                    <?php endforeach?>
                                </select>   
                                <!-- btn -->
                                <div class="ctn__form-btn">
                                    <input class="btn" type="submit" name="addnew" value="Thêm mới">
                                    <input class="btn" type="reset" name="submit" value="Nhập lại">
                                    <a href="index.php?act=list_sp"><input class="btn" type="button" name="submit" value="Danh sách"></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>