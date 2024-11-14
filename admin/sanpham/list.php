<div class="row">
    <div class="row formtitle mb">
        <h1>Danh sách loại hàng hóa</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw">
        <select name="iddm" id="">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value=' . $id . '>' . $name . '</option>';
            }
            ?>
        </select>
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row formcontent">
        <div class="row mb10 formdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình</th>
                    <th>Giá</th>
                    <th>Thao tác</th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $hinhpath = '../uploads/' . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='90' >";
                    } else {
                        $hinh = 'no photo';
                    }
                    echo '<tr>
                            <td><input type="checkbox"></td>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $price . '</td>                            
                            <td>
                                <a href="' . $suasp . '"><input type="button" value="sửa"></a>
                                <a href="' . $xoasp . '"><input type="button" value="xóa"></a>    
                            </td>
                        </tr>';
                }
                ?>
            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsp "><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>