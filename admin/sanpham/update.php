<?php
if (is_array($sanpham)) {
    extract($sanpham);
    $hinhpath = '../uploads/' . $img;
    if (is_file($hinhpath)) {
        $hinh = "<img src='" . $hinhpath . "' height='90' >";
    } else {
        $hinh = 'no photo';
    }
}
?>
<div class="row">
    <div class="row formtitle">
        <h1>Cập nhật loại hàng hóa</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <select name="iddm" id="">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($iddm==$id) {
                            echo '<option value="' . $id . '"selected>' . $name . '</option>';
                        }else{
                            echo '<option value="' . $id . '">' . $name . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp" value="<?= $name ?>">
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="text" name="giasp" value="<?= $price ?>">
            </div>
            <div class="row mb10">
                Hình ảnh <br>
                <?= $hinh ?>
                <input type="file" name="hinh">
            </div>
            <div class="row mb10">
                Mô tả <br>
                <textarea name="mota" cols="30" rows="10" <?= $mota ?>></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $sanpham['id'] ?>">
                <input name="capnhat" type="submit" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>