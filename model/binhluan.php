<?php 
    function add_comment($noiDung,$idUser,$idPro,$ngayBinhLuan){
        $sql = "INSERT INTO binhluan(noidung,id_user,id_pro,ngaybinhluan) VALUE ('$noiDung','$idUser','$idPro','$ngayBinhLuan')";
        pdo_execute($sql);
    };

    function list_comment($idPro){
        if($idPro>0){
            $sql = "SELECT * FROM binhluan WHERE id_pro='$idPro' ORDER BY id DESC";
        }else{
            $sql = "SELECT * FROM binhluan ORDER BY id DESC";
        };
        
        $listComment = pdo_query($sql);
        return $listComment;
    };

    function delete_comment($id){
        $sql = "DELETE FROM binhluan WHERE id=$id";
        pdo_execute($sql);
    };
    function load_name_user($id){
        if($idDm > 0){
            $sql = "SELECT * FROM taikhoan where id=$id";
            $acc = pdo_query_one($sql);
            extract($acc);
            return $name;
        }else{
            return "";
        }
    }
?>