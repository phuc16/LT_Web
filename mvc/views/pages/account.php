<!--Content-->
<div style="background-color: rgb(99, 39, 120);">
    <div class="container bg-white">
        <div class="row">
            <?php $row = mysqli_fetch_array($data["Account"]);?>
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" style="width: 150px;" src="<?php echo $row["avatar"]; ?>" alt="Image">
                    <span class="font-weight-bold"><?php echo $row["username"]; ?></span>
                    <span class="text-black-50"><?php echo $row["email"]; ?></span>
                    <span><button type="button" class="btn btn-primary btn-sm">Chọn ảnh</button></span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Hồ sơ của tôi</h4>
                        
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Họ và tên</label><input type="text" class="form-control" placeholder="Họ và tên" value="<?php echo $row["name"]; ?>"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Ngày sinh</label><input type="date" class="form-control" value="<?php echo $row["dob"]; ?>"></div>
                        <div class="col-md-12">
                            <label class="labels">Giới tính</label>
                            <select class="form-control">
                                <?php if ($row["gender"] == "Nam") { ?>
                                        <option selected="selected">Nam</option>
                                        <option>Nữ</option>
                                <?php
                                    } else { ?>
                                        <option>Nam</option>
                                        <option selected="selected">Nữ</option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-12"><label class="labels">Số điện thoại</label><input type="text" class="form-control" placeholder="Số điện thoại" value="<?php echo $row["phone"]; ?>"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="Email" value="<?php echo $row["email"]; ?>"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Lưu thay đổi</button></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Thay đổi mật khẩu</span></div><br>
                    <div class="col-md-12"><label class="labels">Nhập mật khẩu cũ</label><input type="text" class="form-control" placeholder="Mật khẩu cũ" value="<?php echo $row["password"]; ?>"></div> <br>
                    <div class="col-md-12"><label class="labels">Nhập mật khẩu mới</label><input type="text" class="form-control" placeholder="Mật khẩu mới" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Nhập lại mật khẩu mới</label><input type="text" class="form-control" placeholder="Mật khẩu mới" value=""></div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Đổi mật khẩu</button></div>
                </div>
            </div>
        </div>
    </div>
</div>