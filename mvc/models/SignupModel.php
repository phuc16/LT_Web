<?php
    class SignupModel extends DB {

        public function signup($username, $name, $email, $password, $dob, $gender, $phone) {
            $query = "INSERT INTO members (username, name, email, password, dob, gender, phone) 
                      VALUES ('$username', '$name', '$email', '$password', '$dob', '$gender', '$phone')";
            if (mysqli_query($this->con, $query)) {
                return true;
            }
            return false;
        }
    }
?>