<?php

session_start();
include('config/db_connect.php');


$name = $quantity   = $group = $age = $phone =  $selectSex = "";
$errors = array('name' => '', 'init' => '', 'age' => '', 'group' => '', 'quantity ' => '', 'phone' => '');
if (isset($_GET['submit_unit'])) {

    $quantity = $_GET['quantity'];



    $name = $_GET['name'];


    $phone = $_GET['phone'];


    $age = $_GET['age'];



    $group = $_GET['group'];

    $selectSex = $_GET['selectSex'];


    if (array_filter($errors)) {
        echo 'errors in form';
    } else {
        $sql = "INSERT INTO blood_recipient (reci_name, reci_age,  reci_bgrp ,reci_bqnty, reci_sex, reci_phno) VALUES ('$name', '$age', '$group ', '$quantity ', '$selectSex', '$phone')";
        $res = mysqli_query($conn, $sql);
        if ($res) {

            header("location: index.php");
        } else {
            header("location: error.php");
        }
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php'); ?>
<div class="container">
    <h2 class="text-center mt-2">Thêm người nhận máu</h2>
    <form class="form-add" method="get" action="add.php">
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Họ và tên</label>
            <input required name="name" type="text" value="<?php echo htmlspecialchars($name); ?>" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="text-primary"> <?php echo $errors['name']; ?> </div>
        <div class="form-group mt-2">
            <label for=" exampleFormControlInput1">Tuổi</label>
            <input required name="age" type="text" value="<?php echo htmlspecialchars($age); ?>" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="text-primary"> <?php echo $errors['age']; ?> </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">nhóm máu</label>
            <input required name="group" type="text" value="<?php echo htmlspecialchars($group); ?>" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="text-primary"> <?php echo $errors['group']; ?> </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Số lượng máu cần nhận</label>
            <input required name="quantity" type="text" value=" <?php echo htmlspecialchars($quantity); ?>" class="form-control" id="exampleFormControlInput1" placeholder="quantity ">
        </div>


        <div class="form-group mt-2">
            <label for="exampleFormControlSelect1">Giới tính</label>
            <select name="selectSex" class="form-select" id="exampleFormControlSelect1">
                <option selected value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
                <option value="Khác">Khác</option>
            </select>
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Số điện thoại</label>
            <input required name="phone" type="text" value="<?php echo htmlspecialchars($phone); ?>" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="text-primary"> <?php echo $errors['phone']; ?> </div>
        <div class="text-center mt-4">
            <button name="submit_unit" type="submit" class="btn btn-primary"> Submit </button>
        </div>
    </form>
</div>
<?php include('templates/footer.php'); ?>

</html>