<?php
require_once 'view/globle/headadmin.php';
?>
<div class="row2">
    <div class="row2 font_title">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?controller=product&&act=add" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label> Loại </label> <br>
                <select name="iddm" id="" style="width: 100%; height: 30px; border: 1px solid gray ;">
                    <?php
                    if (isset($danhmucs) && is_array($danhmucs)) {
                        foreach ($danhmucs as $danhmuc) {
                    ?>
                    <option value="<?php echo $danhmuc->id_d; ?>"><?php echo $danhmuc->name; ?></option>
                    <?php
                        }
                    } else { ?>
                    <option value=""><?php echo "Trống";; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="row2 mb10">
                <label>Tên sp </label> <br>
                <input type="text" name="tensanpam" placeholder="nhập vào tên">
            </div>
            <div class="row2 mb10">
                <label>ảnh </label> <br>
                <input type="file" name="img" placeholder="chọn ảnh" style="width: 100%; height: 30px;">
            </div>
            <div class="row2 mb10">
                <label>giá </label> <br>
                <input type="number" name="gia" placeholder="nhập giá" min="0"
                    style="width: 100%; height: 30px; border: 1px solid gray ;">
            </div>
            <div class="row2 mb10">
                <label>mota</label> <br>
                <textarea name="mota" id="" cols="30" rows="10" placeholder="nhập mô tả"
                    style="width: 100%; height: 100px; border: 1px solid gray ;"></textarea>
            </div>
            <div class=" row mb10 ">
                <input class=" mr20" type="submit" name="add" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">
            </div>
        </form>
        <button onclick="show()">Danh Sách</button>
    </div>
    <div class="row2" id="table" style="display: none">
        <div class="row2 font_title">
            <h1>DANH SÁCH <?php  ?></h1>
        </div>
        <div class="row2 form_content ">
            <form action="#" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>001</td>
                            <td>Đồng hồ</td>
                            <td><input type="button" value="Sửa"> <input type="button" value="Xóa"></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>001</td>
                            <td>Đồng hồ</td>
                            <td><input type="button" value="Sửa"> <input type="button" value="Xóa"></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>001</td>
                            <td>Đồng hồ</td>
                            <td><input type="button" value="Sửa"> <input type="button" value="Xóa"></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>001</td>
                            <td>Đồng hồ</td>
                            <td><input type="button" value="Sửa"> <input type="button" value="Xóa"></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>001</td>
                            <td>Đồng hồ</td>
                            <td><input type="button" value="Sửa"> <input type="button" value="Xóa"></td>
                        </tr>


                    </table>
                </div>
                <div class="row mb10 ">
                    <input class="mr20" type="button" value="CHỌN TẤT CẢ" onclick="selectAll()">
                    <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ" onclick="deselectAll()">
                    <input class="mr20" type="button" value="XOÁ TẤT CẢ" onclick="deselectAll()">
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<script>
function show() {
    document.getElementById("table").style.display = "block";
}

function selectAll() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = true;
    });
}

// Hàm để bỏ chọn tất cả các ô checkbox
function deselectAll() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = false;
    });
}
</script>