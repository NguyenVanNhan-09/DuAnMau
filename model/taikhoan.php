<?php 
    function add_acc($name, $email, $pass){
        $sql = "INSERT INTO taikhoan(name,email,pass) VALUES('$name', '$email', '$pass')";
        pdo_execute($sql);
    };

    function check_acc($email,$pass){
        $sql = "SELECT * FROM taikhoan WHERE email='".$email."' AND pass='".$pass."'";
        $checkacc = pdo_query_one($sql);
        return $checkacc;
    };

    function check_email($email){
        $sql = "SELECT * FROM taikhoan WHERE email='".$email."'";
        $checkemail = pdo_query_one($sql);
        return $checkemail;
    };

    function update_acc($id){
        $sql = "SELECT * FROM taikhoan where id=$id";
        $updateAcc = pdo_query_one($sql);
        return $updateAcc;
    };
    
    function upload_acc($id,$name,$email,$pass,$address,$tele){
        $sql="UPDATE taikhoan SET name='$name', email='$email', pass='$pass', address='$address', tele='$tele' where id=$id";
        pdo_execute($sql);
    };

    function delete_acc($id){
        $sql = "DELETE FROM taikhoan WHERE id=$id";
        pdo_execute($sql);
    };

    function list_acc(){
        $sql="select * from taikhoan order by id desc";
        $listAcc = pdo_query($sql);
        return $listAcc;
    };
?>