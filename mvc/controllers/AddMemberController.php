<?php
    class AddMemberController extends Controller {
        function Show() {
            // $updateMember = $this->model("ProductsModel");
            $member = $this->model('AdminModel');  
            $this->view("addMember", []);
            if(isset($_POST['addMember'])) {
                $username = $_POST['username'];
                $name = $_POST['name'];
                $email = $_POST['mail'];
                $password = $_POST['password'];
                $phone = $_POST['phone'];
                $avatar = $_POST['avatar'];
                $dob = $_POST['dob'];
                $gender = $_POST['gender'];
                
                $member->addMember($username, $name, $email, $password, $dob, $gender, $phone, $avatar);
                
            }
           
        }
    }
?>