<?php
// BEGIN MANAGE STAFF//

session_start();
$connect = new mysqli('localhost', 'root','','ltweb');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = "select * from members order by username";
$res = mysqli_query($connect, $sql);

// END MANAGE STAFF

// BEGIN COMMENT MANAGE
$comment_query = "select * from comments order by time";
$comment_res = mysqli_query($connect, $comment_query);
// END COMMENT MANAGE 
$connect->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mona company</title>
    <link rel="stylesheet" href="./manage.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head> 
<body>
    <div class="main">
        <div class="top-header">
            <a href="#" class="top-header-content"><i class="bi bi-person-fill"></i>Tài khoản của tôi</a>
            &nbsp; &nbsp; &nbsp;
            <a href="#" class="top-header-content"><i class="bi bi-lock"></i></span> Đăng nhập</a>
        </div>
    
        <div class="sidebar-container">
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-member-tab" data-bs-toggle="pill" data-bs-target="#v-pills-member" type="button" role="tab" aria-controls="v-pills-member" aria-selected="true">Quản lí thành viên</button>
                    <button class="nav-link " id="v-pills-comment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-comment" type="button" role="tab" aria-controls="v-pills-comment" aria-selected="false">Quản lí bình luận</button>

                    <button class="nav-link" id="v-pills-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-info" type="button" role="tab" aria-controls="v-pills-info" aria-selected="false">Quản lí thông tin liên hệ</button>
                    <button class="nav-link" id="v-pills-product-tab" data-bs-toggle="pill" data-bs-target="#v-pills-product" type="button" role="tab" aria-controls="v-pills-product" aria-selected="false">Quản lí sản phẩm</button>
                    <button class="nav-link" id="v-pills-new-tab" data-bs-toggle="pill" data-bs-target="#v-pills-new" type="button" role="tab" aria-controls="v-pills-new" aria-selected="false">Quản lí bài viết</button>
                    <button class="nav-link" id="v-pills-material-tab" data-bs-toggle="pill" data-bs-target="#v-pills-material" type="button" role="tab" aria-controls="v-pills-material" aria-selected="false">Quản lí tài nguyên</button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                        <div class="table-container container">
                            <h5 >Danh sách thành viên</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tên người dùng</th>
                                            <th scope="col">Họ và Tên</th>
                                            <th scope="col">Mail</th>
                                            <th scope="col">Mật khẩu</th>
                                            <th scope="col">Ngày sinh</th>
                                            <th scope="col">Giới tính</th>
                                            <th scope="col">Số điện thoại</th>
                                            <th scope="col">Ảnh đại diện</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0; $data=[]; while ($row=mysqli_fetch_row($res)): $i++ ?>
                                            
                                            <tr>

                                                <?php $data[$i]['username'] = htmlspecialchars($row[0]) ?>
                                                <?php $data[$i]['name']  = htmlspecialchars($row[1]) ?>
                                                <?php $data[$i]['email'] = htmlspecialchars($row[2]) ?>
                                                <?php $data[$i]['password'] = htmlspecialchars($row[3]) ?>
                                                <?php $data[$i]['dob'] = htmlspecialchars($row[4]) ?>
                                                <?php $data[$i]['gender'] = htmlspecialchars($row[5]) ?>
                                                <?php $data[$i]['phone'] = htmlspecialchars($row[6]) ?>
                                                <?php $data[$i]['avatar'] = htmlspecialchars($row[7]) ?>
                                                <td><?php echo $data[$i]['username'] ?></td>
                                                <td><?php echo $data[$i]['name']  ?></td>
                                                <td><?php echo $data[$i]['email'] ?></td>
                                                <td><?php echo $data[$i]['password'] ?></td>
                                                <td><?php echo $data[$i]['dob'] ?></td>
                                                <td><?php echo $data[$i]['gender'] ?></td>
                                                <td><?php echo $data[$i]['phone'] ?></td>
                                                <td><?php echo $data[$i]['avatar'] ?></td>
                                                
                                                <td>
                                                    <a href="./updateStaff.php" onclick="testSth(this)" class="link-primary" id="<?php echo $row[0]; ?>">Chỉnh sửa</a> |
                                                    <a href="./deleteMember.php?rn=<?php echo $row[0]; ?>" class="link-primary" >Xóa</a>
                                                </td>  
                                            </tr>
                                        <?php endwhile; ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        <a href="addStaff.php" class="link-primary"><button type="button" class="btn btn-primary">Thêm</button></a>
                        
                    </div>
                </div>    
                    <div class="tab-pane fade " id="v-pills-comment" role="tabpanel" aria-labelledby="v-pills-comment-tab">
                        <div class="table-container container">
                            <h5 >Quản lí bình luận</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col">Thời gian</th>
                                            <th scope="col">Tên người đăng  </th>
                                            <th scope="col">Nội dung</th>
                                            <th scope="col">Bài viết</th>
                                            <th scope="col">Trạng thái</th>
                                            <th scope="col"></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                        <?php $i=0; $cmt_data=[]; while ($row=mysqli_fetch_row($comment_res)): $i++ ?>  
                                            <?php $cmt_data[$i]['id'] = htmlspecialchars($row[0]) ?>
                                            <?php $cmt_data[$i]['username']  = htmlspecialchars($row[1]) ?>
                                            <?php $cmt_data[$i]['postID'] = htmlspecialchars($row[2]) ?>
                                            <?php $cmt_data[$i]['content'] = htmlspecialchars($row[3]) ?>
                                            <?php $cmt_data[$i]['time'] = htmlspecialchars($row[4]) ?>
                                            <?php $cmt_data[$i]['sttatus'] = htmlspecialchars($row[5]) ?>
                                            <td><?php echo $cmt_data[$i]['id'] ?></td>
                                            <td><?php echo $cmt_data[$i]['time'] ?></td>
                                            <td><?php echo $cmt_data[$i]['username'] ?></td>
                                            <td><?php echo $cmt_data[$i]['content']?></td>
                                            <td><?php echo $cmt_data[$i]['postID'] ?></td>
                                            <td>
                                                <?php 
                                                    if ($cmt_data[$i]['sttatus'] != 0) {echo 'Duyệt';} else {echo 'Chưa duyệt';}
                                                ?>
                                            </td>
                                            
                                            <td>
                                                <a href="#" class="link-primary">Duyệt</a> |
                                                <a href="#" class="link-primary" >Xóa</a>
                                            </td>  
                                        </tr>
                                        <?php endwhile; ?>
                                      </tbody>
                                </table>
                            </div>
                            <a href="#" class="link-primary"><button type="button" class="btn btn-primary">Thêm</button></a>
                        </div>
                    </div>
                   
                    <div class="tab-pane fade" id="v-pills-info" role="tabpanel" aria-labelledby="v-pills-info-tab">4</div>
                    <div class="tab-pane fade" id="v-pills-product" role="tabpanel" aria-labelledby="v-pills-product-tab">5</div>
                    <div class="tab-pane fade" id="v-pills-new" role="tabpanel" aria-labelledby="v-pills-new-tab">6</div>
                    <div class="tab-pane fade" id="v-pills-material" role="tabpanel" aria-labelledby="v-pills-material-tab">End</div>
                </div>
              </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        
        function testSth(ele)
        {
            var globalID;
            globalID = ele.id;
            
            document.cookie="cname="+globalID;
        }
        
        
        
    </script>         
         
</body>
</html>
