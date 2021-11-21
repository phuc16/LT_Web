<?php
   
    $connect = new mysqli('localhost', 'root','','lt_web');
    if(mysqli_connect_errno()) {
        die ("Database Connection Failed, ".$mysql_connect_error()." (". $mysql_connect_errno()." )");
    }
    $ck = $_COOKIE['cname'];
    $sql = 'select * from resources';
    $res = mysqli_query($connect, $sql);
    if($res === false ) {
        echo 'fail success';}
    $connect->close();
?>
<!-- UPDATE TABLE -->
<?php
    if (isset($_POST['update']))
    {

        $connect = new mysqli('localhost', 'root','','lt_web');
        if(mysqli_connect_errno()) {
            die ("Database Connection Failed, ".$mysql_connect_error()." (". $mysql_connect_errno()." )");
        }

        $id = $_POST['id'];
        $type = $_POST['type'];
        $name = $_POST['name'];
        $content = $_POST['content'];
     
        // $query = "UPDATE `members` SET `name`='$_POST[name]', `email`='$_POST[mail]',`password`='$_POST[password]', `dob`='$_POST[dob]' ,`gender`='$_POST[gender]',`phone`='$_POST[phone]',`avatar`='$_POST[avatar]' WHERE `username` = $_POST[username]";
        $query = "UPDATE `resources` SET `type`='$_POST[type]',`name`='$_POST[name]',`content`='$_POST[content]' WHERE id = '$_POST[id]'";
        $result = mysqli_query($connect, $query);

        if ($result)
        {
            echo $_POST['type'];
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
    <link rel="stylesheet" href="./public/css/member.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div id="main" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="text-box mt-5 mb-5">
                        <h2>Chỉnh sửa thành viên</h2>
                        
                        <?php $data=[];while ($row=mysqli_fetch_row($res)): ?>
                        <?php if (htmlspecialchars($row[0]) === $ck):?>
                            
                            <?php $data['id'] = htmlspecialchars($row[0]) ?>
                            <?php $data['type']  = htmlspecialchars($row[1]) ?>
                            <?php $data['name'] = htmlspecialchars($row[2]) ?>
                            <?php $data['content'] = htmlspecialchars($row[3]) ?>
        
                        <?php endif;?>
                        <?php endwhile; ?>
                        <form class="row g-3 needs-validation infoForm" action="./updateResource" method="POST" novalidate >
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="name">ID</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="id" id="id" placeholder="" required value="<?php echo $data['id'] ?>">
                                    <div class="invalid-feedback">
                                        ID không hợp lệ!
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="name">Loại tài nguyên</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="type"  id="type" placeholder="" required value="<?php echo $data['type'] ?>">
                                    <div class="invalid-feedback">
                                        Kiểu không hợp lệ!
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="phone">Tên</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name"  id="name" placeholder="" required  value="<?php echo $data['name'] ?>">
                                    <div class="invalid-feedback">
                                        Tên không hợp lệ!
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="name">Nội dung</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="content"  id="content" placeholder="" required  value="<?php echo $data['content'] ?>">
                                    <div class="invalid-feedback">
                                        Nội dung không hợp lệ
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 d-grid gap-2">
                                <button class="btn btn-outline-danger" type="submit" id="signup"  name="update">Xác nhận</button>
                                <a class="btn btn-outline-danger" href="./admin" type="submit" id="signup" name="update" >Trở về</a>
                            </div>
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js "></script>
    <script src="./public/js/member.js"></script>
</body>
</html>