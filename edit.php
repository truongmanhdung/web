<?php
include 'header.php';
?>
<?php 
    if (isset($_GET["id"])) {
        foreach (selectAll("SELECT * FROM user WHERE id={$_GET["id"]}") as $item) {
            $ten = $item['ten'];
            $ngaysinh = $item['ngaysinh'];
            $quequan = $item['quequan'];
            $dienthoai = $item['dienthoai'];
            $email = $item['email'];
        }
    }
?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <?php
        if (isset($_POST['addproduct'])) {
            $name = $_POST['name'];
            $birthday = $_POST['birthday'];
            $quequan = $_POST['quequan'];
            $dienthoai = $_POST['dienthoai'];
            $email = $_POST['email'];
            if (empty($name)) {
                $error = 'Vui lòng nhập tên ';
            } elseif (empty($birthday)) {
                $error = 'Vui lòng nhập ngày sinh';
            } elseif (empty($quequan)) {
                $error = 'Vui lòng nhập quê quán';
            } elseif (empty($dienthoai)) {
                $error = 'Vui lòng nhập số điện thoại';
            } elseif (empty($email)) {
                $error = 'Vui lòng nhập email';
            } else {
                selectAll("UPDATE `user` SET `ten`='$name',`ngaysinh`='$birthday',`quequan`='$quequan',`dienthoai`='$dienthoai',`email`='$email' WHERE id ={$_GET["id"]}");
                header('location:user.php');
            }
        }
        ?>
        <h3 style="text-align:center">Sửa khách hàng</h3>
        <form method="POST" enctype="multipart/form-data">
            <?php if (isset($error)) { ?>
                <p class="col-xs-4 col-sm-4 col-md-4 col-lg-4 alert alert-danger"><?= $error ?></p>
            <?php
            } ?>
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div>
                        <label for="">Tên khách hàng</label><br>
                        <input type="text" class="pl-6" value="<?= $ten ?>" placeholder="Tên khách hàng" name="name">
                    </div>
                    <div>
                        <label for="">Ngày sinh</label><br>
                        <input type="date" min="0" value="<?= $ngaysinh ?>" placeholder="Ngày sinh" class="pl-6" name="birthday">
                    </div>
                    <div>
                        <label for="">Quê Quán</label><br>
                        <input type="text" min="0" value="<?= $quequan ?>" placeholder="Quê Quán" class="pl-6" name="quequan">
                    </div>
                    <div>
                        <label for="">Điện thoại</label><br>
                        <input type="text" min="0" value="<?= $dienthoai ?>" placeholder="Điện thoại" class="pl-6" name="dienthoai">
                    </div>
                    <div>
                        <label for="">Email</label><br>
                        <input type="email" min="0" value="<?= $email ?>" placeholder="Email" class="pl-6 mb-3" name="email">
                    </div>
                </div>
                <div class="mx-auto">
                    <button type="submit" class="btn btn-success" name="addproduct">Cập nhật</button>
                    <a href="index.php" class="btn btn-danger" name="back">Quay lại</a>
                </div>
            </div>
        </form>
    </div>