<!--Content-->
<div class="container" style="margin-bottom: 5%;">
    <div class="row">
        <div class="col-md-12 text-center">
            <h4>MÁY IN</h4>
        </div>
    </div>
    <div class="row">
        <aside class="col-md-3 side">
            <div class="input-group">
                <div class="form-outline">
                    <input type="search" class="form-control px-2" placeholder="Tìm kiếm..."/>
                </div>
                <button type="button" class="btn btn-success">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <h5 style="margin-top: 5%;">DANH MỤC</h5>
            <nav>
                <div class="row">
                    <div class="border-end bg-white" id="sidebar-wrapper">
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./printingInk">Mực in</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./printer">Máy in</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./officeMachine">Máy văn phòng</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./technologyEquipment">Thiết bị công nghệ</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./accessories">Phụ kiện văn phòng</a>
                        </div>
                    </div>
                </div>
            </nav>
        </aside>
        <div class="col-md-9 col-sm-12">
            <div class="row">
                <?php
                    while($row = mysqli_fetch_array($data["Printer"])) {?>
                    <div class="card col-sm-4 col-md-3">
                        <img class="card-img-top" src="<?php echo $row["image"]?>" alt="Image" style="width:35%; margin-left: 33%;">
                        <div class="card-body">
                            <p class="card-text text-center">
                                <?php echo $row["name"]?>
                                <br>
                                <span style="color: red">
                                <?php echo number_format($row["price"]) . " VNĐ"?>
                                </span>
                                <br>
                                <button type="button" class="btn btn-success btn-sm">Thêm vào giỏ</button>
                            </p>
                        </div>
                    </div>
                <?php 
                    }
                ?>
            </div>
        </div>
    </div>
</div>