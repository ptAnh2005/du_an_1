<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/cart.php";
include "view/header.php";
include "global.php";


if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

$spnew = loadAll_sanpham_home();
$dsdm = loadAll_danhmuc();
$dstop10 = loadAll_sanpham_top10();

if ((isset($_GET['act']) && ($_GET['act']) != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && $_POST['kyw']!="") {
                $kyw= $_POST['kyw'];

            } else {
                $kyw= "";
            }
            if (isset($_GET['iddm']) && $_GET['iddm']>0) {
                $iddm= $_GET['iddm'];
            } else {
                $iddm= 0;
            }
            $dssp= loadAll_sanpham($kyw, $iddm);
            $tendm= load_ten_dm($iddm);
            include "view/sanpham.php";
            break;

        case 'sanphamct':
            if (isset($_GET['idsp']) && $_GET['idsp']>0) {
                $id= $_GET['idsp'];
                $onesp= loadOne_sanpham($id);
                extract($onesp);
                $spcl= load_sanpham_cungloai($id,$iddm);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;

        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email= $_POST['email'];
                $user= $_POST['user'];
                $pass= $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao= "ĐÃ ĐĂNG KÝ THÀNH CÔNG. VUI LÒNG ĐĂNG NHẬP ĐỂ THỰC HIỆN CHỨC NĂNG";
            }
            include "view/taikhoan/dangky.php";
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user= $_POST['user'];
                $password= $_POST['password'];
                $check_user= check_user($user, $password);   
                if (is_array($check_user)) {
                    $_SESSION['user']= $check_user;
                    $thongbao= "BẠN ĐÃ ĐĂNG NHẬP THÀNH CÔNG";
                    header('Location: index.php');
                } else {
                    $thongbao= "TÀI KHOẢN KHÔNG TỒN TẠI. VUI LÒNG KIỂM TRA LẠI";
                }               
            }
            include "view/taikhoan/dangky.php";
            break;

        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user= $_POST['user'];
                $pass= $_POST['pass'];
                $email= $_POST['email'];
                $address= $_POST['address'];
                $tel= $_POST['tel'];
                $id= $_POST['id'];

                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user']= check_user($user, $pass);
                header('Location: index.php?act=edit_taikhoan');        
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;

        case 'quenmk':
            if (isset($_POST['gui']) && ($_POST['gui'])) {
                $email= $_POST['email'];

                $checkemail= check_email($email);
                if (is_array($checkemail)) {
                    $thongbao= "Mật khẩu của bạn là: ".$checkemail['pass'];
                } else {
                    $thongbao= "Email này không tồn tại";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;

        case 'logout':
            session_unset();
            header('Location: index.php');
            break;

        case 'addtocart':
            if (isset($_POST['addtocart']) && $_POST['addtocart']) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $ttien = $soluong * $price;
                $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                    
                // Thêm sản phẩm vào giỏ hàng
                $_SESSION['mycart'][] = $spadd;
            }
            include "view/cart/viewcart.php";
            break;

        case 'delcart':
            if (isset($_GET['idcart'])) {
                // Thay thế phần tử ở vị trí idcart bằng cách sử dụng array_splice
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('Location:' . $_SERVER['HTTP_REFERER']);
            break;
            
            case 'bill':
                include "view/cart/bill.php";
                break;

        case 'billconform':
            // TẠO BILL
            if (isset($_POST['dongydathang']) && $_POST['dongydathang']) {
                if (isset($_SESSION['user'])) $iduser= $_SESSION['user']['id'];
                else $id=0;
                $name= $_POST['name'];
                $email= $_POST['email'];
                $address= $_POST['address'];
                $tel= $_POST['tel'];

                // Chuyển đổi giá trị pttt thành số nguyên
                $pttt= isset($_POST['pttt']) ? (int)$_POST['pttt'] : 1; // Mặc định là 1 nếu không có giá trị
                $ngaydathang = date("h:i:sa d/m/Y");
                $tongdonhang= tongdonhang();
                $idbill= insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang);
                
                // INSERT INTO CART : $_SESSION['mycart'] & idbill
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                }
                $_SESSION['cart']="";
            }
                $bill= loadone_bill($idbill);
                $billct= loadall_cart($idbill);
                include "view/cart/billconform.php";
                break;

        case 'mybill':
                $listbill= loadall_bill($_SESSION['user']['id']);
                include "view/cart/mybill.php";
                break; 

        case 'boxsp':
                include "view/sanphamct.php";
                break;   

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
?>
