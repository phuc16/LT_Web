<?php
    class IntroController extends Controller {
        function Show() {
            $this->view("header", []);
            $this->view("content", ["Page"=>"intro"]);
            $this->view("footer", []);
        }
    }
?>