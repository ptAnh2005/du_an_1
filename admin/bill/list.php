    <div class="row formtitle mb">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <form action="index.php?act=listbill" method="post">
        <input type="text" name="kyw" placeholder="Tìm kiếm...">
        <input type="submit" name="" value="Tìm kiếm">
    </form>

    <div class="row formcontent">   
    <div class="row mb10 formdsloai">
        <table>
            <tr>
                <th></th>
                <th>MÃ ĐƠN HÀNG</th>
                <th>KHÁCH HÀNG</th>
                <th>SỐ LƯỢNG HÀNG</th>
                <th>GIÁ TRỊ ĐƠN HÀNG</th>
                <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                <th>NGÀY ĐẶT HÀNG</th>
            </tr>
            <?php
            foreach ($listbill as $bill) {
                extract($bill);
                $kh = $bill["bill_name"] . '<br>' . $bill["bill_email"] . '<br>' . $bill["bill_address"] . '<br>' . $bill["bill_tel"];
                $ttdh = get_ttdh($bill["bill_status"]);
                $count = loadall_cart_count($bill["id"]);

                echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>DAM-' . $bill['id'] . '</td>
                        <td>' . $kh . '</td>
                        <td>' . $count . '</td>
                        <td><strong>' . $bill['total'] . '</strong>$</td>
                        <td>' . $ttdh . '</td>
                        <td>' . $bill['ngaydathang'] . '</td>
                    </tr>';
            }
            ?>
        </table>
    </div>

