<?php
    class AdminModel extends DB {

        public function getMember() {
            $query = "SELECT * FROM members ";
            return mysqli_query($this->con, $query);
        }
        public function deleteMember($username){
            $query = "DELETE FROM members WHERE username = '$username';";
            mysqli_query($this->con, $query);
            
        }
        public function addMember($username, $name, $email, $password, $dob, $gender, $phone, $avatar)
        {
            $query = "INSERT INTO `members`(`username`, `name`, `email`, `password`, `dob`, `gender`, `phone`, `avatar`) VALUES ('$username','$name','$email',$password,'$dob','$gender',$phone,'$avatar');";
            mysqli_query($this->con, $query);
        }
        // COMMENT
        public function getComment() {
            $query = "SELECT * FROM comments ";
            return mysqli_query($this->con, $query);
        }
        
        public function acceptComment($id) {
            $query = "UPDATE comments SET status = 1 WHERE id = '$id' ";
            return mysqli_query($this->con, $query);
        }
        public function deleteComment($id) {
            $query = "DELETE FROM comments WHERE id = '$id'";
            return mysqli_query($this->con, $query);
        }
        //RESOURCE 
        public function getResource() {
            $query = "SELECT * FROM resources";
            return mysqli_query($this->con, $query);
        }
        public function deleteResource($id) {
            $query = "DELETE FROM resources WHERE id = '$id';";
            mysqli_query($this->con, $query);
        }
        public function addResource($id, $type, $name, $content) {
            
            $query = "INSERT INTO `resources`(`id`, `type`, `name`, `content`) VALUES ('$id','$type','$name','$content');";
            mysqli_query($this->con, $query);
        }

        
    }
?>