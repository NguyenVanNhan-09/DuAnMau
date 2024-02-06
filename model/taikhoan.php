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
?>