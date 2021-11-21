<?php
    class AdminLoginModel extends DB {

        public function verifyLogin($username, $password) {
            $query = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
            if (mysqli_query($this->con, $query)) {
                return true;
            }
            return false;
        }
    }
?>