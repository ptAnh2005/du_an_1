<?php

    function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan) {
        $sql = "INSERT INTO binhluan(noidung, iduser, idpro, ngaybinhluan) VALUES('$noidung', '$iduser', '$idpro', '$ngaybinhluan')";
        pdo_execute($sql);
    }

    function loadAll_binhluan($idpro) {
        $sql = "SELECT * FROM binhluan WHERE 1";
        if ($idpro>0) {
            $sql.=" AND idpro='".$idpro."' ";
        } else {
            $sql.=" ORDER BY id desc";
        }
        $listbl = pdo_query($sql);
        return $listbl;
    }

    function delete_binhluan($id) {
        $sql = "DELETE FROM binhluan WHERE id = $id";
        pdo_execute($sql);
    }
?>
