<?php
    function insert_danhmuc($tenLoai) {
        $sql = "INSERT INTO danhmuc(name) VALUES('$tenLoai')";
        pdo_execute($sql);
    }

    function delete_danhmuc($id) {
        $sql = "DELETE FROM danhmuc WHERE id = $id";
        pdo_execute($sql);
    }

    function loadAll_danhmuc() {
        $sql = "SELECT * FROM danhmuc ORDER BY id desc";
        $listdm = pdo_query($sql);
        return $listdm;
    }

    function loadOne_danhmuc($id) {
        $sql = "SELECT * FROM danhmuc WHERE id=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }

    function update_danhmuc($id,$tenLoai) {
        $sql = "UPDATE danhmuc SET name='".$tenLoai."' WHERE id=".$id;
        pdo_execute($sql);
    }
?>