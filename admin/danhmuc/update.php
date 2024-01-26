<?php 
    if(is_array($updateDm)){
        extract($updateDm);
    }
?>
<div class="admin__ctn">
                    <div class="gird__row-admin ctn__content">
                        <h1 class="ctn__heading">Cập nhật loại hàng hoá</h1>
                        
                        <!-- form add -->
                        <div class="ctn__form">
                            <form action="index.php?act=upload_dm" method="post" class="ctn__form-add">
                                <label for="">Mã loại</label>
                                <input class="ctn__form-add-input" type="text" name="maloai" disabled placeholder="Auto">
                                <label for="">Tên loại</label>
                                <input class="ctn__form-add-input" type="text" name="tenloai" value="<?php if(isset($updateDm['name']) && ($updateDm['name']!="")) echo $updateDm['name'];?>" required>
                                <!-- btn -->
                                <div class="ctn__form-btn">
                                    <input type="hidden" name="id" value="<?php if(isset($updateDm['id']) && ($updateDm['id']>0)) echo $updateDm['id']; ?>">
                                    <input class="btn" type="submit" name="upload" value="Cập nhât">
                                    <input class="btn" type="reset" name="submit" value="Nhập lại">
                                    <a href="index.php?act=list_dm"><input class="btn" type="button" name="submit" value="Danh sách"></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>