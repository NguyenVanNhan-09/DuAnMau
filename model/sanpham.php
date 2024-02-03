<!-- CRUD - sản phẩm -->
<?php  
    function add_sanpham($nameSp, $priceSp, $detailSp, $imgSp, $idDm){
        $sql = "INSERT INTO sanpham(name,price,img,detail,id_dm) VALUES('$nameSp', '$priceSp', '$imgSp', '$detailSp', '$idDm')";
        pdo_execute($sql);
    };
    function delete_sanpham($id){
        $sql = "DELETE FROM sanpham WHERE id=$id";
        pdo_execute($sql);
    };

    function list_sanpham_user_favorite(){
        $sql = "SELECT * FROM sanpham WHERE view > 10 ORDER BY view DESC";
        $listSanPham = pdo_query($sql);
        return $listSanPham;
    };
    

    function list_sanpham_user(){
        $sql = "SELECT * FROM sanpham order by id desc";
        $listSanPham = pdo_query($sql);
        return $listSanPham;
    };

    function list_sanpham($keyWord, $idDm){
        $sql = "SELECT * FROM sanpham where 1";
        if($keyWord!=""){
            $sql.=" and name like '%".$keyWord."%'";
        };
        if($idDm > 0){
            $sql.=" and id_dm like '%".$idDm."%'";
        };
        // nối chuỗi < .=" ...">
        $sql.= " order by id desc";
        $listSanPham = pdo_query($sql);
        return $listSanPham;
    };
    function update_sanpham($id){
        $sql = "SELECT * FROM sanpham where id=$id";
        $updateSp = pdo_query_one($sql);
        return $updateSp;
    };
    function upload_sanpham($id, $nameSp, $priceSp, $imgSp, $detailSp, $idDm){
        if($imgSp != ""){
            $sql = "update sanpham set name='$nameSp', price='$priceSp', img='$imgSp', detail='$detailSp', id_dm='$idDm' where id=$id";
        } else {
            $sql = "update sanpham set name='$nameSp', price='$priceSp', detail='$detailSp', id_dm='$idDm' WHERE id=$id";
        }
        pdo_execute($sql);
    };
    
?>