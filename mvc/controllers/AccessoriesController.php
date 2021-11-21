<?php
    class AccessoriesController extends Controller {
        function Show() {
            $accessories = $this->model("ProductsModel");
            $this->view("header", []);
            $this->view("content", ["Page"=>"accessories", 
                                    "Accessories"=>$accessories->getAccessories()]);
            $this->view("footer", []);
        }
    }
?>