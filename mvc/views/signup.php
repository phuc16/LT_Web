<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mona Company</title>
    <link rel="shortcut icon" href="http://mauweb.monamedia.net/vmax/wp-content/uploads/2019/05/Mona-designstyle-colors-m.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div id="main" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="text-box mt-5 mb-5">
                        <h2>Đăng ký</h2>
                        <p class="mb-4">Đã có tài khoản? <a href="login">Đăng nhập</a></p>
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="mb-4 form-floating">
                                <input type="text" class="form-control" id="name" required>
                                <label class="form-label" for="name">Họ và tên</label>
                                <div class="invalid-feedback">
                                    Họ và tên không hợp lệ!
                                </div>
                            </div>
                            <div class="col-lg-8 mb-4 form-floating">
                                <input type="date" class="form-control" id="dob" required>
                                <label class="form-label" for="dob">Ngày sinh</label>
                                <div class="invalid-feedback">
                                    Ngày sinh không hợp lệ!
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4 form-floating">
                                <select class="form-select" id="gender" required>
                                        <option selected disabled value="" label="Nam/Nữ"></option>
                                        <option value="male">Nam</option>
                                        <option value="female">Nữ</option>
                                    </select>
                                <label class="form-label" for="gender">Giới tính</label>
                                <div class="invalid-feedback">
                                    Vui lòng chọn giới tính!
                                </div>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="email" class="form-control" id="email"  required>
                                <label class="form-label" for="email">Email</label>
                                <div class="invalid-feedback">
                                    Email không hợp lệ!
                                </div>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="text" class="form-control" id="tel"  required>
                                <label class="form-label" for="tel">Số điện thoại</label>
                                <div class="invalid-feedback">
                                    Số điện thoại không hợp lệ!
                                </div>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="text" class="form-control" id="username" required>
                                <label class="form-label" for="username">Tên đăng nhập</label>
                                <div class="invalid-feedback">
                                    Tên đăng nhập không hợp lệ!
                                </div>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="password" class="form-control" id="password" required>
                                <label class="form-label" for="password">Mật khẩu</label>
                                <div class="invalid-feedback">
                                    Mật khẩu không hợp lệ!
                                </div>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="password" class="form-control" id="rePassword" placeholder="" required>
                                <label class="form-label" for="rePassword">Nhập lại mật khẩu</label>
                                <div class="invalid-feedback">
                                    Mật khẩu không chính xác!
                                </div>
                            </div>
                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="accept" required>
                                <label class="form-check-label" for="accept">Tôi đồng ý với các <a href="#">chính sách bảo mật</a> và <a href="#">điều khoản dịch vụ</a></label>
                                <div class="invalid-feedback">
                                    Phải đồng ý trước ghi đăng ký!
                                </div>
                            </div>
                            <div class="mb-3 d-grid gap-2">
                                <button class="btn btn-outline-danger" type="submit" id="signup">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js "></script>
    <script src="script.js "></script>
</body>

</html>