<?php
    class AddMemberModel extends DB {

        public function addMember($username, $name, $mail, $phone, $avatar, $dob, $gender, $password) {
            $query = "INSERT INTO members(username, name, email, phone, avatar, dob, gender, password) VALUES ('$username', '$name', '$mail', '$phone', '$avatar', 
                    '$dob', '$gender', '$password');";
            mysqli_query($this->con, $query);
        }
    }
?>