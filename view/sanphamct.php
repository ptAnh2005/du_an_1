<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php
                extract($onesp);
            ?>
            <div class="boxtitle"><?= htmlspecialchars($name) ?></div>
            <div class="row boxcontent">
                <?php
                    $imgSrc = htmlspecialchars($img_path . $img);
                    echo "<div class='row mb spct'><img src='$imgSrc' alt='" . htmlspecialchars($name) . "'><br></div>";
                    echo htmlspecialchars($mota);
                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
            txt = $("input").val();
            $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
        });
        </script>
        <div class="row mb" id="binhluan">
           
        </div>

        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="row boxcontent">
                <ul>
                    <?php
                        foreach ($spcl as $sp_cung_loai) {
                            extract($sp_cung_loai);
                            $linksp = "index.php?act=sanphamct&idsp=" . htmlspecialchars($id);
                            echo '<li><a href="' . $linksp . '">' . htmlspecialchars($name) . '</a></li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>
