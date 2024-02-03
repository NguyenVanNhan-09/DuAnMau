
<?php 
    if(is_array($updateSp)){
        
    }
?>
<?php 
    $hinhPath = "../upload/".$updateSp['img'];
    $hinh = (is_file($hinhPath)) ? "<img src='".$hinhPath."' height='100' width='100'>" : "no image";
?>
<div class="admin__ctn">
                    <div class="gird__row-admin ctn__content">
                        <h1 class="ctn__heading">Sửa sản phẩm</h1>
                        
                        <!-- form add -->
                        <div class="ctn__form">
                            <form action="index.php?act=upload_sp" method="post" enctype="multipart/form-data" class="ctn__form-add">
                                <label for="">Tên sản phẩm</label>
                                <input class="ctn__form-add-input" type="text" name="namesp" value="<?= $updateSp['name']?>" required>
                                <label for="">Giá sản phẩm</label>
                                <input class="ctn__form-add-input" type="text" name="pricesp" value="<?= $updateSp['price']?>" required>
                                <label for="">Ảnh sản phẩm</label>
                                <div class="mt-15 mb-15 flex align-center">
                                    <div class="mr-15"><?= $hinh?></div>
                                    <input class="ctn__form-add-input" type="file" name="imgsp">
                                </div>
                                <label for="">Mô tả chi tiết sản phẩm</label>
                                <input class="ctn__form-add-input" type="text" name="detailsp" value="<?= $updateSp['detail']?>" required>
                                
                                <select name="iddm" class="form__select">
                                    <option value="0" selected>tất cả</option>
                                    <?php foreach($listDanhMuc as $danhMuc) : ?>
                                        <option value="<?= $danhMuc['id']?>" <?=($danhMuc['id']==$updateSp['id_dm']) ? 'selected' : '' ?>>
                                            <?= $danhMuc['name']?>
                                        </option>
                                    <?php endforeach?>
                                </select> 
                                <!-- btn -->
                                <div class="ctn__form-btn">
                                    <input type="hidden" name="id" value="<?php if(isset($updateSp['id']) && ($updateSp['id']>0)) echo $updateSp['id']; ?>">
                                    <input class="btn" type="submit" name="upload2" value="Cập nhật">
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

