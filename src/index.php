<?php

include('config/db_connect.php');
$sql = "SELECT * from blood_recipient";
$res = mysqli_query($conn, $sql);
$recipients = mysqli_fetch_all($res, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<div class="container">

    <div class="row">
        <div class="col-12">
            <div class="table my-3">
                <a href="add.php" class="btn btn-success mb-3">Thêm người nhận máu</a>
                <div class="table-responsive">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Tuổi</th>
                                <th scope="col">Nhóm máu</th>
                                <th scope="col">Số lượng máu cần nhận (ml)</th>
                                <th scope="col">Giới tính</th>
                                <th scope="col">Ngày đăng kí nhận máu</th>
                                <th scope="col">Số điện thoại</th>
                                <th scope="col">Sửa</th>
                                <th scope="col">Xoá</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($recipients as $i => $recipient) : ?>
                                <tr>
                                    <th scope="row"><?php echo $i + 1 ?></th>
                                    <td><?php echo $recipient['reci_name'] ?> </td>
                                    <td><?php echo $recipient['reci_age'] ?> </td>
                                    <td><?php echo $recipient['reci_bgrp'] ?> </td>
                                    <td><?php echo $recipient['reci_bqnty'] ?> </td>
                                    <td><?php echo $recipient['reci_sex'] ?> </td>
                                    <td><?php echo $recipient['reci_reg_date'] ?> </td>
                                    <td><?php echo $recipient['reci_phno'] ?> </td>
                                    <td><a class="text-primary" href="edit.php?id=<?php echo $recipient['reci_id']; ?>"><i class="fas fa-edit "></i></a></td>
                                    <td><a class="text-danger" href="delete.php?id=<?php echo $recipient['reci_id']; ?>"><i class="fas fa-trash"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>


<?php include('templates/footer.php'); ?>

</html>