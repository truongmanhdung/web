<?php
include 'header.php';
    if (isset($_GET["user"])) {
        selectAll("DELETE FROM user WHERE id ={$_GET["user"]}");
        header("location:index.php");
    }
    if (isset($_GET["keyword"])) {
    }
        ?>
            <h3 style="text-align:center">Quản trị khách hàng</h3>
            <div class="row">
                <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="adduser.php" class="btn btn-success rounded-0">Thêm khách hàng</a>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Stt</th>
                            <th>Tên</th>
                            <th>Ngày sinh</th>
                            <th>Quê quán</th>
                            <th>Điện thoại</th>
                            <th>Email</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $stt = 1;
                        foreach (selectAll("SELECT * FROM user") as $row) {
                        ?>
                            <tr>
                                <td><?= $stt++ ?></td>
                                <td><?= $row['ten'] ?></td>
                                <td><?= $row['ngaysinh'] ?></td>
                                <td><?= $row['dienthoai'] ?></td>
                                <td><?= $row['quequan'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning mr-3">Sửa</a>
                                    <a href="?user=<?= $row['id'] ?>" onclick="return confirm('Bạn có muốn xóa người dùng này khỏi hệ thống không ?')" class="btn btn-danger">Xóa</a></td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            <?php
            include 'footer.php';
            ?>
            <script>
                var seen = {};
                $('#permission option').each(function() {
                    var txt = $(this).text();
                    if (seen[txt])
                        $(this).remove();
                    else
                        seen[txt] = true;
                });
            </script>
    <?php
