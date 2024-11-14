<div class="row formtitle">
                <h1>DANH SÁCH TÀI KHOẢN</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ TÀI KHOẢN</th>
                            <th>TÊN TÀI KHOẢN</th>
                            <th>MẬT KHẨU</th>
                            <th>EMAIL</th>
                            <th>ĐỊA CHỈ</th>
                            <th>SỐ ĐIỆN THOẠI</th>
                            <th>VAI TRÒ</th>
                            <th></th>
                        </tr>
                        <?php 
                        foreach ($listtaikhoan as $tk) {
                            extract($tk);
                            $suatk = "index.php?act=suatk&id=".$id;
                            $xoatk = "index.php?act=xoatk&id=".$id;

                            echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$user.'</td>
                                    <td>'.$pass.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$tel.'</td>
                                    <td>'.$role.'</td>
                                    <td>
                                        <a href="'.$suatk.'"><input type="button" value="Sửa"></a>
                                        <a href="'.$xoatk.'"><input type="button" value="Xóa"></a>
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