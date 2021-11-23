<?php
    class CartController extends Controller {
        function Show() {
            if (isset($_SESSION["username"])) {
                $intro = $this->model("IntroModel");
                $this->view("header", ["LogoTitle"=>$intro->getLogo(), "LogoBrand"=>$intro->getLogo()]);
                $this->view("header", []);
                $this->view("content", ["Page"=>"cart"]);
                $this->view("footer", []);
            } else {
                echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/Login">';
            }
        }
    }
?>