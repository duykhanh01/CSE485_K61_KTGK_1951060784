<?php


include('config/db_connect.php');
if (!isset($_GET['id'])) header('Location: error.php');
$id = $_GET['id'];
$query = "SELECT * FROM blood_recipient where reci_id = '$id'";
$result = mysqli_query($conn, $query);
$recipient = mysqli_fetch_assoc($result);
$quantity = $recipient['reci_bqnty'];

$name = $recipient['reci_name'];


$phone = $recipient['reci_phno'];


$age = $recipient['reci_age'];


$group = $recipient['reci_bgrp'];

$selectSex = $recipient['reci_sex'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $quantity = $_POST['quantity'];



    $name = $_POST['name'];


    $phone = $_POST['phone'];


    $age = $_POST['age'];



    $group = $_POST['group'];

    $selectSex = $_POST['selectSex'];

    $sql = "UPDATE blood_recipient SET reci_name = '$name', reci_age = '$age',  reci_bgrp = '$group' ,reci_bqnty = '$quantity', reci_sex = '$selectSex', reci_phno = '$phone' where reci_id = '$id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header("location: index.php");
    } else {
        header("location: error.php");
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php'); ?>
<div class="container">
    <h2 class="text-center mt-2">Sửa thông tin người nhận máu</h2>
    <form class="form-add" method="POST">
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Họ và tên</label>
            <input required name="name" type="text" value="<?php echo htmlspecialchars($name); ?>" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group mt-2">
            <label for=" exampleFormControlInput1">Tuổi</label>
            <input required name="age" type="text" value="<?php echo htmlspecialchars($age); ?>" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Nhóm máu</label>
            <input required name="group" type="text" value="<?php echo htmlspecialchars($group); ?>" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Số lượng máu cần nhận</label>
            <input required name="quantity" type="text" value="<?php echo htmlspecialchars($quantity); ?>" class="form-control" id="exampleFormControlInput1" placeholder="quantity ">
        </div>


        <div class="form-group mt-2">
            <label for="exampleFormControlSelect1">Giới tính</label>
            <select name="selectSex" class="form-select" id="exampleFormControlSelect1">
                <option <?php if ($selectSex == "Nam") echo "selected";  ?> value="Nam">Nam</option>
                <option <?php if ($selectSex == "Nữ") echo "selected";  ?> value="Nữ">Nữ</option>
                <option <?php if ($selectSex == "Khác") echo "selected";  ?> value="Khác">Khác</option>
            </select>
        </div>
        <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Số điện thoại</label>
            <input required name="phone" type="text" value="<?php echo htmlspecialchars($phone); ?>" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="text-center mt-4">
            <button name="submit_unit" type="submit" class="btn btn-primary"> Submit </button>
        </div>
    </form>
</div>
<?php include('templates/footer.php'); ?>

</html>