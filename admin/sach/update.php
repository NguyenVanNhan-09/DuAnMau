<?php 
    $hinhPath = "../upload/".$updateSach['hinhanh'];
    $hinh = (is_file($hinhPath)) ? "<img src='".$hinhPath."' height='100' width='100'>" : "no image";
?>
<div class="admin__ctn">
                    <div class="gird__row-admin ctn__content">
                        <h1 class="ctn__heading">Sửa sản phẩm</h1>
                        
                        <!-- form add -->
                        <div class="ctn__form">
                            <form action="index.php?act=upload_sach" method="post" enctype="multipart/form-data" class="ctn__form-add">
                                <label for="">Tên sản phẩm</label>
                                <input class="ctn__form-add-input" type="text" id="tensach" name="tensach" value="<?= $updateSach['tensach']?>">
                                <label for="">Giá sản phẩm</label>
                                <input class="ctn__form-add-input" type="text" id="gia" name="gia" value="<?= $updateSach['gia']?>">
                                <label for="">Ảnh sản phẩm</label>
                                <div class="mt-15 mb-15 flex align-center">
                                    <div class="mr-15"><?= $hinh?></div>
                                    <input class="ctn__form-add-input" type="file" name="hinhanh">
                                </div>
                                <label for="">Mô tả chi tiết sản phẩm</label>
                                <input class="ctn__form-add-input" type="text" id="mota" name="mota" value="<?= $updateSach['mota']?>">
                                
                                <select name="id_nxb" class="form__select">
                                    <option value="0" selected>tất cả</option>
                                    <?php foreach($listNxb as $nxb) : ?>
                                        <option value="<?= $nxb['id_nxb']?>" <?=($nxb['id_nxb']==$updateSach['id_nxb']) ? 'selected' : '' ?>>
                                            <?= $nxb['name']?>
                                        </option>
                                    <?php endforeach?>
                                </select> 
                                <!-- btn -->
                                <div class="ctn__form-btn">
                                    <input type="hidden" name="id" value="<?php if(isset($updateSach['id']) && ($updateSach['id']>0)) echo $updateSach['id']; ?>">
                                    <input onclick="return kiemtraform()" class="btn" type="submit" name="upload" value="Cập nhật">
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


<script>
    //Validate thông báo chưa nhập
    function kiemtraform() {
        var tensach = document.getElementById("tensach");
        if (tensach.value == "") {
            alert("Vui lòng nhập tên!");
            tensach.focus();
            return false;
        }
        var gia = document.getElementById("gia");
        if (gia.value == "") {
            alert("Vui lòng nhập giá!");
            gia.focus();
            return false;
        }
        var mota = document.getElementById("mota");
        if (mota.value == "") {
            alert("Vui lòng nhập Mô tả!");
            mota.focus();
            return false;
        }
    }
</script>