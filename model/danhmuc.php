<!-- CRUD - danh mục -->
<?php  
    function add_danhmuc($tenLoai){
        $sql = "INSERT INTO danhmuc(name) VALUES('$tenLoai')";
        pdo_execute($sql);
    };
    function delete_danhmuc($id){
        $sql = "DELETE FROM danhmuc WHERE id=$id";
        pdo_execute($sql);
    };
    function list_danhmuc(){
        $sql="select * from danhmuc order by id desc";
        $listDanhMuc = pdo_query($sql);
        return $listDanhMuc;
    };

    function update_danhmuc($id){
        $sql = "SELECT * FROM danhmuc where id=$id";
        $updateDm = pdo_query_one($sql);
        return $updateDm;
    };
    function upload_danhmuc($tenLoai,$id){
        $sql="update danhmuc set name='$tenLoai' where id=$id";
        pdo_execute($sql);
    };
?>