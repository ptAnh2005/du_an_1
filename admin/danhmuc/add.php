<div class="row">
            <div class="row formtitle">
                <h1>THÊM MỚI HÀNG HÓA</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        <label for="maloai">Mã loại</label> 
                        <input type="text" name="maloai" disabled>
                    </div>

                    <div class="row mb10">
                        <label for="tenloai">Tên loại</label>
                        <input type="text" name="tenloai">
                    </div>

                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                    </div>

                    <?php
                        if (isset($thongBao) && ($thongBao != "")) echo $thongBao;
                    ?>
                </form>
            </div>
        </div>