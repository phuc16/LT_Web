<?php
    class ContactController extends Controller {
        function Show() {
            $this->view("header", []);
            $this->view("content", ["Page"=>"contact"]);
            $this->view("footer", []);
        }
    }
?>