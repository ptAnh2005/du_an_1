<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
            <div class="row boxcontent formtk">
            <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                }
            ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <input type="hidden" name="id" value="<?= isset($id) ? htmlspecialchars($id) : '' ?>">
                    <div class="row mb10">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?= isset($email) ? htmlspecialchars($email) : '' ?>"> 
                    </div> 
                  
                    <div class="row mb10">
                        <label for="user">Tên đăng nhập</label>
                        <input type="text" name="user" value="<?= isset($user) ? htmlspecialchars($user) : '' ?>">
                    </div>

                    <div class="row mb10">
                        <label for="pass">Mật khẩu</label>
                        <input type="password" name="pass" value="<?= isset($pass) ? htmlspecialchars($pass) : '' ?>">
                    </div>

                    <div class="row mb10">
                        <label for="address">Địa chỉ</label>
                        <input type="text" name="address" value="<?= isset($address) ? htmlspecialchars($address) : '' ?>">
                    </div>

                    <div class="row mb10">
                        <label for="tel">Số điện thoại</label>
                        <input type="text" name="tel" value="<?= isset($tel) ? htmlspecialchars($tel) : '' ?>">
                    </div>

                    <div class="row mb10">
                        <input type="submit" name="capnhat" value="Cập nhật">
                    </div>
                    <div class="row mb10">
                        <input type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 class="thongbao">
                <?php
                    if (isset($thongbao) && $thongbao != "") {
                        echo htmlspecialchars($thongbao);
                    }
                ?>
                </h2>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>
