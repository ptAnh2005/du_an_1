<?php
    function insert_taikhoan($email, $user, $pass) {
        $sql = "INSERT INTO taikhoan(email, user, pass) VALUES('$email', '$user', '$pass')";
        pdo_execute($sql);
    }

    function check_user($user, $password) {
        $sql = "SELECT * FROM taikhoan WHERE user='".$user."' AND pass='".$password."' ";
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function check_email($email) {
        $sql = "SELECT * FROM taikhoan WHERE email='".$email."' ";
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function update_taikhoan($id, $user, $pass, $email, $address, $tel) {
        $sql = "UPDATE taikhoan SET user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."' WHERE id=".$id;
        pdo_execute($sql);
    }

    function loadAll_taikhoan() {
        $sql = "SELECT * FROM taikhoan ORDER BY id desc";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
?>