<?php
include 'header.php';
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
                selectAll("INSERT INTO user VALUES (NULL,'$name','$birthday','$quequan','$dienthoai','$email')");
            }
        }
        ?>
        <h3 style="text-align:center">Thêm khách hàng mới</h3>
        <form method="POST" enctype="multipart/form-data">
            <?php if (isset($error)) { ?>
                <p class="col-xs-4 col-sm-4 col-md-4 col-lg-4 alert alert-danger"><?= $error ?></p>
            <?php
            } ?>
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div>
                        <label for="">Tên khách hàng</label><br>
                        <input type="text" class="pl-6" placeholder="Tên khách hàng" name="name">
                    </div>
                    <div>
                        <label for="">Ngày sinh</label><br>
                        <input type="date" min="0" placeholder="Ngày sinh" class="pl-6" name="birthday">
                    </div>
                    <div>
                        <label for="">Quê Quán</label><br>
                        <input type="text" min="0" placeholder="Quê Quán" class="pl-6" name="quequan">
                    </div>
                    <div>
                        <label for="">Điện thoại</label><br>
                        <input type="text" min="0" placeholder="Điện thoại" class="pl-6" name="dienthoai">
                    </div>
                    <div>
                        <label for="">Email</label><br>
                        <input type="email" min="0" placeholder="Email" class="pl-6 mb-3" name="email">
                    </div>
                </div>
                <div class="mx-auto">
                    <button type="submit" class="btn btn-success" name="addproduct">Thêm mới</button>
                    <a href="index.php" class="btn btn-danger" name="back">Quay lại</a>
                </div>
            </div>
        </form>
    </div>