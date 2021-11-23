<?php
    class TechnologyEquipmentController extends Controller {
        function Show() {
            $technologyEquipment = $this->model("ProductsModel");
            $intro = $this->model("IntroModel");
            $this->view("header", ["LogoTitle"=>$intro->getLogo(), "LogoBrand"=>$intro->getLogo()]);
            $this->view("content", ["Page"=>"technologyEquipment",
                                    "TechnologyEquipment"=>$technologyEquipment->getTechnologyEquipment()]);
            $this->view("footer", []);
        }
    }
?>