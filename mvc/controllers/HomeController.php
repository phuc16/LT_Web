<?php
    class HomeController extends Controller {
        function Show() {
            $this->view("header", []);
            $this->view("slider", []);
            $this->view("footer", []);
        }
    }
?>