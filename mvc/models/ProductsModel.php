<?php
    class ProductsModel extends DB {

        public function getPrintingInk() {
            $query = "SELECT * FROM products WHERE type = 'Mực in'";
            return mysqli_query($this->con, $query);
        }

        public function getPrinter() {
            $query = "SELECT * FROM products WHERE type = 'Máy in'";
            return mysqli_query($this->con, $query);
        }

        public function getOfficeMachine() {
            $query = "SELECT * FROM products WHERE type = 'Máy văn phòng'";
            return mysqli_query($this->con, $query);
        }

        public function getTechnologyEquipment() {
            $query = "SELECT * FROM products WHERE type = 'Thiết bị công nghệ'";
            return mysqli_query($this->con, $query);
        }

        public function getAccessories() {
            $query = "SELECT * FROM products WHERE type = 'Phụ kiện văn phòng'";
            return mysqli_query($this->con, $query);
        }
    }
?>