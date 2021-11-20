<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mona company</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./public/css/admin.css" rel="stylesheet">
</head> 
<body>
    <div class="main">
        <div class="top-header">
            <a href="#" class="top-header-content"><i class="bi bi-person-fill"></i>Tài khoản của tôi</a>
            &nbsp; &nbsp; &nbsp;
            <a href="#" class="top-header-content"><i class="bi bi-lock"></i> Đăng nhập</a>
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
                    <div class="tab-pane fade show active" id="v-pills-member" role="tabpanel" aria-labelledby="v-pills-member-tab">
                        <div class="table-container container">
                            <h6 class="text-center" style="margin: 2%;">Danh sách nhân viên</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tên người dùng</th>
                                            <th scope="col">Mật khẩu</th>
                                            <th scope="col">Họ và Tên</th>
                                            <th scope="col">Giới tính</th>
                                            <th scope="col">Ngày sinh</th>
                                            <th scope="col">Số điện thoại</th>
                                            <th scope="col">Mail</th>
                                            <th scope="col">Avatar</th>
                                            <th scope="col"></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                            <td>kogleo</td>
                                            <td>12345678</td>
                                            <td>Nguyễn Văn Leo</td>
                                            <td>M</td>
                                            <td>18/08/2001</td>
                                            <td>0123456789</td>
                                            <td>leonguyen@gmail.com</td>
                                            <td>link</td>
                                            <td>
                                                <a href="#" class="link-primary">Chỉnh sửa</a> |
                                                <a href="#" class="link-primary">Xóa</a>
                                            </td>  
                                          
                                        </tr>
                                        <tr>
                                            <td>remsokawai</td>
                                            <td>phuccaothu</td>
                                            <td>Trương Hoàng Phúc</td>
                                            <td>M</td>
                                            <td>12/06/2001</td>
                                            <td>0981273462</td>
                                            <td>phuctruong@gmail.com</td>
                                            <td>link</td>
                                            <td>
                                                <a href="#" class="link-primary">Chỉnh sửa</a> |
                                                <a href="#" class="link-primary">Xóa</a>
                                            </td>  
                                        </tr>
                                        <tr>
                                            <td>inuyasha</td>
                                            <td>banyeumatcho</td>
                                            <td>Trần Cẩu</td>
                                            <td>F</td>
                                            <td>02/06/1998</td>
                                            <td>0989873462</td>
                                            <td>inuyasha@gmail.com</td>
                                            <td>link</td>
                                            <td>
                                                <a href="#" class="link-primary">Chỉnh sửa</a> |
                                                <a href="#" class="link-primary">Xóa</a>
                                            </td>    
                                        </tr>
                                      </tbody>
                                </table>
                            </div>
                            <button type="button" class="btn btn-primary">Thêm</button>
                            
                        </div>
                    </div>
                    <div class="tab-pane fade " id="v-pills-comment" role="tabpanel" aria-labelledby="v-pills-comment-tab">
                        <div class="table-container container">
                            <h6 class="text-center" style="margin: 2%;">Danh sách bình luận</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Thời gian</th>
                                            <th scope="col">Người viết</th>
                                            <th scope="col">Nội dung</th>
                                            <th scope="col">Bài viết</th>
                                            <th scope="col"></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>10:00:00</td>
                                            <td>Nguyễn Văn A</td>
                                            <td>ABC...</td>
                                            <td>Bài viết 1</td>
                                            <td>
                                                <a href="#" class="link-primary">Duyệt</a> |
                                                <a href="#" class="link-primary">Xóa</a>
                                            </td>  
                                          
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>11:00:00</td>
                                            <td>Nguyễn Văn B</td>
                                            <td>XYZ...</td>
                                            <td>Bài viết 2</td>
                                            <td>
                                                <a href="#" class="link-primary">Duyệt</a> |
                                                <a href="#" class="link-primary">Xóa</a>
                                            </td>  
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>12:00:00</td>
                                            <td>Nguyễn Văn C</td>
                                            <td>IJK...</td>
                                            <td>Bài viết 3</td>
                                            <td>
                                                <a href="#" class="link-primary">Duyệt</a> |
                                                <a href="#" class="link-primary">Xóa</a>
                                            </td>    
                                        </tr>
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-info" role="tabpanel" aria-labelledby="v-pills-info-tab">
                        <div class="container">
                            <h6 class="text-center" style="margin-top: 2%;">Thông tin liên hệ</h6>
                            <div class="infor-tab-box px-5">
                                <span class="details">Địa chỉ: </span>
                                <input type="text" placeholder="Nhập địa chỉ" required>
                            </div>
                            <div class="infor-tab-box px-5">
                                <span class="details">Số điện thoại: </span>
                                <input type="text" placeholder="Nhập số điện thoại" required>
                            </div>
                            <div class="infor-tab-box px-5">
                                <span class="details">Mail: </span>
                                <input type="text" placeholder="Nhập email" required>
                            </div>
                            <div class="button-sub">
                                <input type="submit" value="Chỉnh sửa">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-product" role="tabpanel" aria-labelledby="v-pills-product-tab">
                        <div class="table-container list-product">
                            <h6 class="text-center" style="margin: 2%;">Danh sách sản phẩm</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Tên sản phẩm</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Mô tả</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">Loại</th>
                                            <th scope="col">Hình ảnh</th>
                                            <th scope="col"></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Máy In Lazer Trắng Đen Đa Năng HP </td>
                                            <td><input type="number" class="spinner-inc" value="1"></td>
                                            <td>Kiểu dáng đơn giản, gọn gàng</td>
                                            <td><input type="number" class="spinner-inc" value="23000"></td>
                                            <td>Máy in</td>
                                            <td>link</td>
                                            <td>
                                                <a href="#" class="link-primary">Chỉnh sửa</a> |
                                                <a href="#" class="link-primary">Xóa</a>
                                            </td>  
                                          
                                        </tr>
                                      </tbody>
                                </table>
                            </div>
                            <button type="button" class="btn btn-primary">Thêm</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-new" role="tabpanel" aria-labelledby="v-pills-new-tab">
                        <div class="table-container container">
                            <h6 class="text-center" style="margin: 2%;">Danh sách bài viết</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Tiêu đề</th>
                                            <th scope="col">Từ khóa</th>
                                            <th scope="col">Mô tả</th>
                                            <th scope="col">Nội dung</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Bài viết 1</td>
                                            <td>ABC...</td>
                                            <td>ABC...</td>
                                            <td>link</td>
                                            <td>
                                                <a href="#" class="link-primary">Chỉnh sửa</a> |
                                                <a href="#" class="link-primary">Xóa</a>
                                            </td>  
                                            
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Bài viết 2</td>
                                            <td>XYZ...</td>
                                            <td>XYZ...</td>
                                            <td>link</td>
                                            <td>
                                                <a href="#" class="link-primary">Chỉnh sửa</a> |
                                                <a href="#" class="link-primary">Xóa</a>
                                            </td>  
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Bài viết 3</td>
                                            <td>IJK...</td>
                                            <td>IJK...</td>
                                            <td>link</td>
                                            <td>
                                                <a href="#" class="link-primary">Chỉnh sửa</a> |
                                                <a href="#" class="link-primary">Xóa</a>
                                            </td>    
                                        </tr>
                                        </tbody>
                                </table>
                            </div>
                            <button type="button" class="btn btn-primary">Thêm</button>
                            
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-material" role="tabpanel" aria-labelledby="v-pills-material-tab">
                        <div class="table-container container">
                            <h6 class="text-center" style="margin: 2%;">Danh sách tài nguyên</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col">Tên</th>
                                            <th scope="col">Loại tài nguyên</th>
                                            <th scope="col">Nội dung</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Ảnh 1</td>
                                            <td>Hình ảnh</td>
                                            <td>ABC...</td>
                                            <td>
                                                <a href="#" class="link-primary">Chỉnh sửa</a> |
                                                <a href="#" class="link-primary">Xóa</a>
                                            </td>  
                                            
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Ảnh 2</td>
                                            <td>Hình ảnh</td>
                                            <td>XYZ...</td>
                                            <td>
                                                <a href="#" class="link-primary">Chỉnh sửa</a> |
                                                <a href="#" class="link-primary">Xóa</a>
                                            </td>  
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Bài viết 1</td>
                                            <td>Bài viết</td>
                                            <td>IJK...</td>
                                            <td>
                                                <a href="#" class="link-primary">Chỉnh sửa</a> |
                                                <a href="#" class="link-primary">Xóa</a>
                                            </td>    
                                        </tr>
                                        </tbody>
                                </table>
                            </div>
                            <button type="button" class="btn btn-primary">Thêm</button>
                            
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>