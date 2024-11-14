<div class="row mb">
    <div class="boxtrai mr">

    <form action="index.php?act=billconform" method="post">
    <div class="row mb">
            <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
            <div class="row boxcontent billform">
                <?php
                if (isset($_SESSION['user'])){
                    $name=$_SESSION['user']['user'];
                    $address=$_SESSION['user']['address'];
                    $email=$_SESSION['user']['email'];
                    $tel=$_SESSION['user']['tel'];
                } else {
                    $name="";
                    $address="";
                    $email="";
                    $tel="";
                }
                ?>
                <table>
                        <tr>
                            <td>NGƯỜI ĐẶT HÀNG</td>
                            <td><input type="text" name="name" value="<?=$name?>"></td>
                        </tr>

                        <tr>
                            <td>ĐỊA CHỈ</td>
                            <td><input type="text" name="address" value="<?=$address?>"></td>
                        </tr>

                        <tr>
                            <td>EMAIL</td>
                            <td><input type="text" name="email" value="<?=$email?>"></td>
                        </tr>

                        <tr>
                            <td>ĐIỆN THOẠI</td>
                            <td><input type="text" name="tel" value="<?=$tel?>"></td>
                        </tr>
                </table>
            </div>
        </div>
        
        <div class="row mb">
        <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
        <div class="row boxcontent pttt">

        <table>
            <tr>
                <td><input type="radio" name="pttt" checked>Trả tiền khi nhận hàng</td>
                <td><input type="radio" name="pttt">Chuyển khoản ngân hàng</td>
                <td><input type="radio" name="pttt">Thanh toán online</td>
            </tr>
        </table>
    </div>
</div>

        <div class="row mb">
            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent cart">
                <table>
                    <?php
                        viewcart(0);
                    ?>
                </table>
            </div>
        </div>

        <div class="row mb bill">
            <input type="submit" value="ĐỐNG Ý ĐẶT HÀNG" name="dongydathang">
        </div>
        
    </div>
    </form>

    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>
