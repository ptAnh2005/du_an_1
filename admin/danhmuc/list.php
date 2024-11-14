<div class="row formtitle">
                <h1>DANH SÁCH LOẠI HÀNG</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>
                        <?php 
                        foreach ($listdm as $dm) {
                            extract($dm);
                            $suaDanhMuc = "index.php?act=suaDanhMuc&id=".$id;
                            $xoaDanhMuc = "index.php?act=xoaDanhMuc&id=".$id;
                            echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>
                                        <a href="'.$suaDanhMuc.'"><input type="button" value="Sửa"></a>
                                        <a href="'.$xoaDanhMuc.'"><input type="button" value="Xóa"></a>
                                    </td>
                                  </tr>';
                        }
                        ?>
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="CHỌN TẤT CẢ">
                    <input type="button" value="BỎ CHỌN TẤT CẢ">
                    <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
                    <a href="index.php?act=adddm"><input type="button" value="NHẬP THÊM"></a>
                </div>
            </div>