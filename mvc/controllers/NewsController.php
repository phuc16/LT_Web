<?php
    class NewsController extends Controller {
        function Show() {
            $this->view("header", []);
            $this->view("content", ["Page"=>"news"]);
            $this->view("footer", []);
        }
    }
?>