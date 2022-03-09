
<?php 
include 'header.php';
if (isset($_GET["keyword"])) {
    $keyword =$_GET["keyword"];
    if (rowCount("SELECT * FROM user WHERE ten like '%$keyword%'")>0) {
    ?>
    <h3 style="text-align:center">Quản trị khách hàng</h3>
    <div class="row">
        <div class="d-flex align-items-center mb-3">
            <a href="index.php" class="btn mr-3 btn-primary rounded-0">Trang chủ</a>
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
                foreach (selectAll("SELECT * FROM user WHERE ten like '%$keyword%'") as $row) {
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
    }else{
        ?>
            <a href="index.php" class="btn mr-3 btn-primary rounded-0">Trang chủ</a>

    <h3 style="text-align:center">Không tìm thấy khách hàng</h3>

        <?php
    }
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
}
?>