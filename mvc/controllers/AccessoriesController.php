<?php
    class AccessoriesController extends Controller {
        function Show() {
            $accessories = $this->model("ProductsModel");
            $intro = $this->model("IntroModel");
            $this->view("header", ["LogoTitle"=>$intro->getLogo(), "LogoBrand"=>$intro->getLogo()]);
            $this->view("content", ["Page"=>"accessories", 
                                    "Accessories"=>$accessories->getAccessories()]);
            $this->view("footer", []);
        }
    }
?>