<?php
    class CartController extends Controller {
        function Show() {
            $this->view("header", []);
            $this->view("content", ["Page"=>"cart"]);
            $this->view("footer", []);
        }
    }
?>