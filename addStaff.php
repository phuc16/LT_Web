
<!-- ADD ROW -->
<?php
    if (isset($_POST['add']))
    {

        $connect = new mysqli('localhost', 'root','','ltweb');
        if(mysqli_connect_errno()) {
            die ("Database Connection Failed, ".$mysql_connect_error()." (". $mysql_connect_errno()." )");
        }

        $user = $_POST['username'];
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $pass = $_POST['password'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $avatar = $_POST['avatar'];

        $sql = "INSERT INTO `members`(`username`, `name`, `email`, `password`, `dob`, `gender`, `phone`, `avatar`) VALUES ('$user','$name','$mail','$pass','$dob','$gender','$phone','$avatar')";
       
        // $query = "UPDATE `members` SET `name` = '$_POST[name]', `email`='$_POST[mail]',  `password`='$_POST[password]', `dob`='$_POST[dob]', `gender`='$_POST[gender]', `phone`='$_POST[phone]', `avatar`='$_POST[avatar]'  WHERE `username` = '$_POST[username]'";
        $result = mysqli_query($connect, $sql);

        if ($result)
        {
            echo $user;
        } else {
            echo 'failed';
        }
        $connect->close();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multilevel Company</title>
    <link rel="stylesheet" href="teststaff.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div id="main" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="text-box mt-5 mb-5">
                        <h2>Thêm thành viên</h2>
                        
                        <form class="row g-3 needs-validation infoForm" action="addStaff.php" method="post" novalidate >
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="name">Tên người dùng</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="" required value="">
                                    <div class="invalid-feedback">
                                        Tên người dùng không hợp lệ!
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="name">Họ và tên</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name"  id="name" placeholder="" required value="">
                                    <div class="invalid-feedback">
                                        Họ và tên không hợp lệ!
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="phone">Mail</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="mail"  id="email" placeholder="" required  value="">
                                    <div class="invalid-feedback">
                                        Mail không hợp lệ!
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="name">Mật khẩu</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password"  id="name" placeholder="" required  value="">
                                    <div class="invalid-feedback">
                                        Mật khẩu không hợp lệ
                                    </div>
                                </div>
                            </div>
                           
                           
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="phone">Số điện thoại</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="phone"  id="phone" placeholder="" required  value="">
                                    <div class="invalid-feedback">
                                        Số điện thoại không hợp lệ
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="phone">Link ảnh đại diện</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="avatar"  id="phone" placeholder="" required  value="">
                                    <div class="invalid-feedback">
                                        Link không hợp lệ
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 mb-4 form-floating">
                                <input type="date" class="form-control" id="dob" name="dob"  placeholder="" required value="">
                                <label class="form-label" for="dob">Ngày sinh</label>
                                <div class="invalid-feedback">
                                    Ngày sinh không hợp lệ!
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4 form-floating">
                                <select class="form-select" id="gender" name="gender" required >
                                        
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <option value="Khác">Khác</option>
                                    </select>
                                <label class="form-label" for="gender">Giới tính</label>
                                <div class="invalid-feedback">
                                    Vui lòng chọn giới tính!
                                </div>
                            </div>
                            
                            
                            
                            <div class="mb-3 d-grid gap-2">
                                <button class="btn btn-outline-danger" type="submit" id="signup"  name="add">Xác nhận</button>
                                <a class="btn btn-outline-danger" href="manage.php" type="submit" id="signup"  name="add">Trở về</a>
                            </div>
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js "></script>
    <script src="testStaff.js"></script>
</body>
</html>
