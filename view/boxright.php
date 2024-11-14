<div class="row mb">
    <div class="boxtitle">Tài Khoản</div>
    <div class="boxcontent formtk">
        <?php
            if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
                extract($_SESSION['user']);
        ?>
        <div class="row mb10">
            <label for="user">Xin chào</label>
            <?= htmlspecialchars($user) ?>
        </div>

        <div class="row mb10">
            <ul>
                <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                <li><a href="index.php?act=edit_taikhoan">Cập nhật thông tin</a></li>
                <?php if ($role == 1) { ?>
                <li><a href="admin/index.php">Đăng nhập admin</a></li>
                <?php } ?>
                <li><a href="index.php?act=logout">Đăng xuất</a></li>
            </ul>
        </div>
        <?php
            } else {
        ?>
        <form action="index.php?act=dangnhap" method="post">
            <div class="row mb10">
                <label for="user">Tên đăng nhập</label>
                <input type="text" name="user" required>
            </div>

            <div class="row mb10">
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" required>
            </div>

            <div class="row mb10">
                <input type="checkbox" name="remember"> Ghi nhớ tài khoản?
            </div>

            <div class="row mb">
                <input type="submit" value="Đăng nhập" name="dangnhap">
            </div>
        </form>
        <ul>
            <li><a href="#">Quên mật khẩu</a></li>
            <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
        </ul>
        <?php
            }
        ?>
    </div>
</div>

<div class="row mb">
    <div class="boxtitle">Danh Mục</div>
    <div class="boxcontent2 menudoc">
        <ul>
        <?php foreach ($dsdm as $dm): ?>
            <?php
                $linkdm = "index.php?act=sanpham&iddm=" . $dm['id'];
            ?>
            <li><a href="<?= htmlspecialchars($linkdm) ?>"><?= htmlspecialchars($dm['name']) ?></a></li>
        <?php endforeach; ?>
        </ul>
    </div>

    <div class="boxfooter searchBox">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw" placeholder="Từ khóa tìm kiếm">
            <input type="submit" name="timkiem" value="Tìm kiếm">
        </form>
    </div>
    
</div>

<div class="row">
    <div class="boxtitle">Top 10 yêu thích</div>
    <div class="row boxcontent">
        <?php
            foreach ($dstop10 as $top10) {
                $linksp = "index.php?act=sanphamct&idsp=" . $top10['id'];
                $imgSrc = htmlspecialchars($img_path . $top10['img']);
        ?>
        <div class="row mb10 top10">
            <img src="<?= htmlspecialchars($imgSrc) ?>" alt="<?= htmlspecialchars($top10['name']) ?>">
            <a href="<?= htmlspecialchars($linksp) ?>"><?= htmlspecialchars($top10['name']) ?></a>
        </div>
        <?php
            }
        ?>
    </div>
</div>
