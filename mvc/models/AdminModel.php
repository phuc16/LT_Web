<?php
    class AdminModel extends DB {

        public function getContacts() {
            $query = "SELECT * FROM contacts";
            return mysqli_query($this->con, $query);
        }

        public function editContacts($address, $phone, $mail) {
            $query = "UPDATE contacts SET address = '$address', phone = '$phone', mail = '$mail' WHERE id = 1;";
            mysqli_query($this->con, $query);
        }

        public function getProducts() {
            $query = "SELECT * FROM products";
            return mysqli_query($this->con, $query);
        }
        
        public function deleteProduct($id){
            $query = "DELETE FROM products WHERE id = $id;";
            mysqli_query($this->con, $query);
        }

        public function getPosts(){
            $query = "SELECT * FROM posts";
            return mysqli_query($this->con, $query);
        }

        public function deletePost($id){
            $query = "DELETE FROM posts WHERE id = $id;";
            mysqli_query($this->con, $query);
        }

    }
?>