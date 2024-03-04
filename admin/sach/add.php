<link rel="stylesheet" href="../../assets/style/admin.css">
<div class="admin__ctn">
                    <div class="gird__row-admin ctn__content">
                        <h1 class="ctn__heading">Thêm mới Sách</h1>
                        
                        <!-- form add -->
                        <div class="ctn__form">
                            <form action="index.php?act=add_sach" method="post" enctype="multipart/form-data" class="ctn__form-add">
                                <label for="">Tên Sách</label>
                                <input class="ctn__form-add-input" type="text" id="tensach"  name="tensach" required autofocus>
                                <label for="">Ảnh Sách</label>
                                <input class="ctn__form-add-input" type="file" id="hinhanh"  name="hinhanh">
                                <label for="">Giá Sách</label>
                                <input class="ctn__form-add-input" type="text" id="gia"  name="gia" required>
                                <label for="">Mô tả chi tiết Sách</label>
                                <input class="ctn__form-add-input" type="text" id="mota"  name="mota" required>
                                <label for="">Danh mục Sách</label>
                                <select name="id_nxb" class="form__select">
                                    <option value="0" disabled>Danh mục</option>
                                    <?php foreach($listNxb as $nxb) : ?>
                                        <option value="<?= $nxb['id_nxb']?>"><?= $nxb['name']?></option>
                                    <?php endforeach?>
                                </select>  
                                <!-- btn -->
                                <div class="ctn__form-btn">
                                    <input onclick="return kiemtraform()" class="btn" type="submit" name="addnew" value="Thêm mới">
                                    <input class="btn" type="reset" name="submit" value="Nhập lại">
                                    <a href="index.php?act=list_sach"><input class="btn" type="button" name="submit" value="Danh sách"></a>
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
        var hinhanh = document.getElementById("hinhanh");
        if (hinhanh.value == "") {
            alert("Vui lòng nhập địa chỉ!");
            hinhanh.focus();
            return false;
        }
        var gia = document.getElementById("gia");
        if (gia.value == "") {
            alert("Vui lòng nhập sdt!");
            gia.focus();
            return false;
        }
        var mota = document.getElementById("mota");
        if (mota.value == "") {
            alert("Vui lòng nhập sdt!");
            mota.focus();
            return false;
        }
    }
</script>