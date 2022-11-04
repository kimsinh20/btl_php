<?php 
require_once 'config.php';
if (isset($_POST['submit'])) {
  $userName = $_POST['userName'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM taikhoan WHERE tenTaiKhoan  = '$userName' and matKhau = '$password';";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header("Location: index.php");
  } else {
    echo "login error";
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class="text-center">login form</h1>
    <form method="POST">
      <div class="form-group">
        <label>name</label>
        <input type="text" name="userName" class="form-control" id="user name" placeholder="user name">
      </div>
      <div class="form-group">
        <label>address</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="password">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">dang nhap</button>
      <button type="button"  class="btn btn-danger"><a href="#">exit</a></button>
    </form>
    </div>
</body>
</html>