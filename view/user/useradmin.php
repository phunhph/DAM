<?php
require_once 'view/globle/headadmin.php';
?>
<div class="row2">
    <div class="row2" id="table">
        <div class="row2 font_title">
            <h1>DANH SÁCH <?php  ?></h1>
        </div>
        <div class="row2 form_content ">
            <form action="#" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table>
                        <tr>
                            <th></th>
                            <th>id_acc</th>
                            <th>tên</th>
                            <th>email</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($users as $u) {
                        ?>
                        <tr>
                            <th><input type="checkbox" name="" id=""></th>
                            <th><?php echo $u->id ?></th>
                            <th><?php echo $u->username ?></th>
                            <th><?php echo $u->email ?></th>
                            <th><a href="index.php?controller=khachang&id_x=<?php echo $u->id ?>">xoá</a></th>
                        </tr>
                        <?php } ?>
                    </table>
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