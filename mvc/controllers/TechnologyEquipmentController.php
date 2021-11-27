<?php
    class TechnologyEquipmentController extends Controller {
        function Show() {
            $addTocart = $this->model("AddToCartModel");
            $technologyEquipment = $this->model("ProductsModel");
            $intro = $this->model("IntroModel");
            $this->view("header", ["LogoTitle"=>$intro->getLogo(), "LogoBrand"=>$intro->getLogo()]);
            $this->view("content", ["Page"=>"technologyEquipment",
                                    "TechnologyEquipment"=>$technologyEquipment->getTechnologyEquipment()]);
            $this->view("footer", ["Contact"=>$intro->getContact()]);
            if (isset($_POST["addToCart"])) {
                if (isset($_SESSION["username"])) {
                    $addTocart->addToCart($_SESSION["username"], $_POST["addToCart"]);
                } else {
                    echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/Login">';
                }
                
            }
        }
    }
?>