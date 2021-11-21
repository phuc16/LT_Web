<?php
    class HomeController extends Controller {
        function Show() {
            $admin = $this->model("AdminModel");
            $this->view("header", []);
            $this->view("slider", ["getResource" => $admin->getResource()]);
            $this->view("footer", []);
        }
    }
?>