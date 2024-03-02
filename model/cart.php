<?php 
    function add_bill($name,$tele,$address,$orderDate,$sumTotal,$payMethod,$idUser){
        $sql = "INSERT INTO bill(name, tele, address, orderDate, sum_total, pay_methhod, id_user) VALUES ('$name', '$tele', '$address', '$orderDate', '$sumTotal', '$payMethod', '$idUser')";
        return pdo_execute_return_lastInsertId($sql);
    };
    function add_cart($idUser,$name,$price,$quantity,$sumTotal,$idBill){
        $sql = "INSERT INTO cart(idUser,name,price,quantity,sum_total,idbill) VALUES('$idUser', '$name', '$price', '$quantity','$sumTotal','$idBill')";
        return pdo_execute($sql);
    };
    function loadone_bill($id){
        $sql = "SELECT * FROM bill where id=$id";
        $bill = pdo_query_one($sql);
        return $bill;
    };
    function loadall_bill($keyword = "",$idUser = 0){
        $sql = "SELECT * FROM bill where 1";
        if($idUser > 0) $sql.=" AND id_user=$idUser";
        if($keyword != "") $sql.=" AND id like '%".$keyword."%'";   
        $sql.=" order by id desc";
        $listBill = pdo_query($sql);
        return $listBill;
    };
    function loadall_bill_count($idBill){
        $sql = "SELECT * FROM cart where idbill=$idBill";
        $listBill = pdo_query($sql);
        return sizeof($listBill);
    };
    function get_ttdh($n){
        switch ($n) {
            case '0':
                $tt = "Đơn hàng mới";
                break;
            
            case '1':
                $tt = "Đang xử lý";
                break;
            
            case '2':
                $tt = "Đang giao hàng";
                break;
            case '3':
                $tt = "Hoàn tất";
                break;
            case '4':
                $tt = "Đơn hàng bị hủy";
                break;
            default:
                $tt = "Đơn hàng mới";
                break;
        }
        return $tt;
    }
    function delete_bill($id){
        $sql = "DELETE FROM bill WHERE id=$id";
        pdo_execute($sql);
    };
    function update_bill($id, $status)
    {
        $sql = "UPDATE bill SET `status` ='$status' WHERE id = $id";
        pdo_execute($sql);
    }

    // thống kể 
    
    function loadall_tk() {
        $sql = "SELECT danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice ";
        $sql .= "FROM sanpham LEFT JOIN danhmuc ON danhmuc.id = sanpham.id_dm ";
        $sql .= "GROUP BY danhmuc.id ORDER BY danhmuc.id DESC";
        $listTk = pdo_query($sql);
        return $listTk;
    }    
?>
