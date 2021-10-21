<?php
include('config/db_connect.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "SELECT * FROM blood_recipient where reci_id = '$id'";
    $result = mysqli_query($conn, $query);
    $recipient = mysqli_fetch_assoc($result);
    $output = "
      <div class='table-responsive'>

        <table class='table'>
                        <thead>
                            <tr>
                                <th scope='col'>Họ và tên</th>
                                <th scope='col'>Tuổi</th>
                                <th scope='col'>Nhóm máu</th>
                                <th scope='col'>Số lượng máu cần nhận (ml)</th>
                                <th scope='col'>Giới tính</th>
                                <th scope='col'>Ngày đăng kí nhận máu</th>
                                <th scope='col'>Số điện thoại</th>
                               

                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td> " . $recipient['reci_name'] . "</td>
                                    <td> " .  $recipient['reci_age'] . "</td>
                                    <td>  " . $recipient['reci_bgrp'] . "</td>
                                    <td> " . $recipient['reci_bqnty'] . "</td>
                                    <td> " . $recipient['reci_sex'] . " </td>
                                    <td> " .  $recipient['reci_reg_date'] . " </td>
                                    <td> " . $recipient['reci_phno'] . " </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
    
    ";
    echo $output;
}
