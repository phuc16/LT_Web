<?php
    class AccountModel extends DB {

        public function getInfo() {
            $username = $_SESSION["username"];
            $query = "SELECT * FROM members WHERE username = $username";
            return mysqli_query($this->con, $query);
        }
    }
?>