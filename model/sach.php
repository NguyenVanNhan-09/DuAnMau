<?php 
    function list_sach(){
        $sql="select * from sach order by id desc";
        $listSach = pdo_query($sql);
        return $listSach;
    };
    function list_nhaxuatban(){
        $sql="select * from nhaxuatban order by id_nxb desc";
        $listNxb = pdo_query($sql);
        return $listNxb;
    };
    function add_sach($tensach, $gia, $mota, $hinhanh, $idNxb){
        $sql = "INSERT INTO sach(tensach,hinhanh,gia,mota,id_nxb ) VALUES('$tensach', '$hinhanh', '$gia', '$mota', '$idNxb')";
        pdo_execute($sql);
    };
    function delete_sach($id){
        $sql = "DELETE FROM sach WHERE id=$id";
        pdo_execute($sql);
    };
    function update_sach($id){
        $sql = "SELECT * FROM sach where id=$id";
        $updateSach = pdo_query_one($sql);
        return $updateSach;
    };
    function upload_sach($id, $tensach, $gia, $mota, $hinhanh, $idNxb){
        if($hinhanh != ""){
            $sql = "update sach set tensach='$tensach', gia='$gia', mota='$mota', hinhanh='$hinhanh',  id_nxb ='$idNxb' where id=$id";
        } else {
            $sql = "update sach set tensach='$tensach', gia='$gia', mota='$mota', id_nxb ='$idNxb' WHERE id=$id";
        }
        pdo_execute($sql);
    };
?>