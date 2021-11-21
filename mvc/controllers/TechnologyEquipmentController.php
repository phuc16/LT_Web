<?php
    class TechnologyEquipmentController extends Controller {
        function Show() {
            $technologyEquipment = $this->model("ProductsModel");
            $this->view("header", []);
            $this->view("content", ["Page"=>"technologyEquipment",
                                    "TechnologyEquipment"=>$technologyEquipment->getTechnologyEquipment()]);
            $this->view("footer", []);
        }
    }
?>