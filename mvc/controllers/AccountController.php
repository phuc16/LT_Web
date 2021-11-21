<?php
    class AccountController extends Controller {
        function Show() {
            $account = $this->model("AccountModel");
            $this->view("header", []);
            $this->view("content", ["Page"=>"account",
                                    "Account"=>$account->getInfo()]);
            $this->view("footer", []);
            if (isset($_POST["updateInfo"])) {
                $name = $_POST["name"];
                $dob = $_POST["dob"];
                $gender = $_POST["gender"];
                $phone = $_POST["phone"];
                $email = $_POST["email"];
                $account->updateInfo($name, $dob, $gender, $phone, $email);
            }
            if (isset($_POST["changePassword"])) {
                $password = $_POST["password"];
                $rePassword = $_POST["rePassword"];
                if (!(empty($password) or empty($password))) {
                    if ($password == $rePassword) {
                        $account->changePassword($password);
                    }
                }
            }
            if (isset($_POST["changeAvatar"])) {
                $file = $_FILES["avatar"];
                if (!is_dir("./uploads/" . $_SESSION["username"])) {
                    mkdir("./uploads/" . $_SESSION["username"]);
                }
                $path = "./uploads/" . $_SESSION["username"] . "/".  $file["name"];
                move_uploaded_file($file["tmp_name"], $path);
                $account->changeAvatar($path);
            }
        }
    }
?>