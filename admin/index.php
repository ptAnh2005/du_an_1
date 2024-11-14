<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/cart.php";
include "header.php";

// DANH MỤC
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            // Kiểm tra user có click vào nút thêm mới hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenLoai = $_POST['tenloai'];
                insert_danhmuc($tenLoai); 
                $thongBao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;

        case 'listdm':
            $listdm = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'xoaDanhMuc':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_danhmuc($id);
            }
            $listdm = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'suaDanhMuc':
            if (isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadOne_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenLoai= $_POST['tenloai'];
                $id= $_POST['id'];
                update_danhmuc($id, $tenLoai);
                $thongBao = "Cập nhật thành công";
            }
            $listdm = loadAll_danhmuc();
            include "danhmuc/list.php"; // Sửa lại include thành list.php
            break;


            // SẢN PHẨM

        case 'addsp':
            // kiểm tra xem người dùng có clich vào nút add ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }

                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "THÊM THÀNH CÔNG";
                // header('Location: index.php?act=listdm');
            }
            $listdanhmuc = loadall_danhmuc();
            // var_dump($listdanhmuc);die();
            include 'sanpham/add.php';
            break;

        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include 'sanpham/list.php';
            break;

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham();
            include 'sanpham/list.php';
            break;

        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include 'sanpham/update.php';
            break;
            
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "cap nhat thanh cong";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include 'sanpham/list.php';
            break;
                
        case 'dskh':
                $listtaikhoan = loadAll_taikhoan('',0);
                include "taikhoan/list.php";
            break;
            
            // BÌNH LUẬN
        case 'dsbl':
            $listbinhluan = loadAll_binhluan(0);
            include "binhluan/list.php";
            break;

        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_binhluan($id);
            } 
            $listbinhluan = loadAll_binhluan(0);
            include "binhluan/list.php";
            break;

            // BILL
        case 'dsbill':
            $listbill= loadall_bill(0);
            include "bill/list.php";
            break;
        
        case 'listbill':
            if (isset($_POST['kyw']) && ($_POST['kyw']!="")) {
                $kyw= $_POST['kyw'];              
            } else {
                $kyw="";
            }
            $listbill= loadall_bill($kyw, 0);
            include "bill/list.php";
            break;

            // THỐNG KÊ
        case 'thongke':
            $listthongke= loadall_thongke();
            include "thongke/list.php";
            break;

        case 'bieudo':
            $listthongke= loadall_thongke();
            include "thongke/bieudo.php";
            break;

        default:
            include "home.php";
            break;
            
    }
} else {
    include "home.php";
}

include "footer.php";
?>
