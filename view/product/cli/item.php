<?php
require_once 'view/globle/head.php';
?>
<div class="thongtin">
    <div class="sp">
        <?php
        foreach ($sanpham as $s) {
        ?>
            <div class="img">
                <img src="assets/imgs/item/<?php echo $s->image ?>" alt="loi" />
            </div>
            <div class="tt">
                <h3>Name: <?php echo $s->name ?></h3>
                <h4>Giá: <?php echo $s->price ?></h4>
                <p>Mô tả: <?php echo $s->chitiet ?></p>
                <button class="mua">Mua Hàng</button>
            </div>
        <?php } ?>
    </div>
    <div class="bl">
        <div class="comment">
            <form action="">
                <label for="bl">Bình luận: </label> <br />
                <textarea name="bl" id="bl" cols="30" rows="10"></textarea>
                <input type="hidden" name="time" id="" />
                <input type="submit" value="Gửi" />
            </form>
        </div>
        <div class="showcomment">
            <div class="inf">
                <img class="imgbl" src="img/p1.png" alt="" />
                <div class="text">
                    <p class="time" style="margin: 0">12:00:002002/12/12</p>
                    <h4 style="margin: 0">Name:user</h4>
                </div>
            </div>
            <div class="context">
                <textarea name="" id="" cols="100" rows="5" readonly>
                jsdhfafafjdashfl;ákjfoi
                 </textarea>
            </div>
        </div>
    </div>
    <div class="lq">
        <?php
        if (isset($products) && is_array($products)) {
            foreach ($products as $product) {
        ?>
                <div class="itemlq">
                    <img src="assets/imgs/item/<?php echo $product->image ?>" alt="loi" />
                    <div class="cont" width="100%">
                        <h4><?php echo $product->name; ?> </h4>
                        <h5 style="color: red;"><?php echo $product->price; ?> </h5>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "Trống";
        }
        ?>
    </div>
</div>
<?php require_once 'view/globle/footer.php';
