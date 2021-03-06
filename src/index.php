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
                                <th scope="col">Chi tiết</th>
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

                                    <td><a class="text-primary view" onclick="loadData(this.getAttribute('data-id'));" data-id="<?php echo $recipient['reci_id']; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>

                                    <td><a class=" text-primary" href="edit.php?id=<?php echo $recipient['reci_id']; ?>"><i class="fas fa-edit "></i></a></td>
                                    <td><a class="text-danger" href="delete.php?id=<?php echo $recipient['reci_id']; ?>"><i class="fas fa-trash"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                    <!-- Button trigger modal -->


                    <!-- Modal -->
                    <div class=" modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Chi tiết</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?php include('templates/footer.php'); ?>

</html>